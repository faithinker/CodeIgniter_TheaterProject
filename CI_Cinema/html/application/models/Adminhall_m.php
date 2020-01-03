<?
class Adminhall_m extends CI_Model{     // 모델 클래스 선언
    public function getlist($text1,$start,$limit){
        if(!$text1)
            $sql="select hall.*,jijum.name as jijum_name from hall left join jijum on hall.jijum_no=jijum.no  order by hall.no desc limit $start, $limit";     // select문 정의
        else
            $sql="select * from hall where name like '%".$text1."%' order by no desc limit $start, $limit"; //start, limit약간 이상해보임
        return $this->db->query($sql)->result();              // 쿼리실행, 결과 리턴
    }
    public function rowcount($text1){
        if (!$text1)
            $sql="select * from hall order by name";
        else
            $sql="select * from hall where name like '%".$text1."%' order by name";
        return $this->db->query($sql)->num_rows();

    }
    function getrow($no){
        $sql = "select * from hall where no=$no";
        return $this->db->query($sql)->row();
    }
    function deleterow($no)  {
        $sql="delete from hall where no=$no";
        return  $this->db->query($sql);
    }
    function insertrow($row){
        return $this->db->insert("hall", $row);
    }
    function updaterow($row, $no){
        $where=array("no"=>$no); 
        return $this->db->update("hall", $row, $where);
    }
	function getlist_jijum()
    {
      $sql="select * from jijum order by no";
      return $this->db->query($sql)->result();
    }
}
?>
