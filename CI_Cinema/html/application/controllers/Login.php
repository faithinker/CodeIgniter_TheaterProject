<?
class Login extends CI_Controller { 
	function __construct() {                          // 클래스생성할 때 초기설정
			parent::__construct();
			$this->load->database();                     // 데이터베이스 연결
			$this->load->model("login_m");// 모델 jangbu_m 연결
			$this->load->helper(array("url","date"));
		
			date_default_timezone_set("Asia/Seoul");
		}
    public function index() {	
		
      $this->load->view("login");  
 		
    }
	public function check() {
		$uid=$this->input->post("uid",TRUE);
		$pwd=$this->input->post("pwd",TRUE);

		$row=$this->login_m->getrow($uid,$pwd);
		if($row) {
			$data=array(
					"uid" =>$row->uid,
					"pwd"=>$row->pwd
			);
			$this->session->set_userdata($data);
		}

		$this->load->view("main_header");
		$this->load->view("main");
		$this->load->view("main_footer");
	}
	public function logout() {
			$data = array('uid', 'pwd');
			$this->session->unset_userdata($data);

			
			$this->load->view("main_header");                    // 상단출력(메뉴)
			$this->load->view("main_footer");                      // 하단 출력 
		}
		public function signup(){
			$this->load->view("main_header");
			$this->load->view("sign_up");    // 입력화면 표시
			$this->load->view("main_footer");	
		}
		

}
?>