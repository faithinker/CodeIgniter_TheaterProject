<?
class Member extends CI_Controller {               // Ŭ�����̸� ù ���ڴ� �빮��
  function __construct(){                           // 클래스생성할 때 초기설정
    parent::__construct();
    $this->load->database();                     // 데이터베이스 연결
    $this->load->model("member_m");    // 모델 Member_m 연결
    $this->load->helper(array("url","date"));
    $this->load->library('pagination');

	date_default_timezone_set("Asia/Seoul");
  }
  public function index() {      
    $this->view();
  }

		 public function edit()
		{	
			$uri_array=$this->uri->uri_to_assoc(3);
			$no=array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;
			$text1=array_key_exists("text1",$uri_array) ? "/text1/" . urldecode($uri_array["text1"]) : "";
			$page = array_key_exists("page",$uri_array) ? "/page/" . urldecode($uri_array["page"]) : "" ;

			$this->load->library("form_validation");
			$this->form_validation->set_rules("name","이름","required|max_length[20]");
			$this->form_validation->set_rules("uid","아이디","required|max_length[20]");
			$this->form_validation->set_rules("pwd","암호","required|max_length[20]");

			if ($this->form_validation->run()==FALSE )
				{
					$this->load->view("admin_header");
					$data["row"]=$this->member_m->getrow($no);
					$this->load->view("admin_member_edit",$data);    // 입력화면 표시
					$this->load->view("admin_footer");
				}
				else              // 입력화면의 저장버튼 클릭한 경우
				{	
					$tel1=$this->input->post("tel1",true);
					$tel2=$this->input->post("tel2",true);
					$tel3=$this->input->post("tel3",true);
					$tel=sprintf("%-3s%-4s%-4s",$tel1,$tel2,$tel3);
					
					$birthday1=$this->input->post("birthday1",true);
					$birthday2=$this->input->post("birthday2",true);
					$birthday3=$this->input->post("birthday3",true);
					$birthday = sprintf("%04d-%02d-%02d", $birthday1, $birthday2, $birthday3);
					
					if ($birthday1<=2000){
						$status=1;
					}
					else{
						$status=0;
					}

					$joindate=date("Y-m-d");

					$data= array(
					'name' => $this->input->post("name",true),
					'uid' => $this->input->post("uid",true),
					'pwd' => $this->input->post("pwd",true),
					'tel' => $tel,
					'email' => $this->input->post("email",true),
					'birth' => $birthday,
					'status' => $status,
					'sm' => $this->input->post("sm",true),
					);
			
					$result=$this->member_m->updaterow($data,$no); 

					redirect("/~team2/member".$text1.$page);    //   목록화면으로 이동.
				}
			}
		public function view()
		{
			$uri_array=$this->uri->uri_to_assoc(3);
			$no=array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;
			$text1=array_key_exists("text1",$uri_array) ? "/text1/" . urldecode($uri_array["text1"]) : "";
			$page = array_key_exists("page",$uri_array) ? "/page/" . urldecode($uri_array["page"]) : "" ;


			$data["text1"]=$text1; 
			$data["page"]=$page;
			$data["row"]=$this->member_m->getrow($no);
			$data["list"]=$this->member_m->getlist_movie($no);
			$this->load->view("myinfo", $data);
		}
		 public function edit_info()
		{	
			$uri_array=$this->uri->uri_to_assoc(3);
			$no=array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;
			$text1=array_key_exists("text1",$uri_array) ? "/text1/" . urldecode($uri_array["text1"]) : "";
			$page = array_key_exists("page",$uri_array) ? "/page/" . urldecode($uri_array["page"]) : "" ;


			$this->load->library("form_validation");
			$this->form_validation->set_rules("name","이름","required|max_length[20]");
			$this->form_validation->set_rules("uid","아이디","required|max_length[20]");
			$this->form_validation->set_rules("pwd","암호","required|max_length[20]");


			if ($this->form_validation->run()==FALSE )
				{
					$data["row"]=$this->member_m->getrow($no);
					$this->load->view("myinfo_edit",$data);    // 입력화면 표시
				}
				else              // 입력화면의 저장버튼 클릭한 경우
				{	
					$tel1=$this->input->post("tel1",true);
					$tel2=$this->input->post("tel2",true);
					$tel3=$this->input->post("tel3",true);
					$tel=sprintf("%-3s%-4s%-4s",$tel1,$tel2,$tel3);
					
					$birthday1=$this->input->post("birthday1",true);
					$birthday2=$this->input->post("birthday2",true);
					$birthday3=$this->input->post("birthday3",true);
					$birthday = sprintf("%04d-%02d-%02d", $birthday1, $birthday2, $birthday3);
					
					if ($birthday1<=2000){
						$status=1;
					}
					else{
						$status=0;
					}

					$joindate=date("Y-m-d");

					$data= array(
					'name' => $this->input->post("name",true),
					'uid' => $this->input->post("uid",true),
					'pwd' => $this->input->post("pwd",true),
					'tel' => $tel,
					'email' => $this->input->post("email",true),
					'birth' => $birthday,
					'status' => $status
					);
			
					$result=$this->member_m->updaterow($data,$no); 

					redirect("/~team2".$text1.$page);    //   목록화면으로 이동.
				}
			}

}
?>
