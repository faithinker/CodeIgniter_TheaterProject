<?
class Adminjijum_m extends CI_Model{     // �� Ŭ���� ����
    public function getlist($text1,$start,$limit){
		if(!$text1)
            $sql="select jijum.*,city.name as city_name from jijum left join city on jijum.city_no=city.no order by jijum.no limit $start, $limit";     // select�� ����
        else
            $sql="select jijum.*,city.name as city_name from jijum left join city on jijum.city_no=city.no where jijum.name like '%".$text1."%' order by city.no limit $start, $limit"; //start, limit�ణ �̻��غ���
        return $this->db->query($sql)->result();              // ��������, ��� ����
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
