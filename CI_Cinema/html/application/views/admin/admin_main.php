            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-5"></div>
                            <div class="col-md-4">
                                <div class="overview-wrap">
                                    <h2 class="title-1">대시보드</h2>   
                                </div>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
<?
    $age_sum = "총 ". count($list). "명 ";
    
    $number_of_ages = array(0,0,0,0,0);
    $number_of_join_month = array(0,0,0,0);

	foreach ($list as $row){
		//$str_label .= "'$row->name',";
        //$str_data .= $row->sum_member . ',';
        
        $join_month = substr("$row->joindate",5,2);
        
        switch ($join_month) {
            case $join_month > 01 && $join_month < 04 : $number_of_join_month[0]+=1;
                break;
            case $join_month > 03 && $join_month < 07 : $number_of_join_month[1]+=1;
                break;
            case $join_month > 06 && $join_month < 10 : $number_of_join_month[2]+=1;
                break;
            case $join_month > 9 && $join_month < 13 : $number_of_join_month[3]+=1;
                break;
        }

        $age = substr("$row->birth",0,4);
        $year = date("Y");
        switch ($age) {
            case $age >= $year - 19 : $number_of_ages[0]+=1;
                break;
            case  $age <= $year - 19 && $age >= $year - 28: $number_of_ages[1]+=1;
                break;
            case  $age <= $year - 29 && $age >= $year - 38 : $number_of_ages[2]+=1;
                 break;
            case  $age <= $year - 39 && $age >= $year - 48 : $number_of_ages[3]+=1;
                break;
            case  $age <= $year - 49 && $age >= $year - 100 : $number_of_ages[4]+=1;
                break;                
        }
        
    }
    // echo('<div class="row">');
    // echo ('<div class="col-sm-6 col-lg-4">');
    // echo("회원별 가입시기 <br>");
    $month = array("1분기 : ", "2분기 : ", "3분기 : ", "4분기 : ",  "편 ", "명");
    for($i = 0; $i < count($number_of_join_month); $i++) {
        $number_of_join_months[$i] = $month[$i].$number_of_join_month[$i].$month[5]."<br>";
        $number_of_join_months[$i];
    }
    // echo('</div>');
    // echo ('<div class="col-sm-6 col-lg-4">');
    // echo("가입자별 연령대 <br>");
    $ages = array("청소년 : ", "20대 : ", "30대 : ", "40대 : ", "50대 이상 : ",  "명 ");
    for($i = 0; $i < count($number_of_ages); $i++) {
        $number_of_age[$i] = $ages[$i].$number_of_ages[$i].$ages[5]."<br>";
        $number_of_age[$i];
    }
    // echo('</div>');


$now_open_movie = 0;
$number_of_open_movie_month = array(0,0,0,0);
foreach ($list2 as $row) {
    $open_month = substr("$row->openday",5,2);
    $open_movie = $row->status; //현재 상영중인 영화개수
    if ($open_movie == 1){
        $now_open_movie +=1;
    }    
    switch ($open_month) {
        case $open_month > 01 && $open_month < 04 : $number_of_open_movie_month[0]+=1;
            break;
        case $open_month > 03 && $open_month < 07 : $number_of_open_movie_month[1]+=1;
            break;
        case $open_month > 06 && $open_month < 10 : $number_of_open_movie_month[2]+=1;
            break;
        case $open_month > 9 && $open_month < 13 : $number_of_open_movie_month[3]+=1;
            break;
        }
}
// echo ('<div class="col-sm-6 col-lg-4">');
$sum_open_movie = count($list2);
$sum_open_movies = "총 ".count($list2)."편 <br>";
$now_open_movies = "현재 총 ". $now_open_movie."편 상영 중 <br>";

//echo("분기별 상영한 영화 수 <br>");
for($i = 0; $i < count($number_of_open_movie_month); $i++) {
    $number_of_open_movie_months[$i] = $month[$i].$number_of_open_movie_month[$i].$month[4]."<br>";
    $number_of_open_movie_months[$i];
}
//echo("</div>");
//echo('</div>');
$rsvcount = array();
$movie_name = array();
$i = 0;

//영화 이름과 예약 수가 함꼐 나타나도록 표시해야함
foreach ($list3 as $row) {
    $rsvcount[$i] = $row->rsvcount;
    $movie_name[$i] = $row->name;
    $i++;
}

for($a = 0; $a < 3; $a++) {
     "$movie_name[$a] : $rsvcount[$a]회 <br>";
}


?>




                            
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                    <div class="row">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-10">
                                            <h3 class="title-3">분기별  가입시기 <?=$age_sum?> </h3><br>
                                        </div>
                                        <div class="col-md-1"></div>
                                    </div>
                                        <div id="linechart"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="au-card chart-percent-card">
                                    <div class="au-card-inner">
                                        <div class="row">
                                            <div class="col-xl-3"></div>
                                            <div class="col-xl-6">
                                                <h3 class="title-2 tm-b-5">가입자 연령대</h3> 
                                            </div>
                                            <div class="col-xl-3"> 
                                                <h3 class="title-5 tm-b-5"><?= $age_sum;?></h3><br>
                                            </div>
                                        </div>                               
                                        <div class="row no-gutters">           
                                            <div id="piechart"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card">
                                    <div class="row">
                                        <div class="col-xl-2"></div>
                                        <div class="col-xl-7">분기별 영화 개봉 수</div>
                                        <div class="col-xl-3"><?=$sum_open_movies?></div>
                                    </div>
                                    <div id="openmovie"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="au-card">
                                    <div class="row">
                                        <div class="col-xl-4"></div>
                                        <div class="col-xl-4">상위예매 영화</div>
                                        <div class="col-xl-4"></div>
                                    </div>
                                    <div id="barchart"></div>
                                </div>
                            </div>
                        </div>
<br>
<?
$genre_name = array();
$genre_num = array();
$genre_sum = "총 ".count($list5)."종류 <br>";
 //개봉, 미개봉 구분안하고 모든 영화포함 장르임
$i = 0;
foreach ($list5 as $row){
    
    $genre_name[$i] = $row->genre_name;
    $genre_num[$i] = $row ->genre_num;
    $i +=1 ;
    
}
?>

                        <div class="row">
                            <div class="col-lg-6">
                                <h2 class="title-1 m-b-25">도시당 지점 수</h2>
                                <div class="au-card au-card--bg-blue au-card-top-countries m-b-40">
                                    <div class="au-card-inner">
                                        <div class="table-responsive">
                                            <table class="table table-top-countries">
                                                <tbody>
                                                <?
                                                $branch_sum = 0;
                                                foreach ($list4 as $row){
                                                    $city_name = $row->city_name;
                                                    $branch_num = $row ->branch_num;
                                                    $branch_sum +=$branch_num;
                                                 ?>
                                                    <tr>
                                                        <td><?=$city_name?></td>
                                                        <td class="text-right"><?=$branch_num?>개 지점</td>
                                                    </tr>
                                                 <?
                                                  }
                                                 ?>
                                                    <tr>
                                                        <td>전국 지점 수</td>
                                                        <td class="text-right">총 <?=$branch_sum?>개 지점</td>
                                                    </tr>   
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                    <div class="row">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-10">
                                            <h3 class="title-3">장르별 영화 <?=$genre_sum;?></h3><br>
                                        </div>
                                        <div class="col-md-1"></div>
                                    </div>
                                    <div id="chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
    
<script> //https://codelib.tistory.com/6?category=790653

    const dataset = <?= json_encode($number_of_join_month)?>;
    //  var svg = d3.select("svg");

    //     svg.selectAll("bar")
    //     .data(dataset)
    //     .enter().append("rect")
    //         .attr("height", function(d, i) {return (d*5)})
    //         .attr("width", 40)
    //         .attr("x", function(d, i) {return (50 * i)})
    //         .attr("y", function(d, i) {return (250-d*5)});

    var member = <?= json_encode($number_of_join_month)?>;
    var month = ["1분기 : ", "2분기 : ", "3분기 : ", "4분기 : ",  "편 ", "명"];

    var chart = c3.generate({
        bindto: "#linechart",
        data: {
            columns: [
                ['data1', member[0], member[1], member[2], member[3]]
            ],
            names: {
                data1: '분기별 가입시기'
            }
        }
    });
    var pie = <?= json_encode($number_of_ages)?>;
    var age = <?= json_encode($ages)?>;
    var pieData = {
        청소년: pie[0],
        "20대": pie[1],
        "30대": pie[2],
        "40대": pie[3],
        "50대 이상": pie[4]
    };
    var chartDonut = c3.generate({
        bindto: "#piechart",
        data: {
            json: [pieData],
            keys: {
            value: Object.keys(pieData),
            },
            type: "donut",
        },
        donut: {
            title: "가입자 연령대",
        }
    });


    var movie_name = <?= json_encode($movie_name)?>;
    var rsvcount =  <?= json_encode($rsvcount)?>;

    var chart2 = c3.generate({
        bindto: "#barchart",
        data: {
            columns: [
                [movie_name[0], rsvcount[0]],
                [movie_name[1], rsvcount[1]],
                [movie_name[3], rsvcount[2]]
            ],
            type: 'bar'
        },
        bar: {
            width: {
                ratio: 0.5 // this makes bar width 50% of length between ticks
            }
        }
    });

    var now_open_movie = <?= json_encode($now_open_movie)?>;
    var sum_open_movie =  <?= json_encode($sum_open_movie)?>;
    var number_of_open_movie_month = <?= json_encode($number_of_open_movie_month)?>;
    var chart3 = c3.generate({
        bindto: "#openmovie",
        data: {
            columns: [
                ["1분기", number_of_open_movie_month[0]],
                ["2분기", number_of_open_movie_month[1]],
                ["3분기", number_of_open_movie_month[2]],
                ["4분기", number_of_open_movie_month[3]]
            ],
            type: 'bar'
        },
        bar: {
            width: {
                ratio: 0.5 // this makes bar width 50% of length between ticks
            }
        }
    });

    var genre_name = <?= json_encode($genre_name)?>;
    var genre_num = <?= json_encode($genre_num)?>;
    var chart4 = c3.generate({
        bindto: '#chart',
        data: {
            
            columns: [
                [genre_name[0], genre_num[0]],
                [genre_name[1], genre_num[1]],
                [genre_name[2], genre_num[2]],
                [genre_name[3], genre_num[3]],
                [genre_name[4], genre_num[4]],
                [genre_name[5], genre_num[5]],
                [genre_name[6], genre_num[6]],
                [genre_name[7], genre_num[7]],
                [genre_name[8], genre_num[8]],
                [genre_name[9], genre_num[9]],
                [genre_name[10], genre_num[10]],      
            ],
            type : 'pie',
            onclick: function (d, i) { console.log("onclick", d, i); },
            onmouseover: function (d, i) { console.log("onmouseover", d, i); },
            onmouseout: function (d, i) { console.log("onmouseout", d, i); }
        }
    });
</script>