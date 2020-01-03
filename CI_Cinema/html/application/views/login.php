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

			<!-- Modernizr --> 
			<script src="/~team2/js/external/modernizr.custom.js"></script>
    
    
</head>

<body>
    <div class="wrapper">
        <!-- Header section -->
        <header class="header-wrapper">
            <div class="container">
                <!-- Logo link-->
                <a href='index.html' class="logo">
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
									<li class="menu__nav-item"><a href="book1.html">스페셜관</a></li>
									<li class="menu__nav-item"><a href="book2.html">서울</a>
									<li class="menu__nav-item"><a href="book2.html">경기/인천</a></li>
									<li class="menu__nav-item"><a href="book2.html">충천/대전</a></li>
									<li class="menu__nav-item"><a href="book2.html">전라/광주</a></li>
									<li class="menu__nav-item"><a href="book3-reserve.html">경남/부산/울산</a></li>
									<li class="menu__nav-item"><a href="book-final.html">강원</a></li>
									<li class="menu__nav-item"><a href="book-final.html">제주</a></li>
								</ul>
							</li>
							<li>
								<span class="sub-nav-toggle plus"></span><font color="#b4b1b2">
								이벤트</font>
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
							<li>
								<span class="sub-nav-toggle plus"></span>
								<a href="#">Mega menu</a>
								   <ul class="mega-menu container">
										<li class="col-md-3 mega-menu__coloum">
											<h4 class="mega-menu__heading">Now in the cinema</h4>
											 <ul class="mega-menu__list">
												<li class="mega-menu__nav-item"><a href="#">The Counselor</a></li>
												<li class="mega-menu__nav-item"><a href="#">Bad Grandpa</a></li>
												<li class="mega-menu__nav-item"><a href="#">Blue Is the Warmest Color</a></li>
												<li class="mega-menu__nav-item"><a href="#">Capital</a></li>
												<li class="mega-menu__nav-item"><a href="#">Spinning Plates</a></li>
												<li class="mega-menu__nav-item"><a href="#">Bastards</a></li>
											  </ul>
										  </li>
											
										  <li class="col-md-3 mega-menu__coloum mega-menu__coloum--outheading">
											  <ul class="mega-menu__list">
												<li class="mega-menu__nav-item"><a href="#">Gravity</a></li>
												<li class="mega-menu__nav-item"><a href="#">Captain Phillips</a></li>
												<li class="mega-menu__nav-item"><a href="#">Carrie</a></li>
												<li class="mega-menu__nav-item"><a href="#">Cloudy with a Chance of Meatballs 2</a></li>
											  </ul>
										  </li>
										  
										  <li class="col-md-3 mega-menu__coloum">
											<h4 class="mega-menu__heading">Ending soon</h4>
											  <ul class="mega-menu__list">
												<li class="mega-menu__nav-item"><a href="#">Escape Plan</a></li>
												<li class="mega-menu__nav-item"><a href="#">Rush</a></li>
												<li class="mega-menu__nav-item"><a href="#">Prisoners</a></li>
												<li class="mega-menu__nav-item"><a href="#">Enough Said</a></li>
												<li class="mega-menu__nav-item"><a href="#">The Fifth Estate</a></li>
												<li class="mega-menu__nav-item"><a href="#">Runner Runner</a></li>
											  </ul>
										  </li>
										
										  <li class="col-md-3 mega-menu__coloum mega-menu__coloum--outheading">
											  <ul class="mega-menu__list">
												<li class="mega-menu__nav-item"><a href="#">Insidious: Chapter 2</a></li>
											  </ul>
										  </li>
								   </ul>
							</li>
						</ul>
                </nav>
            </div>
        </header>
        
        <!-- Main content -->
        <form id="login-form" class="login" method='POST' novalidate=''>
            <p class="login__title">회원가입 하기<br><span class="login-edition">영화관에 오신것을 환영합니다.</span></p>

            <div class="social social--colored">
                    <a href='#' class="social__variant fa fa-facebook"></a>
                    <a href='#' class="social__variant fa fa-twitter"></a>
                    <a href='#' class="social__variant fa fa-tumblr"></a>
            </div>

            <p class="login__tracker">or</p>
            
            <div class="field-wrap">
                <input type='text' placeholder='이름' name='name' value="<?=set_value("name"); ?>" class="login__input">
                    <? if (form_error("name")==true) echo form_error("name"); ?>
                <input type='text' placeholder='아이디' name='uid'value="<?=set_value("uid"); ?>" class="login__input">
                    <? if (form_error("uid")==true) echo form_error("uid"); ?>
                <input type='password' placeholder='비밀번호' name='pwd' value="<?=set_value("pwd"); ?>" class="login__input">
                    <? if (form_error("pwd")==true) echo form_error("pwd"); ?>
                <input type='text' placeholder='전화번호' name='tel' class="login__input">
                <input type='text' placeholder='이메일' name='email' class="login__input">
                <input type='date' placeholder='생일' name='birth' class="login__input">
                <div class="row">
                    <div class="col-sm-6">
                        <span class="checkbox"></span><label for="#lunar1" class="login__check-info">양력</label>
                        <input type="checkbox" id="#lunar1" class="login__check styled">
                        
                    </div>
                    <div class="col-sm-6">
                        <span class="checkbox"></span><label for="#lunar2" class="login__check-info">음력</label>
                        <input type="checkbox" id="#lunar2" class="login__check styled">
                        
                    </div>
                </div>
                
                
            
            <!-- <label for='sm' >양력</label> <input type="radio" id="sm">
            <input type='radio'  name='uid' value="양력">양력 -->
            </div>
            <br>
            <div class="login__control">
                <button type='submit' class="btn btn-md btn--warning btn--wider">회원가입</button>  
            </div>
        </form>
        
        <div class="clearfix"></div>
    </div>

    <footer class="footer-wrapper footer-wrapper--mod">
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
