<?
class Admincity_m extends CI_Model{     // �� Ŭ���� ����
    public function getlist($text1,$start,$limit){
        if(!$text1)
            $sql="select * from city order by no desc limit $start, $limit";     // select�� ����
        else
            $sql="select * from city where name like '%".$text1."%' order by no desc limit $start, $limit"; //start, limit�ణ �̻��غ���
        return $this->db->query($sql)->result();              // ��������, ��� ����
    }
    public function rowcount($text1){
        if (!$text1)
            $sql="select * from city order by name";
        else
            $sql="select * from city where name like '%".$text1."%' order by name";
        return $this->db->query($sql)->num_rows();
    }
    function getrow($no){
        $sql = "select * from city where no=$no";
        return $this->db->query($sql)->row();
    }
    function deleterow($no)  {
        $sql="delete from city where no=$no";
        return  $this->db->query($sql);
    }
    function insertrow($row){
        return $this->db->insert("city", $row);
    }
    function updaterow($row, $no){
        $where=array("no"=>$no); 
        return $this->db->update("city", $row, $where);
    }
}
?>
