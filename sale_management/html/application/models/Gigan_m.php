<?
class Gigan_m extends CI_Model{     // 모델 클래스 선언
    public function getlist($text1,$text2,$text3,$start,$limit){
        if($text3 == "0"){
            $sql="select jangbu.*, product.name8 as product_name8
                from jangbu left join product on jangbu.product_no8=product.no8 
                where jangbu.writeday8 between '$text1' and '$text2' 
                order by jangbu.no8 limit $start, $limit";
        }
        else{
            $sql="select jangbu.*, product.name8 as product_name8
                from jangbu left join product on jangbu.product_no8=product.no8 
                where jangbu.writeday8 between '$text1' and '$text2' and jangbu.product_no8 ='$text3'
                order by jangbu.no8 limit $start, $limit";
        }
        return $this->db->query($sql)->result();
    }
    public function rowcount($text1,$text2,$text3){
        if ($text3 == "0")
            $sql="select * from jangbu where jangbu.writeday8 between '$text1' and '$text2'";
        else
            $sql="select * from jangbu where jangbu.writeday8 between '$text1' and '$text2' and product_no8=$text3"; 
        return $this->db->query($sql)->num_rows();
    }
    function getlist_product(){
        $sql = "select * from product order by name8";
        return $this->db->query($sql)->result();
    }
    public function getlist_all($text1,$text2,$text3 )
    {
        if ($text3=="0")    // 전체인 경우
            $sql="select jangbu.*, product.name8 as product_name8
                from jangbu left join product on jangbu.product_no8=product.no8 
                where jangbu.writeday8 between'$text1' and '$text2' 
                order by jangbu.no8";
        else
            $sql="select jangbu.*, product.name8 as product_name8 
                from jangbu left join product on jangbu.product_no8=product.no8 
                where jangbu.writeday8 between '$text1' and '$text2'  
                and jangbu.product_no8 = '$text3' 
                order by jangbu.no8";
            return $this->db->query($sql)->result();
    }    
    //text2가 안읽혀진다. 40번째 45번째줄, 로그아웃 과정도 안된다 체크 필요
}  
?>