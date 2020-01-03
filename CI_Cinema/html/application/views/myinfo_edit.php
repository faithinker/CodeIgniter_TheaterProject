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


         <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <h2>멤버</h2><br>
                         <div class="row">
                            <div class="col-lg-12">
                                <!-- USER DATA-->
                                <form name="form1" action="" method="post">
                                <div class="user-data m-b-30">
                                    <h3 class="title-3 m-b-30">
                                        <i class="zmdi zmdi-account-calendar"></i>멤버 수정</h3>
                                    <div class="filters m-b-45">
										<div class="input-group-append">
					<form name="form1" method="post" action="">

				<table class="table table-bordered table-sm mymargin5">

				<tr>
					<td width="20%" class="mycolor2" style="vertical-align:middle">
						<font color="red">*</font> 이름
					</td>
					<td width="80%" align="left">
						<div class="form-inline" style="display:block">
							<input  type="text" name="name" size="20" maxlength="20" value="<?=$row->name?>"
										 class="form-control form-control-sm">
							<? if (form_error("name")==true) echo form_error("name"); ?>

						</div>
					</td>
				</tr>
				<tr>
					<td width="20%" class="mycolor2" style="vertical-align:middle">
						<font color="red">*</font> 아이디
					</td>
					<td width="80%" align="left">
						<div class="form-inline" style="display:block">
							<input  type="text" name="uid" size="20" maxlength="20" value="<?=$row->uid?>"
										 class="form-control form-control-sm">
							<? if (form_error("uid")==true) echo form_error("uid"); ?>

						</div>
					</td>
				</tr>
				<tr>
					<td width="20%" class="mycolor2" style="vertical-align:middle">
						<font color="red">*</font> 암호
					</td>
					<td width="80%" align="left">
						<div class="form-inline" style="display:block">
							<input  type="text" name="pwd" size="20" maxlength="20" value="<?=$row->pwd ?>"
										 class="form-control form-control-sm">
							<? if (form_error("pwd")==true) echo form_error("pwd"); ?>
						</div>
					</td>
				</tr>

				<?
					$tel1=trim(substr($row->tel,0,3));
					$tel2=trim(substr($row->tel,3,4));
					$tel3=trim(substr($row->tel,7,4));

					$birthday1=substr($row->birth,0,4);            
					$birthday2=substr($row->birth,5,2);
					$birthday3=substr($row->birth,8,2);
				?>
			<tr>
					<td width="20%" class="mycolor2" style="vertical-align:middle">
						 전화
					</td>
					<td width="80%" align="left">
						<div class="form-inline">
							<input  type="text" name="tel1" size="3" maxlength="3" value="<?=$tel1?>"
										 class="form-control form-control-sm">&nbsp -  &nbsp
							<input  type="text" name="tel2" size="4" maxlength="4" value="<?=$tel2?>"
										 class="form-control form-control-sm">&nbsp-  &nbsp
							<input  type="text" name="tel3" size="4" maxlength="4" value="<?=$tel3?>"
										 class="form-control form-control-sm">			
						</div>
					</td>
				</tr>
				<tr>
					<td width="20%" class="mycolor2" style="vertical-align:middle">
						이메일
					</td>
					<td width="80%" align="left">
						<div class="form-inline" style="display:block">
							<input  type="text" name="email" size="20" maxlength="20" value="<?=$row->email?>"
										 class="form-control form-control-sm">
						</div>
					</td>
				</tr>
				<tr>
					<td width="20%" class="mycolor2" style="vertical-align:middle">
						생년월일
					</td>
					<td>
					<div class="form-inline">
							<input type="text" name="birthday1" size = "4" maxlength = "4" value = "<?=$birthday1?>" class="form-control form-control-sm"> <font color="898989">년</font>&nbsp
							<input type="text" name='birthday2' size = "2" maxlength = "2" value = "<?=$birthday2?>" class="form-control form-control-sm"> <font color="898989">월</font> &nbsp
							<input type="text" name='birthday3' size = "2" maxlength = "2" value = "<?=$birthday3?>" class="form-control form-control-sm"> <font color="898989">일</font>							
						&nbsp&nbsp&nbsp

						</div>
					</td>
				</tr>
	

				</table>

				<div align="center">
					<input type="submit" value="저장" class="btn btn-sm mycolor1">&nbsp;
					<input type="button" value="이전화면으로" class="btn btn-sm mycolor1" onclick="history.back();">
						
				</div>
				</form>
                                    </div>
                  
                                </div>
                                <!-- END USER DATA-->
                            </div>
 
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>

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
