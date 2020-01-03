<?
    class Best_m extends CI_Model{     // 모델 클래스 선언
        public function getlist($text1,$text2,$start,$limit){
            $sql="select product.name8 as product_name8, count(jangbu.numo8) as sumnumo
                from jangbu left join product on jangbu.product_no8=product.no8 
                where io8=1 and jangbu.writeday8 between '$text1' and '$text2' 
                GROUP BY jangbu.product_no8
                order by sumnumo limit $start, $limit";
                return $this->db->query($sql)->result();
        }
        public function rowcount($text1,$text2){
            $sql="select product.name8 as product_name8, count(jangbu.numo8) as sumnumo
                from jangbu left join product on jangbu.product_no8=product.no8
                where io8=1 and jangbu.writeday8 between '$text1' and '$text2'";
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
    }
?>
