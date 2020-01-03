	<!doctype html>
	<html>
	<head>
		<!-- Basic Page Needs -->
			<meta charset="utf-8">
			<title>ToCinema</title>
			<meta name="description" content="A Template by Gozha.net">
			<meta name="keywords" content="HTML, CSS, JavaScript">
			<meta name="author" content="Gozha.net">
		
		<!-- Mobile Specific Metas-->
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta content="telephone=no" name="format-detection">
		
		<!-- Fonts -->
			<!-- Font awesome - icon font -->
			<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
			<!-- Roboto -->
			<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,700' rel='stylesheet' type='text/css'>
			<!-- Open Sans -->
			<link href='http://fonts.googleapis.com/css?family=Open+Sans:800italic' rel='stylesheet' type='text/css'>
		
		<!-- Stylesheets -->
		<link rel="shortcut icon" href="/~team2/images/icon.ico"/>
		<link rel="icon" href="/~team2/images/icon.png" sizes="16x16"/>
			<!-- Mobile menu -->
			<link href="/~team2/css/gozha-nav.css" rel="stylesheet" />
			<!-- Select -->
			<link href="/~team2/css/external/jquery.selectbox.css" rel="stylesheet" />

			<!-- Slider Revolution CSS Files -->
			<link rel="stylesheet" type="text/css" href="/~team2/revolution/css/settings.css">
			<link rel="stylesheet" type="text/css" href="/~team2/revolution/css/layers.css">
			<link rel="stylesheet" type="text/css" href="/~team2/revolution/css/navigation.css">
		
			<!-- Custom -->
			<link href="/~team2/css/style.css?v=1" rel="stylesheet" />
			<link href="/~team2/my/css/my.css" rel="stylesheet" />

			<!-- Modernizr --> 
			<script src="/~team2/js/external/modernizr.custom.js"></script>

			<!-- jQuery 3.1.1--> 
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
			<script>window.jQuery || document.write('<script src="/~team2/js/external/jquery-3.1.1.min.js"><\/script>')</script>
			<!-- Migrate --> 
			<script src="/~team2/js/external/jquery-migrate-1.2.1.min.js"></script>
			<!-- Bootstrap 3--> 
			<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
			

			<!--carousel-->
			<link href="/~team2/css/owl.carousel.min.css"  rel="stylesheet" type="text/css" /> 
			<link href="/~team2/css/owl.theme.default.min.css"  rel="stylesheet" type="text/css" /> 
			<script src="/~team2/js/owl.carousel.js"></script>
			<script src="/~team2/js/owl.carousel.min.js"></script>

			<!--Slick-->
			<link href="/~team2/css/slick.css"  rel="stylesheet" type="text/css"/> 
			<link href="/~team2/css/slick-theme.css"  rel="stylesheet" type="text/css"/> 
			<!--Slick-->

			<script src="/~team2/js/slick.js"></script>
			

		
		<style type="text/css"> #floatdiv { position:fixed; display:inline-block; right:0px; /* 창에서 오른쪽 길이 */ top:30%; /* 창에서 위에서 부터의 높이 */ background-color: transparent; margin:0; } </style>

		<!--자동 롤링소스-->
	</head>

	<script type="text/javascript">
		window.onload = function() {
				var bannerLeft = 0;
				var first = 1;
				var last;
				var imgCnt = 0;
				var $img = $(".banner_wraper img");
				var $first;
				var $last;

				$img.each(function() { // 5px 간격으로 배너 처음 위치 시킴
						$(this).css("left", bannerLeft);
						bannerLeft += $(this).width() + 5;
						$(this).attr("id", "banner" + (++imgCnt)); // img에 id 속성 추가
				});

				if (imgCnt > 9) { //배너 9개 이상이면 이동시킴
						last = imgCnt;

						setInterval(function() {
								$img.each(function() {
										$(this).css("left", $(this).position().left - 1); // 1px씩 왼쪽으로 이동
								});
								$first = $("#banner" + first);
								$last = $("#banner" + last);
								if ($first.position().left < -200) { // 제일 앞에 배너 제일 뒤로 옮김
										$first.css("left", $last.position().left + $last.width() + 5);
										first++;
										last++;
										if (last > imgCnt) {
												last = 1;
										}
										if (first > imgCnt) {
												first = 1;
										}
								}
						},1000); //여기 값을 조정하면 속도를 조정할 수 있다.(위에 1px 이동하는 부분도 조정하면 
				}
		};
	</script>

	<style>      
		.banner_wraper { height: 60px; width: 1130px; position: absolute; overflow: hidden; }
		.banner_wraper img { height: 45px; position: absolute;  }
	</style>


	

	<body>
		<div class="wrapper">
			<!-- Banner -->

			<!-- Header section -->
			
			<header class="header-wrapper header-wrapper--home">
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
			<br><br><br><br>
			<!-- Slider -->
			<div class="bannercontainer rev_slider_wrapper">
	 
				<!-- the ID here will be used in the JavaScript below to initialize the slider -->
				<div id="rev_slider_1"  class="banner rev_slider" style="display:none">
	 
					<!-- BEGIN SLIDES LIST -->
					<ul>
						<!-- SLIDE 1 -->
						<li data-transition="fade" class="slide" data-title='Rush.'>
	 
							<!-- SLIDE'S MAIN BACKGROUND IMAGE -->
							<img class="rev-slidebg" alt='' src="/~team2/images/slides/slide1.jpg">

							<div class="tp-caption slide__name margin-slider" 
								 data-x="right" 
								 data-y="80"
								 data-frames='[{
								   "delay":300,
								   "split":"chars",
								   "splitdelay":0.1,
								   "speed":700,
								   "frame":"0",
								   "from":"x:[-100%];opacity:0;",
								   "mask":"x:0px;y:0px;s:inherit;e:inherit;",
								   "to":"o:1;",
								   "ease":"Power4.easeInOut"
								   },{
								   "delay":"wait",
								   "speed":300,
								   "frame":"999",
								   "to":"opacity:0;",
								   "ease":"Power3.easeInOut"
								 }]'>
								겨울왕국
							</div>

						

				
							<!--<div class="tp-caption slide__time margin-slider" 
								 data-x="right" 
								 data-hoffset='120' 
								 data-y="186" 
								 data-frames='[{
								   "delay":1200,
								   "speed":300,
								   "frame":"0",
								   "from":"x:[50%];opacity:0;",
								   "to":"o:1;",
								   "ease":"Power3.easeInOut"
								   },{
								   "delay":"wait",
								   "speed":300,
								   "frame":"999",
								   "to":"opacity:0;",
								   "ease":"Power3.easeInOut"
								 }]'>
								 
							</div>-->
							<div class="tp-caption slide__date margin-slider" 
								 data-x="right" 
								 data-y="186" 
								 data-frames='[{
								   "delay":1700,
								   "speed":500,
								   "frame":"0",
								   "from":"y:100px;opacity:0;",
								   "to":"o:1;",
								   "ease":"Power3.easeInOut"
								   },{
								   "delay":"wait",
								   "speed":300,
								   "frame":"999",
								   "to":"opacity:0;",
								   "ease":"Power3.easeInOut"
								 }]'>
								 겨울왕국이 드디어 다시 돌아왔다!
							</div>
							<div class="tp-caption slide__text margin-slider text-right" 
								 data-x="right" 
								 data-y="250"
								 data-frames='[{
								   "delay":2300,
								   "speed":400,
								   "frame":"0",
								   "from":"y:100px;skX:50px;opacity:0;",
								   "to":"o:1;",
								   "ease":"Power3.easeInOut"
								   },{
								   "delay":"wait",
								   "speed":300,
								   "frame":"999",
								   "to":"opacity:0;",
								   "ease":"Power3.easeInOut"
								 }]'>
								 Two-time Academy Award winner Ron Howard, teams once again with fellow two-time Academy<br> Award nominee, writer Peter Morgan , on Rush, a spectacular big-screen re-creation of the merciless<br> 1970s rivalry between James Hunt and Niki Lauda
							</div>
							<div class="tp-caption margin-slider" 
								 data-x="right" 
								 data-y="324"
								 data-frames='[{
								   "delay":2600,
								   "speed":400,
								   "frame":"0",
								   "from":"y:100px;opacity:0;",
								   "to":"o:1;",
								   "ease":"Power3.easeInOut"
								   },{
								   "delay":"wait",
								   "speed":300,
								   "frame":"999",
								   "to":"opacity:0;",
								   "ease":"Power3.easeInOut"
								 }]'>
								 <a href="#" class="slide__link">check out cinemas &amp; time</a>
							</div>
	 
						</li>
	 
						<!-- SLIDE 2 -->
						<li data-transition="fade" class="slide" data-title='왕좌의 귀환'>
	 
							<!-- SLIDE'S MAIN BACKGROUND IMAGE -->
							<img class="rev-slidebg" alt='' src="/~team2/images/slides/slide2.jpg">
							<div class="rs-background-video-layer" 
								 data-forcerewind="on" 
								 data-volume="mute" 
								 data-videowidth="100%" 
								 data-videoheight="100%" 
								
								 data-videopreload="auto" 
								 data-videoloop="loop" 
								 data-forceCover="1" 
								 data-aspectratio="16:9" 
								 data-autoplay="true" 
								 data-autoplayonlyfirsttime="false" 
							></div>
							<div class="tp-caption slide__name slide__name--smaller" 
								 data-x="center" 
								 data-y="160" 

								 data-splitin="chars"
								 data-elementdelay="0.1"

								 data-speed="700" 
								 data-start="1400" 
								 data-easing="easeOutBack"

								 data-frames='[{
								   "delay":1400,
								   "speed":700,
								   "split":"chars",
								   "splitdelay":0.1,
								   "frame":"0",
								   "from":"opacity:0;",
								   "to":"o:1;",
								   "ease":"Power3.easeInOut"
								   },{
								   "delay":"wait",
								   "speed":300,
								   "frame":"999",
								   "to":"opacity:0;",
								   "ease":"Power3.easeInOut"
								 }]'>
								Travel, Admire, Remember.
							</div>
							<div class="tp-caption slide__time" 
								 data-x="center"
								 data-hoffset='-115' 
								 data-y="242" 
								 data-frames='[{
								   "delay":1800,
								   "speed":300,
								   "frame":"0",
								   "from":"x:[50%];opacity:0;",
								   "to":"o:1;",
								   "ease":"Power3.easeInOut"
								   },{
								   "delay":"wait",
								   "speed":300,
								   "frame":"999",
								   "to":"opacity:0;",
								   "ease":"Power3.easeInOut"
								 }]'>
								 From
							</div>
							<div class="tp-caption slide__date position-center postion-place--two lfb ltb" 
								 data-x="center"                              
								 data-hoffset='-50'                                       
								 data-y="242" 
								 data-frames='[{
								   "delay":2200,
								   "speed":500,
								   "frame":"0",
								   "from":"y:100px;opacity:0;",
								   "to":"o:1;",
								   "ease":"Power3.easeInOut"
								   },{
								   "delay":"wait",
								   "speed":300,
								   "frame":"999",
								   "to":"opacity:0;",
								   "ease":"Power3.easeInOut"
								 }]'>
								 April 18 
							</div>
							<div class="tp-caption slide__time" 
								 data-x="center" 
								 data-hoffset='5' 
								 data-y="242" 
								 data-frames='[{
								   "delay":1800,
								   "speed":300,
								   "frame":"0",
								   "from":"x:[50%];opacity:0;",
								   "to":"o:1;",
								   "ease":"Power3.easeInOut"
								   },{
								   "delay":"wait",
								   "speed":300,
								   "frame":"999",
								   "to":"opacity:0;",
								   "ease":"Power3.easeInOut"
								 }]'>
								 - till
							</div>
							<div class="tp-caption slide__date" 
								 data-x="center"                              
								 data-hoffset='60'
								 data-y="242" 
								 data-frames='[{
								   "delay":2200,
								   "speed":500,
								   "frame":"0",
								   "from":"y:100px;opacity:0;",
								   "to":"o:1;",
								   "ease":"Power3.easeInOut"
								   },{
								   "delay":"wait",
								   "speed":300,
								   "frame":"999",
								   "to":"opacity:0;",
								   "ease":"Power3.easeInOut"
								 }]'>
								 May 01
							</div>

							<div class="tp-caption slider-wrap-btn" 
								 data-x="center"
								 data-y="310" 
								 data-frames='[{
								   "delay":2800,
								   "speed":400,
								   "frame":"0",
								   "from":"y:100px;opacity:0;",
								   "to":"o:1;",
								   "ease":"Power3.easeInOut"
								   },{
								   "delay":"wait",
								   "speed":300,
								   "frame":"999",
								   "to":"opacity:0;",
								   "ease":"Power3.easeInOut"
								 }]'>
								 <a href="#" class="btn btn-md btn--danger btn--wide slider--btn">learn more</a>
							</div>
						</li>

						<!-- SLIDE 3 -->
						<li data-transition="fade" class="slide" data-title='Stop wishing. Start doing.'>
	 
							<!-- SLIDE'S MAIN BACKGROUND IMAGE -->
							<img class="rev-slidebg" alt='' src="/~team2/images/slides/slide3.jpg">
							<div class="tp-caption slide__name slide__name--smaller slide__name--specific" 
							  data-x="center" 
							  data-y="160" 
							  data-frames='[{
								   "delay":1400,
								   "speed":700,
								   "frame":"0",
								   "from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;",
								   "mask":"x:0px;y:[100%];s:inherit;e:inherit;",
								   "to":"o:1;",
								   "ease":"Power3.easeInOut"
								   },{
								   "delay":"wait",
								   "speed":300,
								   "frame":"999",
								   "to":"opacity:0;",
								   "ease":"Power3.easeInOut"
								 }]'>
								Stop <span class="highlight">wishing.</span> Start <span class="highlight">doing.</span> 
							</div>

							<div class="tp-caption slide__descript" 
								data-x="center" 
								data-y="240"
								data-frames='[{
								   "delay":2000,
								   "speed":500,
								   "frame":"0",
								   "from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;",
								   "mask":"x:0px;y:[100%];s:inherit;e:inherit;",
								   "to":"o:1;",
								   "ease":"Power3.easeInOut"
								   },{
								   "delay":"wait",
								   "speed":300,
								   "frame":"999",
								   "to":"opacity:0;",
								   "ease":"Power3.easeInOut"
								 }]'>
								find your best match movie with A.MOVIE
							</div>

							<div class="tp-caption slider-wrap-btn" 
								data-x="center" 
								data-y="310" 
								data-frames='[{
								   "delay":2500,
								   "speed":500,
								   "frame":"0",
								   "from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;",
								   "mask":"x:0px;y:[100%];s:inherit;e:inherit;",
								   "to":"o:1;",
								   "ease":"Power3.easeInOut"
								   },{
								   "delay":"wait",
								   "speed":300,
								   "frame":"999",
								   "to":"opacity:0;",
								   "ease":"Power3.easeInOut"
								 }]'>
								<a href="#" class="btn btn-md btn--danger slider--btn">check out movies</a>
							</div>
						</li>

	 
					</ul><!-- END SLIDES LIST -->
	 
				</div><!-- END SLIDER CONTAINER -->
	 
			</div><!-- END SLIDER CONTAINER WRAPPER -->
			<!--end slider -->
			


			<!-- Main content -->
			
			<section class="container" style="margin-top:200px">
				<div class="movie-best">
				<div class="emptydivdier"></div>	
					 <div class="col-sm-10 col-sm-offset-1 movie-best__rating">오늘의 추천 영화</div>

					 <div class="col-sm-12 change--col">
				<div class="movie-beta__item second--item">
							 <img width="190" height="300" alt='' src="/~team2/movie_img/백두산_포스터.jpg">
							 

							 <ul class="movie-beta__info" style="margin:9px;">
								 <li><span class="best-voted">71 people voted today</span></li>
								 <li>
									<p class="movie__time">102 min</p>
									<p>Drama </p>
									<p>38 comments</p>
								 </li>
								 <li class="last-block">
									 <a href='/~team2/movie/view/no/35' class="slide__link">more</a>
								 </li>
							 </ul>
						 </div>
						 <div class="movie-beta__item second--item">
							 <img width="190" height="300" alt='' src="/~team2/images/movie/movie-sample2.jpg">
							 

							 <ul class="movie-beta__info" style="margin:9px;">
								 <li><span class="best-voted">71 people voted today</span></li>
								 <li>
									<p class="movie__time">109 min</p>
									<p>Musical </p>
									<p>38 comments</p>
								 </li>
								 <li class="last-block">
									 <a href='/~team2/movie/view/no/33' class="slide__link">more</a>
								 </li>
							 </ul>
						 </div>
						 <div class="movie-beta__item third--item">
							 <img width="190" height="300" alt='' src="/~team2/movie_img/감쪽같은_그녀_1차포스터.jpg">
							

							 <ul class="movie-beta__info" style="margin:9px;">
								 <li><span class="best-voted">71 people voted today</span></li>
								 <li>
									<p class="movie__time">104 min</p>
									<p>Drama </p>
									<p>38 comments</p>
								 </li>
								 <li class="last-block">
									 <a href='/~team2/movie/view/no/11' class="slide__link">more</a>
								 </li>
							 </ul>
						 </div>
						 <div class="movie-beta__item hidden-xs">
							 <img width="190" height="300" alt='' src="/~team2/movie_img/겨울왕국.jpg">
						

							 <ul class="movie-beta__info" style="margin:9px;">
								 <li><span class="best-voted">71 people voted today</span></li>
								 <li>
									<p class="movie__time">103 min</p>
									<p>Animation </p>
									<p>38 comments</p>
								 </li>
								 <li class="last-block">
									 <a href="/~team2/movie/view/no/7" class="slide__link">more</a>
								 </li>
							 </ul>
						 </div>
						 <div class="movie-beta__item hidden-xs hidden-sm">
							 <img width="190" height="300" alt='' src="/~team2/images/movie/movie-sample5.jpg">
							 <ul class="movie-beta__info" style="margin:9px;">
								 <li><span class="best-voted">71 people voted today</span></li>
								 <li>
									<p class="movie__time">113 min</p>
									<p>Drama</p>
									<p>38 comments</p>
								 </li>
								 <li class="last-block">
									 <a href="/~team2/movie/view/no/9" class="slide__link">more</a>
								 </li>
							 </ul>
						 </div>
						 <div class="movie-beta__item hidden-xs hidden-sm">
							 <img width="190" height="300" alt='' src="/~team2/movie_img/라스트_크리스마스.jpg">
							 <ul class="movie-beta__info" style="margin:9px;">
								 <li><span class="best-voted">71 people voted today</span></li>
								 <li>
									<p class="movie__time">169 min</p>
									<p>Adventure</p>
									<p>38 comments</p>
								 </li>
								 <li class="last-block">
									  <a href="/~team2/movie/view/no/24" class="slide__link">more</a>
								 </li>
							 </ul>
						 </div>
					 </div>
					<div class="col-sm-10 col-sm-offset-1 movie-best__check">현재 상영중인 영화 보러가기</div>
					<div class="emptydivdier"></div>
					
				<div class="clearfix"></div>
				<div class="emptydivdier"></div>	
			</div>
			<div class="emptydivdier"></div>
			<div class="clearfix"></div>

			<!-- Special Cinema Banner Slider -->
			<section class="center slider">
				<div>
					<a href="/~team2/cinema/super_s"><img src="/~team2/images/banners/supers.jpg" style="width:100px"></a>
				</div>
				<div>
					<a href="/~team2/cinema/special"><img src="/~team2/images/banners/charotte.jpg"></a>
				</div>
				<div>
					<a href="/~team2/cinema/cine_couple"><img src="/~team2/images/banners/cinecouple.jpg"></a>
				</div>
				<div>
					<a href="/~team2/cinema/cine_family"><img src="/~team2/images/banners/cinefamily.jpg"></a>
				</div>
				<div>
					<a href="/~team2/cinema/super_4d"><img src="/~team2/images/banners/super4d.jpg"></a>
				</div>
				<div>
					<a href="/~team2/cinema/super_plex_g"><img src="/~team2/images/banners/superplex.jpg"></a>
				</div>
				<div>
					<a href="/~team2/cinema/super_plex"><img src="/~team2/images/banners/superplexg.jpg"></a>
				</div>
			</section>
			<script>
			$(".center").slick({
							infinite: true,
							centerMode: true,
							slidesToShow: 5,
							slidesToScroll: 3,
							autoplay: true,
							autoplaySpeed: 2000
						});
			</script>

			
				<div class="container">
				<br>
				<h2 id='target' class="page-heading heading--outcontainer"><h2 id="center-with-loop" style="text-align:center; margin: 50px 0px;">현재 상영작</h2></h2>

				<div class="col-sm-12">
					<div class="row">	
								<!--  Demos -->
    <section id="demos">
      <div class="row">
        <div class="large-12 columns">
          
          <div class="loop owl-carousel owl-theme owl-height">
            <div class="item">
              <img src="/~team2/movie_img/겨울왕국.jpg">
            </div>
            <div class="item">
              <img src="/~team2/movie_img/시동_포스터.jpg">
            </div>
            <div class="item">
              <img src="/~team2/movie_img/나이브스_포스터.jpg">
            </div>
            <div class="item">
              <img src="/~team2/movie_img/너의_여자친구_포스터.jpg">
            </div>
            <div class="item">
              <img src="/~team2/movie_img/눈의_여왕_포스터.jpg">
            </div>
            <div class="item">
              <img src="/~team2/movie_img/겨울왕국.jpg">
            </div>
            <div class="item">
              <img src="/~team2/movie_img/대통령의7시간.jpg">
            </div>
            <div class="item">
              <img src="/~team2/movie_img/초스터.jpg">
            </div>
            <div class="item">
              <img src="/~team2/movie_img/백두산_포스터.jpg">
            </div>
            <div class="item">
              <img src="/~team2/movie_img/카센터_포스터.jpg">
            </div>
            <div class="item">
              <img src="/~team2/movie_img/포드포스터.jpg">
            </div>
            <div class="item">
              <img src="/~team2/movie_img/쥬만지포스트.jpg">
            </div>
          </div>
 
          <script>
            jQuery(document).ready(function($) {
              $('.loop').owlCarousel({
                center: true,
                items: 2,
                loop: true,
                margin: 10,
								autoplay:true,
								autoplaySpeed:2000,
                responsive: {
                  600: {
                    items: 4
                  }
                }
              });
            });
          </script>
		  
        </div>
      </div>
    </section>
					</div>
				</div>
				</div>
				<div class="emptydivdier"></div>
</div>

 <div class="eventwrapper">
 <div class="col-sm-2"></div>
 <div class="col-sm-8">
                <h2 class="page-heading"><h2 id="center-with-loop" style="text-align:center">이벤트</h2></h2><br>
                <table border="0" style="align:center">
				<tr>
				<td><a href="/~team2/event/movie">
				<img src="/~team2/movie_img/event_1.jpg" style="margin-left: auto; display: block;"></a></td> 
				<td><a href="/~team2/event/movie"><img src="/~team2/movie_img/event_3.jpg" style="margin-left: auto; margin-right: auto; display: block;"></td> 
				<td rowspan="2"><a href="/~team2/event/movie"><img src="/~team2/movie_img/event_2.jpg" style="height:665px"></a></td>
				</tr>


				<tr>

				<td><a href="/~team2/event/movie">
				<img src="/~team2/movie_img/event_4.jpg" style="margin-left: auto; margin-top:20px; display: block;" ></a></td> 
				<td><a href="/~team2/event/movie">
				<img src="/~team2/movie_img/event_5.jpg" style="margin-left: auto; margin-right: auto;margin-top:20px; display: block;"></a></td>
				</tr>

				
				</table>
            </div>				
				</div>
</div>

			</section>
			


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
		<!-- 모달창 소스 cinema_footer에 있음 자바스크립트로 건드렸는지 소스 달면 슬라이더 사라짐 
		class="overlay overlay-hugeinc"-->


		
		<!-- JavaScript-->
		
		
		<!-- JavaScript-->
			
			<!-- Slider Revolution core JavaScript files -->
			<script type="text/javascript" src="/~team2/revolution/js/jquery.themepunch.tools.min.js"></script>
			<script type="text/javascript" src="/~team2/revolution/js/jquery.themepunch.revolution.min.js"></script>

			<!-- Slider Revolution extension scripts. --> 
			<script type="text/javascript" src="/~team2/revolution/js/extensions/revolution.extension.actions.min.js"></script>
			<script type="text/javascript" src="/~team2/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
			<script type="text/javascript" src="/~team2/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
			<script type="text/javascript" src="/~team2/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
			<script type="text/javascript" src="/~team2/revolution/js/extensions/revolution.extension.migration.min.js"></script>
			<script type="text/javascript" src="/~team2/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
			<script type="text/javascript" src="/~team2/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
			<script type="text/javascript" src="/~team2/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
			<script type="text/javascript" src="/~team2/revolution/js/extensions/revolution.extension.video.min.js"></script>

			<!-- Mobile menu -->
			<script src="/~team2/js/jquery.mobile.menu.js"></script>
			 <!-- Select -->
			<script src="/~team2/js/external/jquery.selectbox-0.2.min.js"></script>
			<!-- Stars rate -->
			<script src="/~team2/js/external/jquery.raty.js"></script>
			
			<!-- Form element -->
			<script src="/~team2/js/external/form-element.js"></script>
			


			<!-- Custom -->
			<script src="/~team2/js/custom.js"></script>
			
			  <script type="text/javascript">
				  $(document).ready(function() {
					init_Home();
				  });
				</script>

	</body>
	</html>
