<!doctype html>
<html>
<head>
	<!-- Basic Page Needs -->
        <meta charset="utf-8">
        <title>AMovie - News</title>
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
		<link rel="shortcut icon" href="/~team2/images/icon.ico"/>
		<link rel="icon" href="/~team2/images/icon.png" sizes="16x16"/>
        <!-- Mobile menu -->
        <link href="/~team2/css/gozha-nav.css" rel="stylesheet" />
        <!-- Select -->
        <link href="/~team2/css/external/jquery.selectbox.css" rel="stylesheet" />
    
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
								<a href="/~team2/book">예매</a>
								<ul>
									<li class="menu__nav-item"><a href="/~team2/book">예매하기</a></li>
									<li class="menu__nav-item"><a href="movie-page-right.html">상영시간표</a></li>
									<li class="menu__nav-item"><a href="movie-page-full.html">할인안내</a></li>
								</ul>
							</li>
							<li>
								<span class="sub-nav-toggle plus"></span>
								<a href="/~team2/movie/lists">영화</a>
							<li>
								<span class="sub-nav-toggle plus"></span>
								<a href="/~team2/cinema">영화관</a>
								<ul>
									<li class="menu__nav-item"><a href="/~team2/cinema/special">스페셜관</a></li>
									<li class="menu__nav-item"><a href="/~team2/cinema/seoul">서울</a>
									<li class="menu__nav-item"><a href="/~team2/cinema/gyeongin">경기/인천</a></li>
									<li class="menu__nav-item"><a href="/~team2/cinema/chungcheong">충천/대전</a></li>
									<li class="menu__nav-item"><a href="/~team2/cinema/jeonla">전라/광주</a></li>
									<li class="menu__nav-item"><a href="/~team2/cinema/gyeongsang">경남/부산/울산</a></li>
									<li class="menu__nav-item"><a href="/~team2/cinema/gangwon">강원</a></li>
									<li class="menu__nav-item"><a href="/~team2/cinema/jeju">제주</a></li>
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

						if(!$this->session->userdata('uid'))
							echo("
							<a href='/~team2/main/signin' class='btn btn--sign'>로그인</a>
							");
						else { 
							echo("
							
							<div class='auth auth--home'>
								<div class='auth__show'>
									
								</div>
								<a href='#' class='btn btn--sign btn--singin'>$name 님</a>								
								<ul class='auth__function'>
									<li><a href='#' class='auth__function-item'>내가 본 영화</a></li>
									<li><a href='#' class='auth__function-item'>예약 영화</a></li>
									<li><a href='#' class='auth__function-item'>Q&A</a></li>
									<li><a href='#' class='auth__function-item'>개인설정</a></li>
								</ul>								
							</div>
							<a href='/~team2/main/logout' class='btn btn--danger'>로그아웃</a>
							<a href='/~team2/book/' class='btn btn-md btn--warning btn--book btn-control--home'>티켓예약</a>
							");
						}
					?>      
          </div>
					<div id="floatdiv"><table width="90"  border="0" cellpadding="2" cellspacing="1">
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
        <section class="container">
            <div class="overflow-wrapper">
                <div class="col-sm-12">
                
                    <h2 class="page-heading">Board</h2>
                    
                    <!-- News post article-->
                    <article class="post post--news">

                        <h1><?=$row->title; ?></h1>
                        <p class="post__date"><?=$row->term; ?> | 조회수 : <?=$row->hit; ?> </p>
							 
                        <div class="wave-devider"></div>

                        <p class="post__text"><?=$row->contents; ?></p> 

                        <div class="tags">
                                <ul>
                                    <li class="item-wrap">Event</li>
  
                                </ul>
                        </div>

                        <div class="devider-huge"></div>
                    </article> 
                    <!-- end news post article-->

                </div>
            </div>
        </section>
        
        <div class="clearfix"></div>

        <footer class="footer-wrapper">
            <section class="container">
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/external/jquery-3.1.1.min.js"><\/script>')</script>
        <!-- Migrate --> 
        <script src="/~team2/js/external/jquery-migrate-1.2.1.min.js"></script>
        <!-- Bootstrap 3--> 
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>

        <!-- Mobile menu -->
        <script src="/~team2/js/jquery.mobile.menu.js"></script>
         <!-- Select -->
        <script src="/~team2/js/external/jquery.selectbox-0.2.min.js"></script>

        <!-- Twitter feed -->
        <script src="/~team2/js/external/twitterfeed.js"></script>
		
		<!-- Form element -->
        <script src="/~team2/js/external/form-element.js"></script>
        <!-- Form validation -->
        <script src="/~team2/js/form.js"></script>

        <!-- Custom -->
        <script src="/~team2/js/custom.js"></script>

</body>
</html>
