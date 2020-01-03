<?
class Event_m extends CI_Model{     // �� Ŭ���� ����
    public function getlist($text1,$start,$limit){//��ȭ
        if(!$text1)
            $sql="select * from event where kind = 0 order by name limit $start, $limit";     // select�� ����
        else
            $sql="select * from event where name like '%".$text1."%' and kind = 0 order by name limit $start, $limit"; //start, limit�ణ �̻��غ���
        return $this->db->query($sql)->result();              // ��������, ��� ����
    }

	 public function getlist1($text1,$start,$limit){//�û�ȸ
        if(!$text1)
            $sql="select * from event where kind = 1 order by name limit $start, $limit";     // select�� ����
        else
            $sql="select * from event where name like '%".$text1."%' and kind = 1 order by name limit $start, $limit"; //start, limit�ణ �̻��غ���
        return $this->db->query($sql)->result();              // ��������, ��� ����
    }

    public function rowcount($text1){
        if (!$text1)
            $sql="select * from event order by name";
        else
            $sql="select * from event where name like '%".$text1."%' order by name";
        return $this->db->query($sql)->num_rows();

    }
    function getrow($no){
        $sql = "select * from event where no=$no";
        return $this->db->query($sql)->row();
    }


    function deleterow($no)  {
        $sql="delete from event where no=$no";
        return  $this->db->query($sql);
    }
    function insertrow($row){
        return $this->db->insert("event", $row);
    }

    function updaterow($row, $no){
        $where=array("no"=>$no);
        return $this->db->update("event", $row, $where);
    }
}
?>
