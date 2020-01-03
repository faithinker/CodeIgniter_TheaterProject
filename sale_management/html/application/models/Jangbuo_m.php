<?
    class Jangbuo_m extends CI_Model{     // 모델 클래스 선언
        public function getlist($text1,$start,$limit){
            $sql="select jangbu.*, product.name8 as product_name8
                from jangbu left join product on jangbu.product_no8=product.no8 
                where jangbu.io8=1 and jangbu.writeday8 = '$text1' 
                order by jangbu.no8 limit $start, $limit";
            return $this->db->query($sql)->result();              // 쿼리실행, 결과 리턴
        }
        public function rowcount($text1){
            $sql="select * from jangbu where io8 = 1 and jangbu.writeday8='$text1'";
            return $this->db->query($sql)->num_rows();
        }
        function getlist_product(){
            $sql = "select * from product order by name8";
            return $this->db->query($sql)->result();
        }
        function getrow($no){
            $sql = "select jangbu.*, product.name8 as product_name8
                    from jangbu left join product on jangbu.product_no8 = product.no8 
                    where jangbu.no8= '$no'";
            return $this->db->query($sql)->row();
        }
        function deleterow($no)  {
            $sql="delete from jangbu where no8=$no";
            return  $this->db->query($sql);
        }
        function insertrow($row){
            return $this->db->insert("jangbu", $row);
        }
        function updaterow($row, $no){
            $where=array("no8"=>$no); //no8이 맞는가?
            return $this->db->update("jangbu", $row, $where);
        }
    }
?>
