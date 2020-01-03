<?
class Adminmain_m extends CI_Model{     // 모델 클래스 선언
    function getlist_member(){ //총 멤버수와 나이별 정렬 => 가입자 연령대
        $sql = "select * from member order by birth";
        return $this->db->query($sql)->result();
    }
    function getlist_sum_member(){ //총 멤버수 => 가입자 연령대
        $sql = "select count(no) as sum_member from member order by birth";
        return $this->db->query($sql)->result();
    }
    function getlist_movie(){ //상영중인 영화 개수
        $sql = "select * from movie order by openday";//count(name) as sum 이거 하면 필드 1개빡에 못부름
        return $this->db->query($sql)->result();
    }
    function getlist_movie_rsvcount(){ //상영중인 영화 개수
        $sql = "select * from movie order by rsvcount desc";//count(name) as sum 이거 하면 필드 1개밖에 못부름
        return $this->db->query($sql)->result();
    }
    function getlist_city_num() {   //도시별 지점 수
        $sql = "select city_no, count(*) as branch_num, city.name as city_name from city inner join jijum on city.no = city_no group by city_no";
        return $this->db->query($sql)->result();
    }
    function getlist_genre_name() {
        $sql="select movie.genre_no, genre.no,genre.name as genre_name, count(*) as genre_num from movie inner join genre on movie.genre_no = genre.no group by genre.no;";
        return $this->db->query($sql)->result();
    }
}
?>