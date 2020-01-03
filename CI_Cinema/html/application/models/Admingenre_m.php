<?
class Admingenre_m extends CI_Model{     // 모델 클래스 선언
    public function getlist($text1,$start,$limit){
        if(!$text1)
            $sql="select * from genre order by no desc limit $start, $limit";     // select문 정의
        else
            $sql="select * from genre where name like '%".$text1."%' order by no desc limit $start, $limit"; //start, limit약간 이상해보임
        return $this->db->query($sql)->result();              // 쿼리실행, 결과 리턴
    }
    public function rowcount($text1){
        if (!$text1)
            $sql="select * from genre order by name";
        else
            $sql="select * from genre where name like '%".$text1."%' order by name";
        return $this->db->query($sql)->num_rows();

    }
    function getrow($no){
        $sql = "select * from genre where no=$no";
        return $this->db->query($sql)->row();
    }
    function deleterow($no)  {
        $sql="delete from genre where no=$no";
        return  $this->db->query($sql);
    }
    function insertrow($row){
        return $this->db->insert("genre", $row);
    }
    function updaterow($row, $no){
        $where=array("no"=>$no); 
        return $this->db->update("genre", $row, $where);
    }
}
?>
