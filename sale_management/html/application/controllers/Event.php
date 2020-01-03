<?  
class Event extends CI_Controller {       // event클래스 선언
    function __construct(){                           // 클래스생성할 때 초기설정
        parent::__construct();
        $this->load->database();                     // 데이터베이스 연결
        $this->load->model("event_m");    // 모델 event_m 연결
        $this->load->model("login_m");
        $this->load->helper(array("url","date"));
        $this->load->library('pagination');
        $this->load->library('upload');
        date_default_timezone_set("Asia/Seoul");
        $this->load->library('image_lib');
    }
    public function index(){                            // 제일 먼저 실행되는 함수
        $this->lists();                                        // list 함수 호출
    }
    public function speaker(){
        $this->load->library("form_validation");
        
        $this->form_validation->set_rules("program_no","프로그램명","required|numeric");
        $this->form_validation->set_rules("starttime","시작시간","required|numeric");
        $this->form_validation->set_rules("endtime","종료시간","required|numeric");

        
        if($this->form_validation->run()==FALSE){      //추가버튼 클릭시 
            $data["list"]  = $this->event_m->getlist_event();
            $data["list2"] = $this->event_m->getlist_time();
            $this->load->view("header_admin");          // 상단출력(메뉴)
            $this->load->view("event_speaker", $data);           // event_speaker에 자료전달 
        }
        else{
            $data = array(
                'programno' => $this->input->post("program_no",TRUE),
                'starttime' => $this->input->post("time_no1",TRUE),
                'endtime' => $this->input->post("time_no2",TRUE),
                'title' => $this->input->post("title",TRUE),
                'name' => $this->input->post("name",TRUE),
                'company' => $this->input->post("company",TRUE),
                'content' => $this->input->post("content",TRUE),
                'sequence' => $this->input->post("sequence",TRUE),
                'introduce' => $this->input->post("introduce",TRUE)
            );
            $picture = $this->call_upload2();
            if($picture) $data["picture"] = $picture;

            $result = $this->event_m->insertrow2($data);         //데이터 저장
            redirect("/~sale8/event/lists" .$text1 .$page); 
        }
    }
    public function view(){
        $uri_array=$this->uri->uri_to_assoc(3);
        $no	= array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;
        $text1 = array_key_exists("text1",$uri_array) ? urldecode($uri_array["text1"]) : "" ;
        $page = array_key_exists("page",$uri_array) ? urldecode($uri_array["page"]) : 0;
        
        $data["text1"]=$text1;
        $data["page"]=$page;
        $data["row"]=$this->event_m->getrow($no);
        $data["list"]  = $this->event_m->getlist_speaker();
        
        $this->load->view("main_header_event");
        //$this->load->view("event_title");                  
        $this->load->view("event_view",$data);
        $this->load->view("main_footer_event");                      
    }
    public function admin(){
        $this->load->view("login.php");
    }
    public function signup(){
        $this->load->view("signup.php");
    }
    public function check(){
        $uid=$this->input->post("uid8",TRUE);
        $pwd=$this->input->post("pwd8",TRUE);
    
        $row=$this->login_m->getrow($uid,$pwd);
        if ($row){
          $data = array(
            "uid" =>$row->uid8,
            "rank" =>$row->rank8
          );
          $this->session->set_userdata($data);
        }
        $this->load->view("header_admin");  
      }
      public function logout(){
        $data = array("uid", "rank");
        $this->session->unset_userdata($data);
        
        $this->load->view("main_header_event");
        $this->load->view("event_list");   
      }




    public function lists(){
        $uri_array=$this->uri->uri_to_assoc(3);
        $text1 = array_key_exists("text1",$uri_array) ? urldecode($uri_array["text1"]) : "" ;

        if($text1==""){
            $base_url = "/event/lists/page";
        }
        else{
            $base_url = "/event/lists/text1/$text1/page"; 
        }
        
        $page_segment = substr_count(substr($base_url,0,strpos($base_url,"page")) , "/" )+1;
        //strpos(문자열,"찾을문자열") => 몇번째 위치인지를 나타냄
        // 처음부터 ~page 까지 중에서 / 가 몇번있는지를 세주고 거시서 1을 더함 
        // 그러면 page의 segment 위치를 알 수 있다. if~else문으로도 처리 가능할듯 하다. !$text1이면 4, else 6
        $base_url = "/~sale8" .$base_url;

        $config["per_page"]	 = 12;                              // 페이지당 표시할 line 수
        $config["total_rows"] = $this->event_m->rowcount($text1);  // 전체 레코드개수 구하기
        $config["uri_segment"] = $page_segment;		 // 페이지가 있는 segment 위치
        $config["base_url"]	 = $base_url;                // 기본 URL
        
        $this->pagination->initialize($config);           // pagination 설정 적용

        $data["page"]=$this->uri->segment($page_segment,0);  // 시작위치, 없으면 0.
        $data["pagination"] = $this->pagination->create_links();  // 페이지소스 생성

        $start=$data["page"];                 // n페이지 : 시작위치
        $limit=$config["per_page"];        // 페이지 당 라인수
       
        $data["text1"]=$text1;
        $data["list"]=$this->event_m->getlist($text1,$start,$limit);
    
        
        $this->load->view("event_list",$data);           // event_list에 자료전달
    }
    public function del(){
        $uri_array=$this->uri->uri_to_assoc(3);
        $no	= array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;
        $text1 = array_key_exists("text1",$uri_array) ? "/text1/" . urldecode($uri_array["text1"]) : "" ;
        $page = array_key_exists("page",$uri_array) ? "/page/" . urldecode($uri_array["page"]) : 0;

        $this->event_m->deleterow($no);

        redirect("/~sale8/event/lists" . $text1 .$page);             // 목록화면으로 돌아가기
    }
    public function add(){
        // if($this->session->userdata('rank')!=1) redirect("/~sale8/event");
        // 로그인 안되어 있을시 로그인 페이지로 리다이렉션
        // if(!$this->session->userdata(('rank')!=1)){
        //     $this->load->helper('url');
        //     redirect('/~sale8/event/admin?returnURL='.rawurlencode(site_url('/~sale8/event/add')));
        // }
    

        $uri_array=$this->uri->uri_to_assoc(3);
        $text1 = array_key_exists("text1",$uri_array) ? "/text1/" . urldecode($uri_array["text1"]) : "" ;
        $page = array_key_exists("page",$uri_array) ? "/page/" . urldecode($uri_array["page"]) : 0;
    
        $data["list"]=$this->event_m->getlist_time();
        $this->load->library("form_validation");
        
        $this->form_validation->set_rules("program","프로그램명","required|numeric");
        $this->form_validation->set_rules("staff","관리자","required|numeric");
        $this->form_validation->set_rules("place","행사장소","required|numeric");

        if($this->form_validation->run()==FALSE){      //추가버튼 클릭시
            $data["list"]  = $this->event_m->getlist_time(); 
            $this->load->view("header_admin");          // 상단출력(메뉴)
            $this->load->view("event_add",$data);           // event_list에 자료전달
            // $this->load->view("main_footer_event");  
        }
        else{
            $tel1=$this->input->post("tel1",TRUE);
            $tel2=$this->input->post("tel2",TRUE);
            $tel3=$this->input->post("tel3",TRUE);
            $tel = sprintf("%-3s%-4s%-4s", $tel1, $tel2, $tel3);

            $data = array(
                'program' => $this->input->post("program",TRUE),
                'staff' => $this->input->post("staff",TRUE),
                'staffphone' => $tel,
                'account' => $this->input->post("account",TRUE),
                'place' => $this->input->post("place",TRUE),
                'place2' => $this->input->post("place2",TRUE),
                'startday' => $this->input->post("startday",TRUE),
                'endday' => $this->input->post("endday",TRUE)
            );
            $picname = $this->call_upload();
            if($picname) $data["poster"] = $picname;

            $result = $this->event_m->insertrow($data);         //데이터 저장
            redirect("/~sale8/event/lists"); 
        }
    }
    public function call_upload(){
        $config['upload_path']	= './program_img/';
        $config['allowed_types']	= 'gif|jpg|png'; 
        $config['overwrite']	= TRUE; 
        $config['max_size']	= 10000000;
        $config['max_width']	= 10000;
        $config['max_height']	= 10000;
        
        $this->upload->initialize($config); 
        if (!$this->upload->do_upload('poster')) 
            $picname="";
        else{
            $picname=$this->upload->data("file_name");

            $config['image_library'] = 'gd2';
            $config['source_image'] = './program_img/' . $picname;
            $config['thumb_marker'] = '';
            $config['new_image'] = './program_img/thumb';
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = TRUE;
            $config['width'] = 720;
            $config['height'] =  405;

            $this->image_lib->initialize($config);
            $this->image_lib->resize();
        }    
        return $picname;
    }
    public function call_upload2(){
        $config['upload_path']	= './speaker_img/';
        $config['allowed_types']	= 'gif|jpg|png'; 
        $config['overwrite']	= TRUE; 
        $config['max_size']	= 10000000;
        $config['max_width']	= 10000;
        $config['max_height']	= 10000;
        
        $this->upload->initialize($config); 
        if (!$this->upload->do_upload('picture')) 
            $picture="";
        else{
            $picture=$this->upload->data("file_name");

            $config['image_library'] = 'gd2';
            $config['source_image'] = './speaker_img/' . $picture;
            $config['thumb_marker'] = '';
            // $config['new_image'] = './program_img/thumb';
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = TRUE;

            $this->image_lib->initialize($config);
            $this->image_lib->resize();
        }    
        return $picture;
    }
    public function edit(){
        $uri_array=$this->uri->uri_to_assoc(3);
        $no	= array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;
        $text1 = array_key_exists("text1",$uri_array) ? "/text1/" . urldecode($uri_array["text1"]) : "" ;
        $page = array_key_exists("page",$uri_array) ? "/page/" . urldecode($uri_array["page"]) : 0;

        $this->load->library("form_validation");
        
        // $this->form_validation->set_rules("name","이름","required | max_length[20]");
        // $this->form_validation->set_rules("uid","아이디","required | max_length[20]");
        // $this->form_validation->set_rules("pwd","암호","required | max_length[20]");

        if(!$_POST){      //수정버튼 클릭시 
            // $this->load->view('main_header_event');          // 상단출력(메뉴)

            $data["row"]=$this->event_m->getrow($no);
            $this->load->view("event_edit",$data);
            // $this->load->view('main_footer_event');  
        }
        else{
            $tel1=$this->input->post("tel1",TRUE);
            $tel2=$this->input->post("tel2",TRUE);
            $tel3=$this->input->post("tel3",TRUE);
            $tel = sprintf("%-3s%-4s%-4s", $tel1, $tel2, $tel3);

            $data = array(
                'program' => $this->input->post("program",TRUE),
                'poster' => $this->input->post("poster",TRUE),
                'staff' => $this->input->post("staff",TRUE),
                'staffphone' => $tel,
                'account' => $this->input->post("account",TRUE),
                'place' => $this->input->post("place",TRUE),
                'startday' => $this->input->post("startday",TRUE),
                'endday' => $this->input->post("endday",TRUE)
            );
            $picname = $this->call_upload();
            if($picname) $data["poster"] = $picname;

            $result = $this->event_m->updaterow($data, $no); //185p, 원래는 $data, $no 넣는거였음
            redirect("/~sale8/event/lists" .$text1 .$page); 
        }
    }
    
}
?>
