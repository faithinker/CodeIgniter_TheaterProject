<?
    class Crosstab_m extends CI_Model{     // 모델 클래스 선언
        public function getlist($text1,$start,$limit){
            $sql="select product.name8 as product_name8, 
                  sum( if( month(jangbu.writeday8)=1, jangbu.numo8, 0)) as s1,
                  sum( if( month(jangbu.writeday8)=2, jangbu.numo8, 0)) as s2,
                  sum( if( month(jangbu.writeday8)=3, jangbu.numo8, 0)) as s3,
                  sum( if( month(jangbu.writeday8)=4, jangbu.numo8, 0)) as s4,
                  sum( if( month(jangbu.writeday8)=5, jangbu.numo8, 0)) as s5,
                  sum( if( month(jangbu.writeday8)=6, jangbu.numo8, 0)) as s6,
                  sum( if( month(jangbu.writeday8)=7, jangbu.numo8, 0)) as s7,
                  sum( if( month(jangbu.writeday8)=8, jangbu.numo8, 0)) as s8,
                  sum( if( month(jangbu.writeday8)=9, jangbu.numo8, 0)) as s9,
                  sum( if( month(jangbu.writeday8)=10, jangbu.numo8, 0)) as s10,
                  sum( if( month(jangbu.writeday8)=11, jangbu.numo8, 0)) as s11,
                  sum( if( month(jangbu.writeday8)=12, jangbu.numo8, 0)) as s12
                from jangbu left join product on jangbu.product_no8=product.no8 
                where year(jangbu.writeday8) = '$text1' 
                GROUP BY jangbu.product_no8
                order by product_name8 limit $start, $limit";
                return $this->db->query($sql)->result();
        }
        public function rowcount($text1){
            $sql="select product_no8 from jangbu
                where year(jangbu.writeday8) = '$text1'
                GROUP BY product_no8";
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
