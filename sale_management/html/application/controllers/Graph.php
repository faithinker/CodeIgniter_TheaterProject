<?  
class Graph extends CI_Controller {       // graph클래스 선언
    function __construct(){                           // 클래스생성할 때 초기설정
        parent::__construct();
        $this->load->database();                     // 데이터베이스 연결
        $this->load->model("graph_m");    // 모델 graph_m 연결
        $this->load->helper(array("url","date"));
        $this->load->library('calendar');
        date_default_timezone_set("Asia/Seoul");
    }
    public function index(){                            // 제일 먼저 실행되는 함수
        $this->lists();                                        // list 함수 호출
    }
    public function view(){
        $uri_array=$this->uri->uri_to_assoc(3);
        $no	= array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;
        $text1 = array_key_exists("text1",$uri_array) ? urldecode($uri_array["text1"]) : "" ;
        $page = array_key_exists("page",$uri_array) ? urldecode($uri_array["page"]) : 0;
        
        $data["text1"]=$text1;
        $data["row"]=$this->graph_m->getrow($no);
        
        $this->load->view("main_header");                 
        $this->load->view("graph_view",$data);
        $this->load->view("main_footer");                      
    }
    public function lists(){
        $uri_array=$this->uri->uri_to_assoc(3);
        $text1 = array_key_exists("text1",$uri_array) ? urldecode($uri_array["text1"]) : date("Y-m-d", strtotime("-1 month"));
        $text2 = array_key_exists("text2",$uri_array) ? urldecode($uri_array["text2"]) : date("Y-m-d");
        
        
        $base_url = "/graph/lists/text1/$text1/text2/$text2/page";
        $page_segment = substr_count(substr($base_url,0,strpos($base_url,"page")) , "/" )+1;
        $base_url ="/~sale8". $base_url;


        $config["total_rows"] = $this->graph_m->rowcount($text1, $text2);  // 전체 레코드개수 구하기

        
       
        $data["text1"]=$text1;
        $data["text2"]=$text2;
        $data["list_product"] = $this->graph_m->getlist_product();
        $data["list"]=$this->graph_m->getlist($text1,$text2);
    
        $this->load->view("main_header");                    // 상단출력(메뉴)
        $this->load->view("graph_list",$data);           // graph_list에 자료전달
        $this->load->view("main_footer");                      // 하단 출력 
    }
}
?>
