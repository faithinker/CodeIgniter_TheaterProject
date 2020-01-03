<?
	class Board_m extends CI_Model     // 모델 클래스 선언
	{
		public function getlist($text1,$start,$limit){
        if(!$text1)
            $sql="select board.*,jijum.name as jijum_name from board left join jijum on board.jijum_no=jijum.no order by board.no desc limit $start, $limit";     // select문 정의
        else
            $sql="select board.*,jijum.name as jijum_name from board left join jijum on board.jijum_no=jijum.no order by board.no desc limit $start, $limit"; //start, limit약간 이상해보임
        return $this->db->query($sql)->result();              // 쿼리실행, 결과 리턴
    }
    public function rowcount($text1){
        if (!$text1)
            $sql="select * from board order by title";
        else
            $sql="select * from board where title like '%".$text1."%' order by title";
        return $this->db->query($sql)->num_rows();

    }
    function getlist_jijum(){
        $sql="select *, city.name as city_name, jijum.name as jijum_name from city right join jijum on city.no = jijum.city_no order by city.no";
        return $this->db->query($sql)->result(); 
        //return $this->db->query($sql)->row();
    }
    function getlist_city(){
        $sql="select * from city order by no";
        return $this->db->query($sql)->result();
    }    
    function getrow($no){
        $sql = "select board.*,jijum.name as jijum_name from board left join jijum on board.jijum_no=jijum.no where board.no=$no";
        return $this->db->query($sql)->row();
    }
    function deleterow($no)  {
        $sql="delete from board where no=$no";
        return  $this->db->query($sql);
    }
    function insertrow($row){
        return $this->db->insert("board", $row);
    }
    function updaterow($row, $no){
        $where=array("no"=>$no); 
        return $this->db->update("board", $row, $where);
    }
	 function hitup($no){
        $sql = "update board set hit = hit + 1 where no =$no";
       return  $this->db->query($sql);
    }
}
?>
