
<!doctype html>
<html>
<head>
	<!-- Basic Page Needs -->
        <meta charset="utf-8">
        <title>AMovie - Login</title>
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
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    
    <!-- Stylesheets -->

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

			<!-- Modernizr --> 
			<script src="/~team2/js/external/modernizr.custom.js"></script>
    
    	<style type="text/css"> #floatdiv { position:fixed; display:inline-block; right:0px; /* 창에서 오른쪽 길이 */ top:30%; /* 창에서 위에서 부터의 높이 */ background-color: transparent; margin:0; } </style>
</head>

<body>
    <div class="wrapper">
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
        
        <!-- Main content -->
        <form id="login-form" class="login" method='POST' action="/~team2/main/check" novalidate=''>
            <p class="login__title">로그인 하기<br><span class="login-edition">영화관에 오신것을 환영합니다.</span></p>

            <div class="social social--colored">
                    <a href='#' class="social__variant fa fa-facebook"></a>
                    <a href='#' class="social__variant fa fa-twitter"></a>
                    <a href='#' class="social__variant fa fa-tumblr"></a>
            </div>

            <p class="login__tracker">또는</p>
            
            <div class="field-wrap">
                <input type='text' placeholder='아이디' name='uid'value="<?=set_value("uid"); ?>" class="login__input">
                    <? if (form_error("uid")==true) echo form_error("uid"); ?>
                
                <input type='password' placeholder='비밀번호' name='pwd' value="<?=set_value("pwd"); ?>" class="login__input">
                    <? if (form_error("pwd")==true) echo form_error("pwd"); ?>
                    <!-- <i class="fa fa-eye fa-lg"></i> -->   
            </div>
            <br>
            <div class="login__control">
                <button type='submit' class="btn btn-md btn--warning btn--wider">로그인</button>
                <a href="http://gamejigix.induk.ac.kr/~team2/main/signup" class="btn btn-md btn--warning btn--wider">회원가입</a>   
            </div>
        </form>
        
        <div class="clearfix"></div>
    </div>

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
	<!-- JavaScript-->
        


        <!-- Mobile menu -->
        <script src="/~team2/js/jquery.mobile.menu.js"></script>
        <!-- Select -->
        <script src="/~team2/js/external/jquery.selectbox-0.2.min.js"></script>
        <!-- Stars rate -->
        <script src="/~team2/js/external/jquery.raty.js"></script>


        <!-- Custom -->
        <script src="/~team2/js/custom.js"></script>

</body>
</html>
