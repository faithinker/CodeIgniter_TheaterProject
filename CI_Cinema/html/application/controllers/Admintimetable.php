<?
class Admintimetable extends CI_Controller {               // 클래스���ڴ� �빮��
  function __construct(){                           // 클래스생성할 때 초기설정
    parent::__construct();
    $this->load->database();                     // 데이터베이스 연결
    $this->load->model("admintimetable_m");    // 모델 Member_m 연결
    $this->load->helper(array("url","date"));
    $this->load->library('pagination');

	date_default_timezone_set("Asia/Seoul");
  }
 public function index()      
		
    {	$this->lists();
    }

  public function lists(){
    $uri_array=$this->uri->uri_to_assoc(3);
    $text1 = array_key_exists("text1",$uri_array) ? urldecode($uri_array["text1"]) : "" ;

    if($text1==""){
        $base_url = "/admintimetable/lists/page";
    }
    else{
        $base_url = "/admintimetable/lists/text1/$text1/page"; 
    }
    
    $page_segment = substr_count(substr($base_url,0,strpos($base_url,"page")) , "/" )+1;
    //strpos(문자열,"찾을문자열") => 몇번째 위치인지를 나타냄
    // 처음부터 ~page 까지 중에서 / 가 몇번있는지를 세주고 거시서 1을 더함 
    // 그러면 page의 segment 위치를 알 수 있다. if~else문으로도 처리 가능할듯 하다. !$text1이면 4, else 6
    $base_url = "/~team2" .$base_url;

    $config["per_page"]	 = 30;                              // 페이지당 표시할 line 수
    $config["total_rows"] = $this->admintimetable_m->rowcount($text1);  // 전체 레코드개수 구하기
    $config["uri_segment"] = $page_segment;		 // 페이지가 있는 segment 위치
    $config["base_url"]	 = $base_url;                // 기본 URL
    
    $this->pagination->initialize($config);           // pagination 설정 적용

    $data["page"]=$this->uri->segment($page_segment,0);  // 시작위치, 없으면 0.
    $data["pagination"] = $this->pagination->create_links();  // 페이지소스 생성

    $start=$data["page"];                 // n페이지 : 시작위치
    $limit=$config["per_page"];        // 페이지 당 라인수
   
    $data["text1"]=$text1;
    $data["list"]=$this->admintimetable_m->getlist($text1,$start,$limit);

    $this->load->view("admin/admin_header");
    $this->load->view("admin/admin_timetable",$data);
    $this->load->view("admin/admin_footer");           
  }


public function jijum_list(){
	
		$option_value=$this->input->post("option_value",TRUE); //옵션값 받아오기   
		$list1=$this->admintimetable_m->getjijum($option_value);
		
		$str = '<option name="jijum_no" value="" selected>선택하세요</option>';
            foreach($list1 as $row){
                $str = $str . "<option value='$row->no'>$row->name</option>";
            }
            echo $str;
        }


public function hall_list(){

$option_value=$this->input->post("option_value",TRUE); //옵션값 받아오기   
$list2=$this->admintimetable_m->gethall($option_value);

$str1 = '<option name="hall_no" value="" selected>선택하세요</option>';
	foreach($list2 as $row){
		$str1 = $str1 . "<option value='$row->no'>$row->name</option>";
	}
	echo $str1;
}



  public function add()
		{	
			$uri_array=$this->uri->uri_to_assoc(3);
			$text1=array_key_exists("text1",$uri_array) ? "/text1/" . urldecode($uri_array["text1"]) : "";
			$page = array_key_exists("page",$uri_array) ? "/page/" . urldecode($uri_array["page"]) : "" ;

			$this->load->library("form_validation");
			$this->form_validation->set_rules("movie_no","영화이름","required|max_length[20]");
			

			if ($this->form_validation->run()==FALSE )
				{
          $data["movie_list"]=$this->admintimetable_m->getlist_movie();//gubun row받아오기 왜???
          $data["city_list"]=$this->admintimetable_m->getlist_city();//gubun row받아오기 왜???
  
					$this->load->view("admin/admin_header");
					$this->load->view("admin/admin_timetable_add",$data);    // 입력화면 표시
					$this->load->view("admin/admin_footer");
				}
				else              // 입력화면의 저장버튼 클릭한 경우
				{	

					$data= array(
					'movie_no' => $this->input->post("movie_no",true),
					'city_no' => $this->input->post("city_no",true),
					'jijum_no' => $this->input->post("jijum",true),
					'hall_no' => $this->input->post("hall",true),
					'day' => $this->input->post("day",true),
					'time' => $this->input->post("time",true)
					);
			
					$this->admintimetable_m->insertrow($data); 

					redirect("/~team2/admintimetable".$text1.$page);    //   목록화면으로 이동.
				}
			}
			public function del()
		{
			$uri_array=$this->uri->uri_to_assoc(3);
			$no=array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;
			$text1=array_key_exists("text1",$uri_array) ? "/text1/" . urldecode($uri_array["text1"]) : "";
        // URI: /member/del/no/1
			$page = array_key_exists("page",$uri_array) ? "/page/" . urldecode($uri_array["page"]) : "" ;
			
			$this->admintimetable_m->deleterow($no);
			redirect("/~team2/admintimetable". $text1.$page);             // 목록화면으로 돌아가기
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
					$this->load->view("admin/admin_header");
					$data["row"]=$this->admintimetable_m->getrow($no);
					$this->load->view("admin/admin_member_edit",$data);    // 입력화면 표시
					$this->load->view("admin/admin_footer");
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
			
					$result=$this->admintimetable_m->updaterow($data,$no); 

					redirect("/~team2/admintimetable".$text1.$page);    //   목록화면으로 이동.
				}
			}
    
}
?>
