<!DOCTYPE html>
<html lang="kr">
<?=$title = $row->program?>
<head>
<!-- naver techcon -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="Content-Script-Type" content="text/javascript"/>
<meta http-equiv="Content-Style-Type" content="text/css"/>
<title><?=$title?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta property="og:image" content="http://techcon.naver.com/img/og_image.png"/>
<meta property="og:title" content="<?=$title?>"/>
<meta property="og:type" content="article"/>
<meta property="og:article:author" content="김주협"/>
<meta property="og:site_name" content="네이버 테크 콘서트 ​NAVER TECH CONCERT: MOBILE ​2019"/>
<meta property="og:url" content="https://techcon.naver.com"/>
<meta property="og:description" content="'NAVER Tech Concert: MOBILE 모바일 어플리케이션을 개발하며 마주했던 고민과 깊은 인사이트를 공유하며 
대학생 여러분과 함께 성장하는 자리에 초대합니다."/>
<meta name="description" content="'NAVER TECH CONCERT: MOBILE 모바일 어플리케이션을 개발하며 마주했던 고민과 깊은 인사이트를 공유하며 
대학생 여러분과 함께 성장하는 자리에 초대합니다.">


<link rel="canonical" href="http://techcon.naver.com">
<link rel="icon" href="http://techcon.naver.com/img/favicon_16.png" sizes="16x16">
<link rel="icon" href="http://techcon.naver.com/img/favicon_32.png" sizes="32x32">
<link rel="icon" href="http://techcon.naver.com/img/favicon_192.png" sizes="192x192">
<link rel="apple-touch-icon-precomposed" href="http://techcon.naver.com/img/favicon_256.png">
<meta name="msapplication-TileImage" content="http://techcon.naver.com/img/favicon_256.png">



<!-- styles -->
<link rel="stylesheet" type="text/css" href="http://techcon.naver.com/XEIcon/xeicon.min.css">   <!-- IE Browser-->
<!-- <link rel="stylesheet" type="text/css" href="/~sale8/my/css/event.css"> -->
<link rel="stylesheet" type="text/css" href="http://techcon.naver.com/css/tech_concert.css">




<!--my -->
<!-- <link href="/~sale8/my/css/bootstrap.min.css" rel="stylesheet">
<link  href="/~sale8/my/css/bootstrap-datetimepicker.css" rel="stylesheet">
<link  href="/~sale8/my/css/fontawesome-all.min.css" rel="stylesheet"> -->
<!-- <link href="/~sale8/my/css/slick.css" rel="stylesheet"> -->
 <!--<link href="/~sale8/my/css/my.scss" rel="stylesheet">-->
<link href="/~sale8/my/css/my.css" rel="stylesheet">
<!-- <link rel="stylesheet" type="text/css" href="my/css/slick-my.css"> -->

<script src="/~sale8/my/js/jquery-3.3.1.min.js"></script>
<!-- <script src="/~sale8/my/js/popper.min.js"></script>
<script src="/~sale8/my/js/bootstrap.min.js"></script>
<script src="/~sale8/my/js/popper.min.js"></script> -->
<script src="/~sale8/my/js/moment-with-locales.min.js"></script>
<script src="/~sale8/my/js/bootstrap-datetimepicker.js"></script>
<!-- <script src="/~sale8/my/js/slick.min.js"></script> -->
<script src="/~sale8/my/js/my.js"></script>
</head>
<?php

$date1=$row->startday;
$startdate=substr($date1, 5, 2)."/".substr($date1, 8, 2);
$firsttime=substr($date1, 10, 6); //수정 필요
$firsttime1 = strtotime("+30 minutes"); //현재시간에 30분 더한것이라 문제있다.

$date2=$row->endday;
$enddate=substr($date2, 5, 2)."/".substr($date2, 8, 2);
$lasttime=substr($date2, 10, 6); //수정 필요

$time1 = $row->starttime;
$starttime=substr($time1, 0, -3);
$time2 =  $row->endtime;
$endtime=substr($time2, 0, -3);
?>
<body style="zoom: 1;">
    <!-- [D] IE9 브라우저에서 접속하는 경우 class="ie9" 추가 -->
    <div id="wrap">
        <!-- [D] 스크롤되어 PC/tablet 889px, mobile 533px(행사전)/655px(행사중,종료)  밑으로 내려갈 경우, class="fixed" 추가 -->
        <div id="header">
            <div class="inner">
                <h1 class="logo"><span class="blind">TECH CONCERT</span></h1>
                <button type="button" class="btn_menu"><i>메뉴 열기</i></button>
                <!-- [D] btn_menu 클릭시 class에 on 추가 -->
                <div class="menu_box">
                    <ul class="menu_list">
                        <li><a class="_btnGoto" href="#" data-dest=".program">PROGRAM</a></li>
                        <li><a class="_btnGoto" href="#" data-dest=".direction">DIRECTION</a></li>
                    </ul>
                    <button type="button" class="btn_close"><i>메뉴 닫기</i></button>
                    <a href="http://d2.naver.com/" target="_blank" class="lk_naver_d2"><span class="blind">NAVER D2</span></a>
                </div>
            </div>
        </div>
  
        <div id="container">
            <div id="content">
                <div class="main">
                    <div class="inner"> 
                        <p class="text_theme" style="margin-top: 80px; width:500px; height: 120px;"><?=$row->program?></p>
                        
                        <p class="text_theme"></p>
                        <p class="text_date"><?=$startdate." ~ ".$enddate;?></p><!-- enddate  -->
                        <p class="text_place"><?=$row->place?></p>
  
                        <!-- 참가 신청 -->
                        <div class="btn_box" style="">
                          <!-- [FE] data-link 에 링크를 입력해주세요. 실시간 질문은 입력을 하지 않으셔도 됩니다.-->
                          <!--<button type="button" class="btn" data-link="">프로그램 보기</button> -->
                          <button type="button" class="btn" data-link="https://www.google.com/intl/ko_kr/forms/about/">iOS 참가신청</button>
                        </div>
                        <!-- 참가 신청 마감  style="display:none" -->
                        <div class="btn_box"> 
                          <!-- [FE] data-link 에 링크를 입력해주세요. 실시간 질문은 입력을 하지 않으셔도 됩니다.-->
                          <!-- <button type="button" class="btn" data-link="http://works.do/FRICjr">참가 신청</button> -->
                          <button type="button" class="btn" data-link="#">참가 신청 마감</button>
                        </div>         
                    </div>
                </div>
                              <!-- iOS 프로그램 리스트 -->
                <div class="program">
                    <div class="inner">
                        <h2><span class="blind">PROGRAM</span></h2>
                        <h1><span class="title"><?=$startdate."&nbsp; &nbsp;". $row->program?></span></h1>
                        <br>
                        <ul class="program_list">
                            <li>
                                <div class="program_box">
                                    <div class="time_box">
                                        <strong class="blind">시간</strong>
                                        <span><?=$firsttime?></span> <span>~</span> <span><?=date("H:i", $firsttime1);?></span> <!--echo("date('H:i', $firsttimeend)"); -->
                                    </div>
                                    <div class="content_box">
                                        <strong class="blind">내용</strong>
                                        <p class="title">등록</p>
                                    </div>
                                </div>
                            </li>
<?
foreach ($list as $row) {                            // 연관배열 list를 row를 통해 출력한다.
?>
                            <li>
                                <a href="#" class="program_box" data-index="8">
                                    <div class="time_box">
                                        <strong class="blind">시간</strong>
                                        <span><?=$starttime?></span> <span>~</span> <span><?=$endtime?></span>
                                    </div>
                                    <div class="content_box">
                                        <strong class="blind">내용 및 발표자</strong>
                                        <p class="title"><?=$row->title?></p>
                                        <p class="speaker"><?=$row->name?><span class="bar"></span><?=$row->company?></p>
                                    </div>
                                </a>
                            </li>
<?
}
?>
                            <li>
                                <div class="program_box">
                                    <div class="time_box">
                                        <strong class="blind">시간</strong>
                                        <span><?=$lasttime?></span>
                                    </div>
                                    <div class="content_box">
                                        <strong class="blind">내용</strong>
                                        <p class="title">마무리</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>            
            </div>
        </div>
  
        <div id="footer">
            <div class="inner">
                <ul class="sns_share">
                    <!-- [FE] 링크를 완성해주세요 -->
                    <li><a href="https://github.com/faithinker" class="facebook" target="_blank"><i class="xi-facebook"></i></a></li>
                    <li><a href="mailto:rlawnguq12@naver.com" class="mail"><i class="xi-mail"></i></a></li>
                    <li><a href="https://blog.naver.com/rlawnguq12" class="d2" target="_blank"><i class="xi-d2"></i></a></li>
                </ul>
                <p class="copyright">© <a href="https://blog.naver.com/rlawnguq12" target="_blank">JooHyupkim</a></p>
                
            </div>
        </div>
    </div> 
    

<?
foreach ($list as $row) {                            // 연관배열 list를 row를 통해 출력한다.
?>
    <div class='ly_popup program_popup'>
      <div class='ly_box'>
        <div class='time'>
          <!-- [D] 1,4번째 num_type_blue, 2,5번째 num_type_green, 3,6번째 num_type_yellow -->
          <em class='num_type_green'><span class='blind'>강의순서</span>02</em>
          <span class='time'><span class='blind'>시간</span> <?=$starttime.' ~ '.$endtime?></span>
        </div>
        <div class='title_box'>
          <span class='blind'>강의주제</span>
          <h3><?=$row->title;?> </h3>
          <!-- <p class='sub_title'><span class='blind'>부제</span>: </p> -->
        </div>
        <dl class='content_list'>
          <dt>내용</dt>
          <dd>
            <p><?=$row->content;?> </p>
          </dd>
          <dt>목차</dt>
          <dd>
            <ol>
              <li><span> <?=$row->sequence;?> </span> </li>
              <li><span>4. TDD 도전</span> </li>
            </ol>
          </dd>
        </dl>
        <div class='speaker_information'>
          <div class='img_box'>
            <img src='https://avatars0.githubusercontent.com/u/39996770?s=460&amp;v=4' width='80' height='80' alt='발표자 썸네일'>
          </div>
          <div class='text_box'>
            <p class='speaker'>
              <strong><?=$row->title?> </strong>
              <span><?=$row->company?> </span>
            </p>
            <p class='speaker_text'> <?=$row->introduce?> </p>
          </div>
        </div>
        <button type='button' class='btn_ly_close'><i>프로그램 정보 닫기</i></button>
      </div>
    </div>
<?
}
?>

    <!--//프로그램 레이어 실시간 질문하기 레이어 (iOS) 
     [D] class에 on 추가하여 노출 -->
    <div class="ly_popup question_popup_ios">
      <div class="ly_box">
        <div class="title_box">
          <h3>실시간 질문하기</h3>
        </div>
        <ul class="program_list">
          <li>
            <div class="list_number">
              <em class="num_type_yellow"><span class="blind">강의순서</span>02</em>
            </div>
            <div class="content_box">
              <strong class="blind">내용 및 발표자</strong>
              <p class="title">들숨에 협업 날숨에 클린코드</p>
              <p class="speaker">박보영<span class="bar"></span>레이니스트</p>
            </div>
            <div class="btn_box">
              <!-- [FE] data-link 에 이동할 링크를 입력해주세요 -->
              <button type="button" class="btn" data-link="https://askers.io/channels/techcon1907_22/posts">질문하기</button>
            </div>
          </li>    
        </ul>
        <button type="button" class="btn_ly_close"><i>실시간 질문하기 닫기</i></button>
      </div>
    </div>
    
    <script type="text/javascript" src="http://techcon.naver.com/js/Controller.js"></script>
  

</body>
</html>
