<?
class Adminmovie_m extends CI_Model{     // 모델 클래스 선언
    public function getlist($text1,$start,$limit){
        if(!$text1)
            $sql="select movie.*,genre.name as genre_name from movie left join genre on movie.genre_no=genre.no order by movie.no limit $start, $limit";     // select문 정의
        else
            $sql="select movie.*,genre.name as genre_name from movie left join genre on movie.genre_no=genre.no where movie.name like '%".$text1."%' order by movie.no limit $start, $limit"; //start, limit약간 이상해보임
        return $this->db->query($sql)->result();              // 쿼리실행, 결과 리턴
    }
    public function rowcount($text1){
        if (!$text1)
            $sql="select * from movie order by no desc";
        else
            $sql="select * from movie where name like '%".$text1."%' order by no";
        return $this->db->query($sql)->num_rows();

    }
    function getrow($no){
        $sql = "select movie.*,genre.name as genre_name from movie left join genre on movie.genre_no=genre.no where movie.no=$no";
        return $this->db->query($sql)->row();
    }
    function deleterow($no)  {
        $sql="delete from movie where no=$no";
        return  $this->db->query($sql);
    }
    function insertrow($row){
        return $this->db->insert("movie", $row);
    }
    function updaterow($row, $no){
        $where=array("no"=>$no); 
        return $this->db->update("movie", $row, $where);
    }
	function getlist_genre()
    {
      $sql="select * from genre order by no";
      return $this->db->query($sql)->result();
    }
}
?>
