<?
class Movie extends CI_Controller {   
	function __construct(){                           // 클래스생성할 때 초기설정
    parent::__construct();
    $this->load->database();                     // 데이터베이스 연결
    $this->load->model("movie_m");    // 모델 Member_m 연결
    $this->load->helper(array("url","date"));
    $this->load->library('pagination');

	date_default_timezone_set("Asia/Seoul");
  }            // 클래스이름 첫 글자는 대문자

    public function index()      
		
    {	
        $this->lists();        
    }

	 public function lists(){
    $uri_array=$this->uri->uri_to_assoc(3);
    $text1 = array_key_exists("text1",$uri_array) ? urldecode($uri_array["text1"]) : "" ;

    if($text1==""){
        $base_url = "/movie/lists/page";
    }
    else{
        $base_url = "/movie/lists/text1/$text1/page"; 
    }
    
    $page_segment = substr_count(substr($base_url,0,strpos($base_url,"page")) , "/" )+1;
    //strpos(문자열,"찾을문자열") => 몇번째 위치인지를 나타냄
    // 처음부터 ~page 까지 중에서 / 가 몇번있는지를 세주고 거시서 1을 더함 
    // 그러면 page의 segment 위치를 알 수 있다. if~else문으로도 처리 가능할듯 하다. !$text1이면 4, else 6
    $base_url = "/~team2" .$base_url;

    $config["per_page"]	 = 30;                              // 페이지당 표시할 line 수
    $config["total_rows"] = $this->movie_m->rowcount($text1);  // 전체 레코드개수 구하기
    $config["uri_segment"] = $page_segment;		 // 페이지가 있는 segment 위치
    $config["base_url"]	 = $base_url;                // 기본 URL
    
    $this->pagination->initialize($config);           // pagination 설정 적용

    $data["page"]=$this->uri->segment($page_segment,0);  // 시작위치, 없으면 0.
    $data["pagination"] = $this->pagination->create_links();  // 페이지소스 생성

    $start=$data["page"];                 // n페이지 : 시작위치
    $limit=$config["per_page"];        // 페이지 당 라인수
   
    $data["text1"]=$text1;
    $data["list"]=$this->movie_m->getlist($text1,$start,$limit);
    $data["list2"]=$this->movie_m->cinema_list();
    
    $this->load->view("movie_list",$data);
          
  }

    public function view() {	
        $uri_array=$this->uri->uri_to_assoc(3);
        $no=array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;
        $text1=array_key_exists("text1",$uri_array) ? urldecode($uri_array["text1"]) : "";
        $page = array_key_exists("page",$uri_array) ? urldecode($uri_array["page"]) : "" ;
		
        $data["text1"]=$text1;
        $data["page"]=$page; //request 했던것들 미리처리
		$data["count"]=$this->movie_m->rowcount_v($no);
        $data["row"] = $this->movie_m->getrow($no);
        $data["list"]=$this->movie_m->get_review($no); //review print
                        // 상단출력(메뉴)
        $this->load->view("movie_view",$data);           // product_list에 자료전달
        
    }
    public function review_add() {
        $uri_array=$this->uri->uri_to_assoc(3);
        $text1=array_key_exists("text1",$uri_array) ? "/text1/" . urldecode($uri_array["text1"]) : "";
        $page = array_key_exists("page",$uri_array) ? "/page/" . urldecode($uri_array["page"]) : "" ;

        $this->load->library("form_validation");
        $this->form_validation->set_rules("review_content","내용","required|max_length[250]");
        $this->form_validation->set_rules("rate","평점","required");
		
        if ($this->form_validation->run()==FALSE ) {
            $this->load->view("movie_view");
        }
        else {             // 입력화면의 저장버튼 클릭한 경우
            $writeday=date("Y-m-d");
			$uid=$this->session->userdata('uid');
			$no=$this->input->post("movie_no",true);

            $data= array(
                'movie_no' => $this->input->post("movie_no",true),
                'review_name' => $uid,
                'review_content' => $this->input->post("review_content",true),
                'rate' => $this->input->post("rate",true),
                'writeday' => $writeday
            );

            $this->movie_m->insertreview($data); 

            redirect("/~team2/movie/view/no/".$no);    // /view/$no $no에러가능성 농후
        }
    }
}

?>
