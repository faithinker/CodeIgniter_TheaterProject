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
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>

    
    <!-- Stylesheets -->
    <!-- jQuery UI --> 
        <link href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="stylesheet">
		<link rel="shortcut icon" href="/~team2/images/icon.ico"/>
		<link rel="icon" href="/~team2/images/icon.png" sizes="16x16"/>
        <!-- Mobile menu -->
        <link href="/~team2/css/gozha-nav.css" rel="stylesheet" />
        <!-- Select -->
        <link href="/~team2/css/external/jquery.selectbox.css" rel="stylesheet" />
        <!-- Swiper slider -->
        <link href="/~team2/css/external/idangerous.swiper.css" rel="stylesheet" />
    
        <!-- Custom -->
        <link href="/~team2/css/style.css?v=1" rel="stylesheet" />

        <!-- Modernizr --> 
        <script src="/~team2/js/external/modernizr.custom.js"></script>
		
		<!-- jQuery 3.1.1--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		<!-- jQuery UI -->
        <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

		<link href="/~team2/my/css/bootstrap.min.css" rel="stylesheet">
		<script src="/~team2/my/js/bootstrap.min.js"></script>
		<script src="/~team2/js/moment-with-locales.min.js"></script>
		<script src="/~team2/js/bootstrap-datetimepicker.js"></script>
		<link href="/~team2/css/bootstrap-datetimepicker.css" rel="stylesheet">

		<link rel="stylesheet" href="/~team2/css/fontawesome-all.min.css">
				<style type="text/css"> #floatdiv { position:fixed; display:inline-block; right:0px; /* 창에서 오른쪽 길이 */ top:30%; /* 창에서 위에서 부터의 높이 */ background-color: transparent; margin:0; } </style>
</head>
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

        
        <!-- Search bar -->
        <div class="search-wrapper">
            <div class="container container--add">
                <form id='search-form' method='get' class="search">
                    <input type="text" class="search__field" placeholder="Search">
                    <select name="sorting_item" id="search-sort" class="search__sort" tabindex="0">
                        <option value="1" selected='selected'>By title</option>
                        <option value="2">By year</option>
                        <option value="3">By producer</option>
                        <option value="4">By title</option>
                        <option value="5">By year</option>
                    </select>
                    <button type='submit' class="btn btn-md btn--danger search__button">search a movie</button>
                </form>
            </div>
        </div>
        
        <!-- Main content -->

        <section class="container">
            <div class="order-container">
                <div class="order">
                    <img class="order__images" alt='' src="images/tickets.png">
                    <p class="order__title">Book a ticket <br><span class="order__descript">and have fun movie time</span></p>
               
                </div>
            </div>
                <div class="order-step-area">
                    <div class="order-step first--step">1. What &amp; Where &amp; When</div>
                </div>

            <h2 class="page-heading heading--outcontainer">Choose a movie</h2>
        </section>
        
        <div class="choose-film">
            <div class="swiper-container">
              <div class="swiper-wrapper">

                 <script>

					

							/*$(function() {
							$(".choose-film__title").click(function(e){
							var b = e.target.getAttribute('id');
							var a = $(this).text();
							console.log(a + b);
							$("span.choosen-area1").html(a);

							});
							});*/
							

							

							$(function() {
							$(".film-images").click(function(e){
							
							var a = $(this).siblings('p.choose-film__title').text();
							var c = $(this).children('#no').val();
							console.log(a + c);
							$("span.choosen-area1").html(a);
							$("#movie_n").val(c);
							});
							});

				 </script>

                  <?
				  foreach ($list as $row){
				  ?>
                  <!--Second Slide-->
                  <div class="swiper-slide">
                        <div class="film-images">
                            <img alt='' src="/~team2/movie_img/<?=$row->poster?>" style="width:200px;height:300px">
							<input type="hidden" id="no" value="<?=$row->no?>">
                        </div>
                        <p class="choose-film__title" id="moviename" style="text-align:center;margin-top:10px;text-weight:bold"><?=$row->name?></p>
                  </div>
				  <?
				  }
				  ?>
                  
                  
         
              </div>
            </div>
        </div>

<script>
	function find_text()
	{                                   // 값이 있는 경우, text1 값 전달
		alert("고객님이 선택하신 날짜는"+form1.text1.value+"입니다");
		var a = form1.text1.value;
		$("#date_n").val(a);
	}

	$(function() {
			$('#text1') .datetimepicker({
				locale: 'ko',
				format: 'YYYY-MM-DD',
				defaultDate: moment()
			});

			$("#text1") .on("dp.change", function (e) {
				find_text();
			});
		});

	$(function(){

		$("#city").on("change",function(){
			var selectbox=$('#city');
			var option_value = selectbox[0].value;
			$("#city_n").val(option_value);
			alert(option_value);
		$.ajax({
					url: "/~team2/book/jijum_list",
					type: "post",
					data:{
						"option_value":option_value
					},
					dataType: 'html',

					complete: function(xhr) {	
					console.log(xhr);

					$("select[id=jijum]").html(xhr.responseText);
					
					},
						
					error:function(request,status,error){
    console.log("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);}

					});
			});

		
	});


	$(function(){
		
		$(document).on("click","#time1",function(){
			var a = $("#time1").text();
			$("span.choosen-area").html(a);
			$("#time_n").val(a);
			console.log(a);

		});
		
		$("#jijum").on("change",function(){
			var selectbox=$('#jijum');
			var option_value = selectbox[0].value;
			alert(option_value);
			$("#jijum_n").val(option_value);

		$.ajax({
					url: "/~team2/book/time_list",
					type: "post",
					data:{
					"option_value":option_value
				},
					dataType: 'html',

					complete: function(xhr) {	
					console.log(xhr);

					$("#time").html(xhr.responseText);
					
				},

					error:function(request,status,error){
					console.log("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);}

				});

			});


		$(".booking-pagination__next").on("click",function(){
			var a = $("#movie_n").val();
			var b = $("#city_n").val();
			var c = $("#jijum_n").val();
			var d = $("#date_n").val();
			var e = $("#time_n").val();

			$.ajax({
						url: "/~team2/book/insertbook",
						type: "post",
						data:{
						"movie_n":a,
						"city_n":b,
						"jijum_n":c,
						"date_n":d,
						"time_n":e
					},
						dataType: 'html',

						complete: function(xhr) {	
							var no = xhr.responseText;
							alert(no);	
							location.href = "/~team2/book/book2";
					},

						error:function(request,status,error){
						console.log("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);}

					});

			});
			

		
	});

								

</script>

        <section class="container">
            <div class="col-sm-12">
			<form name="form2" method="post" action="">
			<!--영화이름 :--> <input type="hidden" name="movie_n" value="" id="movie_n">
			<!--영화도시 :--> <input type="hidden" name="city_n" value="" id="city_n">
			<!--예약날짜 :--> <input type="hidden" name="date_n" value="<?=date("Y-m-d");?>" id="date_n">
			<!--영화지점 :--> <input type="hidden" name="jijum_n" value="" id="jijum_n">
			<!--예약시간 :--> <input type="hidden" name="time_n" value="" id="time_n">
			
			</form>
			<br><br><br><br>

                <div class="choose-indector choose-indector--film">
                    <strong>Choosen: </strong><span class="choosen-area1"></span>
                </div>

                <h2 class="page-heading">City &amp; Date</h2>

				<form name="form1" method="post" action="">				
				<tr>
					<td width="20%" class="mycolor2" style="vertical-align:middle">
						<font color="red">*</font> 도시
					</td>
					<td width="80%" align="left">
						<div class="form-inline" style="display:block">
							<select name="movie_no" class="form-control form-control-sm" id="city">
							  <option value="0" selected>선택하세요</option>
						  <?
						  foreach ( $list1 as $row1) {
						  ?>
                            <option value="<?=$row1->no?>"><?=$row1->name?></option>
                            
						<?
						}	
						?>
                        </select>
							
						</div>				
					</td>
				</tr>

<br>
				<tr>
					<td width="80%" align="left">					            
					<div class="input-group  input-group-sm table-sm date" id="text1">
				<div class="input-group-prepend">
					<font color="red">*</font> <span class="input-group-text">날짜</span>
				</div>
				<input type="text" name="text1" value=" " class="form-control" onKeydown="if (event.keyCode == 13) { find_text(); }" >	
				<div class="input-group-append">
					<div class="input-group-text">
						<div class="input-group-addon"><i class="far fa-calendar-alt fa-lg"></i></div>
						</div>
					</div>
				</div>
			</div>		
					</td>
					</tr>

				
				<tr>
					<td width="20%" class="mycolor2" style="vertical-align:middle">
						<font color="red">*</font> 지점
					</td>
					<td width="80%" align="left">
						<div class="form-inline" style="display:block">
							<select name="jijum_no" class="form-control form-control-sm" id="jijum">
							 
                        </select>
							</select>
						</div>				
					</td>
				</tr>
		</form>

		<br>

           <h2 class="page-heading">Pick time</h2>

                <div class="time-select time-select--wide">
                        <div class="time-select__group ">

                            <ul class="col-sm-6 items-wrap" id="time">
                               
                            </ul>
                        </div>
                      
                    </div>

                <div class="choose-indector choose-indector--time">
                    <strong>Choosen: </strong><span class="choosen-area"></span>
                </div>
            </div>

        </section>

        <div class="clearfix"></div>

 
            <div class="booking-pagination">
                    <a href="#" class="booking-pagination__prev hide--arrow">
                        <span class="arrow__text arrow--prev"></span>
                        <span class="arrow__info"></span>
                    </a>
					

					<script>
			
					</script>
                    <a href="#" class="booking-pagination__next">
                        <span class="arrow__text arrow--next">next step</span>
                        <span class="arrow__info">choose a sit</span>
                    </a>
            </div>

        </form>
        
        <div class="clearfix"></div>

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

        <!-- Migrate --> 
        <script src="/~team2/js/external/jquery-migrate-1.2.1.min.js"></script>
        
        <!-- Bootstrap 3--> 
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>

        <!-- Mobile menu -->
        <script src="/~team2/js/jquery.mobile.menu.js"></script>
         <!-- Select -->
        <script src="/~team2/js/external/jquery.selectbox-0.2.min.js"></script>
        <!-- Swiper slider -->
        <script src="/~team2/js/external/idangerous.swiper.min.js"></script>

        <!-- Form element -->
        <script src="/~team2/js/external/form-element.js"></script>

        <!-- Custom -->
        <script src="/~team2/js/custom.js"></script>
		
		<script type="text/javascript">
            $(document).ready(function() {
                init_BookingOne();
            });

			 $(function() {
            //모든 datepicker에 대한 공통 옵션 설정
            $.datepicker.setDefaults({
                dateFormat: 'yy-mm-dd' //Input Display Format 변경
				
            });
			 });
		</script>
  


</body>
</html>
