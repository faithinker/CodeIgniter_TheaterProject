<?
class Adminevent extends CI_Controller {               // Ŭ�����̸� ù ���ڴ� �빮��
  function __construct(){                           // 클래스생성할 때 초기설정
    parent::__construct();
    $this->load->database();                     // 데이터베이스 연결
    $this->load->model("adminevent_m");    // 모델 Member_m 연결
    $this->load->helper(array("url","date"));
    $this->load->library('pagination');
		$this->load->library("upload");
		$this->load->library("image_lib");

		date_default_timezone_set("Asia/Seoul");
  }
  public function index() {      
    $this->lists();
	}
	function mycinema(){
		$uri_array=$this->uri->uri_to_assoc(3);
    $text1 = array_key_exists("text1",$uri_array) ? urldecode($uri_array["text1"]) : "" ;

    if($text1==""){
        $base_url = "/adminevent/lists/page";
    }
    else{
        $base_url = "/adminevent/lists/text1/$text1/page"; 
    }
    
    $page_segment = substr_count(substr($base_url,0,strpos($base_url,"page")) , "/" )+1;
    //strpos(문자열,"찾을문자열") => 몇번째 위치인지를 나타냄
    // 처음부터 ~page 까지 중에서 / 가 몇번있는지를 세주고 거시서 1을 더함 
    // 그러면 page의 segment 위치를 알 수 있다. if~else문으로도 처리 가능할듯 하다. !$text1이면 4, else 6
    $base_url = "/~team2" .$base_url;

    $config["per_page"]	 = 30;                              // 페이지당 표시할 line 수
    $config["total_rows"] = $this->adminevent_m->rowcount($text1);  // 전체 레코드개수 구하기
    $config["uri_segment"] = $page_segment;		 // 페이지가 있는 segment 위치
    $config["base_url"]	 = $base_url;                // 기본 URL
    
    $this->pagination->initialize($config);           // pagination 설정 적용

    $data["page"]=$this->uri->segment($page_segment,0);  // 시작위치, 없으면 0.
    $data["pagination"] = $this->pagination->create_links();  // 페이지소스 생성

    $start=$data["page"];                 // n페이지 : 시작위치
    $limit=$config["per_page"];        // 페이지 당 라인수
   
		$data["text1"]=$text1;
		$data["list2"]=$this->adminevent_m->getlist_jijum();
		$data["list"]=$this->adminevent_m->get_mycinema($text1,$start,$limit);
		

    $this->load->view("admin/admin_header");
    $this->load->view("admin/admin_event_mycinema",$data);
    $this->load->view("admin/admin_footer");
	}
	
	function movie(){
		$uri_array=$this->uri->uri_to_assoc(3);
    $text1 = array_key_exists("text1",$uri_array) ? urldecode($uri_array["text1"]) : "" ;

    if($text1==""){
        $base_url = "/adminevent/lists/page";
    }
    else{
        $base_url = "/adminevent/lists/text1/$text1/page"; 
    }
    
    $page_segment = substr_count(substr($base_url,0,strpos($base_url,"page")) , "/" )+1;
    //strpos(문자열,"찾을문자열") => 몇번째 위치인지를 나타냄
    // 처음부터 ~page 까지 중에서 / 가 몇번있는지를 세주고 거시서 1을 더함 
    // 그러면 page의 segment 위치를 알 수 있다. if~else문으로도 처리 가능할듯 하다. !$text1이면 4, else 6
    $base_url = "/~team2" .$base_url;

    $config["per_page"]	 = 30;                              // 페이지당 표시할 line 수
    $config["total_rows"] = $this->adminevent_m->rowcount($text1);  // 전체 레코드개수 구하기
    $config["uri_segment"] = $page_segment;		 // 페이지가 있는 segment 위치
    $config["base_url"]	 = $base_url;                // 기본 URL
    
    $this->pagination->initialize($config);           // pagination 설정 적용

    $data["page"]=$this->uri->segment($page_segment,0);  // 시작위치, 없으면 0.
    $data["pagination"] = $this->pagination->create_links();  // 페이지소스 생성

    $start=$data["page"];                 // n페이지 : 시작위치
    $limit=$config["per_page"];        // 페이지 당 라인수
   
    $data["text1"]=$text1;
		$data["list"]=$this->adminevent_m->get_movie($text1,$start,$limit);
		
    $this->load->view("admin/admin_header");
    $this->load->view("admin/admin_event_movie",$data);
    $this->load->view("admin/admin_footer");
	}

	function premiere(){
		$uri_array=$this->uri->uri_to_assoc(3);
    $text1 = array_key_exists("text1",$uri_array) ? urldecode($uri_array["text1"]) : "" ;

    if($text1==""){
        $base_url = "/adminevent/lists/page";
    }
    else{
        $base_url = "/adminevent/lists/text1/$text1/page"; 
    }
    
    $page_segment = substr_count(substr($base_url,0,strpos($base_url,"page")) , "/" )+1;
    //strpos(문자열,"찾을문자열") => 몇번째 위치인지를 나타냄
    // 처음부터 ~page 까지 중에서 / 가 몇번있는지를 세주고 거시서 1을 더함 
    // 그러면 page의 segment 위치를 알 수 있다. if~else문으로도 처리 가능할듯 하다. !$text1이면 4, else 6
    $base_url = "/~team2" .$base_url;

    $config["per_page"]	 = 30;                              // 페이지당 표시할 line 수
    $config["total_rows"] = $this->adminevent_m->rowcount($text1);  // 전체 레코드개수 구하기
    $config["uri_segment"] = $page_segment;		 // 페이지가 있는 segment 위치
    $config["base_url"]	 = $base_url;                // 기본 URL
    
    $this->pagination->initialize($config);           // pagination 설정 적용

    $data["page"]=$this->uri->segment($page_segment,0);  // 시작위치, 없으면 0.
    $data["pagination"] = $this->pagination->create_links();  // 페이지소스 생성

    $start=$data["page"];                 // n페이지 : 시작위치
    $limit=$config["per_page"];        // 페이지 당 라인수
   
    $data["text1"]=$text1;
		$data["list"]=$this->adminevent_m->get_premiere($text1,$start,$limit);
		
    $this->load->view("admin/admin_header");
    $this->load->view("admin/admin_event_premiere",$data);
    $this->load->view("admin/admin_footer");
	}
  public function lists(){
    $uri_array=$this->uri->uri_to_assoc(3);
    $text1 = array_key_exists("text1",$uri_array) ? urldecode($uri_array["text1"]) : "" ;

    if($text1==""){
        $base_url = "/adminevent/lists/page";
    }
    else{
        $base_url = "/adminevent/lists/text1/$text1/page"; 
    }
    
    $page_segment = substr_count(substr($base_url,0,strpos($base_url,"page")) , "/" )+1;
    //strpos(문자열,"찾을문자열") => 몇번째 위치인지를 나타냄
    // 처음부터 ~page 까지 중에서 / 가 몇번있는지를 세주고 거시서 1을 더함 
    // 그러면 page의 segment 위치를 알 수 있다. if~else문으로도 처리 가능할듯 하다. !$text1이면 4, else 6
    $base_url = "/~team2" .$base_url;

    $config["per_page"]	 = 30;                              // 페이지당 표시할 line 수
    $config["total_rows"] = $this->adminevent_m->rowcount($text1);  // 전체 레코드개수 구하기
    $config["uri_segment"] = $page_segment;		 // 페이지가 있는 segment 위치
    $config["base_url"]	 = $base_url;                // 기본 URL
    
    $this->pagination->initialize($config);           // pagination 설정 적용

    $data["page"]=$this->uri->segment($page_segment,0);  // 시작위치, 없으면 0.
    $data["pagination"] = $this->pagination->create_links();  // 페이지소스 생성

    $start=$data["page"];                 // n페이지 : 시작위치
    $limit=$config["per_page"];        // 페이지 당 라인수
   
    $data["text1"]=$text1;
    $data["list"]=$this->adminevent_m->getlist($text1,$start,$limit);

    $this->load->view("admin/admin_header");
    $this->load->view("admin/admin_event",$data);
    $this->load->view("admin/admin_footer");           
  }
  public function board_add() {			
			$uri_array=$this->uri->uri_to_assoc(3);
			$text1=array_key_exists("text1",$uri_array) ? "/text1/" . urldecode($uri_array["text1"]) : "";
			$page = array_key_exists("page",$uri_array) ? "/page/" . urldecode($uri_array["page"]) : "" ;

			$this->load->library("form_validation");
			//$this->form_validation->set_rules("name","이름","required|max_length[20]");


			if ($this->form_validation->run()==FALSE )
				{
					$this->load->view("admin/admin_header");
					$this->load->view("admin/admin_event_board_add");    // 입력화면 표시
					$this->load->view("admin/admin_footer");
				}
				else  {            // 입력화면의 저장버튼 클릭한 경우	
					$data= array(
					'jijum_no' =>$this->input->post("jijum_no",true),
					'title' => $this->input->post("name",true),
					'term' => $this->input->post("name",true),
					'contents' => $this->input->post("name",true),
					
					);

					$this->adminevent_m->insertrow_board($data); 

					redirect("/~team2/adminevent".$text1.$page);    //   목록화면으로 이동.
				}
			}
  public function add()
		{	
			$uri_array=$this->uri->uri_to_assoc(3);
			$text1=array_key_exists("text1",$uri_array) ? "/text1/" . urldecode($uri_array["text1"]) : "";
			$page = array_key_exists("page",$uri_array) ? "/page/" . urldecode($uri_array["page"]) : "" ;

			$this->load->library("form_validation");
			$this->form_validation->set_rules("name","이름","required|max_length[20]");


			if ($this->form_validation->run()==FALSE )
				{
					$this->load->view("admin/admin_header");
					$this->load->view("admin/admin_event_add");    // 입력화면 표시
					$this->load->view("admin/admin_footer");
				}
				else              // 입력화면의 저장버튼 클릭한 경우
				{	

					$data= array(
					'kind' =>$this->input->post("kind",true),
					'name' => $this->input->post("name",true)
					
					);
					$picname = $this->call_upload();
					if ($picname) $data["pic1"] = $picname;

					$picname1 = $this->call_upload1();
					if ($picname1) $data["pic2"] = $picname1;

					$this->adminevent_m->insertrow($data); 

					redirect("/~team2/adminevent".$text1.$page);    //   목록화면으로 이동.
				}
			}
			public function del()
		{
			$uri_array=$this->uri->uri_to_assoc(3);
			$no=array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;
			$text1=array_key_exists("text1",$uri_array) ? "/text1/" . urldecode($uri_array["text1"]) : "";
        // URI: /member/del/no/1
			$page = array_key_exists("page",$uri_array) ? "/page/" . urldecode($uri_array["page"]) : "" ;
			
			$this->adminevent_m->deleterow($no);
			redirect("/~team2/adminevent". $text1.$page);             // 목록화면으로 돌아가기
		}

		 public function edit()
		{	
			$uri_array=$this->uri->uri_to_assoc(3);
			$no=array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;
			$text1=array_key_exists("text1",$uri_array) ? "/text1/" . urldecode($uri_array["text1"]) : "";
			$page = array_key_exists("page",$uri_array) ? "/page/" . urldecode($uri_array["page"]) : "" ;

			$this->load->library("form_validation");
			$this->form_validation->set_rules("name","이름","required|max_length[20]");


			if ($this->form_validation->run()==FALSE )
				{
					$this->load->view("admin/admin_header");
					$data["row"]=$this->adminevent_m->getrow($no);
					$this->load->view("admin/admin_event_edit",$data);    // 입력화면 표시
					$this->load->view("admin/admin_footer");
				}
				else              // 입력화면의 저장버튼 클릭한 경우
				{	
		
					$data= array(
					'kind' =>$this->input->post("kind",true),
					'name' => $this->input->post("name",true)
					
					);

					$picname = $this->call_upload();
					if ($picname) $data["pic1"] = $picname;

					$picname1 = $this->call_upload1();
					if ($picname1) $data["pic2"] = $picname1;
			
					$result=$this->adminevent_m->updaterow($data,$no); 

					redirect("/~team2/adminevent".$text1.$page);    //   목록화면으로 이동.
				}
			}

			public function call_upload()
		{
			$config['upload_path']= './movie_img'; //여기에 저장하겠다(폴더지정)
			$config['allowed_types']= 'gif|jpg|png'; //저장하는 파일타입
			$config['overwrite']= TRUE; 
			$config['max_size']= 10000000; 
			$config['max_width']= 10000; 
			$config['max_height']= 10000; 
			$this->upload->initialize($config); 

			if (!$this->upload->do_upload('pic1'))  //저장못했을때
				$picname="";
			
			else{
				$picname=$this->upload->data("file_name"); //저장할 수 있을때
				//썸네일 환경설정
				$config['image_library']= 'gd2';
				$config['source_image']= './movie_img/'.$picname; //원본 사진 이름
				$config['thumb_marker']= '';
				$config['new_image']= './product_img/thumb'; //thumb저장 폴더
				$config['create_thumb']= TRUE;
				$config['maintain_ratio']= TRUE;
				$config['width']= 200;
				$config['height']= 150;

				$this->image_lib->initialize($config);
				$this->image_lib->resize();
			}
				
			return $picname;
		}	

		public function call_upload1()
		{
			$config['upload_path']= './movie_img'; //여기에 저장하겠다(폴더지정)
			$config['allowed_types']= 'gif|jpg|png'; //저장하는 파일타입
			$config['overwrite']= TRUE; 
			$config['max_size']= 10000000; 
			$config['max_width']= 10000; 
			$config['max_height']= 10000; 
			$this->upload->initialize($config); 

			if (!$this->upload->do_upload('pic2'))  //저장못했을때
				$picname1="";
			
			else{
				$picname1=$this->upload->data("file_name"); //저장할 수 있을때
				//썸네일 환경설정
				$config['image_library']= 'gd2';
				$config['source_image']= './movie_img/'.$picname1; //원본 사진 이름
				$config['thumb_marker']= '';
				$config['new_image']= './product_img/thumb'; //thumb저장 폴더
				$config['create_thumb']= TRUE;
				$config['maintain_ratio']= TRUE;
				$config['width']= 200;
				$config['height']= 150;

				$this->image_lib->initialize($config);
				$this->image_lib->resize();
			}
				
			return $picname1;
		}	

}
?>
