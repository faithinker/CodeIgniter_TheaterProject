<?
  class Main_m extends CI_Model {    // 모델 클래스 선언
    
		function best_movie() { //today best choice 출력
      $sql="select * from movie where status = 1 order by star desc";
			return $this->db->query($sql)->result();
    }
    public function now_movie() { //now in the cinema  출력
			$sql="SELECT * FROM `movie` WHERE STATUS = 1 ORDER BY openday DESC LIMIT 8";
			return $this->db->query($sql)->result();
		}
	}
?>