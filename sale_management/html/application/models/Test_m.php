<?
    class Test_m extends CI_Model{     // 모델 클래스 선언
        public function getlist($text1,$start,$limit){
            if(!$text1)
                $sql="select * from test order by coname8 limit $start, $limit";     // select문 정의
            else
                $sql="select * from test where coname8 like '%".$text1."%' order by coname8 limit $start, $limit"; //start, limit약간 이상해보임
            return $this->db->query($sql)->result();              // 쿼리실행, 결과 리턴
        }
        public function rowcount($text1){
            if (!$text1)
                $sql="select * from test order by coname8";
            else
                $sql="select * from test where coname8 like '%".$text1."%' order by coname8";
            return $this->db->query($sql)->num_rows();

        }
        function getrow($no){
            $sql = "select * from test where no8=$no";
            return $this->db->query($sql)->row();
        }
        function deleterow($no)  {
            $sql="delete from test where no8=$no";
            return  $this->db->query($sql);
        }
        function insertrow($row){
            return $this->db->insert("test", $row);
        }
        function updaterow($row, $no){
            $where=array("no8"=>$no); //no8이 맞는가?
            return $this->db->update("test", $row, $where);
        }
    }
?>
