<?
	class Movie_m extends CI_Model     // 모델 클래스 선언
	{
		public function getlist($text1,$start,$limit){
        if(!$text1)
            $sql="select movie.*,genre.name as genre_name from movie left join genre on movie.genre_no=genre.no order by movie.no limit $start, $limit";     // select문 정의
        else
            $sql="select movie.*,genre.name as genre_name from movie left join genre on movie.genre_no=genre.no order by movie.no limit $start, $limit"; //start, limit약간 이상해보임
        return $this->db->query($sql)->result();              // 쿼리실행, 결과 리턴
    }
    public function rowcount($text1){
        if (!$text1)
            $sql="select * from movie order by name";
        else
            $sql="select * from movie where name like '%".$text1."%' order by name";
        return $this->db->query($sql)->num_rows();

    }

	 public function rowcount_v($no){
       
        $sql="select * from review where movie_no=$no";
       
        return $this->db->query($sql)->num_rows();

    }

    function get_rate(){
        $sql ="select rate as rate_rate from rate";
        return $this->db->query($sql)->result();
    }
    function get_review($no){
        $sql="select * from review where movie_no=$no order by no";
        return $this->db->query($sql)->result();
        //return $this->db->query($sql)->row(); 
    }
    function getrow($no){
        $sql = "select movie.*,genre.name as genre_name from movie left join genre on movie.genre_no=genre.no where movie.no=$no";
        return $this->db->query($sql)->row();
    }
    function deleterow($no)  {
        $sql="delete from movie where no=$no";
        return  $this->db->query($sql);
    }
    function insertreview($row){
        return $this->db->insert("review", $row);
    }
    function insertrow($row){
        return $this->db->insert("movie", $row);
    }
    function updaterow($row, $no){
        $where=array("no"=>$no); 
        return $this->db->update("movie", $row, $where);
    }
    function cinema_list(){ // 도시, 영화, 관, 관의 좌석수를 모두 나타냄
        $sql="select city.name as city_name, jijum.name as jijum_name, hall.name as hall_name, hall.seat_num
            from jijum left join hall on jijum.no = hall.jijum_no 
            left join city on jijum.city_no = city.no;";
        return $this->db->query($sql)->result(); 
    }
}
?>
