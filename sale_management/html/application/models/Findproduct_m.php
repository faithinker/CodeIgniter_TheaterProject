<?
    class Findproduct_m extends CI_Model{     // 모델 클래스 선언
        public function getlist($text1,$start,$limit){
            if(!$text1)                                   //검색어 없을 시
                $sql="select product.*, gubun.name8 as gubun_name8
                from product left join gubun on product.gubun_no8=gubun.no8
                order by name8 limit $start, $limit";     // select문 정의
            else
                $sql="select product.*, gubun.name8 as gubun_name8
                from product left join gubun on product.gubun_no8=gubun.no8  
                where product.name8 like '%".$text1."%' 
                order by product.name8 limit $start, $limit"; 
            return $this->db->query($sql)->result();              // 쿼리실행, 결과 리턴
        }
        public function rowcount($text1){
            if (!$text1)
                $sql="select * from product order by name8";
            else
                $sql="select * from product where name8 like '%".$text1."%' order by name8";
            return $this->db->query($sql)->num_rows();

        }
        function getrow($no){
            $sql = "select product.*, gubun.name8 as gubun_name8
                    from product left join gubun on product.gubun_no8 = gubun.no8 
                    where product.no8='$no'";
            return $this->db->query($sql)->row();
        }
    }
?>
