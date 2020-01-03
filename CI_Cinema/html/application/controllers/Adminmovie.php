<?
	class Adminmovie extends CI_Controller {               // Ŭ�����̸� ù ���ڴ� �빮��
		function __construct(){                           // 클래스생성할 때 초기설정
		parent::__construct();
		$this->load->database();                     // 데이터베이스 연결
		$this->load->model("adminmovie_m");    // 모델 movie_m 연결
		$this->load->helper(array("url","date"));
		$this->load->library('pagination');
		$this->load->library("upload");
		$this->load->library("image_lib");

		date_default_timezone_set("Asia/Seoul");
		}
		public function index() {      
			$this->lists();
		}
		public function lists(){
			$uri_array=$this->uri->uri_to_assoc(3);
			$text1 = array_key_exists("text1",$uri_array) ? urldecode($uri_array["text1"]) : "" ;

			if($text1==""){
				$base_url = "/adminmovie/lists/page";
			}
			else{
				$base_url = "/adminmovie/lists/text1/$text1/page"; 
		}
    
			$page_segment = substr_count(substr($base_url,0,strpos($base_url,"page")) , "/" )+1;
			//strpos(문자열,"찾을문자열") => 몇번째 위치인지를 나타냄
			// 처음부터 ~page 까지 중에서 / 가 몇번있는지를 세주고 거시서 1을 더함 
			// 그러면 page의 segment 위치를 알 수 있다. if~else문으로도 처리 가능할듯 하다. !$text1이면 4, else 6
			$base_url = "/~team2" .$base_url;

			$config["per_page"]	 = 30;                              // 페이지당 표시할 line 수
			$config["total_rows"] = $this->adminmovie_m->rowcount($text1);  // 전체 레코드개수 구하기
			$config["uri_segment"] = $page_segment;		 // 페이지가 있는 segment 위치
			$config["base_url"]	 = $base_url;                // 기본 URL

			$this->pagination->initialize($config);           // pagination 설정 적용

			$data["page"]=$this->uri->segment($page_segment,0);  // 시작위치, 없으면 0.
			$data["pagination"] = $this->pagination->create_links();  // 페이지소스 생성

			$start=$data["page"];                 // n페이지 : 시작위치
			$limit=$config["per_page"];        // 페이지 당 라인수

			$data["text1"]=$text1;
			$data["list"]=$this->adminmovie_m->getlist($text1,$start,$limit);

			$this->load->view("admin/admin_header");
			$this->load->view("admin/admin_movie",$data);
			$this->load->view("admin/admin_footer");           
		}

  public function add()
		{	
			$uri_array=$this->uri->uri_to_assoc(3);
			$text1=array_key_exists("text1",$uri_array) ? "/text1/" . urldecode($uri_array["text1"]) : "";
			$page = array_key_exists("page",$uri_array) ? "/page/" . urldecode($uri_array["page"]) : "" ;

			$this->load->library("form_validation");
			$this->form_validation->set_rules("name","이름","required|max_length[50]");

			if ($this->form_validation->run()==FALSE )
				{	
					$data["list"]=$this->adminmovie_m->getlist_genre();//gubun row받아오기 왜???
					$this->load->view("admin/admin_header");
					$this->load->view("admin/admin_movie_add",$data);    // 입력화면 표시
					$this->load->view("admin/admin_footer");
				}
				else              // 입력화면의 저장버튼 클릭한 경우
				{	

					$openday1=$this->input->post("openday1",true);
					$openday2=$this->input->post("openday2",true);
					$openday3=$this->input->post("openday3",true);
					$openday = sprintf("%04d-%02d-%02d", $openday1, $openday2, $openday3);
					$joindate=date("Y-m-d");

					$data= array(
					'name' => $this->input->post("name",true),
					'synopsis' => $this->input->post("synopsis",true),
					'director' => $this->input->post("director",true),
					'actor' => $this->input->post("actor",true),
					'openday' => $openday,
					'grade' => $this->input->post("grade",true),
					'genre_no' => $this->input->post("genre_no",true),
					'running_time' => $this->input->post("running_time",true),
					'status' =>$this->input->post("status",true),
					'rsvcount' => 0
					);
					$picname = $this->call_upload();
					if ($picname) $data["poster"] = $picname;

					$picname1 = $this->call_upload1();
					if ($picname1) $data["trailer1"] = $picname1;

					$picname2 = $this->call_upload2();
					if ($picname2) $data["trailer2"] = $picname2;

					$picname3 = $this->call_upload3();
					if ($picname3) $data["trailer3"] = $picname3;

					$picname4 = $this->call_upload4();
					if ($picname4) $data["trailer4"] = $picname4;

					$picname5= $this->call_upload5();
					if ($picname5) $data["trailer5"] = $picname5;

					$picname6 = $this->call_upload6();
					if ($picname6) $data["trailer6"] = $picname6;


					

					$this->adminmovie_m->insertrow($data); 

					redirect("/~team2/adminmovie".$text1.$page);    //   목록화면으로 이동.
				}
			}
			public function del()
		{
			$uri_array=$this->uri->uri_to_assoc(3);
			$no=array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;
			$text1=array_key_exists("text1",$uri_array) ? "/text1/" . urldecode($uri_array["text1"]) : "";
        // URI: /movie/del/no/1
			$page = array_key_exists("page",$uri_array) ? "/page/" . urldecode($uri_array["page"]) : "" ;
			
			$this->adminmovie_m->deleterow($no);
			redirect("/~team2/adminmovie". $text1.$page);             // 목록화면으로 돌아가기
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

			if (!$this->upload->do_upload('poster'))  //저장못했을때
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

			if (!$this->upload->do_upload('trailer1'))  //저장못했을때
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

		public function call_upload2()
		{
			$config['upload_path']= './movie_img'; //여기에 저장하겠다(폴더지정)
			$config['allowed_types']= 'gif|jpg|png'; //저장하는 파일타입
			$config['overwrite']= TRUE; 
			$config['max_size']= 10000000; 
			$config['max_width']= 10000; 
			$config['max_height']= 10000; 
			$this->upload->initialize($config); 

			if (!$this->upload->do_upload('trailer2'))  //저장못했을때
				$picname2="";
			
			else{
				$picname2=$this->upload->data("file_name"); //저장할 수 있을때
				//썸네일 환경설정
				$config['image_library']= 'gd2';
				$config['source_image']= './movie_img/'.$picname2; //원본 사진 이름
				$config['thumb_marker']= '';
				$config['new_image']= './product_img/thumb'; //thumb저장 폴더
				$config['create_thumb']= TRUE;
				$config['maintain_ratio']= TRUE;
				$config['width']= 200;
				$config['height']= 150;

				$this->image_lib->initialize($config);
				$this->image_lib->resize();
			}
				
			return $picname2;
		}	

		public function call_upload3()
		{
			$config['upload_path']= './movie_img'; //여기에 저장하겠다(폴더지정)
			$config['allowed_types']= 'gif|jpg|png'; //저장하는 파일타입
			$config['overwrite']= TRUE; 
			$config['max_size']= 10000000; 
			$config['max_width']= 10000; 
			$config['max_height']= 10000; 
			$this->upload->initialize($config); 

			if (!$this->upload->do_upload('trailer3'))  //저장못했을때
				$picname3="";
			
			else{
				$picname3=$this->upload->data("file_name"); //저장할 수 있을때
				//썸네일 환경설정
				$config['image_library']= 'gd2';
				$config['source_image']= './movie_img/'.$picname3; //원본 사진 이름
				$config['thumb_marker']= '';
				$config['new_image']= './product_img/thumb'; //thumb저장 폴더
				$config['create_thumb']= TRUE;
				$config['maintain_ratio']= TRUE;
				$config['width']= 200;
				$config['height']= 150;

				$this->image_lib->initialize($config);
				$this->image_lib->resize();
			}
				
			return $picname3;
		}	

		public function call_upload4()
		{
			$config['upload_path']= './movie_img'; //여기에 저장하겠다(폴더지정)
			$config['allowed_types']= 'gif|jpg|png'; //저장하는 파일타입
			$config['overwrite']= TRUE; 
			$config['max_size']= 10000000; 
			$config['max_width']= 10000; 
			$config['max_height']= 10000; 
			$this->upload->initialize($config); 

			if (!$this->upload->do_upload('trailer4'))  //저장못했을때
				$picname4="";
			
			else{
				$picname4=$this->upload->data("file_name"); //저장할 수 있을때
				//썸네일 환경설정
				$config['image_library']= 'gd2';
				$config['source_image']= './movie_img/'.$picname4; //원본 사진 이름
				$config['thumb_marker']= '';
				$config['new_image']= './product_img/thumb'; //thumb저장 폴더
				$config['create_thumb']= TRUE;
				$config['maintain_ratio']= TRUE;
				$config['width']= 200;
				$config['height']= 150;

				$this->image_lib->initialize($config);
				$this->image_lib->resize();
			}
				
			return $picname4;
		}	

		public function call_upload5()
		{
			$config['upload_path']= './movie_img'; //여기에 저장하겠다(폴더지정)
			$config['allowed_types']= 'gif|jpg|png'; //저장하는 파일타입
			$config['overwrite']= TRUE; 
			$config['max_size']= 10000000; 
			$config['max_width']= 10000; 
			$config['max_height']= 10000; 
			$this->upload->initialize($config); 

			if (!$this->upload->do_upload('trailer5'))  //저장못했을때
				$picname5="";
			
			else{
				$picname5=$this->upload->data("file_name"); //저장할 수 있을때
				//썸네일 환경설정
				$config['image_library']= 'gd2';
				$config['source_image']= './movie_img/'.$picname5; //원본 사진 이름
				$config['thumb_marker']= '';
				$config['new_image']= './product_img/thumb'; //thumb저장 폴더
				$config['create_thumb']= TRUE;
				$config['maintain_ratio']= TRUE;
				$config['width']= 200;
				$config['height']= 150;

				$this->image_lib->initialize($config);
				$this->image_lib->resize();
			}
				
			return $picname5;
		}	

		public function call_upload6()
		{
			$config['upload_path']= './movie_img'; //여기에 저장하겠다(폴더지정)
			$config['allowed_types']= 'gif|jpg|png'; //저장하는 파일타입
			$config['overwrite']= TRUE; 
			$config['max_size']= 10000000; 
			$config['max_width']= 10000; 
			$config['max_height']= 10000; 
			$this->upload->initialize($config); 

			if (!$this->upload->do_upload('trailer6'))  //저장못했을때
				$picname6="";
			
			else{
				$picname6=$this->upload->data("file_name"); //저장할 수 있을때
				//썸네일 환경설정
				$config['image_library']= 'gd2';
				$config['source_image']= './movie_img/'.$picname6; //원본 사진 이름
				$config['thumb_marker']= '';
				$config['new_image']= './product_img/thumb'; //thumb저장 폴더
				$config['create_thumb']= TRUE;
				$config['maintain_ratio']= TRUE;
				$config['width']= 200;
				$config['height']= 150;

				$this->image_lib->initialize($config);
				$this->image_lib->resize();
			}
				
			return $picname6;
		}	




		public function edit()
		{	
			$uri_array=$this->uri->uri_to_assoc(3);
			$no=array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;
			$text1=array_key_exists("text1",$uri_array) ? "/text1/" . urldecode($uri_array["text1"]) : "";
			$page = array_key_exists("page",$uri_array) ? "/page/" . urldecode($uri_array["page"]) : "" ;

			$this->load->library("form_validation");
			$this->form_validation->set_rules("name","이름","required|max_length[50]");

			if ($this->form_validation->run()==FALSE )
				{	
					$data["list"]=$this->adminmovie_m->getlist_genre();//gubun row받아오기 왜???
					$this->load->view("admin/admin_header");
					$data["row"]=$this->adminmovie_m->getrow($no);
					$this->load->view("admin/admin_movie_edit",$data);    // 입력화면 표시
					$this->load->view("admin/admin_footer");
				}
				else              // 입력화면의 저장버튼 클릭한 경우
				{	

					$openday1=$this->input->post("openday1",true);
					$openday2=$this->input->post("openday2",true);
					$openday3=$this->input->post("openday3",true);
					$openday = sprintf("%04d-%02d-%02d", $openday1, $openday2, $openday3);
					$joindate=date("Y-m-d");

					$data= array(
					'name' => $this->input->post("name",true),
					'synopsis' => $this->input->post("synopsis",true),
					'director' => $this->input->post("director",true),
					'actor' => $this->input->post("actor",true),
					'openday' => $openday,
					'grade' => $this->input->post("grade",true),
					'genre_no' => $this->input->post("genre_no",true),
					'running_time' => $this->input->post("running_time",true),
					'status' =>$this->input->post("status",true),
							
					);
					$picname = $this->call_upload();
					if ($picname) $data["poster"] = $picname;

					$picname1 = $this->call_upload1();
					if ($picname1) $data["trailer1"] = $picname1;

					$picname2 = $this->call_upload2();
					if ($picname2) $data["trailer2"] = $picname2;

					$picname3 = $this->call_upload3();
					if ($picname3) $data["trailer3"] = $picname3;

					$picname4 = $this->call_upload4();
					if ($picname4) $data["trailer4"] = $picname4;

					$picname5= $this->call_upload5();
					if ($picname5) $data["trailer5"] = $picname5;

					$picname6 = $this->call_upload6();
					if ($picname6) $data["trailer6"] = $picname6;


					$this->adminmovie_m->updaterow($data,$no); 

					redirect("/~team2/adminmovie".$text1.$page);    //   목록화면으로 이동.
				}
			}


}
?>
