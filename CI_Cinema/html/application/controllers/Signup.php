<?
class Signup extends CI_Controller {               // 클래스이름 첫 글자는 대문자
	function __construct() {
		parent::__construct();
		$this->load->database();                     // 데이터베이스 연결
		$this->load->model("signup_m");// 모델 jangbu_m 연결
		$this->load->helper(array("url","date"));
	
		date_default_timezone_set("Asia/Seoul");
	}
	public function index()  {
		 $this->add();
	}

public function add(){
	$this->load->library("form_validation");
		$this->form_validation->set_rules("name","이름","required|max_length[20]");
		$this->form_validation->set_rules("uid","아이디","required|max_length[20]");
		$this->form_validation->set_rules("pwd","암호","required|max_length[20]");

		if ($this->form_validation->run()==FALSE ) {
			$this->load->view("sign_up");  
		}
		else   {           // 입력화면의 저장버튼 클릭한 경우
			$tel1=$this->input->post("tel1",true);
			$tel2=$this->input->post("tel2",true);
			$tel3=$this->input->post("tel3",true);
			$tel=sprintf("%-3s%-4s%-4s",$tel1,$tel2,$tel3);
			
			$birthday1=$this->input->post("birthday1",true);
			$birthday2=$this->input->post("birthday2",true);
			$birthday3=$this->input->post("birthday3",true);
			$birthday = sprintf("%04d-%02d-%02d", $birthday1, $birthday2, $birthday3);
			
			if ($birthday<=2000){
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
				'rank' => 0,
				'sm' => $this->input->post("sm",true),
				'joindate' => $joindate,
				'total' => 0
			);
	
			$this->signup_m->insertrow($data); 

			redirect("/~team2");    //   목록화면으로 이동.
		}
}
	//1학기 php 시도
	public function auth()  {
		$this->load->view("member_ok");
	} 		
}
?>
