<?
class Ajax_m extends CI_Model{     // 모델 클래스 선언
  public function getlist($text1,$start,$limit){
      if(!$text1)
          $sql="select * from gubun order by name8 limit $start, $limit";     // select문 정의
      else
          $sql="select * from gubun where name8 like '%".$text1."%' order by name8 limit $start, $limit"; //start, limit약간 이상해보임
      return $this->db->query($sql)->result();              // 쿼리실행, 결과 리턴
  }
  public function rowcount($text1){
      if (!$text1)
          $sql="select * from gubun order by name8";
      else
          $sql="select * from gubun where name8 like '%".$text1."%' order by name8";
      return $this->db->query($sql)->num_rows();

  }
  function getrow($no){
      $sql = "select * from gubun where no8=$no";
      return $this->db->query($sql)->row();
  }
  function deleterow($no)  {
      $sql="delete from gubun where no8=$no";
      return  $this->db->query($sql);
  }
  function insertrow($row){
      return $this->db->insert("gubun", $row);
  }
  function updaterow($row, $no){
      $where=array("no8"=>$no); //no8이 맞는가?
      return $this->db->update("gubun", $row, $where);
  }
}
?>
