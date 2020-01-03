<?
class Eventspeaker_m extends CI_Model{     // 모델 클래스 선언
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
    function getlist_gubun(){
        $sql = "select * from gubun order by name8";
        return $this->db->query($sql)->result();
    }
    function getrow($no){
        $sql = "select product.*, gubun.name8 as gubun_name8
                from product left join gubun on product.gubun_no8 = gubun.no8 
                where product.no8='$no'";
        return $this->db->query($sql)->row();
    }
    function deleterow($no)  {
        $sql="delete from product where no8=$no";
        return  $this->db->query($sql);
    }
    function insertrow($row){
        return $this->db->insert("product", $row);
    }
    function updaterow($row, $no){
        $where=array("no8"=>$no); 
        return $this->db->update("product", $row, $where);
    }
    function cal_jaego(){
        $sql = "drop table if exists temp;";  #temp테이블 있으면 삭제
        $this->db->query($sql);

        $sql = "CREATE TABLE temp (           #temp 테이블 생성
            no8 INT NOT NULL auto_increment,
            product_no8 INT,
            jaego8 INT default 0,
            PRIMARY KEY(no8)
            );";
        $this->db->query($sql);

        $sql = "UPDATE product SET jaego8 = 0;";            #재고 필드값 0으로 초기화
        $this->db->query($sql);

        $sql="INSERT INTO temp (product_no8, jaego8)         #재고 계산
              SELECT product_no8, SUM(numi8) - SUM(numo8) FROM jangbu
              GROUP BY product_no8;";
        $this->db->query($sql);   
        
        $sql = "UPDATE product INNER JOIN temp ON product.no8=temp.product_no8         #재고 값 프로덕트 테이블에 복사
                SET product.jaego8=temp.jaego8;";
        $this->db->query($sql);                       
    }
}
?>
