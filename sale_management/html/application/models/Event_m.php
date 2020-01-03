<?
class Event_m extends CI_Model{     // 모델 클래스 선언
    public function getlist($text1,$start,$limit){
        if(!$text1)
            $sql="select *, event.no as eventno from event";
                 // select문 정의

            // select event.*, speaker.*, event.no as eventno from event left join speaker 
            // on event.no = speaker.programno order by speaker.no limit $start, $limit
        else
            $sql="select * from event where program like '%".$text1."%' order by program limit $start, $limit";
        return $this->db->query($sql)->result();              // 쿼리실행, 결과 리턴
    }
    public function rowcount($text1){
        if (!$text1)
            $sql="select * from event order by no";
        else
            $sql="select * from event where program like '%".$text1."%' order by program";
        return $this->db->query($sql)->num_rows();

    }
    function getrow($no){
        $sql = "select  event.*, speaker.* from event, speaker"; 
               
       // left join speaker 
       // on event.no = speaker.programno where speaker.programno=$no

        return $this->db->query($sql)->row();
    }
    function getlist_speaker(){
        $sql = "select *, event.no as eventno from event, speaker WHERE event.no = speaker.programno";
        return $this->db->query($sql)->result();
    }
    
    function getlist_event(){
        $sql = "select * from event order by no";
        return $this->db->query($sql)->result();
    }
    function getlist_time(){
        $sql = "select * from time order by no";
        return $this->db->query($sql)->result();
    }
    function deleterow($no)  {
        $sql="delete from event where no=$no";
        return  $this->db->query($sql);
    }
    function insertrow($row){
        return $this->db->insert("event", $row);
    }
    function insertrow2($row){
        return $this->db->insert("speaker", $row);
    }
    function updaterow($row, $no){
        $where=array("no"=>$no); 
        return $this->db->update("event", $row, $where);
    }
}
?>
