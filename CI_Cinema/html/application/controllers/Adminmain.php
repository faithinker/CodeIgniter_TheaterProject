<?
class Adminmain extends CI_Controller {              
  function __construct() {                           // 클래스생성할 때 초기설정
    parent::__construct();
    $this->load->database();                     // 데이터베이스 연결
    $this->load->model("adminmain_m");    // 모델 graph_m 연결
    $this->load->helper(array("url","date"));
    $this->load->library('calendar');
    $this->load->library('session');
    //$this->allow=array('login');
    //$this->load->library('path');
    date_default_timezone_set("Asia/Seoul");
  }
  public function index(){      
    
    if(!$this->session->userdata("id")) {
      redirect("/~team2/adminlogin");
    }

    $data["list"]=$this->adminmain_m->getlist_member();
    $data["list2"]=$this->adminmain_m->getlist_movie();
    $data["list3"]=$this->adminmain_m->getlist_movie_rsvcount();  
    $data["list4"]=$this->adminmain_m->getlist_city_num(); 
    $data["list5"]=$this->adminmain_m->getlist_genre_name();
    
    $directory = 'admin/';
    $this->load->view($directory."admin_header");
    $this->load->view($directory."admin_main",$data);
    $this->load->view($directory."admin_footer");
  }

  function templates(){
    //$this->_ci_view_path = APPPATH.'views/admin_template';
    $this->load->view("admin/admin_header");
    $this->load->view("admin_template/index.html");
    $this->load->view("admin_template/index2.html");
    $this->load->view("admin_template/chart.html");
    $this->load->view("admin_template/grid.html");
    
    $this->load->view("admin_template/calendar.html");
    $this->load->view("admin/admin_footer");
  }
}
?>
