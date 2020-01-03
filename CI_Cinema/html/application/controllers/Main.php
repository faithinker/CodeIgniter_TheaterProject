<?
class Main extends CI_Controller {               // 클래스이름 첫 글자는 대문자
    function __construct(){                           // 클래스생성할 때 초기설정
        parent::__construct();
        $this->load->database();                     // 데이터베이스 연결
        $this->load->model("userlogin_m");    // 모델 Member_m 연결
        $this->load->model("main_m");
        $this->load->helper(array("url","date"));
        $this->load->library('session');
        date_default_timezone_set("Asia/Seoul");
    }
    public function index() {
        //if ($this->session->userdata('uid')!=null) redirect("/~team2"); 	
        $data["list"]=$this->main_m->best_movie();
        $data["list2"]=$this->main_m->now_movie();
        $this->load->view("main", $data);   // view폴더의 main_header.php 
    }
    function signup(){
        

        $this->load->library("form_validation");
        $this->form_validation->set_rules("name","이름","required|max_length[20]");
        $this->form_validation->set_rules("uid","아이디","required|max_length[20]");
        $this->form_validation->set_rules("pwd","암호","required|max_length[20]");
        
        if ($this->form_validation->run()==FALSE ) {
            $this->load->view("sign_up");
        }
        else  {          // 입력화면의 저장버튼 클릭한 경우   
            $tel = $this->input->post("tel",true);
            $tel = array(substr($tel,0,3), substr($tel,2,4), substr($tel,6,4));
            $tel=sprintf("%-3s%-4s%-4s",$tel[0],$tel[1],$tel[2]);

            $age = substr($birth,0,4);
            if ($age<=date("Y")-19)
                $status=1; 
            else
                $status=0;

            $joindate=date("Y-m-d");

            $data= array(
            'name' => $this->input->post("name",true),
            'uid' => $this->input->post("uid",true),
            'pwd' => $this->input->post("pwd",true),
            'tel' =>  $tel,
            'email' => $this->input->post("email",true),
            'birth' => $this->input->post("birth",true),//$birthday,
            'status' => $status,
            'rank' => 0,
            'sm' => 0,//$this->input->post("sm",true),
            'joindate' => $joindate,
            'total' => 0
            );
    
            $this->userlogin_m->insertrow($data); 

            redirect("/~team2/main");    //   목록화면으로 이동.
        }
    }
    public function signin(){
        $this->load->library("form_validation");
        $this->load->view("sign_in");
    }
    public function check(){

        $uid=$this->input->post("uid",TRUE);
        $pwd=$this->input->post("pwd",TRUE);
    
        $row=$this->userlogin_m->getrow($uid,$pwd);

        if ($row){
          $data = array(
			 "no" => $row->no,
            "uid" =>$row->uid,
			"name" =>$row->name,
			 "age" =>$row->age
          );
          $this->session->set_userdata($data);
        }
        redirect("/~team2/main");
      }

      public function logout(){
        $data = array("uid", "name");
        $this->session->unset_userdata($data);
        redirect("/~team2/main");
      }
}
?>
