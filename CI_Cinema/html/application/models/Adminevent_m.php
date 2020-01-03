<?
class Adminevent_m extends CI_Model{     // �� Ŭ���� ����
    public function getlist($text1,$start,$limit){
        if(!$text1)
            $sql="select * from event order by name limit $start, $limit";     // select�� ����
        else
            $sql="select * from event where name like '%".$text1."%' order by name limit $start, $limit"; //start, limit�ణ �̻��غ���
        return $this->db->query($sql)->result();              // ��������, ��� ����
    }
    public function rowcount($text1){
        if (!$text1)
            $sql="select * from event order by name";
        else
            $sql="select * from event where name like '%".$text1."%' order by name";
        return $this->db->query($sql)->num_rows();

    }
    function get_mycinema($text1,$start,$limit){
        if(!$text1)
            $sql="select * from event where kind = 2 order by name limit $start, $limit";     
        else
            $sql="select * from event where name like '%".$text1."%' where kind = 2 order by name limit $start, $limit"; //start, limit�ణ �̻��غ���
        return $this->db->query($sql)->result();             
    }
    function get_premiere($text1,$start,$limit){
        if(!$text1)
            $sql="select * from event where kind = 1 order by name limit $start, $limit";     
        else
            $sql="select * from event where name like '%".$text1."%' where kind = 1 order by name limit $start, $limit"; //start, limit�ణ �̻��غ���
        return $this->db->query($sql)->result();             
    }
    function get_movie($text1,$start,$limit){
        if(!$text1)
            $sql="select * from event where kind = 0 order by name limit $start, $limit";     
        else
            $sql="select * from event where name like '%".$text1."%' where kind = 0 order by name limit $start, $limit"; //start, limit�ణ �̻��غ���
        return $this->db->query($sql)->result();             
    }

    function getrow($no){
        $sql = "select * from event where no=$no";
        return $this->db->query($sql)->row();
    }
    function getlist_jijum(){
        $sql = "select * from jijum order by city_no";
        return $this->db->query($sql)->row();
    }
    function deleterow($no)  {
        $sql="delete from event where no=$no";
        return  $this->db->query($sql);
    }
    function insertrow($row){
        return $this->db->insert("event", $row);
    }
    function insertrow_board($row){
        return $this->db->insert("board", $row);
    }
    function updaterow($row, $no){
        $where=array("no"=>$no);
        return $this->db->update("event", $row, $where);
    }
}
?>
