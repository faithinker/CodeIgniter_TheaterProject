<?
class Member_m extends CI_Model{     // 모델 클래스 선언
    public function getlist($text1,$start,$limit){
        if(!$text1)
            $sql="select * from member order by name limit $start, $limit";     // select문 정의
        else
            $sql="select * from member where name like '%".$text1."%' order by name limit $start, $limit"; //start, limit약간 이상해보임
        return $this->db->query($sql)->result();              // 쿼리실행, 결과 리턴
    }

	public function getlist_movie($no){
        
       $sql="select buy.*,city.name as city_name,jijum.name as jijum_name,movie.name as movie_name from buy left join city on buy.city_no=city.no left join jijum on buy.jijum_no=jijum.no left join movie on buy.movie_no=movie.no where member_no=$no order by no";     // select문 정의
       
        return $this->db->query($sql)->result();              // 쿼리실행, 결과 리턴
    }
    public function rowcount($text1){
        if (!$text1)
            $sql="select * from member order by name";
        else
            $sql="select * from member where name like '%".$text1."%' order by name";
        return $this->db->query($sql)->num_rows();

    }
    function getrow($no){
        $sql = "select * from member where no=$no";
        return $this->db->query($sql)->row();
    }
    function deleterow($no)  {
        $sql="delete from member where no=$no";
        return  $this->db->query($sql);
    }
    function insertrow($row){
        return $this->db->insert("member", $row);
    }
    function updaterow($row, $no){
        $where=array("no"=>$no);
        return $this->db->update("member", $row, $where);
    }
}
?>
