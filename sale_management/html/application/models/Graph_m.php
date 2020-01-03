<?
    class Graph_m extends CI_Model{     // 모델 클래스 선언
        public function getlist($text1,$text2){
            $sql="select gubun.name8 as gubun_name8, count(jangbu.numo8) as sumnumo
                from (gubun right join product on gubun.no8=product.gubun_no8) 
                right join jangbu on product.no8=jangbu.product_no8
                where jangbu.io8=1 and jangbu.writeday8 between '$text1' and '$text2' 
                group by gubun.name8
                order by sumnumo desc limit 10";
                return $this->db->query($sql)->result();
        }
        public function rowcount($text1,$text2){
            $sql="select gubun.name8 as gubun_name8, count(jangbu.numo8) as sumnumo
                from (gubun right join product on gubun.no8=product.gubun_no8) 
                right join jangbu on product.no8=jangbu.product_no8
                where jangbu.io8=1 and jangbu.writeday8 between '$text1' and '$text2'
                order by sumnumo desc limit 10"; 
                return $this->db->query($sql)->num_rows();
        }
        function getlist_product(){
            $sql = "select * from gubun order by name8";
            return $this->db->query($sql)->result();
        }
        function getrow($no){
            $sql = "select jangbu.*, gubun.name8 as gubun_name8
                    from jangbu left join product on jangbu.product_no8 = product.no8 
                    where jangbu.no8= '$no'";
            return $this->db->query($sql)->row();
        }
    }
?>
