<?
class Discount extends CI_Controller {               // 클래스이름 첫 글자는 대문자
    function __construct(){                           // 클래스생성할 때 초기설정
        parent::__construct();
        $this->load->database();                     // 데이터베이스 연결
        $this->load->model("userlogin_m");    // 모델 Member_m 연결
        $this->load->model("Discount_m");
        $this->load->helper(array("url","date"));
        $this->load->library('session');
        date_default_timezone_set("Asia/Seoul");
    }
    public function index() {
		$this->list();
    }
	public function list(){
		 $this->load->view("discount");
	}
}
?>
