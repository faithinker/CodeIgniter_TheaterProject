<?
class Cinema extends CI_Controller {               // 클래스이름 첫 글자는 대문자
    function __construct(){                           // 클래스생성할 때 초기설정
        parent::__construct();
        $this->load->database();                     // 데이터베이스 연결
        $this->load->model("cinema_m");
        $this->load->helper(array("url","date"));
        $this->load->library("form_validation");
        date_default_timezone_set("Asia/Seoul");
    }
    public function index() {
        $data["list1"]=$this->cinema_m->city_list();	
        $data["list2"]=$this->cinema_m->cinema_list();
        $this->load->view("cinema_header");	
        $this->load->view("cinema/cinema_special",$data);   // view폴더의 main_header.php
        $this->load->view("cinema_footer"); 
    }
    // function cinema_list() {
    //     $this->load->view("cinema_list"); 
    // }
    public function special() {
        $this->load->view("cinema_header");	
        $this->load->view("cinema/cinema_special");   // view폴더의 main_header.php
        $this->load->view("cinema_footer"); 
    }
    public function super_plex_g() {
        $this->load->view("cinema_header");	
        $this->load->view("cinema/cinema_super_plex_g");   // view폴더의 main_header.php
        $this->load->view("cinema_footer"); 
    }
	public function super_s() {
        $this->load->view("cinema_header");	
        $this->load->view("cinema/cinema_super_s");   // view폴더의 main_header.php
        $this->load->view("cinema_footer"); 
    }
	public function super_plex() {
        $this->load->view("cinema_header");	
        $this->load->view("cinema/cinema_super_plex");   // view폴더의 main_header.php
        $this->load->view("cinema_footer"); 
    }
	public function super_4d() {
        $this->load->view("cinema_header");	
        $this->load->view("cinema/cinema_super_4d");   // view폴더의 main_header.php
        $this->load->view("cinema_footer"); 
    }
		    public function cinefamily() {
        $this->load->view("cinema_header");	
        $this->load->view("cinema/cinema_cinefamily");   // view폴더의 main_header.php
        $this->load->view("cinema_footer"); 
    }
		    public function cinecouple() {
        $this->load->view("cinema_header");	
        $this->load->view("cinema/cinema_cinecouple");   // view폴더의 main_header.php
        $this->load->view("cinema_footer"); 
    }
		    public function cinebiz() {
        $this->load->view("cinema_header");	
        $this->load->view("cinema/cinema_cinebiz");   // view폴더의 main_header.php
        $this->load->view("cinema_footer"); 
    }
}
?>
