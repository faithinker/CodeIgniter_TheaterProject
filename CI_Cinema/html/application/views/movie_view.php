<!doctype html>
<html> 
<head>
	<!-- Basic Page Needs -->
        <meta charset="utf-8">
        <title>AMovie - Movie page</title>
        <meta name="description" content="A Template by Gozha.net">
        <meta name="keywords" content="HTML, CSS, JavaScript">
        <meta name="author" content="Gozha.net">
    
    <!-- Mobile Specific Metas-->
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="telephone=no" name="format-detection">
    
    <!-- Fonts --><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/~team2/js/external/jquery-3.1.1.min.js"><\/script>')</script>
        <!-- Font awesome - icon font -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <!-- Roboto -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    
    <!-- Stylesheets -->
        <!-- jQuery UI --> 
        <link href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="stylesheet">
		<link rel="icon" href="/~team2/images/icon.png" sizes="16x16"/>

        <!-- Mobile menu -->
        <link href="/~team2/css/gozha-nav.css" rel="stylesheet" />
        <!-- Select -->
        <link href="/~team2/css/external/jquery.selectbox.css" rel="stylesheet" /> 
        <!-- Swiper slider -->
        <link href="/~team2/css/external/idangerous.swiper.css" rel="stylesheet" />
        <!-- Magnific-popup -->
        <link href="/~team2/css/external/magnific-popup.css" rel="stylesheet" />

    
        <!-- Custom -->
        <link href="/~team2/css/style.css?v=1" rel="stylesheet" />

        <!-- Modernizr --> 
        <script src="/~team2/js/external/modernizr.custom.js"></script>
    
    <style>
◆CSS
/* .flickSlider
--------------------------- */
.flickSlider {
	margin:0 auto;

    text-align: left;
    display: none;
}
 
/* .flickView
--------------------------- */
.flickSlider .flickView {
    width: 100%;
    text-align: left;
    position: relative;
    overflow: hidden;
	display: inline-block;
}
.flickSlider .flickView ul {
    top: 0;
    left: 0;
    width: 100%;
    position: absolute;
    overflow: hidden;
}
.flickSlider .flickView ul li {
    width: 100%;
    float: left;
    display: inline;
    overflow: hidden;
}
.flickSlider .flickView ul li img {
    width: 100%;
}
 
/* .flickThumb
--------------------------- */
.flickSlider .flickThumb {
    width: 100%;
    overflow: hidden;
}
.flickSlider .flickThumb ul {
    width: 110%;
}
.flickSlider .flickThumb ul li {
    float: left;
    cursor: pointer;
    display: inline;
}
.flickSlider .flickThumb ul li img {
    width: 100%;
}
.flickSlider .flickThumb ul li.active {
    filter:alpha(opacity=100)!important;
    -moz-opacity: 1!important;
    opacity: 1!important;
}
 
/* sideNavi
------------------------- */
.flickSlider .btnPrev,
.flickSlider .btnNext {
    top: 0;
    width: 5%;
    height: 100%;
    position: absolute;
    cursor: pointer;
}
.flickSlider .btnPrev {
    left: 0;
    background: #ccc url(/~team2/movie_img/btnPrev.png) no-repeat center center;
}
 
.flickSlider .btnNext {
    right: 0;
    background: #ccc url(/~team2/movie_img/btnNext.png) no-repeat center center;
}
 
 
/* =======================================
    ClearFixElements
======================================= */
.flickSlider .flickView ul:after,
.flickSlider .flickThumb ul:after {
    content: ".";
    height: 0;
    clear: both;
    display: block;
    visibility: hidden;
}
 
.flickSlider .flickView ul,
.flickSlider .flickThumb ul {
    display: inline-block;
    overflow: hidden;
}
</style>



<script>
$(function(){
    $(window).on('load',function(){
        var setWrap = $('.flickSlider'),
        setMainView = $('.flickView'),
        setThumbNail = $('.flickThumb'),
        setMaxWidth = 850,
        setMinWidth = 320,
        thumbNum = 6,
        thumbOpc = 0.5,
        scrollSpeed  = 500,
        delayTime = 5000,
        easing = 'linear',
        sideNavi = 'on', // 'on' or 'off'
        autoPlay = 'on'; // 'on' or 'off'
 
        var agent = navigator.userAgent;
        setWrap.each(function(){
            var thisObj = $(this),
            childMain = thisObj.find(setMainView),mainUl = childMain.find('ul'),mainLi = mainUl.find('li'),mainLiLink = mainLi.children('a'),mainLiImg = mainLi.find('img'),
            childThumb = thisObj.find(setThumbNail),thumbUl = childThumb.find('ul'),thumbLi = childThumb.find('li'),thumbLiFst = childThumb.find('li:first'),thumbLiLst = childThumb.find('li:last'),
            mainWidth = parseInt(childMain.css('width')),mainHeight = parseInt(childMain.css('height')),listCount = mainUl.children('li').length;
 
            thisObj.css({display:'block'});
 
            // レスポンシブ動作メイン
            imgSize();
            function imgSize(){
                var windowWidth = parseInt($(window).width()),
                setUlLeft = parseInt(mainUl.css('left')),
                setlistWidth = parseInt(mainLi.css('width')),
                setLeft = setUlLeft / setlistWidth;
 
                if(windowWidth >= setMaxWidth) {
                    thisObj.css({width:setMaxWidth});
                    childMain.css({width:setMaxWidth});
                    mainUl.css({width:((setMaxWidth)*(listCount))});
                    mainLi.css({width:setMaxWidth});
 
                    var listWidthA = parseInt(mainLi.css('width')),
                    leftMax = -((listWidthA)*((listCount)-1)),
                    baseHeight = mainLiImg.height();
                    childMain.css({height:baseHeight});
                    mainUl.css({height:baseHeight});
                    mainLi.css({height:baseHeight});
 
                    thumbUl.css({width:setMaxWidth});
                    thumbLi.css({width:((setMaxWidth)/(thumbNum)),height:''});
                } else if(windowWidth < setMaxWidth) {
                    var listWidthB = parseInt(childMain.css('width')),
                    leftMax = -((listWidthB)*((listCount)-1));
                    thisObj.css({width:setMaxWidth});
                    if(windowWidth >= setMinWidth) {
                        thisObj.css({width:'100%'});
                        childMain.css({width:'100%'});
                        mainUl.css({width:((listWidthB)*(listCount))});
                        mainLi.css({width:(listWidthB)});
                    } else if(windowWidth < setMinWidth) {
                        thisObj.css({width:setMinWidth});
                        childMain.css({width:setMinWidth});
                        mainUl.css({width:((setMinWidth)*(listCount))});
                        mainLi.css({width:setMinWidth});
                    }
                    var reHeight = mainLiImg.height();
                    childMain.css({height:reHeight});
                    mainUl.css({height:reHeight});
                    mainLi.css({height:reHeight});
 
                    var reWidth = setThumbNail.width();
                    thumbUl.css({width:reWidth});
                    thumbLi.css({width:((reWidth)/(thumbNum))});
                }
 
                var adjLeftWidth = parseInt(mainLi.css('width')),
                adjLeft = adjLeftWidth * setLeft;
                mainUl.css({left:(adjLeft)});
            }
            imgSize();
            $(window).resize(function(){
                if(!(agent.search(/iPhone/) != -1 || agent.search(/iPad/) != -1 || agent.search(/iPod/) != -1 || agent.search(/Android/) != -1)){
                    if(autoPlay == 'on'){clearInterval(setTimer);}
                    imgSize();
                    if(autoPlay == 'on'){slideTimer();}
                } else {
                    imgSize();
                }
            });
 
            // フリックアクション
            var isTouch = ('ontouchstart' in window);
            mainUl.on(
                {'touchstart mousedown': function(e){
                    if(mainUl.is(':animated')){
                        e.preventDefault();
                    } else {
                        if(autoPlay == 'on'){clearInterval(setTimer);}
                        if(!(agent.search(/iPhone/) != -1 || agent.search(/iPad/) != -1 || agent.search(/iPod/) != -1 || agent.search(/Android/) != -1)){
                            e.preventDefault();
                        }
                        this.pageX = (isTouch ? event.changedTouches[0].pageX : e.pageX);
                        this.leftBegin = parseInt($(this).css('left'));
                        this.left = parseInt($(this).css('left'));
                        this.touched = true;
                    }
                },'touchmove mousemove': function(e){
                    if(!this.touched){return;}
                    e.preventDefault();
                    this.left = this.left - (this.pageX - (isTouch ? event.changedTouches[0].pageX : e.pageX) );
                    this.pageX = (isTouch ? event.changedTouches[0].pageX : e.pageX);
                    $(this).css({left:this.left});
                },'touchend mouseup mouseout': function(e){
                    if (!this.touched) {return;}
                    this.touched = false;
 
                    var setThumbLiActive = thumbUl.children('li.active'),
                    listWidth = parseInt(mainLi.css('width')),leftMax = -((listWidth)*((listCount)-1));
 
                    if(((this.leftBegin)-30) > this.left && (!((this.leftBegin) === (leftMax)))){
                        $(this).stop().animate({left:((this.leftBegin)-(listWidth))},scrollSpeed,easing);
                        setThumbLiActive.each(function(){
                            $(this).removeClass('active');
                            $(this).next().addClass('active');
                        });
                    } else if(((this.leftBegin)+30) < this.left && (!((this.leftBegin) === 0))){
                        $(this).stop().animate({left:((this.leftBegin)+(listWidth))},scrollSpeed,easing);
                        setThumbLiActive.each(function(){
                            $(this).removeClass('active');
                            $(this).prev().addClass('active');
                        });
                    } else if(this.leftBegin === 0) {
                        $(this).stop().animate({left:'0'},scrollSpeed,easing);
                    } else if(this.leftBegin <= leftMax) {
                        $(this).stop().animate({left:(leftMax)},scrollSpeed,easing);
                    } else if(this.left >= 0) {
                        $(this).stop().animate({left:'0'},scrollSpeed);
                    } else if(this.left <= leftMax) {
                        $(this).stop().animate({left:(leftMax)},scrollSpeed,easing);
                    } else {
                        $(this).stop().animate({left:(this.leftBegin)},scrollSpeed,easing);
                    }
                    compBeginLeft = this.leftBegin;
                    compThisLeft = this.left;
                    mainLiLink.click(function(e){
                        if(!(compBeginLeft === compThisLeft)){
                            e.preventDefault();
                        }
                    });
                    if(autoPlay == 'on'){slideTimer();}
                }
            });
 
            // ボタン移動動作
            thumbLi.click(function(){
                if(autoPlay == 'on'){clearInterval(setTimer);}
                var listWidth = parseInt(mainLi.css('width')),leftMax = -((listWidth)*((listCount)-1)),
                connectCont = thumbLi.index(this);
                mainUl.stop().animate({left:(-(listWidth)*(connectCont))},scrollSpeed,easing);
                thumbLi.removeClass('active');
                $(this).addClass('active');
                if(autoPlay == 'on'){slideTimer();}
            });
            thumbLiFst.addClass('active');
            thumbLi.css({opacity:thumbOpc});
 
            // サイドナビボタン（有り無し）
            if(sideNavi == 'on'){
                childMain.append('<div class="btnPrev"></div><div class="btnNext"></div>');
                var setPrev = childMain.find('.btnPrev'),setNext = childMain.find('.btnNext'),setPrevNext = childMain.find('.btnPrev,.btnNext');
                setPrevNext.css({opacity:thumbOpc});
 
                setNext.click(function(){
                    var setThumbLiActive = thumbUl.children('li.active');
                    setThumbLiActive.each(function(){
                        var listLengh = thumbLi.length;
                        var listIndex = thumbLi.index(this);
                        var listCount = listIndex+1;
                        if(listLengh == listCount){
                            thumbLiFst.click();
                        } else {
                            $(this).next('li').click();
                        }
                    });
                });
                setPrev.click(function(){
                    var setThumbLiActive = thumbUl.children('li.active');
                    setThumbLiActive.each(function(){
                        var listLengh = thumbLi.length;
                        var listIndex = thumbLi.index(this);
                        var listCount = listIndex+1;
                        if(1 == listCount){
                            thumbLiLst.click();
                        } else {
                            $(this).prev('li').click();
                        }
                    });
                });
            }
 
            // サムネイルマウスオーバー
            if(!(agent.search(/iPhone/) != -1 || agent.search(/iPad/) != -1 || agent.search(/iPod/) != -1 || agent.search(/Android/) != -1)){
                thumbLi.hover(function(){
                    $(this).stop().animate({opacity:'1'},300);
                },function(){
                    $(this).stop().animate({opacity:thumbOpc},300);
                });
                if(sideNavi == 'on'){
                    setPrevNext.hover(function(){
                        $(this).stop().animate({opacity:'1'},300);
                    },function(){
                        $(this).stop().animate({opacity:thumbOpc},300);
                    });
                }
            }
 
            // 自動再生（有り無し）
            if(autoPlay == 'on'){
                function slideTimer() {
                    setTimer = setInterval(function(){
                        var setThumbLiActive = thumbUl.children('li.active');
                        setThumbLiActive.each(function(){
                            var listLengh = thumbLi.length;
                            var listIndex = thumbLi.index(this);
                            var listCount = listIndex+1;
                            if(listLengh == listCount){
                                thumbLiFst.click();
                            } else {
                                $(this).next('li').click();
                            }
                        });
                    },delayTime);
                }
                slideTimer();
            }
        });
    });
});

</script>
	<style type="text/css"> #floatdiv { position:fixed; display:inline-block; right:0px; /* 창에서 오른쪽 길이 */ top:30%; /* 창에서 위에서 부터의 높이 */ background-color: transparent; margin:0; } </style>
</head>

<body>
    <div class="wrapper" style="background-color: #333333;">
        <!-- Banner -->


        <!-- Header section -->
        <header class="header-wrapper">
			<div class="color--main">
				<div class="container" style="padding-top:15px;">
					<!-- Logo link-->
					<a href='/~team2/' class="logo">
						<img alt='logo' src="/~team2/images/logo.png">
					</a>
					
					<!-- Main website navigation-->
					<nav id="navigation-box">
						<!-- Toggle for mobile menu mode -->
						<a href="#" id="navigation-toggle">
							<span class="menu-icon">
								<span class="icon-toggle" role="button" aria-label="Toggle Navigation">
								  <span class="lines"></span>
								</span>
							</span>
						</a>
						
						<!-- Link navigation -->
						<ul id="navigation">
							<li>
								<span class="sub-nav-toggle plus"></span>
						
						<?
						$uid=$this->session->userdata('uid');
						?>

						<script>

								function check_login(){
							var session='<?echo $uid;?>'
							if(!session){
							alert("로그인을 해야 예매가 가능합니다");
							location.href="/~team2/main";
							}
							else{
								location.href="/~team2/book";}
							return;
						} 

						</script>
								<a href="#">예매</a>
								<ul>
									<li class="menu__nav-item" onclick="check_login();" style="color:#ffffff;opacity:.6;cursor:pointer">예매하기</li>
									<li class="menu__nav-item"><a href="/~team2/discount">할인안내</a></li>
								</ul>
							</li>
							<li>
								<span class="sub-nav-toggle plus"></span>
								<a href="/~team2/movie/lists">영화</a>
							<li>
								<span class="sub-nav-toggle plus"></span>
								<a href="/~team2/cinema">영화관</a>
								<ul>
									<li class="menu__nav-item"><a href="/~team2/cinema/special">샤롯데</a></li>
									<li class="menu__nav-item"><a href="/~team2/cinema/super_plex_g">슈퍼플렉스G</a>
									<li class="menu__nav-item"><a href="/~team2/cinema/super_s">슈퍼S</a></li>
									<li class="menu__nav-item"><a href="/~team2/cinema/super_plex">수퍼플렉스</a></li>
									<li class="menu__nav-item"><a href="/~team2/cinema/super_4d">슈퍼4D</a></li>
									<li class="menu__nav-item"><a href="/~team2/cinema/cinefamily">씨네패밀리</a></li>
									<li class="menu__nav-item"><a href="/~team2/cinema/cinecouple">씨네커플</a></li>
									<li class="menu__nav-item"><a href="/~team2/cinema/cinebiz">씨네비지니스</a></li>

								</ul>
							</li>
							<li>
							<a href="/~team2/event/movie">
								<span class="sub-nav-toggle plus"></span><font color="#b4b1b2">
								이벤트</font>
								</a>
								<ul>
									<li class="menu__nav-item"><a href="/~team2/event/movie">영화</a></li>
									<li class="menu__nav-item"><a href="/~team2/event/premiere">시사회/무대인사</a></li>	
									<li class="menu__nav-item"><a href="/~team2/board">우리동네영화관</a></li>	
								</ul>
							</li>
							<li>
								<span class="sub-nav-toggle plus"></span>
								<a href="/~team2/contact">문의하기</a>

							</li>
							
								   </ul>
							</li>
						</ul>
					</nav>
					
					<!-- Additional header buttons / Auth and direct link to booking-->
					<div class="control-panel">
					<? $name=$this->session->userdata('name');
					$no=$this->session->userdata('no');

						if(!$this->session->userdata('uid'))
							echo("
							<a href='/~team2/main/signin' class='btn btn--sign'>로그인</a>
							");
						else { 
							echo("
							
							<div class='auth auth--home'>
								<div class='auth__show'>
									
								</div>
								<a href='/~team2/member/view/no/$no' class='btn btn--sign btn--singin'>$name 님</a>								
								<ul class='auth__function'>
									<li><a href='/~team2/member/view/no/$no' class='auth__function-item'>내 정보</a></li>
								</ul>								
							</div>
							<a href='/~team2/main/logout' class='btn btn--danger'>로그아웃</a>
							");
						}
					?>      
          </div>
<!--
					<div class="control-panel">
						<div class="auth auth--home">
						  <div class="auth__show">
							<span class="auth__image">
							  <img alt="" src="/~team2/images/client-photo/auth.png">
							</span>
						  </div>
						  <a href="#" class="btn btn--sign btn--singin">
							  me
						  </a>
							<ul class="auth__function">
								<li><a href="#" class="auth__function-item">Watchlist</a></li>
								<li><a href="#" class="auth__function-item">Booked tickets</a></li>
								<li><a href="#" class="auth__function-item">Discussion</a></li>
								<li><a href="#" class="auth__function-item">Settings</a></li>
							</ul>

						</div>
						<a href="#" class="btn btn-md btn--warning btn--book btn-control--home login-window">Book a ticket</a>
					</div>-->
					
					
					<!---floating 배너-->
					<div id="floatdiv">
						<table width="90"  border="0" cellpadding="2" cellspacing="1">
							<tr><td height="3" ><img src="/~team2/movie_img/quick.png" width="90"></td></tr>
							<tr>
								<td style="border-bottom:1px solid black;">
									<table width="100%"  border="0" cellspacing="0" cellpadding="0" >
										<tr><td><a href="/~team2/movie/lists"><img src="/~team2/movie_img/mov.png" border="0" width="90"></a></td></tr>
									</table>
								</td>
							</tr>
							<tr>
								<td style="border-bottom:1px solid black;">
									<table width="100%"  border="0" cellspacing="0" cellpadding="0" >
										<tr><td><a href="/~team2/book"><img src="/~team2/movie_img/book.png" border="0" width="90"></a></td></tr>
									</table>
								</td>
							</tr>
							<tr>
								<td style="border-bottom:1px solid black;">
									<table width="100%"  border="0" cellspacing="0" cellpadding="0" >
										<tr><td><a href="/~team2/cinema"><img src="/~team2/movie_img/special.png" border="0" width="90"></a></td></tr>
									</table>
								</td>
							</tr>
							<tr>
								<td >
									<table width="100%"  border="0" cellspacing="0" cellpadding="0" >
										<tr><td><a href="/~team2/contact"><img src="/~team2/movie_img/cus.png" border="0" width="90"></a></td></tr>
									</table>
								</td>
							</tr>
							<tr><td height="3" ><img src="/~team2/movie_img/새ㅔ.png" width="90"></td></tr>
					
						</table>
					</td>
				</tr>
			</table></div></div><!--끝-->

				</div>
				
			</header>
         <div class="clearfix" style="background-color: #333333; padding-top:60px;"></div>
        
    <?
        $no=$row->no;                                    // 사용자번호
	?>


        <!-- Main content -->
        <section class="container" style="background-color: #f5f5f5;" >
            <div class="col-sm-12">
                <div class="movie">

                    <h2 class="page-heading"><?=$row->name; ?></h2>

					<hr style="margin-bottom:70px">


                    <div class="movie__info">
                        <div class="col-sm-4 col-md-3 movie-mobile">
                            <div class="movie__images">
                                <span class="movie__rating">5.0</span>
                                <img width="249" height="356" alt='' src="/~team2/movie_img/<?=$row->poster; ?>">
                            </div>
                            
                        </div>

                        <div class="col-sm-8 col-md-9">
                            <p class="movie__time"><?=$row->running_time; ?> min</p>
                       
                            <p class="movie__option"><strong>장르: </strong><a href="#"><?=$row->genre_name?></a></p>
                            <p class="movie__option"><strong>개봉일: </strong><?=$row->openday?></p>
                            <p class="movie__option"><strong>감독: </strong><a href="#"><?=$row->director; ?></a></p>
                            <p class="movie__option"><strong>배우: </strong><?=$row->actor; ?></p>
                            <p class="movie__option"><strong>상영등급: </strong><a href="#"><?=$row->grade?></a></p>
							

								<script>
									function fnMove(){
									var offset = $("#comment").offset();
									$('html, body').animate({scrollTop : offset.top}, 400);
									}
								</script>

                            <div class="comment-link" onclick="fnMove();" style="cursor:pointer" >Comments:&nbsp&nbsp<?=$count?> 개</div>

                            <div class="movie__btns movie__btns--full">
                                <a href="/~team2/book" class="btn btn-md btn--warning">book a ticket for this movie</a>
                            </div>

                            
                        </div>
                    </div>
                    
                    <div class="clearfix"></div>
                    
                    <h2 class="page-heading">Synopsis</h2>
					<?
					$synopsis =explode(';' , $row->synopsis);					
					?>
                 <div class="movie__describe">
					<p style="font-weight:bold"><?=$synopsis[0]?></p>
					<?=$synopsis[1]?>
					 </div>
								<div class="flickSlider" style="color:#000000;">
					 <h2 class="page-heading" style="background-color:#ffffff">Trailers</h2>                  

							<div class="flickView"  style="background-color:#000000;">
							<ul>
							<li><a href="#1"><img src="/~team2/movie_img/<?=$row->trailer1?>" alt="" style="height:470px"></a></li>
							<li><a href="#2"><img src="/~team2/movie_img/<?=$row->trailer2?>" alt="" style="height:470px"></a></li>
							<li><a href="#3"><img src="/~team2/movie_img/<?=$row->trailer3?>" alt="" style="height:470px"></a></li>
							<li><a href="#4"><img src="/~team2/movie_img/<?=$row->trailer4?>" alt="" style="height:470px"></a></li>
							<li><a href="#5"><img src="/~team2/movie_img/<?=$row->trailer5?>" alt="" style="height:470px"></a></li>
							<li><a href="#6"><img src="/~team2/movie_img/<?=$row->trailer6?>" alt="" style="height:470px"></a></li>
							</ul>
							</div><!--/.flickView-->

				  
							<div class="flickThumb" style="background-color:#ffffff">
							<ul>
							<li><img src="/~team2/movie_img/<?=$row->trailer1?>" alt="" style="height:100px"></li>
							<li><img src="/~team2/movie_img/<?=$row->trailer2?>" alt="" style="height:100px" ></li>
							<li><img src="/~team2/movie_img/<?=$row->trailer3?>" alt="" style="height:100px"></li>
							<li><img src="/~team2/movie_img/<?=$row->trailer4?>" alt="" style="height:100px"></li>
							<li><img src="/~team2/movie_img/<?=$row->trailer5?>" alt="" style="height:100px"></li>
							<li><img src="/~team2/movie_img/<?=$row->trailer6?>" alt="" style="height:100px"></li>
							</ul>
							</div><!--/.flickThumb-->
							 
							</div><!--/.flickSlider-->

						
                    <hr style="margin-bottom:70px">
                   
<!--
                <h2 class="page-heading">showtime &amp; tickets</h2>
                <div class="choose-container">
                    <form id='select' class="select" method='get'>
                          <select name="select_item" id="select-sort" class="select__sort" tabindex="0">
                            <option value="1" selected='selected'>London</option>
                            <option value="2">New York</option>
                            <option value="3">Paris</option>
                            <option value="4">Berlin</option>
                            <option value="5">Moscow</option>
                            <option value="3">Minsk</option>
                            <option value="4">Warsawa</option>
                            <option value="5">Kiev</option>
                        </select>
                    </form>

                    <div class="datepicker">
                      <span class="datepicker__marker"><i class="fa fa-calendar"></i>Date</span>
                      <input type="text" id="datepicker" value='03/10/2014' class="datepicker__input">
                    </div>

                    <a href="#" id="map-switch" class="watchlist watchlist--map watchlist--map-full"><span class="show-map">Show cinemas on map</span><span  class="show-time">Show cinema time table</span></a>
                    
                    <div class="clearfix"></div>

                    <div class="time-select">
                        <div class="time-select__group group--first">
                            <div class="col-sm-4">
                                <p class="time-select__place">Cineworld</p>
                            </div>
                            <ul class="col-sm-8 items-wrap">
                                <li class="time-select__item" data-time='09:40'>09:40</li>
                                <li class="time-select__item" data-time='13:45'>13:45</li>
                                <li class="time-select__item active" data-time='15:45'>15:45</li>
                                <li class="time-select__item" data-time='19:50'>19:50</li>
                                <li class="time-select__item" data-time='21:50'>21:50</li>
                            </ul>
                        </div>

                        <div class="time-select__group">
                            <div class="col-sm-4">
                                <p class="time-select__place">Empire</p>
                            </div>
                            <ul class="col-sm-8 items-wrap">
                                <li class="time-select__item" data-time='10:45'>10:45</li>
                                <li class="time-select__item" data-time='16:00'>16:00</li>
                                <li class="time-select__item" data-time='19:00'>19:00</li>
                                <li class="time-select__item" data-time='21:15'>21:15</li>
                                <li class="time-select__item" data-time='23:00'>23:00</li>
                            </ul>
                        </div>

                        <div class="time-select__group">
                            <div class="col-sm-4">
                                <p class="time-select__place">Curzon</p>
                            </div>
                            <ul class="col-sm-8 items-wrap">
                                <li class="time-select__item" data-time='09:00'>09:00</li>
                                <li class="time-select__item" data-time='11:00'>11:00</li>
                                <li class="time-select__item" data-time='13:00'>13:00</li>
                                <li class="time-select__item" data-time='15:00'>15:00</li>
                                <li class="time-select__item" data-time='17:00'>17:00</li>
                                <li class="time-select__item" data-time='19:0'>19:00</li>
                                <li class="time-select__item" data-time='21:0'>21:00</li>
                                <li class="time-select__item" data-time='23:0'>23:00</li>
                                <li class="time-select__item" data-time='01:0'>01:00</li>
                            </ul>
                        </div>

                        <div class="time-select__group">
                            <div class="col-sm-4">
                                <p class="time-select__place">Odeon</p>
                            </div>
                            <ul class="col-sm-8 items-wrap">
                                <li class="time-select__item" data-time='10:45'>10:45</li>
                                <li class="time-select__item" data-time='16:00'>16:00</li>
                                <li class="time-select__item" data-time='19:00'>19:00</li>
                                <li class="time-select__item" data-time='21:15'>21:15</li>
                                <li class="time-select__item" data-time='23:00'>23:00</li>
                            </ul>
                        </div>

                        <div class="time-select__group group--last">
                            <div class="col-sm-4">
                                <p class="time-select__place">Picturehouse</p>
                            </div>
                            <ul class="col-sm-8 items-wrap">
                                <li class="time-select__item" data-time='17:45'>17:45</li>
                                <li class="time-select__item" data-time='21:30'>21:30</li>
                                <li class="time-select__item" data-time='02:20'>02:20</li>
                            </ul>
                        </div>
                    </div>
                    -->
                   

                    <h2 id="comment" class="page-heading">comments (<?=$count?>)</h2>

                    <div class="comment-wrapper">
                        <form id="comment-form" class="comment-form" method='post' action="/~team2/movie/review_add" ><!--action="/~team2/movie/movie_review" -->
                        <input type="hidden" name="movie_no" value="<?=$no?>">                       
                        
                        평점 :
                            <select id="select-box" name="rate">
							  <option value="">선택하세요.</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="4">5</option>
							</select>
							<br><br>
                            <textarea class="comment-form__text" name="review_content" placeholder='감상평을 적어주세요.'></textarea>
                            
                            <label class="comment-form__info">자신이 적은 댓글은 곧 자신의 얼굴입니다.</label>
							<?
							if($this->session->userdata('uid')){							
                            echo("<button type='submit' class='btn btn-md btn--danger comment-form__btn'>평점 등록</button>");							
							}	
							else {
							echo("<input type='button' class='btn btn-md btn--danger comment-form__btn' onclick='check()'><a href='/~team2/main/sign_up'>로그인</a></button>");		
							}

							?>
                        </form>

<script>
//로그인시에만 댓글달도록 기능구현
var rate = $("#rate").val();
    rate = $.trim( rate );
    if( rate == "" ){
        alert("평점을 입력하세요!");
        $("#rate").focus();
        return; 
}
</script>
                        <div class="comment-sets">
                         
                            
                        <?php
                        foreach($list as $row) { //리뷰출력   
                        ?>
                        <div class="comment">           
         
                            <a href='#' class="comment__author"><span class="social-used fa fa-facebook"></span><?=$row->review_name?></a>
                            <p class="comment__date"><?=$row->writeday?>&nbsp; 평점 <?=$row->rate?>점</p>
                            <p class="comment__message"><?=$row->review_content?></p>
                       
                        </div>
                        <?
                        }
                        ?>

                        
                        </div>

                        <div class="comment-more">
                            <a href="#" class="watchlist">Show more comments</a>
                        </div>

                    </div>
                    </div>
                </div>
            </div>

        </section>
        
        <div class="clearfix" style="background-color: #333333; padding-top:60px;"></div>

			<footer class="footer-wrapper">
				<section class="container" style="background-color:rgba( 255, 255, 255, 0.8 );">
					<div class="col-xs-4 col-md-2 footer-nav">
						<ul class="nav-link">
							<li><a href="#" class="nav-link__item">Cities</a></li>
							<li><a href="movie-list-left.html" class="nav-link__item">Movies</a></li>
							<li><a href="trailer.html" class="nav-link__item">Trailers</a></li>
							<li><a href="rates-left.html" class="nav-link__item">Rates</a></li>
						</ul>
					</div>
					<div class="col-xs-4 col-md-2 footer-nav">
						<ul class="nav-link">
							<li><a href="coming-soon.html" class="nav-link__item">Coming soon</a></li>
							<li><a href="cinema-list.html" class="nav-link__item">Cinemas</a></li>
							<li><a href="offers.html" class="nav-link__item">Best offers</a></li>
							<li><a href="news-left.html" class="nav-link__item">News</a></li>
						</ul>
					</div>
					<div class="col-xs-4 col-md-2 footer-nav">
						<ul class="nav-link">
							<li><a href="#" class="nav-link__item">Terms of use</a></li>
							<li><a href="gallery-four.html" class="nav-link__item">Gallery</a></li>
							<li><a href="contact.html" class="nav-link__item">Contacts</a></li>
							<li><a href="page-elements.html" class="nav-link__item">Shortcodes</a></li>
						</ul>
					</div>
					<div class="col-xs-12 col-md-6">
						<div class="footer-info">
							<p class="heading-special--small">A.Movie<br><span class="title-edition">in the social media</span></p>

							<div class="social">
								<a href='#' class="social__variant fa fa-facebook"></a>
								<a href='#' class="social__variant fa fa-twitter"></a>
								<a href='#' class="social__variant fa fa-vk"></a>
								<a href='#' class="social__variant fa fa-instagram"></a>
								<a href='#' class="social__variant fa fa-tumblr"></a>
								<a href='#' class="social__variant fa fa-pinterest"></a>
							</div>
							
							<div class="clearfix"></div>
							<p class="copy">&copy; A.Movie, 2013. All rights reserved. Done by Olia Gozha</p>
						</div>
					</div>
				</section>
			</footer>
		</div>

    <!-- open/close -->
        <div class="overlay overlay-hugeinc">
            
            <section class="container">

                <div class="col-sm-4 col-sm-offset-4">
                    <button type="button" class="overlay-close">Close</button>
                    <form id="login-form" class="login" method='get' novalidate=''>
                        <p class="login__title">sign in <br><span class="login-edition">welcome to A.Movie</span></p>

                        <div class="social social--colored">
                                <a href='#' class="social__variant fa fa-facebook"></a>
                                <a href='#' class="social__variant fa fa-twitter"></a>
                                <a href='#' class="social__variant fa fa-tumblr"></a>
                        </div>

                        <p class="login__tracker">or</p>
                        
                        <div class="field-wrap">
                        <input type='email' placeholder='Email' name='user-email' class="login__input">
                        <input type='password' placeholder='Password' name='user-password' class="login__input">

                        <input type='checkbox' id='#informed' class='login__check styled'>
                        <label for='#informed' class='login__check-info'>remember me</label>
                         </div>
                        
                        <div class="login__control">
                            <button type='submit' class="btn btn-md btn--warning btn--wider">sign in</button>
                            <a href="#" class="login__tracker form__tracker">Forgot password?</a>
                        </div>
                    </form>
                </div>

            </section>
        </div>

	<!-- JavaScript-->
        <!-- jQuery 3.1.1--> 
        
        <!-- Migrate --> 
        <script src="/~team2/js/external/jquery-migrate-1.2.1.min.js"></script>
        <!-- jQuery UI -->
        <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <!-- Bootstrap 3--> 
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>

        <!-- Mobile menu -->
        <script src="/~team2/js/jquery.mobile.menu.js"></script>
         <!-- Select -->
        <script src="/~team2/js/external/jquery.selectbox-0.2.min.js"></script>

        <!-- Stars rate -->
        <script src="/~team2/js/external/jquery.raty.js"></script>
        <!-- Swiper slider -->
        <script src="/~team2/js/external/idangerous.swiper.min.js"></script>
        <!-- Magnific-popup -->
        <script src="/~team2/js/external/jquery.magnific-popup.min.js"></script> 

        <!--*** Google map  ***-->
        <script src="https://maps.google.com/maps/api/js?sensor=true"></script> 
        <!--*** Google map infobox  ***-->
        <script src="/~team2/js/external/infobox.js"></script> 

      
        <!-- Form element -->
        <script src="/~team2/js/external/form-element.js"></script>
        <!-- Form validation -->
        <script src="/~team2/js/form.js"></script>

        <!-- Custom -->
        <script src="/~team2/js/custom.js"></script>
		
		<script type="text/javascript">
            $(document).ready(function() {
                init_MoviePage();
                 init_MoviePageFull();
            });
		</script>

</body>
</html>
