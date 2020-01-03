<?
	class AdminLogin_m extends CI_Model     // 모델 클래스 선언
	{
		public function getrow($id,$pwd){
			$sql="select * from admin where id='$id' and pwd='$pwd'";
			return $this->db->query($sql)->row();
		}
		function getlist($id) {
			$sql="select * from admin where id='$id'";
			return $this->db->query($sql)->num_rows();  
		}
		function insertrow($row){
			return $this->db->insert("admin", $row);
		}
	}
?>