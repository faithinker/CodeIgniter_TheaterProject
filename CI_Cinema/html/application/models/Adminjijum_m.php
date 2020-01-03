<?
class Adminjijum_m extends CI_Model{     // 모델 클래스 선언
    public function getlist($text1,$start,$limit){
		if(!$text1)
            $sql="select jijum.*,city.name as city_name from jijum left join city on jijum.city_no=city.no order by jijum.no limit $start, $limit";     // select문 정의
        else
            $sql="select jijum.*,city.name as city_name from jijum left join city on jijum.city_no=city.no where jijum.name like '%".$text1."%' order by city.no limit $start, $limit"; //start, limit약간 이상해보임
        return $this->db->query($sql)->result();              // 쿼리실행, 결과 리턴
    }
    public function rowcount($text1){
        if (!$text1)
            $sql="select * from jijum order by name";
        else
            $sql="select * from jijum where name like '%".$text1."%' order by name";
        return $this->db->query($sql)->num_rows();

    }
    function getrow($no){
        $sql = "select jijum.*,city.name as city_name,city.no as cityno from jijum left join city on jijum.city_no=city.no where jijum.no=$no";
        return $this->db->query($sql)->row();
    }
    function deleterow($no)  {
        $sql="delete from jijum where no=$no";
        return  $this->db->query($sql);
    }
    function insertrow($row){
        return $this->db->insert("jijum", $row);
    }
    function updaterow($row, $no){
        $where=array("no"=>$no); 
        return $this->db->update("jijum", $row, $where);
    }

	function getlist_city()
    {
      $sql="select * from city order by no";
      return $this->db->query($sql)->result();
    }
}
?>
