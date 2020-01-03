<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>영화 관리 페이지</title>

    <!-- Fontfaces CSS-->
    <link href="/~team2/css/font-face.css" rel="stylesheet" media="all">
    <link href="/~team2/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="/~team2/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="/~team2/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="/~team2/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
	<script src="http://code.jquery.com/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8"></script>

    <!-- Vendor CSS-->
    
    <link href="/~team2/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="/~team2/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="/~team2/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="/~team2/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="/~team2/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/~team2/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="/~team2/css/theme.css" rel="stylesheet" media="all">
    <link href="/~team2/my/css/my.css" rel="stylesheet" media="all">
    <link href="/~team2/my/css/c3.css" rel="stylesheet" media="all">

    <!--D3, Chart JS -->
    <script src="http://gamejigix.induk.ac.kr/~team2/my/js/d3.js"></script>
    <script src="http://d3js.org/topojson.v1.min.js"></script>
    <!--<script src="http://gamejigix.induk.ac.kr/~team2/my/js/map.js"></script> -->
    <script src="http://gamejigix.induk.ac.kr/~team2/my/js/Chart.min.js"></script>
    <script src="http://gamejigix.induk.ac.kr/~team2/my/js/utils.js"></script>
    <script src="http://gamejigix.induk.ac.kr/~team2/my/js/c3.js"></script>
    
</head>
<script>
	
$(function(){
$(".npage-wrapper li").on("click",function(){
$(this).siblings('li').removeClass('active');
            $(this).addClass('active');
        });
}); //안됨



</script>


<body>

    <div class="page-wrapper">

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="/~team2/adminmain">
                    <img src="/~team2/images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li	class="active">
                            <a href="/~team2/adminmain">
                                <i class="fas fa-tachometer-alt"></i>메인화면</a> 
                        </li>
                        <li>
                            <a href="/~team2/adminmember">
                                <i class="fas fa-address-book"></i>멤버</a>
                        </li>
                        <li>
                            <a href="/~team2/adminmovie">
                                <i class="fas fa-video"></i>영화</a>
                        </li>
                        <li>
                            <a href="/~team2/admingenre">
                                <i class="fas fa-window-restore"></i>장르</a>
                        </li>
                        <li>
                            <a class="js-arrow" href="/~team2/adminhall">
                                <i class="fas fa-ticket-alt"></i>영화관</a>
								<ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li >
                                     <a href="/~team2/admincity">도시</a>
                                </li>
                                <li>
                                    <a href="/~team2/adminjijum">지점</a>
                                </li>
                                <li>
                                    <a href="/~team2/adminhall">관</a>
                                </li>
                                
                            </ul>
                        </li>
						<li>
                            <a href="/~team2/admintimetable">
                                <i class="fas fa-calendar-alt"></i>시간표</a>
                        </li>
						
                        <li class="has-sub">
                            <a class="js-arrow" href="">
                                <i class="fa fa-caret-square-o-down"></i>이벤트</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="/~team2/adminevent">모아서 보기</a>
                                </li>
                                <li>
                                    <a href="/~team2/adminevent/movie">영화</a>
                                </li>
                                <li>
                                    <a href="/~team2/adminevent/premiere">시사회/무대인사</a>
                                </li>
                                <li>
                                    <a href="/~team2/adminevent/mycinema">우리동네영화관</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="https://colorlib.com/polygon/cooladmin/index.html">
                                <i class="fas fa-calendar-alt"></i>템플릿 사이트</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                               
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="/~team2/images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">john doe</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="/~team2/images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">john doe</a>
                                                    </h5>
                                                    <span class="email">johndoe@example.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="/~team2/adminlogin/logout">
                                                    <i class="zmdi zmdi-power"></i>로그아웃</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->