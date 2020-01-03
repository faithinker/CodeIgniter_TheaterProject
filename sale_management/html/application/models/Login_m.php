<?
  class Login_m extends CI_Model{     // 모델 클래스 선언
    function getrow($uid,$pwd){
        $sql = "select * from member where uid8='$uid' and pwd8='$pwd'";
        return $this->db->query($sql)->row();
    }
  }
?>
