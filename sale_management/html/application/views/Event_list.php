<link href="https://event-us.kr/bundles/styles?v=xgnjruplqMnXasF1M5TU7EktsovXRlUfFMQGNycmbo41" type="text/css" rel="stylesheet" media="screen,projection">
<link href="https://event-us.kr/Content/css/eventcard.min.css" rel="stylesheet">
<link href="https://event-us.kr/Content/css/mainpage.min.css" rel="stylesheet">
<style type="text/css" private="true">
  * {
    box-sizing: border-box;
  }
  *:focus {
    outline: none;
  }
  #main {
    opacity: 1;
  }
  body {
    margin: 0;
    overflow: hidden;
    font-family: "Avenir", "Noto Sans Japanese", "Hiragino Kaku Gothic ProN", "YuGothic", "Yu Gothic", "メイリオ", "Apple SD Gothic Neo", "Nanum Barun Gothic", "Helvetica", "Arial", "Malgun Gothic", "맑은 고딕", "돋움", "Dotum", "sans-serif";
  }
  input, textarea {
    font-family: "Avenir", "Noto Sans Japanese", "Hiragino Kaku Gothic ProN", "YuGothic", "Yu Gothic", "メイリオ", "Apple SD Gothic Neo", "Nanum Barun Gothic", "Helvetica", "Arial", "Malgun Gothic", "맑은 고딕", "돋움", "Dotum", "sans-serif";
  }
</style>

<div class="container main-container p-top-bottom-50">
    <div class="row">
<?php
$tmp = $text1 ? "/text1/$text1/page/$page" : "/page/$page"; 

foreach ($list as $row){
    $no= $row->eventno;
    $pic=$row->poster ? $row->poster : "basic.png";
    $date=$row->startday;
    $date=substr($date, 5, 5);
?>
        <div class='col l4 m4 s6 p-col'>
            <a href='/~sale8/event/view/no/<?=$no?><?=$tmp?>'> 
                <div class='p-card'>
                    <div class='p-card-img'>             
                        <span>
                            <img src='/~sale8/program_img/thumb/<?=$pic?>' class='grow' alt='오류'>
                        </span>
                    </div>
                    <div class='p-card-content' style='font-size:16px;'>
                        <p class='truncate-line2 black-text p-title'><?=$row->program?></p>
                        <div class='p-category-venue'>
                            <span>
                                <i class='far fa-calendar-alt eventus-gray-text'></i>
                                <span class='eventus-gray-text'><?=$date?></span>
                            </span>
                            <span class='right'>
                                <i class='fas fa-map-marker-alt eventus-purple-text'></i>
                                <span class='eventus-purple-text'><?=$row->place?></span>
                            </span>
                        </div>
                    </div>
                    <div class='p-card-footer'>
                        <div class='card-divider'></div>
                        <span class='p-cost'>무료</span> 
                        <div class='p-action'>
                            <span class='p-action-visibility'>
                                <i class='fas fa-eye eventus-gray-text'></i>
                                <span class='eventus-gray-text'>517</span>
                            </span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
<?
}
?>  
    </div>
</div>