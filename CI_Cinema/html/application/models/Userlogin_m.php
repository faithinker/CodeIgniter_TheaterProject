<?
	class Userlogin_m extends CI_Model     // 모델 클래스 선언
	{
		public function getrow($uid,$pwd){
			$sql="select * from member where uid='$uid' and pwd='$pwd'";
			return $this->db->query($sql)->row();
		}
		function getlist($uid) {
			$sql="select * from member where uid='$uid'";
			return $this->db->query($sql)->num_rows();  
		}
		function insertrow($row){
			return $this->db->insert("member", $row);
		}
	}
?>
