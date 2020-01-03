<?
class Book_m extends CI_Model{     // 모델 클래스 선언
    public function getlist(){
        
        $sql="select * from movie order by no";     // select문 정의
       
        return $this->db->query($sql)->result();              // 쿼리실행, 결과 리턴
    }

	public function getlist1(){
        
        $sql="select * from buy order by no desc limit 1";     // select문 정의
       
        return $this->db->query($sql)->result();              // 쿼리실행, 결과 리턴
    }

	public function getlist2(){
        
        $sql="select buy.*,city.name as city_name,jijum.name as jijum_name,movie.name as movie_name from buy left join city on buy.city_no=city.no left join jijum on buy.jijum_no=jijum.no left join movie on buy.movie_no=movie.no order by no desc limit 1";     // select문 정의
       
        return $this->db->query($sql)->result();              // 쿼리실행, 결과 리턴
    }

	public function getlist3(){
        
        $sql="select * from buy order by no";     // select문 정의
       
        return $this->db->query($sql)->result();              // 쿼리실행, 결과 리턴
    }

	public function getlist4($movie,$city,$jijum,$date,$time){
        
        $sql="select * from buy where movie_no=$movie and city_no=$city and jijum_no=$jijum and date_no like '%".$date."%' and time_no like '%".$time."%' order by no";     // select문 정의
       
        return $this->db->query($sql)->result();              // 쿼리실행, 결과 리턴
    }



    public function rowcount($text1){
        if (!$text1)
            $sql="select * from enroll order by no desc";
        else
            $sql="select * from enroll where name like '%".$text1."%' order by no";
        return $this->db->query($sql)->num_rows();

    }
    function getrow($no){
        $sql = "select * from buy where no=$no";
        return $this->db->query($sql)->row();
    }
	 function getrow1($no){
        $sql = "select * from member where no=$no";
        return $this->db->query($sql)->row();
    }
    function deleterow($no)  {
        $sql="delete from enroll where no=$no";
        return  $this->db->query($sql);
    }

    function insertrow($row){
        return $this->db->insert("buy", $row);
    }
 
    function updaterow($row, $no) {
        $where=array("no"=>$no); 
        return $this->db->update("buy", $row, $where);
    }

	function updaterow1($row, $no) {
        $where=array("no"=>$no); 
        return $this->db->update("member", $row, $where);
    }

    function getjijum($option_value) {
    $sql = "select * from jijum where city_no=$option_value order by no ";
    return $this->db->query($sql)->result();
    }

	function gettime($option_value) {
    $sql = "select * from enroll where jijum_no=$option_value order by no ";
    return $this->db->query($sql)->result();
    }

    function getlist_movie() {
      $sql="select * from movie order by no";
      return $this->db->query($sql)->result();
    }

	function getlist_enroll(){
      $sql="select * from enroll order by no";
      return $this->db->query($sql)->result();
    }
    function getlist_city(){
        $sql="select * from city order by no";
        return $this->db->query($sql)->result();
    }
    function getlist_jijum(){
        $sql="select * from jijum order by no";
        return $this->db->query($sql)->result();
    }
    function getlist_hall(){
        $sql="select * from jijum order by no";
        return $this->db->query($sql)->result();
    }
}
?>
