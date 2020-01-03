<?
	class Cinema_m extends CI_Model {    // 모델 클래스 선언
    function city_list() { //today best choice 출력
      $sql="select * from city order by no asc";
			return $this->db->query($sql)->result();
    }
    function cinema_list() { //today best choice 출력
      $sql="SELECT *, city.no as cityNo, jijum.name as jijumName, city.name as cityName FROM `jijum` right join city on city.no = jijum.city_no;";
			return $this->db->query($sql)->result();
    }
    function cinema_list1() { //today best choice 출력
      $sql="SELECT *, city.no as cityNo, jijum.name as jijumName, city.name as cityName FROM `jijum` right join city on city.no = jijum.city_no where city_no=1;";
			return $this->db->query($sql)->result();
    }
    function cinema_list2() { //today best choice 출력
      $sql="SELECT *, city.no as cityNo, jijum.name as jijumName, city.name as cityName FROM `jijum` right join city on city.no = jijum.city_no where city_no=2;";
			return $this->db->query($sql)->result();
    }
    function cinema_list3() { //today best choice 출력
      $sql="SELECT *, city.no as cityNo, jijum.name as jijumName, city.name as cityName FROM `jijum` right join city on city.no = jijum.city_no where city_no=3;";
			return $this->db->query($sql)->result();
    }
    function cinema_list4() { //today best choice 출력
      $sql="SELECT *, city.no as cityNo, jijum.name as jijumName, city.name as cityName FROM `jijum` right join city on city.no = jijum.city_no where city_no=4;";
			return $this->db->query($sql)->result();
    }
    function cinema_list5() { //today best choice 출력
      $sql="SELECT *, city.no as cityNo, jijum.name as jijumName, city.name as cityName FROM `jijum` right join city on city.no = jijum.city_no where city_no=5;";
			return $this->db->query($sql)->result();
    }
    function cinema_list6() { //today best choice 출력
      $sql="SELECT *, city.no as cityNo, jijum.name as jijumName, city.name as cityName FROM `jijum` right join city on city.no = jijum.city_no where city_no=6;";
			return $this->db->query($sql)->result();
    }
    function cinema_list7() { //today best choice 출력
      $sql="SELECT *, city.no as cityNo, jijum.name as jijumName, city.name as cityName FROM `jijum` right join city on city.no = jijum.city_no where city_no=7;";
			return $this->db->query($sql)->result();
    }
		
	}
?>