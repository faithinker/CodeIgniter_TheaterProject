<?
class Contact extends CI_Controller {               // Ŭ�����̸� ù 
	function email()
    {
        parent::Controller();   
        $this->load->library('email');
		date_default_timezone_set("Asia/Seoul");
    }

    function index()
    { 
    
    $this->load->view('contact');
    }

  public function send()
   {

      $this->load->library('email');

         $config['protocol'] = 'smtp';
         //$config['smtp_host'] = 'ssl://smtp.gmail.com';
         $config['smtp_host'] = 'ssl://smtp.naver.com';
         $config['smtp_port'] = 465;
         $config['smtp_user'] = 'engeliss'; //아이디
         $config['smtp_pass'] = '!a12dn84ey'; 
         $config['mailtype'] = 'text'; 
         $config['charset'] = 'utf-8';
         $config['wordwrap'] = TRUE;
         $config['newline']   = "\r\n";
         
         $this->email->initialize($config);

         $this->email->from('engeliss@naver.com','name'); //받을이메일 작성자
         $this->email->to('engeliss@naver.com'); //보낼이메일

         
         $this->email->subject('Email Test'); // 제목
         $this->email->message('hihihihihihihihi'); // 내용
         
		 
        if($this->email->send()){
         $this->load->view("contact_send");
        }
		else
			echo "실패";
    }

}
?>
