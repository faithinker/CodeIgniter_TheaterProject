<? //defined('BASEPATH') OR exit('No direct script access allowed');
class Adminlogin extends CI_Controller {   
  function __construct() {      
      parent::__construct();
      $this->load->database();                     // 데이터베이스 연결
      $this->load->model("adminlogin_m");
      $this->load->library('session');
      $this->load->helper(array('url','date'));
      
  }
  public function index()  {	
    $this->load->view("admin/admin_login");
  
  }
  public function check() {
		$id=$this->input->post("id",TRUE);
		$pwd=$this->input->post("pwd",TRUE);

		$row=$this->adminlogin_m->getrow($id,$pwd);
		if($row) {
			$data=array(
					"id" =>$row->id,
          "pwd"=>$row->pwd,
          "status"=>$row->status,
			);
      $this->session->set_userdata($data);
      redirect("/~team2/adminmain");
    }
    else {
      $this->load->view("admin/admin_loginerror");
    }	
  }
  public function logout(){
    $data = array("id", "status");
    $this->session->unset_userdata($data);
    
    redirect("/~team2/adminlogin");
  }


}
?>
