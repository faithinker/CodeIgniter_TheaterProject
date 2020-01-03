<?
class Admintimetable_m extends CI_Model{     // 모델 클래스 선언
    public function getlist($text1,$start,$limit){
        if(!$text1)
            $sql="select enroll.*,movie.name as movie_name,jijum.name as jijum_name,city.name as city_name,hall.name as hall_name from enroll left join movie on enroll.movie_no=movie.no left join jijum on enroll.jijum_no=jijum.no left join city on enroll.city_no=city.no left join hall on enroll.hall_no=hall.no order by enroll.no limit $start, $limit";     // select문 정의
        else
            $sql="select enroll.*,movie.name as movie_name,jijum.name as jijum_name,city.name as city_name,hall.name as hall_name from enroll left join movie on enroll.movie_no=movie.no left join jijum on enroll.jijum_no=jijum.no left join city on enroll.city_no=city.no left join hall on enroll.hall_no=hall.no where enroll.movie_name like '%".$text1."%' order by enroll.no limit $start, $limit"; //start, limit약간 이상해보임
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
        $sql = "select enroll.*,genre.name as genre_name from enroll left join genre on enroll.genre_no=genre.no where enroll.no=$no";
        return $this->db->query($sql)->row();
    }
    function deleterow($no)  {
        $sql="delete from enroll where no=$no";
        return  $this->db->query($sql);
    }
    function insertrow($row){
        return $this->db->insert("enroll", $row);
    }
    function updaterow($row, $no){
        $where=array("no"=>$no); 
        return $this->db->update("enroll", $row, $where);
    }

    function getjijum($option_value){
    $sql = "select * from jijum where city_no=$option_value order by no ";
    return $this->db->query($sql)->result();
    }

	function gethall($option_value){
    $sql = "select * from hall where jijum_no=$option_value order by no ";
    return $this->db->query($sql)->result();
    }

function getlist_movie()
    {
      $sql="select * from movie order by no";
      return $this->db->query($sql)->result();
    }

	function getlist_enroll()
    {
      $sql="select * from enroll order by no";
      return $this->db->query($sql)->result();
    }
function getlist_city()
    {
      $sql="select * from city order by no";
      return $this->db->query($sql)->result();
    }
function getlist_jijum()
    {
      $sql="select * from jijum order by no";
      return $this->db->query($sql)->result();
    }
function getlist_hall()
    {
      $sql="select * from jijum order by no";
      return $this->db->query($sql)->result();
    }

}
?>
