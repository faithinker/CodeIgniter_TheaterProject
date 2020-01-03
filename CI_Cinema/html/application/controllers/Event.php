<?
class Event extends CI_Controller {               // Ŭ�����̸� ù ���ڴ� �빮��
  function __construct(){                           // 클래스생성할 때 초기설정
    parent::__construct();
    $this->load->database();                     // 데이터베이스 연결
    $this->load->model("event_m");    // 모델 Member_m 연결
    $this->load->helper(array("url","date"));
    $this->load->library('pagination');

	date_default_timezone_set("Asia/Seoul");
  }
  public function index() {      
   
  }
  public function movie(){
    $uri_array=$this->uri->uri_to_assoc(3);
    $text1 = array_key_exists("text1",$uri_array) ? urldecode($uri_array["text1"]) : "" ;

    if($text1==""){
        $base_url = "/event/lists/page";
    }
    else{
        $base_url = "/event/lists/text1/$text1/page"; 
    }
    
    $page_segment = substr_count(substr($base_url,0,strpos($base_url,"page")) , "/" )+1;
    //strpos(문자열,"찾을문자열") => 몇번째 위치인지를 나타냄
    // 처음부터 ~page 까지 중에서 / 가 몇번있는지를 세주고 거시서 1을 더함 
    // 그러면 page의 segment 위치를 알 수 있다. if~else문으로도 처리 가능할듯 하다. !$text1이면 4, else 6
    $base_url = "/~team2" .$base_url;

    $config["per_page"]	 = 30;                              // 페이지당 표시할 line 수
    $config["total_rows"] = $this->event_m->rowcount($text1);  // 전체 레코드개수 구하기
    $config["uri_segment"] = $page_segment;		 // 페이지가 있는 segment 위치
    $config["base_url"]	 = $base_url;                // 기본 URL
    
    $this->pagination->initialize($config);           // pagination 설정 적용

    $data["page"]=$this->uri->segment($page_segment,0);  // 시작위치, 없으면 0.
    $data["pagination"] = $this->pagination->create_links();  // 페이지소스 생성

    $start=$data["page"];                 // n페이지 : 시작위치
    $limit=$config["per_page"];        // 페이지 당 라인수
   
    $data["text1"]=$text1;
    $data["list"]=$this->event_m->getlist($text1,$start,$limit);

 
    $this->load->view("event_movie",$data);
          
  }

   public function premiere(){
    $uri_array=$this->uri->uri_to_assoc(3);
    $text1 = array_key_exists("text1",$uri_array) ? urldecode($uri_array["text1"]) : "" ;

    if($text1==""){
        $base_url = "/event/lists/page";
    }
    else{
        $base_url = "/event/lists/text1/$text1/page"; 
    }
    
    $page_segment = substr_count(substr($base_url,0,strpos($base_url,"page")) , "/" )+1;
    //strpos(문자열,"찾을문자열") => 몇번째 위치인지를 나타냄
    // 처음부터 ~page 까지 중에서 / 가 몇번있는지를 세주고 거시서 1을 더함 
    // 그러면 page의 segment 위치를 알 수 있다. if~else문으로도 처리 가능할듯 하다. !$text1이면 4, else 6
    $base_url = "/~team2" .$base_url;

    $config["per_page"]	 = 30;                              // 페이지당 표시할 line 수
    $config["total_rows"] = $this->event_m->rowcount($text1);  // 전체 레코드개수 구하기
    $config["uri_segment"] = $page_segment;		 // 페이지가 있는 segment 위치
    $config["base_url"]	 = $base_url;                // 기본 URL
    
    $this->pagination->initialize($config);           // pagination 설정 적용

    $data["page"]=$this->uri->segment($page_segment,0);  // 시작위치, 없으면 0.
    $data["pagination"] = $this->pagination->create_links();  // 페이지소스 생성

    $start=$data["page"];                 // n페이지 : 시작위치
    $limit=$config["per_page"];        // 페이지 당 라인수
   
    $data["text1"]=$text1;
    $data["list"]=$this->event_m->getlist1($text1,$start,$limit);

 
    $this->load->view("event_premiere",$data);         
  }


  public function view_m(){
    $uri_array=$this->uri->uri_to_assoc(3);
	$no=array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;
	$text1=array_key_exists("text1",$uri_array) ? urldecode($uri_array["text1"]) : "";
	$page = array_key_exists("page",$uri_array) ? urldecode($uri_array["page"]) : "" ;

	$data["text1"]=$text1;
	$data["page"]=$page; //request 했던것들 미리처리
	$data["row"] = $this->event_m->getrow($no);
	
              // 상단출력(메뉴)
	$this->load->view("event_movie_view",$data);           // pmember_list에 자료전달  
  }

  public function view_p(){
 
	$uri_array=$this->uri->uri_to_assoc(3);
	$no=array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;
	$text1=array_key_exists("text1",$uri_array) ? urldecode($uri_array["text1"]) : "";
	$page = array_key_exists("page",$uri_array) ? urldecode($uri_array["page"]) : "" ;

	$data["text1"]=$text1;
	$data["page"]=$page; //request 했던것들 미리처리
	$data["row"] = $this->event_m->getrow($no);
	
              // 상단출력(메뉴)
	$this->load->view("event_premiere_view",$data);           // pmember_list에 자료전달

		
  }

  
}
?>
