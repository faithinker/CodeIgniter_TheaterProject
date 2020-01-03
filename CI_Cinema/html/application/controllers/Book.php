<?
class Book extends CI_Controller {               // 클래스���ڴ� �빮��
  function __construct(){                           // 클래스생성할 때 초기설정
    parent::__construct();
    $this->load->database();                     // 데이터베이스 연결
    $this->load->model("book_m");    // 모델 Member_m 연결
    $this->load->helper(array("url","date"));
	$this->load->helper("cookie");

	date_default_timezone_set("Asia/Seoul");
  }
 public function index()      
		
    {	
		$this->lists();
    }

  public function lists(){
	

	 $data["list"]=$this->book_m->getlist();
	 $data["list1"]=$this->book_m->getlist_city();
	 $this->load->view("book1",$data);      	
	
  }

 public function insertbook()
		{	
			$movie_n = $this->input->post("movie_n",true);
			
			$member=$this->session->userdata('no');
			
			$data= array(	
			"member_no" => $member,
			"movie_no" => $movie_n,
			"city_no" => $this->input->post("city_n",true),	
			"jijum_no" => $this->input->post("jijum_n",true),
			"date_no" => $this->input->post("date_n",true),
			"time_no" => $this->input->post("time_n",true),
			);
	
			$this->book_m->insertrow($data); 

		}


public function updatebook()
		{	
			
			$movie_n = $this->input->post("movie_n",true);
			$no = $this->input->post("no",true);
			$member=$this->session->userdata('no');
			$price=(Int)$this->input->post("prices_n",true);

			if($this->session->userdata('age')==0){
				$price=$price-5;
			}
			

			$data= array(	
			"member_no" => $member,
			"movie_no" => $movie_n,
			"city_no" => $this->input->post("city_n",true),	
			"jijum_no" => $this->input->post("jijum_n",true),
			"date_no" => $this->input->post("date_n",true),
			"time_no" => $this->input->post("time_n",true),
			"seat_no" => $this->input->post("seat_n",true),
			"seat_num" => $this->input->post("count_n",true),
			"pay_no" => $this->input->post("pay_n",true),
			"price"  => $price
			);
	
			$this->book_m->updaterow($data,$no); 

		}


public function updatebook1()
		{	
			
			$movie_n = $this->input->post("movie_n",true);
			$no = $this->input->post("no",true);
			$member=$this->session->userdata('no');
			$price=(Int)$this->input->post("prices_n",true);
			
			$row1=$this->book_m->getrow1($member);
			$total=$row1->total;
			$total=$total+$price;
			$data1= array (
				"total" =>$price
				);

			$data= array(	
			"member_no" => $member,
			"movie_no" => $movie_n,
			"city_no" => $this->input->post("city_n",true),	
			"jijum_no" => $this->input->post("jijum_n",true),
			"date_no" => $this->input->post("date_n",true),
			"time_no" => $this->input->post("time_n",true),
			"seat_no" => $this->input->post("seat_n",true),
			"seat_num" => $this->input->post("count_n",true),
			"pay_no" => $this->input->post("pay_n",true),
			"price"  => $price
			);
	
			$this->book_m->updaterow($data,$no); 
			$this->book_m->updaterow1($data1,$member); 


		}


public function findbook()
{	
	$list1=$this->book_m->getlist1(); 
	foreach($list1 as $row){
		$movie=$row->movie_no;
		$city=$row->city_no;
		$jijum=$row->jijum_no;
		$date=$row->date_no;
		$time=$row->time_no;
	}
	$list3=$this->book_m->getlist4($movie,$city,$jijum,$date,$time); 
	$seat_array = array();

	foreach($list3 as $row){
	array_push($seat_array, $row->seat_no);
}

$test = implode($seat_array);
echo $test;
}



  public function book2(){
	$data["list3"]=$this->book_m->getlist3();
    $data["list"]=$this->book_m->getlist1();
	$data["list1"]=$this->book_m->getlist_city();

    $this->load->view("book2",$data);
      
  }

  public function book3(){
	
	$data["list"]=$this->book_m->getlist1();
    $this->load->view("book3",$data);
      
  }

  public function book4(){
	
	$data["list"]=$this->book_m->getlist2();
    $this->load->view("book4",$data);
      
  }


  public function jijum_list(){

	$option_value=$this->input->post("option_value",TRUE); //옵션값 받아오기 
	$text=$this->input->post("text1",TRUE); //옵션값 받아오기 

	$list2=$this->book_m->getjijum($option_value);

	$str1 = '<option name="jijum_no" value="" selected>선택하세요</option>';

	foreach($list2 as $row){
		$str1 = $str1 . "<option value='$row->no'>$row->name</option>";
	}
	echo $str1;
}

public function hall_list(){

	$option_value=$this->input->post("option_value",TRUE); //옵션값 받아오기 
	$text=$this->input->post("text1",TRUE); //옵션값 받아오기 

	$list3=$this->book_m->gethall($option_value);

	$str1 = '<option name="jijum_no" value="" selected>선택하세요</option>';

	foreach($list3 as $row){
		$str1 = $str1 . "<option value='$row->no'>$row->name</option>";
	}
	echo $str1;
}

public function time_list(){

	$option_value=$this->input->post("option_value",TRUE); //옵션값 받아오기 
	$text=$this->input->post("text1",TRUE); //옵션값 받아오기 

	$list4=$this->book_m->gettime($option_value);
	
	foreach($list4 as $row){
		$str1 = "<li class='time-select__item' id='time1'>$row->time</li>";
	}
	echo $str1;
}

}
?>
