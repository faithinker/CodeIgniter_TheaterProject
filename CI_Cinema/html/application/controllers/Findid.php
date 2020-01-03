<?
class Findid extends CI_Controller {       // findid클래스 선언
    function __construct()  {                         // 클래스생성할 때 초기설정 
      parent::__construct();
      $this->load->database();                     // 데이터베이스 연결
      $this->load->model("userlogin_m");// 모델 signup_m 연결
      $this->load->helper(array("url","date"));
    }

    public function index()  {                          // 제일 먼저 실행되는 함수
        $this->lists();                                        // list 함수 호출
    }

    public function lists() {   
      $uid =  $_REQUEST['uid'];
      $data["uid"]=$uid;
      $data["result"]=$this->userlogin_m->getlist($uid);  // 해당갯수 세기
      $this->load->view("findid_list",$data);           // findid_list에 자료전달
    }
}
?>