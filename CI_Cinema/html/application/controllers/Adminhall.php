<?
class Adminhall extends CI_Controller {               // Ŭ�����̸� ù ���ڴ� �빮��

	function __construct(){                           // Ŭ���������� �� �ʱ⼳��
		parent::__construct();
		$this->load->database();                     // �����ͺ��̽� ����
		$this->load->model("adminhall_m");    // �� Member_m ����
		$this->load->helper(array("url","date"));
		$this->load->library('pagination');
		date_default_timezone_set("Asia/Seoul");
	}
    public function index()      
    {
		$this->lists();
    }
	public function lists()
	{
		$uri_array=$this->uri->uri_to_assoc(3);
		$text1 = array_key_exists("text1",$uri_array) ? urldecode($uri_array["text1"]) : "" ;

		if($text1==""){
			$base_url = "/adminhall/lists/page";
		}
		else{
			$base_url = "/adminhall/lists/text1/$text1/page"; 
		}
		
		$page_segment = substr_count(substr($base_url,0,strpos($base_url,"page")) , "/" )+1;
		//strpos(���ڿ�,"ã�����ڿ�") => ���° ��ġ������ ��Ÿ��
		// ó������ ~page ���� �߿��� / �� ����ִ����� ���ְ� �Žü� 1�� ���� 
		// �׷��� page�� segment ��ġ�� �� �� �ִ�. if~else�����ε� ó�� �����ҵ� �ϴ�. !$text1�̸� 4, else 6
		$base_url = "/~team2" .$base_url;

		$config["per_page"]	 = 30;                              // �������� ǥ���� line ��
		$config["total_rows"] = $this->adminhall_m->rowcount($text1);  // ��ü ���ڵ尳�� ���ϱ�
		$config["uri_segment"] = $page_segment;		 // �������� �ִ� segment ��ġ
		$config["base_url"]	 = $base_url;                // �⺻ URL
		
		$this->pagination->initialize($config);           // pagination ���� ����

		$data["page"]=$this->uri->segment($page_segment,0);  // ������ġ, ������ 0.
		$data["pagination"] = $this->pagination->create_links();  // �������ҽ� ����

		$start=$data["page"];                 // n������ : ������ġ
		$limit=$config["per_page"];        // ������ �� ���μ�
	   
		$data["text1"]=$text1;
		$data["list"]=$this->adminhall_m->getlist($text1,$start,$limit);

		$this->load->view("admin/admin_header");
		$this->load->view("admin/admin_hall",$data);
		$this->load->view("admin/admin_footer");           
  }
  public function add()
		{	
			$uri_array=$this->uri->uri_to_assoc(3);
			$text1=array_key_exists("text1",$uri_array) ? "/text1/" . urldecode($uri_array["text1"]) : "";
			$page = array_key_exists("page",$uri_array) ? "/page/" . urldecode($uri_array["page"]) : "" ;

			$this->load->library("form_validation");
			$this->form_validation->set_rules("name","���ø�","required|max_length[20]");
			if ($this->form_validation->run()==FALSE )

				{	$data["list"]=$this->adminhall_m->getlist_jijum();//gubun row�޾ƿ��� ��???
					$this->load->view("admin/admin_header");
					$this->load->view("admin/admin_hall_add",$data);    // �Է�ȭ�� ǥ��
					$this->load->view("admin/admin_footer");
				}
				else              // �Է�ȭ���� �����ư Ŭ���� ���
				{	

					$data= array(
					'jijum_no'=> $this->input->post("jijum_no",true),
					'name' => $this->input->post("name",true)
					);
			
					$this->adminhall_m->insertrow($data); 

					redirect("/~team2/adminhall".$text1.$page);    //   ���ȭ������ �̵�.
				}
			}

public function edit()
		{	
			$uri_array=$this->uri->uri_to_assoc(3);
			$no=array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;
			$text1=array_key_exists("text1",$uri_array) ? "/text1/" . urldecode($uri_array["text1"]) : "";
			$page = array_key_exists("page",$uri_array) ? "/page/" . urldecode($uri_array["page"]) : "" ;

			$this->load->library("form_validation");
			$this->form_validation->set_rules("name","�̸�","required|max_length[20]");


			if ($this->form_validation->run()==FALSE )
				{	
					$data["list"]=$this->adminhall_m->getlist_jijum();//gubun row�޾ƿ��� ��???
					$this->load->view("admin/admin_header");
					$data["row"]=$this->adminhall_m->getrow($no);
					$this->load->view("admin/admin_hall_edit",$data);    // �Է�ȭ�� ǥ��
					$this->load->view("admin/admin_footer");
				}
				else              // �Է�ȭ���� �����ư Ŭ���� ���
				{	
					

					$data= array(
					'jijum_no'=> $this->input->post("jijum_no",true),
					'name' => $this->input->post("name",true),
					);
			
					$result=$this->adminhall_m->updaterow($data,$no); 

					redirect("/~team2/adminhall".$text1.$page);    //   ���ȭ������ �̵�.
				}
			}

			public function del()
		{
			$uri_array=$this->uri->uri_to_assoc(3);
			$no=array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;
			$text1=array_key_exists("text1",$uri_array) ? "/text1/" . urldecode($uri_array["text1"]) : "";
        // URI: /member/del/no/1
			$page = array_key_exists("page",$uri_array) ? "/page/" . urldecode($uri_array["page"]) : "" ;
			
			$this->adminhall_m->deleterow($no);
			redirect("/~team2/adminhall". $text1.$page);             // ���ȭ������ ���ư���
		}
}
?>
