<!doctype html>
<html>
<head>
	<!-- Basic Page Needs -->
        <meta charset="utf-8">
        <title>AMovie</title>
        <meta name="description" content="A Template by Gozha.net">
        <meta name="keywords" content="HTML, ESS, JavaScript">
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
    
        <!-- Eustom -->
        <link href="/~team2/css/style.css?v=1" rel="stylesheet" />

        <!-- Modernizr --> 
        <script src="/~team2/js/external/modernizr.custom.js"></script>
		
		 <!-- jQuery 3.1.1--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/~team2/js/external/jquery-3.1.1.min.js"><\/script>')</script>
		<style type="text/css"> #floatdiv { position:fixed; display:inline-block; right:0px; /* 창에서 오른쪽 길이 */ top:30%; /* 창에서 위에서 부터의 높이 */ background-color: transparent; margin:0; } </style>    
</head>

<body>
    <div class="wrapper place-wrapper">
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
        
        
        <!-- Main content -->
        <div class="place-form-area">
        <section class="container">
            <div class="order-container">

	

<?
foreach($list as $row){
?>
			영화이름 : <input type="text" name="movie_n" value="<?=$row->movie_no;?>" id="movie_n">
			영화도시 : <input type="text" name="city_n" value="<?=$row->city_no;?>" id="city_n">
			예약날짜 : <input type="text" name="date_n" value="<?=$row->date_no;?>" id="date_n">
			영화지점 : <input type="text" name="jijum_n" value="<?=$row->jijum_no;?>" id="jijum_n">
			예약시간 : <input type="text" name="time_n" value="<?=$row->time_no;?>" id="time_n">
			선택좌석 : <input type="text" name="seat_n" value="" id="seat_n">
			비싼좌석수 : <input type="text" name="count_n" value="0" id="excount_n">
			중간좌석수 : <input type="text" name="count_n" value="0" id="midcount_n">
			싼좌석수 : <input type="text" name="count_n" value="0" id="chcount_n">
			가격 : <input type="text" name="prices_n" value="0" id="prices_n">
			no : <input type="text" name="no" value="<?=$row->no;?>" id="no">
<?
}	
?>
		<script>
		
 $(window).on('load',function(){
	 $.ajax({
				url: "/~team2/book/findbook",
				type: "post",
				dataType: 'html',

				complete: function(xhr) {	
					var no = xhr.responseText;
					var array = no.split(',');
					console.log(no);
					$(function(){
						for(var i=0;i<array.length;i++){
						if($("#A2").hasClass(array[i])){
							 console.log("있음");
							 $("#A2").addClass("sits-state--not");
							 $("#A2").css('pointer-events','none');
						 }
						 if($("#A3").hasClass(array[i])){
							 console.log("있음");
							 $("#A3").addClass("sits-state--not");
							 $("#A3").css('pointer-events','none');
						 }
						 if($("#A4").hasClass(array[i])){
							 console.log("있음");
							 $("#A4").addClass("sits-state--not");
							 $("#A4").css('pointer-events','none');
						 }
						 if($("#A5").hasClass(array[i])){
							 console.log("있음");
							 $("#A5").addClass("sits-state--not");
							 $("#A5").css('pointer-events','none');
						 }
						 if($("#A6").hasClass(array[i])){
							 console.log("있음");
							 $("#A6").addClass("sits-state--not");
							 $("#A6").css('pointer-events','none');
						 }
						 if($("#A7").hasClass(array[i])){
							 console.log("있음");
							 $("#A7").addClass("sits-state--not");
							 $("#A7").css('pointer-events','none');
						 }
						 if($("#A8").hasClass(array[i])){
							 console.log("있음");
							 $("#A8").addClass("sits-state--not");
							 $("#A8").css('pointer-events','none');
						 }
						 if($("#A9").hasClass(array[i])){
							 console.log("있음");
							 $("#A9").addClass("sits-state--not");
							 $("#A9").css('pointer-events','none');
						 }
						 if($("#A10").hasClass(array[i])){
							 console.log("있음");
							 $("#A10").addClass("sits-state--not");
							 $("#A10").css('pointer-events','none');
						 }
						 if($("#A11").hasClass(array[i])){
							 console.log("있음");
							 $("#A11").addClass("sits-state--not");
							 $("#A11").css('pointer-events','none');
						 }
						 if($("#A12").hasClass(array[i])){
							 console.log("있음");
							 $("#A12").addClass("sits-state--not");
							 $("#A12").css('pointer-events','none');
						 }
						 if($("#A13").hasClass(array[i])){
							 console.log("있음");
							 $("#A13").addClass("sits-state--not");
							 $("#A13").css('pointer-events','none');
						 }
						 if($("#A14").hasClass(array[i])){
							 console.log("있음");
							 $("#A14").addClass("sits-state--not");
							 $("#A14").css('pointer-events','none');
						 }
						 if($("#A15").hasClass(array[i])){
							 console.log("있음");
							 $("#A15").addClass("sits-state--not");
							 $("#A15").css('pointer-events','none');
						 }
						 if($("#A16").hasClass(array[i])){
							 console.log("있음");
							 $("#A16").addClass("sits-state--not");
							 $("#A16").css('pointer-events','none');
						 }
						 if($("#A17").hasClass(array[i])){
							 console.log("있음");
							 $("#A17").addClass("sits-state--not");
							 $("#A17").css('pointer-events','none');
						 }
						 if($("#B2").hasClass(array[i])){
							 console.log("있음");
							 $("#B2").addClass("sits-state--not");
							 $("#B2").css('pointer-events','none');
						 }
						 if($("#B3").hasClass(array[i])){
							 console.log("있음");
							 $("#B3").addClass("sits-state--not");
							 $("#B3").css('pointer-events','none');
						 }
						 if($("#B4").hasClass(array[i])){
							 console.log("있음");
							 $("#B4").addClass("sits-state--not");
							 $("#B4").css('pointer-events','none');
						 }
						 if($("#B5").hasClass(array[i])){
							 console.log("있음");
							 $("#B5").addClass("sits-state--not");
							 $("#B5").css('pointer-events','none');
						 }
						 if($("#B6").hasClass(array[i])){
							 console.log("있음");
							 $("#B6").addClass("sits-state--not");
							 $("#B6").css('pointer-events','none');
						 }
						 if($("#B7").hasClass(array[i])){
							 console.log("있음");
							 $("#B7").addClass("sits-state--not");
							 $("#B7").css('pointer-events','none');
						 }
						 if($("#B8").hasClass(array[i])){
							 console.log("있음");
							 $("#B8").addClass("sits-state--not");
							 $("#B8").css('pointer-events','none');
						 }
						 if($("#B9").hasClass(array[i])){
							 console.log("있음");
							 $("#B9").addClass("sits-state--not");
							 $("#B9").css('pointer-events','none');
						 }
						 if($("#B10").hasClass(array[i])){
							 console.log("있음");
							 $("#B10").addClass("sits-state--not");
							 $("#B10").css('pointer-events','none');
						 }
						 if($("#B11").hasClass(array[i])){
							 console.log("있음");
							 $("#B11").addClass("sits-state--not");
							 $("#B11").css('pointer-events','none');
						 }
						 if($("#B12").hasClass(array[i])){
							 console.log("있음");
							 $("#B12").addClass("sits-state--not");
							 $("#B12").css('pointer-events','none');
						 }
						 if($("#B13").hasClass(array[i])){
							 console.log("있음");
							 $("#B13").addClass("sits-state--not");
							 $("#B13").css('pointer-events','none');
						 }
						 if($("#B14").hasClass(array[i])){
							 console.log("있음");
							 $("#B14").addClass("sits-state--not");
							 $("#B14").css('pointer-events','none');
						 }
						 if($("#B15").hasClass(array[i])){
							 console.log("있음");
							 $("#B15").addClass("sits-state--not");
							 $("#B15").css('pointer-events','none');
						 }
						 if($("#B16").hasClass(array[i])){
							 console.log("있음");
							 $("#B16").addClass("sits-state--not");
							 $("#B16").css('pointer-events','none');
						 }
						 if($("#B17").hasClass(array[i])){
							 console.log("있음");
							 $("#B17").addClass("sits-state--not");
							 $("#B17").css('pointer-events','none');
						 }
						 if($("#B18").hasClass(array[i])){
							 console.log("있음");
							 $("#B18").addClass("sits-state--not");
							 $("#B18").css('pointer-events','none');
						 }
						 if($("#C2").hasClass(array[i])){
							 console.log("있음");
							 $("#C2").addClass("sits-state--not");
							 $("#C2").css('pointer-events','none');
						 }
						 if($("#C3").hasClass(array[i])){
							 console.log("있음");
							 $("#C3").addClass("sits-state--not");
							 $("#C3").css('pointer-events','none');
						 }
						 if($("#C4").hasClass(array[i])){
							 console.log("있음");
							 $("#C4").addClass("sits-state--not");
							 $("#C4").css('pointer-events','none');
						 }
						 if($("#C5").hasClass(array[i])){
							 console.log("있음");
							 $("#C5").addClass("sits-state--not");
							 $("#C5").css('pointer-events','none');
						 }
						 if($("#C6").hasClass(array[i])){
							 console.log("있음");
							 $("#C6").addClass("sits-state--not");
							 $("#C6").css('pointer-events','none');
						 }
						 if($("#C7").hasClass(array[i])){
							 console.log("있음");
							 $("#C7").addClass("sits-state--not");
							 $("#C7").css('pointer-events','none');
						 }
						 if($("#C8").hasClass(array[i])){
							 console.log("있음");
							 $("#C8").addClass("sits-state--not");
							 $("#C8").css('pointer-events','none');
						 }
						 if($("#C9").hasClass(array[i])){
							 console.log("있음");
							 $("#C9").addClass("sits-state--not");
							 $("#C9").css('pointer-events','none');
						 }
						 if($("#C10").hasClass(array[i])){
							 console.log("있음");
							 $("#C10").addClass("sits-state--not");
							 $("#C10").css('pointer-events','none');
						 }
						 if($("#C11").hasClass(array[i])){
							 console.log("있음");
							 $("#C11").addClass("sits-state--not");
							 $("#C11").css('pointer-events','none');
						 }
						 if($("#C12").hasClass(array[i])){
							 console.log("있음");
							 $("#C12").addClass("sits-state--not");
							 $("#C12").css('pointer-events','none');
						 }
						 if($("#C13").hasClass(array[i])){
							 console.log("있음");
							 $("#C13").addClass("sits-state--not");
							 $("#C13").css('pointer-events','none');
						 }
						 if($("#C14").hasClass(array[i])){
							 console.log("있음");
							 $("#C14").addClass("sits-state--not");
							 $("#C14").css('pointer-events','none');
						 }
						 if($("#C15").hasClass(array[i])){
							 console.log("있음");
							 $("#C15").addClass("sits-state--not");
							 $("#C15").css('pointer-events','none');
						 }
						 if($("#C16").hasClass(array[i])){
							 console.log("있음");
							 $("#C16").addClass("sits-state--not");
							 $("#C16").css('pointer-events','none');
						 }
						 if($("#C17").hasClass(array[i])){
							 console.log("있음");
							 $("#C17").addClass("sits-state--not");
							 $("#C17").css('pointer-events','none');
						 }
						 if($("#C18").hasClass(array[i])){
							 console.log("있음");
							 $("#C18").addClass("sits-state--not");
							 $("#C18").css('pointer-events','none');
						 }
						 if($("#D2").hasClass(array[i])){
							 console.log("있음");
							 $("#D2").addClass("sits-state--not");
							 $("#D2").css('pointer-events','none');
						 }
						 if($("#D3").hasClass(array[i])){
							 console.log("있음");
							 $("#D3").addClass("sits-state--not");
							 $("#D3").css('pointer-events','none');
						 }
						 if($("#D4").hasClass(array[i])){
							 console.log("있음");
							 $("#D4").addClass("sits-state--not");
							 $("#D4").css('pointer-events','none');
						 }
						 if($("#D5").hasClass(array[i])){
							 console.log("있음");
							 $("#D5").addClass("sits-state--not");
							 $("#D5").css('pointer-events','none');
						 }
						 if($("#D6").hasClass(array[i])){
							 console.log("있음");
							 $("#D6").addClass("sits-state--not");
							 $("#D6").css('pointer-events','none');
						 }
						 if($("#D7").hasClass(array[i])){
							 console.log("있음");
							 $("#D7").addClass("sits-state--not");
							 $("#D7").css('pointer-events','none');
						 }
						 if($("#D8").hasClass(array[i])){
							 console.log("있음");
							 $("#D8").addClass("sits-state--not");
							 $("#D8").css('pointer-events','none');
						 }
						 if($("#D9").hasClass(array[i])){
							 console.log("있음");
							 $("#D9").addClass("sits-state--not");
							 $("#D9").css('pointer-events','none');
						 }
						 if($("#D10").hasClass(array[i])){
							 console.log("있음");
							 $("#D10").addClass("sits-state--not");
							 $("#D10").css('pointer-events','none');
						 }
						 if($("#D11").hasClass(array[i])){
							 console.log("있음");
							 $("#D11").addClass("sits-state--not");
							 $("#D11").css('pointer-events','none');
						 }
						 if($("#D12").hasClass(array[i])){
							 console.log("있음");
							 $("#D12").addClass("sits-state--not");
							 $("#D12").css('pointer-events','none');
						 }
						 if($("#D13").hasClass(array[i])){
							 console.log("있음");
							 $("#D13").addClass("sits-state--not");
							 $("#D13").css('pointer-events','none');
						 }
						 if($("#D14").hasClass(array[i])){
							 console.log("있음");
							 $("#D14").addClass("sits-state--not");
							 $("#D14").css('pointer-events','none');
						 }
						 if($("#D15").hasClass(array[i])){
							 console.log("있음");
							 $("#D15").addClass("sits-state--not");
							 $("#D15").css('pointer-events','none');
						 }
						 if($("#D16").hasClass(array[i])){
							 console.log("있음");
							 $("#D16").addClass("sits-state--not");
							 $("#D16").css('pointer-events','none');
						 }
						 if($("#E2").hasClass(array[i])){
							 console.log("있음");
							 $("#E2").addClass("sits-state--not");
							 $("#E2").css('pointer-events','none');
						 }
						 if($("#E3").hasClass(array[i])){
							 console.log("있음");
							 $("#E3").addClass("sits-state--not");
							 $("#E3").css('pointer-events','none');
						 }
						 if($("#E4").hasClass(array[i])){
							 console.log("있음");
							 $("#E4").addClass("sits-state--not");
							 $("#E4").css('pointer-events','none');
						 }
						 if($("#E5").hasClass(array[i])){
							 console.log("있음");
							 $("#E5").addClass("sits-state--not");
							 $("#E5").css('pointer-events','none');
						 }
						 if($("#E6").hasClass(array[i])){
							 console.log("있음");
							 $("#E6").addClass("sits-state--not");
							 $("#E6").css('pointer-events','none');
						 }
						 if($("#E7").hasClass(array[i])){
							 console.log("있음");
							 $("#E7").addClass("sits-state--not");
							 $("#E7").css('pointer-events','none');
						 }
						 if($("#E8").hasClass(array[i])){
							 console.log("있음");
							 $("#E8").addClass("sits-state--not");
							 $("#E8").css('pointer-events','none');
						 }
						 if($("#E9").hasClass(array[i])){
							 console.log("있음");
							 $("#E9").addClass("sits-state--not");
							 $("#E9").css('pointer-events','none');
						 }
						 if($("#E10").hasClass(array[i])){
							 console.log("있음");
							 $("#E10").addClass("sits-state--not");
							 $("#E10").css('pointer-events','none');
						 }
						 if($("#E11").hasClass(array[i])){
							 console.log("있음");
							 $("#E11").addClass("sits-state--not");
							 $("#E11").css('pointer-events','none');
						 }
						 if($("#E12").hasClass(array[i])){
							 console.log("있음");
							 $("#E12").addClass("sits-state--not");
							 $("#E12").css('pointer-events','none');
						 }
						 if($("#E13").hasClass(array[i])){
							 console.log("있음");
							 $("#E13").addClass("sits-state--not");
							 $("#E13").css('pointer-events','none');
						 }
						 if($("#E14").hasClass(array[i])){
							 console.log("있음");
							 $("#E14").addClass("sits-state--not");
							 $("#E14").css('pointer-events','none');
						 }
						 if($("#E15").hasClass(array[i])){
							 console.log("있음");
							 $("#E15").addClass("sits-state--not");
							 $("#E15").css('pointer-events','none');
						 }
						 if($("#E16").hasClass(array[i])){
							 console.log("있음");
							 $("#E16").addClass("sits-state--not");
							 $("#E16").css('pointer-events','none');
						 }
						 if($("#E17").hasClass(array[i])){
							 console.log("있음");
							 $("#E17").addClass("sits-state--not");
							 $("#E17").css('pointer-events','none');
						 }
						 if($("#E18").hasClass(array[i])){
							 console.log("있음");
							 $("#E18").addClass("sits-state--not");
							 $("#E5").css('pointer-events','none');
						 }
						 if($("#F2").hasClass(array[i])){
							 console.log("있음");
							 $("#F2").addClass("sits-state--not");
							 $("#F2").css('pointer-events','none');
						 }
						 if($("#F3").hasClass(array[i])){
							 console.log("있음");
							 $("#F3").addClass("sits-state--not");
							 $("#F3").css('pointer-events','none');
						 }
						 if($("#F4").hasClass(array[i])){
							 console.log("있음");
							 $("#F4").addClass("sits-state--not");
							 $("#F4").css('pointer-events','none');
						 }
						 if($("#F5").hasClass(array[i])){
							 console.log("있음");
							 $("#F5").addClass("sits-state--not");
							 $("#F5").css('pointer-events','none');
						 }
						 if($("#F6").hasClass(array[i])){
							 console.log("있음");
							 $("#F6").addClass("sits-state--not");
							 $("#F6").css('pointer-events','none');
						 }
						 if($("#F7").hasClass(array[i])){
							 console.log("있음");
							 $("#F7").addClass("sits-state--not");
							 $("#F7").css('pointer-events','none');
						 }
						 if($("#F8").hasClass(array[i])){
							 console.log("있음");
							 $("#F8").addClass("sits-state--not");
							 $("#F8").css('pointer-events','none');
						 }
						 if($("#F9").hasClass(array[i])){
							 console.log("있음");
							 $("#F9").addClass("sits-state--not");
							 $("#F9").css('pointer-events','none');
						 }
						 if($("#F10").hasClass(array[i])){
							 console.log("있음");
							 $("#F10").addClass("sits-state--not");
							 $("#F10").css('pointer-events','none');
						 }
						 if($("#F11").hasClass(array[i])){
							 console.log("있음");
							 $("#F11").addClass("sits-state--not");
							 $("#F11").css('pointer-events','none');
						 }
						 if($("#F12").hasClass(array[i])){
							 console.log("있음");
							 $("#F12").addClass("sits-state--not");
							 $("#F12").css('pointer-events','none');
						 }
						 if($("#F13").hasClass(array[i])){
							 console.log("있음");
							 $("#F13").addClass("sits-state--not");
							 $("#F13").css('pointer-events','none');
						 }
						 if($("#F14").hasClass(array[i])){
							 console.log("있음");
							 $("#F14").addClass("sits-state--not");
							 $("#F14").css('pointer-events','none');
						 }
						 if($("#F15").hasClass(array[i])){
							 console.log("있음");
							 $("#F15").addClass("sits-state--not");
							 $("#F15").css('pointer-events','none');
						 }
						 if($("#F16").hasClass(array[i])){
							 console.log("있음");
							 $("#F16").addClass("sits-state--not");
							 $("#F16").css('pointer-events','none');
						 }
						 if($("#F17").hasClass(array[i])){
							 console.log("있음");
							 $("#F17").addClass("sits-state--not");
							 $("#F17").css('pointer-events','none');
						 }
						 if($("#F18").hasClass(array[i])){
							 console.log("있음");
							 $("#F18").addClass("sits-state--not");
							 $("#F18").css('pointer-events','none');
						 }
						 if($("#G1").hasClass(array[i])){
							 console.log("있음");
							 $("#G1").addClass("sits-state--not");
							 $("#G1").css('pointer-events','none');
						 }
						 if($("#G2").hasClass(array[i])){
							 console.log("있음");
							 $("#G2").addClass("sits-state--not");
							 $("#G2").css('pointer-events','none');
						 }
						 if($("#G3").hasClass(array[i])){
							 console.log("있음");
							 $("#G3").addClass("sits-state--not");
							 $("#G3").css('pointer-events','none');
						 }
						 if($("#G4").hasClass(array[i])){
							 console.log("있음");
							 $("#G4").addClass("sits-state--not");
							 $("#G4").css('pointer-events','none');
						 }
						 if($("#G5").hasClass(array[i])){
							 console.log("있음");
							 $("#G5").addClass("sits-state--not");
							 $("#G5").css('pointer-events','none');
						 }
						 if($("#G6").hasClass(array[i])){
							 console.log("있음");
							 $("#G6").addClass("sits-state--not");
							 $("#G6").css('pointer-events','none');
						 }
						 if($("#G7").hasClass(array[i])){
							 console.log("있음");
							 $("#G7").addClass("sits-state--not");
							 $("#G7").css('pointer-events','none');
						 }
						 if($("#G8").hasClass(array[i])){
							 console.log("있음");
							 $("#G8").addClass("sits-state--not");
							 $("#G8").css('pointer-events','none');
						 }
						 if($("#G9").hasClass(array[i])){
							 console.log("있음");
							 $("#G9").addClass("sits-state--not");
							 $("#G9").css('pointer-events','none');
						 }
						 if($("#G10").hasClass(array[i])){
							 console.log("있음");
							 $("#G10").addClass("sits-state--not");
							 $("#G10").css('pointer-events','none');
						 }
						 if($("#G11").hasClass(array[i])){
							 console.log("있음");
							 $("#G11").addClass("sits-state--not");
							 $("#G11").css('pointer-events','none');
						 }
						 if($("#G12").hasClass(array[i])){
							 console.log("있음");
							 $("#G12").addClass("sits-state--not");
							 $("#G12").css('pointer-events','none');
						 }
						 if($("#G13").hasClass(array[i])){
							 console.log("있음");
							 $("#G13").addClass("sits-state--not");
							 $("#G13").css('pointer-events','none');
						 }
						 if($("#G14").hasClass(array[i])){
							 console.log("있음");
							 $("#G14").addClass("sits-state--not");
							 $("#G14").css('pointer-events','none');
						 }
						 if($("#G15").hasClass(array[i])){
							 console.log("있음");
							 $("#G15").addClass("sits-state--not");
							 $("#G15").css('pointer-events','none');
						 }
						 if($("#G16").hasClass(array[i])){
							 console.log("있음");
							 $("#G16").addClass("sits-state--not");
							 $("#G16").css('pointer-events','none');
						 }
						 if($("#G17").hasClass(array[i])){
							 console.log("있음");
							 $("#G17").addClass("sits-state--not");
							 $("#G17").css('pointer-events','none');
						 }
						 if($("#G18").hasClass(array[i])){
							 console.log("있음");
							 $("#G18").addClass("sits-state--not");
							 $("#G18").css('pointer-events','none');
						 }
						 if($("#H2").hasClass(array[i])){
							 console.log("있음");
							 $("#H2").addClass("sits-state--not");
							 $("#H2").css('pointer-events','none');
						 }
						 if($("#H3").hasClass(array[i])){
							 console.log("있음");
							 $("#H3").addClass("sits-state--not");
							 $("#H3").css('pointer-events','none');
						 }
						 if($("#H4").hasClass(array[i])){
							 console.log("있음");
							 $("#H4").addClass("sits-state--not");
							 $("#H4").css('pointer-events','none');
						 }
						 if($("#H5").hasClass(array[i])){
							 console.log("있음");
							 $("#H5").addClass("sits-state--not");
							 $("#H5").css('pointer-events','none');
						 }
						 if($("#H6").hasClass(array[i])){
							 console.log("있음");
							 $("#H6").addClass("sits-state--not");
							 $("#H6").css('pointer-events','none');
						 }
						 if($("#H7").hasClass(array[i])){
							 console.log("있음");
							 $("#H7").addClass("sits-state--not");
							 $("#H7").css('pointer-events','none');
						 }
						 if($("#H8").hasClass(array[i])){
							 console.log("있음");
							 $("#H8").addClass("sits-state--not");
							 $("#H8").css('pointer-events','none');
						 }
						 if($("#H9").hasClass(array[i])){
							 console.log("있음");
							 $("#H9").addClass("sits-state--not");
							 $("#H9").css('pointer-events','none');
						 }
						 if($("#H10").hasClass(array[i])){
							 console.log("있음");
							 $("#H10").addClass("sits-state--not");
							 $("#H10").css('pointer-events','none');
						 }
						 if($("#H11").hasClass(array[i])){
							 console.log("있음");
							 $("#H11").addClass("sits-state--not");
							 $("#H11").css('pointer-events','none');
						 }
						 if($("#H12").hasClass(array[i])){
							 console.log("있음");
							 $("#H12").addClass("sits-state--not");
							 $("#H12").css('pointer-events','none');
						 }
						 if($("#H13").hasClass(array[i])){
							 console.log("있음");
							 $("#H13").addClass("sits-state--not");
							 $("#H13").css('pointer-events','none');
						 }
						 if($("#H14").hasClass(array[i])){
							 console.log("있음");
							 $("#H14").addClass("sits-state--not");
							 $("#H5").css('pointer-events','none');
						 }
						 if($("#H15").hasClass(array[i])){
							 console.log("있음");
							 $("#H15").addClass("sits-state--not");
							 $("#H15").css('pointer-events','none');
						 }
						 if($("#H16").hasClass(array[i])){
							 console.log("있음");
							 $("#H16").addClass("sits-state--not");
							 $("#H16").css('pointer-events','none');
						 }
						 if($("#I2").hasClass(array[i])){
							 console.log("있음");
							 $("#I2").addClass("sits-state--not");
							 $("#I2").css('pointer-events','none');
						 }
						 if($("#I3").hasClass(array[i])){
							 console.log("있음");
							 $("#I3").addClass("sits-state--not");
							 $("#I3").css('pointer-events','none');
						 }
						 if($("#I4").hasClass(array[i])){
							 console.log("있음");
							 $("#I4").addClass("sits-state--not");
							 $("#I4").css('pointer-events','none');
						 }
						 if($("#I5").hasClass(array[i])){
							 console.log("있음");
							 $("#I5").addClass("sits-state--not");
							 $("#I5").css('pointer-events','none');
						 }
						 if($("#I6").hasClass(array[i])){
							 console.log("있음");
							 $("#I6").addClass("sits-state--not");
							 $("#I6").css('pointer-events','none');
						 }
						 if($("#I7").hasClass(array[i])){
							 console.log("있음");
							 $("#I7").addClass("sits-state--not");
							 $("#I7").css('pointer-events','none');
						 }
						 if($("#I8").hasClass(array[i])){
							 console.log("있음");
							 $("#I8").addClass("sits-state--not");
							 $("#I8").css('pointer-events','none');
						 }
						 if($("#I9").hasClass(array[i])){
							 console.log("있음");
							 $("#I9").addClass("sits-state--not");
							 $("#I9").css('pointer-events','none');
						 }
						 if($("#I10").hasClass(array[i])){
							 console.log("있음");
							 $("#I10").addClass("sits-state--not");
							 $("#I10").css('pointer-events','none');
						 }
						 if($("#I11").hasClass(array[i])){
							 console.log("있음");
							 $("#I11").addClass("sits-state--not");
							 $("#I11").css('pointer-events','none');
						 }
						 if($("#I12").hasClass(array[i])){
							 console.log("있음");
							 $("#I12").addClass("sits-state--not");
							 $("#I12").css('pointer-events','none');
						 }
						 if($("#I13").hasClass(array[i])){
							 console.log("있음");
							 $("#I13").addClass("sits-state--not");
							 $("#I13").css('pointer-events','none');
						 }
						 if($("#I14").hasClass(array[i])){
							 console.log("있음");
							 $("#I14").addClass("sits-state--not");
							 $("#I14").css('pointer-events','none');
						 }
						 if($("#J5").hasClass(array[i])){
							 console.log("있음");
							 $("#J5").addClass("sits-state--not");
							 $("#J5").css('pointer-events','none');
						 }
						 if($("#J6").hasClass(array[i])){
							 console.log("있음");
							 $("#J6").addClass("sits-state--not");
							 $("#J6").css('pointer-events','none');
						 }
						 if($("#J7").hasClass(array[i])){
							 console.log("있음");
							 $("#J7").addClass("sits-state--not");
							 $("#J7").css('pointer-events','none');
						 }
						 if($("#J8").hasClass(array[i])){
							 console.log("있음");
							 $("#J8").addClass("sits-state--not");
							 $("#J8").css('pointer-events','none');
						 }
						 if($("#J9").hasClass(array[i])){
							 console.log("있음");
							 $("#J9").addClass("sits-state--not");
							 $("#J9").css('pointer-events','none');
						 }
						 if($("#J10").hasClass(array[i])){
							 console.log("있음");
							 $("#J10").addClass("sits-state--not");
							 $("#J10").css('pointer-events','none');
						 }
						 if($("#J11").hasClass(array[i])){
							 console.log("있음");
							 $("#J11").addClass("sits-state--not");
							 $("#J11").css('pointer-events','none');
						 }
						 if($("#J12").hasClass(array[i])){
							 console.log("있음");
							 $("#J12").addClass("sits-state--not");
							 $("#J12").css('pointer-events','none');
						 }
						 if($("#J13").hasClass(array[i])){
							 console.log("있음");
							 $("#J13").addClass("sits-state--not");
							 $("#J13").css('pointer-events','none');
						 }
						 if($("#J14").hasClass(array[i])){
							 console.log("있음");
							 $("#J14").addClass("sits-state--not");
							 $("#J14").css('pointer-events','none');
						 }
						 if($("#K6").hasClass(array[i])){
							 console.log("있음");
							 $("#K6").addClass("sits-state--not");
							 $("#K6").css('pointer-events','none');
						 }
						 if($("#K7").hasClass(array[i])){
							 console.log("있음");
							 $("#K7").addClass("sits-state--not");
							 $("#K7").css('pointer-events','none');
						 }
						 if($("#K8").hasClass(array[i])){
							 console.log("있음");
							 $("#K8").addClass("sits-state--not");
							 $("#K8").css('pointer-events','none');
						 }
						 if($("#K9").hasClass(array[i])){
							 console.log("있음");
							 $("#K9").addClass("sits-state--not");
							 $("#K9").css('pointer-events','none');
						 }
						 if($("#K10").hasClass(array[i])){
							 console.log("있음");
							 $("#K10").addClass("sits-state--not");
							 $("#K10").css('pointer-events','none');
						 }
						 if($("#K11").hasClass(array[i])){
							 console.log("있음");
							 $("#K11").addClass("sits-state--not");
							 $("#K11").css('pointer-events','none');
						 }
						 if($("#K12").hasClass(array[i])){
							 console.log("있음");
							 $("#K12").addClass("sits-state--not");
							 $("#K12").css('pointer-events','none');
						 }
						 if($("#K13").hasClass(array[i])){
							 console.log("있음");
							 $("#K13").addClass("sits-state--not");
							 $("#K13").css('pointer-events','none');
						 }

						}
					});
					
			},

				error:function(request,status,error){
				console.log("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);}

			});

  console.log("로드됐당");
});


		$(function() {

			$("span.sits__place").on("click",function(){
			var a = $(this).text();	
			var b = $("#seat_n").val();
			$("#seat_n").val(a+","+b);
			var d = Number($("#prices_n").val());

			if($(this).hasClass("sits-price--expensive")){
				var c = $("#excount_n").val();
				c++;
				$("#excount_n").val(c);
				d=d+30;
				$("#prices_n").val(d);
				alert("비싸용"+c);				

			}

			if($(this).hasClass("sits-price--middle")){
				var c = $("#midcount_n").val();
				c++;
				$("#midcount_n").val(c);
				d=d+20;
				$("#prices_n").val(d);
				alert("중간ㅋ");
			}

			if($(this).hasClass("sits-price--cheap")){
				var c = $("#chcount_n").val();
				c++;
				$("#chcount_n").val(c);
				d=d+10;
				$("#prices_n").val(d);
				alert("싸용 ㅎㅎ");
			}

			

		});
		});

		</script>
                <div class="order">
				<br><br>
                    <img class="order__images" alt='' src="/~team2/images/tickets.png">
                    <p class="order__title">Book a ticket <br><span class="order__descript">and have fun movie time</span></p>
                    
                </div>
            </div>
                <div class="order-step-area">
                    <div class="order-step first--step order-step--disable ">1. What &amp; Where &amp; When</div>
                    <div class="order-step second--step">2. Ehoose a sit</div>
                </div>
            
            <div class="choose-sits">
                <div class="choose-sits__info choose-sits__info--first">
                    <ul>
                        <li class="sits-price marker--none"><strong>Price</strong></li>
                        <li class="sits-price sits-price--cheap">$10</li>
                        <li class="sits-price sits-price--middle">$20</li>
                        <li class="sits-price sits-price--expensive">$30</li>
                    </ul>
                </div>

                <div class="choose-sits__info">
                    <ul>
                        <li class="sits-state sits-state--not">Not available</li>
                    </ul>
                </div>
                
                <div class="col-sm-12 col-lg-10 col-lg-offset-1">
                <div class="sits-area hidden-xs">
                    <div class="sits-anchor">screen</div>

                    <div class="sits">
                        <aside class="sits__line">
                            <span class="sits__indecator">A</span>
                            <span class="sits__indecator">B</span>
                            <span class="sits__indecator">E</span>
                            <span class="sits__indecator">D</span>
                            <span class="sits__indecator">E</span>
                            <span class="sits__indecator">F</span>
                            <span class="sits__indecator">G</span>
                            <span class="sits__indecator">I</span>
                            <span class="sits__indecator additional-margin">J</span>
                            <span class="sits__indecator">K</span>
                            <span class="sits__indecator">L</span>
                        </aside>

                            <div class="sits__row">
                                <span class="sits__place sits-price--cheap A2" data-place='A2' data-price='10' id="A2">A2</span>
                                <span class="sits__place sits-price--cheap A3" data-place='A3' data-price='10' id="A3">A3</span>
                                <span class="sits__place sits-price--cheap A4" data-place='A4' data-price='10' id="A4">A4</span>
                                <span class="sits__place sits-price--cheap A5" data-place='A5' data-price='10' id="A5">A5</span>
                                <span class="sits__place sits-price--cheap A6" data-place='A6' data-price='10' id="A6">A6</span>
                                <span class="sits__place sits-price--cheap A7" data-place='A7' data-price='10' id="A7">A7</span>
                                <span class="sits__place sits-price--cheap A8" data-place='A8' data-price='10' id="A8">A8</span>
                                <span class="sits__place sits-price--cheap A9" data-place='A9' data-price='10' id="A9">A9</span>
                                <span class="sits__place sits-price--cheap A10" data-place='A10' data-price='10' id="A10">A10</span>
                                <span class="sits__place sits-price--cheap A11" data-place='A11' data-price='10' id="A11">A11</span>
                                <span class="sits__place sits-price--cheap A12" data-place='A12' data-price='10' id="A12">A12</span>
                                <span class="sits__place sits-price--cheap A13" data-place='A13' data-price='10' id="A13">A13</span>
                                <span class="sits__place sits-price--cheap A14" data-place='A14' data-price='10' id="A14">A14</span>
                                <span class="sits__place sits-price--cheap A15" data-place='A15' data-price='10' id="A15">A15</span>
                                <span class="sits__place sits-price--cheap A16" data-place='A16' data-price='10' id="A16">A16</span>
                                <span class="sits__place sits-price--cheap A17" data-place='A17' data-price='10' id="A17">A17</span>
                            </div>
                            
                            <div class="sits__row">
                                <span class="sits__place sits-price--cheap B2" data-place='B2' data-price='10' id="B2">B2</span>
                                <span class="sits__place sits-price--cheap B3" data-place='B3' data-price='10' id="B3">B3</span>
                                <span class="sits__place sits-price--cheap B4" data-place='B4' data-price='10' id="B4">B4</span>
                                <span class="sits__place sits-price--cheap B5" data-place='B5' data-price='10' id="B5">B5</span>
                                <span class="sits__place sits-price--cheap B6" data-place='B6' data-price='10' id="B6">B6</span>
                                <span class="sits__place sits-price--cheap B7" data-place='B7' data-price='10' id="B7">B7</span>
                                <span class="sits__place sits-price--cheap B8" data-place='B8' data-price='10' id="B8">B8</span>
                                <span class="sits__place sits-price--cheap B9" data-place='B9' data-price='10' id="B9">B9</span>
                                <span class="sits__place sits-price--cheap B10" data-place='B10' data-price='10' id="B10">B10</span>
                                <span class="sits__place sits-price--cheap B11" data-place='B11' data-price='10' id="B11">B11</span>
                                <span class="sits__place sits-price--cheap B12" data-place='B12' data-price='10' id="B12">B12</span>
                                <span class="sits__place sits-price--cheap B13" data-place='B13' data-price='10' id="B13">B13</span>
                                <span class="sits__place sits-price--cheap B14" data-place='B14' data-price='10' id="B14">B14</span>
                                <span class="sits__place sits-price--cheap B15" data-place='B15' data-price='10' id="B15">B15</span>
                                <span class="sits__place sits-price--cheap B16" data-place='B16' data-price='10' id="B16">B16</span>
                                <span class="sits__place sits-price--cheap B17" data-place='B17' data-price='10' id="B17">B17</span>
								<span class="sits__place sits-price--cheap B18" data-place='B18' data-price='10' id="B18">B18</span>
                            </div>

                            <div class="sits__row">
                                <span class="sits__place sits-price--cheap C2" data-place='C2' data-price='10' id="C2">C2</span>
                                <span class="sits__place sits-price--cheap C3" data-place='C3' data-price='10' id="C3">C3</span>
                                <span class="sits__place sits-price--cheap C4" data-place='C4' data-price='10' id="C4">C4</span>
                                <span class="sits__place sits-price--cheap C5" data-place='C5' data-price='10' id="C5">C5</span>
                                <span class="sits__place sits-price--cheap C6" data-place='C6' data-price='10' id="C6">C6</span>
                                <span class="sits__place sits-price--cheap C7" data-place='C7' data-price='10' id="C7">C7</span>
                                <span class="sits__place sits-price--cheap C8" data-place='C8' data-price='10' id="C8">C8</span>
                                <span class="sits__place sits-price--cheap C9" data-place='C9' data-price='10' id="C9">C9</span>
                                <span class="sits__place sits-price--cheap C10" data-place='C10' data-price='10' id="C10">C10</span>
                                <span class="sits__place sits-price--cheap C11" data-place='C11' data-price='10' id="C11">C11</span>
                                <span class="sits__place sits-price--cheap C12" data-place='C12' data-price='10' id="C12">C12</span>
                                <span class="sits__place sits-price--cheap C13" data-place='C13' data-price='10' id="C13">C13</span>
                                <span class="sits__place sits-price--cheap C14" data-place='C14' data-price='10' id="C14">C14</span>
                                <span class="sits__place sits-price--cheap C15" data-place='C15' data-price='10' id="C15">C15</span>
                                <span class="sits__place sits-price--cheap C16" data-place='C16' data-price='10' id="C16">C16</span>
                                <span class="sits__place sits-price--cheap C17" data-place='C17' data-price='10' id="C17">C17</span>
								<span class="sits__place sits-price--cheap C18" data-place='C18' data-price='10' id="C18">C18</span>
                            </div>

                            <div class="sits__row">
                                <span class="sits__place sits-price--cheap D2" data-place='D2' data-price='10' id="D2">D2</span>
                                <span class="sits__place sits-price--cheap D3" data-place='D3' data-price='10' id="D3">D3</span>
                                <span class="sits__place sits-price--cheap D4" data-place='D4' data-price='10' id="D4">D4</span>
                                <span class="sits__place sits-price--cheap D5" data-place='D5' data-price='10' id="D5">D5</span>
                                <span class="sits__place sits-price--cheap D6" data-place='D6' data-price='10' id="D6">D6</span>
                                <span class="sits__place sits-price--cheap sits-state--not" data-place='D7' data-price='10'>D7</span>
                                <span class="sits__place sits-price--cheap sits-state--not" data-place='D8' data-price='10'>D8</span>
                                <span class="sits__place sits-price--cheap D9" data-place='D9' data-price='10' id="D9">D9</span>
                                <span class="sits__place sits-price--cheap D10" data-place='D10' data-price='10' id="D10">D10</span>
                                <span class="sits__place sits-price--cheap D11" data-place='D11' data-price='10' id="D11">D11</span>
                                <span class="sits__place sits-price--cheap D12" data-place='D12' data-price='10' id="D12">D12</span>
                                <span class="sits__place sits-price--cheap D13" data-place='D13' data-price='10' id="D13">D13</span>
                                <span class="sits__place sits-price--cheap D14" data-place='D14' data-price='10' id="D14">D14</span>
                                <span class="sits__place sits-price--cheap D15" data-place='D15' data-price='10' id="D15">D15</span>
                                <span class="sits__place sits-price--cheap D16" data-place='D16' data-price='10' id="D16">D16</span>
                                <span class="sits__place sits-price--cheap D17" data-place='D17' data-price='10' id="D17">D17</span>
								<span class="sits__place sits-price--cheap D18" data-place='D18' data-price='10' id="D18">D18</span>
                            </div>

                            <div class="sits__row">
                                <span class="sits__place sits-price--cheap E2" data-place='E2' data-price='10' id="E2">E2</span>
                                <span class="sits__place sits-price--cheap E3" data-place='E3' data-price='10' id="E3">E3</span>
                                <span class="sits__place sits-price--cheap E4" data-place='E4' data-price='10' id="E4">E4</span>
                                <span class="sits__place sits-price--cheap E5" data-place='E5' data-price='10' id="E5">E5</span>
                                <span class="sits__place sits-price--cheap E6" data-place='E6' data-price='10' id="E6">E6</span>
                                <span class="sits__place sits-price--cheap E7" data-place='E7' data-price='10' id="E7">E7</span>
                                <span class="sits__place sits-price--cheap E8" data-place='E8' data-price='10' id="E8">E8</span>
                                <span class="sits__place sits-price--cheap E9" data-place='E9' data-price='10' id="E9">E9</span>
                                <span class="sits__place sits-price--cheap E10" data-place='E10' data-price='10' id="E10">E10</span>
                                <span class="sits__place sits-price--cheap E11" data-place='E11' data-price='10' id="E11">E11</span>
                                <span class="sits__place sits-price--cheap E12" data-place='E12' data-price='10' id="E12">E12</span>
                                <span class="sits__place sits-price--cheap E13" data-place='E13' data-price='10' id="E13">E13</span>
                                <span class="sits__place sits-price--cheap E14" data-place='E14' data-price='10' id="E14">E14</span>
                                <span class="sits__place sits-price--cheap E15" data-place='E15' data-price='10' id="E15">E15</span>
                                <span class="sits__place sits-price--cheap E16" data-place='E16' data-price='10' id="E16">E16</span>
                                <span class="sits__place sits-price--cheap E17" data-place='E17' data-price='10' id="E17">E17</span>
								<span class="sits__place sits-price--cheap E18" data-place='E18' data-price='10' id="E18">E18</span>
                            </div>

                            <div class="sits__row">
                                <span class="sits__place sits-price--middle F2" data-place='F2' data-price='20' id="F2">F2</span>
                                <span class="sits__place sits-price--middle F3" data-place='F3' data-price='20' id="F3">F3</span>
                                <span class="sits__place sits-price--middle F4" data-place='F4' data-price='20' id="F4">F4</span>
                                <span class="sits__place sits-price--middle F5" data-place='F5' data-price='20' id="F5">F5</span>
                                <span class="sits__place sits-price--middle F6" data-place='F6' data-price='20' id="F6">F6</span>
                                <span class="sits__place sits-price--middle F7" data-place='F7' data-price='20' id="F7">F7</span>
                                <span class="sits__place sits-price--middle F8" data-place='F8' data-price='20' id="F8">F8</span>
                                <span class="sits__place sits-price--middle F9" data-place='F9' data-price='20' id="F9">F9</span>
                                <span class="sits__place sits-price--middle F10" data-place='F10' data-price='20' id="F10">F10</span>
                                <span class="sits__place sits-price--middle F11" data-place='F11' data-price='20' id="F11">F11</span>
                                <span class="sits__place sits-price--middle F12" data-place='F12' data-price='20' id="F12">F12</span>
                                <span class="sits__place sits-price--middle F13" data-place='F13' data-price='20' id="F13">F13</span>
                                <span class="sits__place sits-price--middle F14" data-place='F14' data-price='20' id="F14">F14</span>
                                <span class="sits__place sits-price--middle F15" data-place='F15' data-price='20' id="F15">F15</span>
                                <span class="sits__place sits-price--middle F16" data-place='F16' data-price='20' id="F16">F16</span>
                                <span class="sits__place sits-price--middle F17" data-place='F17' data-price='20' id="F17">F17</span>
								<span class="sits__place sits-price--middle F18" data-place='F18' data-price='20' id="F18">F18</span>
                            </div>

                            <div class="sits__row">
                                <span class="sits__place sits-price--middle G2" data-place='G2' data-price='20' id="G2">G2</span>
                                <span class="sits__place sits-price--middle G3" data-place='G3' data-price='20' id="G3">G3</span>
                                <span class="sits__place sits-price--middle G4" data-place='G4' data-price='20' id="G4">G4</span>
                                <span class="sits__place sits-price--middle G5" data-place='G5' data-price='20' id="G5">G5</span>
                                <span class="sits__place sits-price--middle G6" data-place='G6' data-price='20' id="G6">G6</span>
                                <span class="sits__place sits-price--middle G7" data-place='G7' data-price='20' id="G7">G7</span>
                                <span class="sits__place sits-price--middle G8" data-place='G8' data-price='20' id="G8">G8</span>
                                <span class="sits__place sits-price--middle G9" data-place='G9' data-price='20' id="G9">G9</span>
                                <span class="sits__place sits-price--middle G10" data-place='G10' data-price='20' id="G10">G10</span>
                                <span class="sits__place sits-price--middle G11" data-place='G11' data-price='20' id="G11">G11</span>
                                <span class="sits__place sits-price--middle G12" data-place='G12' data-price='20' id="G12">G12</span>
                                <span class="sits__place sits-price--middle G13" data-place='G13' data-price='20' id="G13">G13</span>
                                <span class="sits__place sits-price--middle G14" data-place='G14' data-price='20' id="G14">G14</span>
                                <span class="sits__place sits-price--middle G15" data-place='G15' data-price='20' id="G15">G15</span>
                                <span class="sits__place sits-price--middle G16" data-place='G16' data-price='20' id="G16">G16</span>
                                <span class="sits__place sits-price--middle G17" data-place='G17' data-price='20' id="G17">G17</span>
								<span class="sits__place sits-price--middle G18" data-place='G18' data-price='20' id="G18">G18</span>
                            </div>

                            <div class="sits__row">
                                <span class="sits__place sits-price--middle H2" data-place='H2' data-price='20' id="H2">H2</span>
                                <span class="sits__place sits-price--middle H3" data-place='H3' data-price='20' id="H3">H3</span>
                                <span class="sits__place sits-price--middle H4" data-place='H4' data-price='20' id="H4">H4</span>
                                <span class="sits__place sits-price--middle H5" data-place='H5' data-price='20' id="H5">H5</span>
                                <span class="sits__place sits-price--middle H6" data-place='H6' data-price='20' id="H6">H6</span>
                                <span class="sits__place sits-price--middle H7" data-place='H7' data-price='20' id="H7">H7</span>
                                <span class="sits__place sits-price--middle H8" data-place='H8' data-price='20' id="H8">H8</span>
                                <span class="sits__place sits-price--middle H9" data-place='H9' data-price='20' id="H9">H9</span>
                                <span class="sits__place sits-price--middle H10" data-place='H20' data-price='20' id="H10">H10</span>
                                <span class="sits__place sits-price--middle H11" data-place='H11' data-price='20' id="H11">H11</span>
                                <span class="sits__place sits-price--middle H12" data-place='H12' data-price='20' id="H12">H12</span>
                                <span class="sits__place sits-price--middle H13" data-place='H13' data-price='20' id="H13">H13</span>
                                <span class="sits__place sits-price--middle H14" data-place='H14' data-price='20' id="H14">H14</span>
                                <span class="sits__place sits-price--middle H15" data-place='H15' data-price='20' id="H15">H15</span>
                                <span class="sits__place sits-price--middle H16" data-place='H16' data-price='20' id="H16">H16</span>
                            </div>

                            <div class="sits__row additional-margin">
                                <span class="sits__place sits-price--expensive I2" data-place='I2' data-price='30' id="I2">I2</span>
                                <span class="sits__place sits-price--expensive I3" data-place='I3' data-price='30' id="I3">I3</span>
                                <span class="sits__place sits-price--expensive I4" data-place='I4' data-price='30' id="I4">I4</span>
                                <span class="sits__place sits-price--expensive I5" data-place='I5' data-price='30' id="I5">I5</span>
                                <span class="sits__place sits-price--expensive I6" data-place='I6' data-price='30' id="I6">I6</span>
                                <span class="sits__place sits-price--expensive I7" data-place='I7' data-price='30' id="I7">I7</span>
                                <span class="sits__place sits-price--expensive I8" data-place='I8' data-price='30' id="I8">I8</span>
                                <span class="sits__place sits-price--expensive I9" data-place='I9' data-price='30' id="I9">I9</span>
                                <span class="sits__place sits-price--expensive I10" data-place='I10' data-price='30' id="I10">I10</span>
                                <span class="sits__place sits-price--expensive I11" data-place='I11' data-price='30' id="I11">I11</span>
                                <span class="sits__place sits-price--expensive I12" data-place='I12' data-price='30' id="I12">I12</span>
                                <span class="sits__place sits-price--expensive I13" data-place='I13' data-price='30' id="I13">I13</span>
                                <span class="sits__place sits-price--expensive I14" data-place='I14' data-price='30' id="I14">I14</span>
                            </div>

                            <div class="sits__row">
                                <span class="sits__place sits-price--expensive J5" data-place='J5' data-price='30' id="J5">J5</span>
                                <span class="sits__place sits-price--expensive J6" data-place='J6' data-price='30' id="J6">J6</span>
                                <span class="sits__place sits-price--expensive J7" data-place='J7' data-price='30' id="J7">J7</span>
                                <span class="sits__place sits-price--expensive J8" data-place='J8' data-price='30' id="J8">J8</span>
                                <span class="sits__place sits-price--expensive J9" data-place='J9' data-price='30' id="J9">J9</span>
                                <span class="sits__place sits-price--expensive J10" data-place='J10' data-price='30' id="J10">J10</span>
                                <span class="sits__place sits-price--expensive J11" data-place='J11' data-price='30' id="J11">J11</span>
                                <span class="sits__place sits-price--expensive J12" data-place='J12' data-price='30' id="J12">J12</span>
                                <span class="sits__place sits-price--expensive J13" data-place='J13' data-price='30' id="J13">J13</span>
                                <span class="sits__place sits-price--expensive J14" data-place='J14' data-price='30' id="J14">J14</span>
                            </div>

                            <div class="sits__row">
                                 <span class="sits__place sits-price--expensive K6" data-place='K6' data-price='30' id="K6">K6</span>
                                <span class="sits__place sits-price--expensive K7" data-place='K7' data-price='30' id="K7">K7</span>
                                <span class="sits__place sits-price--expensive K8" data-place='K8' data-price='30' id="K8">K8</span>
                                <span class="sits__place sits-price--expensive K9" data-place='K9' data-price='30' id="K9">K9</span>
                                <span class="sits__place sits-price--expensive K10" data-place='K10' data-price='30' id="K10">K10</span>
                                <span class="sits__place sits-price--expensive K11" data-place='K11' data-price='30' id="K11">K11</span>
                                <span class="sits__place sits-price--expensive K12" data-place='K12' data-price='30' id="K12">K12</span>
                                <span class="sits__place sits-price--expensive K13" data-place='K13' data-price='30' id="K13">K13</span>
                            </div>

                        <aside class="sits__checked">
                            <div class="checked-place">
                                
                            </div>
                            <div class="checked-result" id="result">
                                $0
                            </div>
                        </aside>
                        <footer class="sits__number">
                            <span class="sits__indecator">1</span>
                            <span class="sits__indecator">2</span>
                            <span class="sits__indecator">3</span>
                            <span class="sits__indecator">4</span>
                            <span class="sits__indecator">5</span>
                            <span class="sits__indecator">6</span>
                            <span class="sits__indecator">7</span>
                            <span class="sits__indecator">8</span>
                            <span class="sits__indecator">9</span>
                            <span class="sits__indecator">10</span>
                            <span class="sits__indecator">11</span>
                            <span class="sits__indecator">12</span>
                            <span class="sits__indecator">13</span>
                            <span class="sits__indecator">14</span>
                            <span class="sits__indecator">15</span>
                            <span class="sits__indecator">16</span>
                            <span class="sits__indecator">17</span>
                            <span class="sits__indecator">18</span>
                        </footer>
                    </div>
                </div>
            </div>
                
            <div class="col-sm-12 visible-xs"> 
                <div class="sits-area--mobile">
                    <div class="sits-area--mobile-wrap">
                        <div class="sits-select">
                            <select name="sorting_item" class="sits__sort sit-row" tabindex="0">
                                    <option value="1" selected='selected'>A</option>
                                    <option value="2">B</option>
                                    <option value="3">E</option>
                                    <option value="4">D</option>
                                    <option value="5">E</option>
                                    <option value="6">F</option>
                                    <option value="7">G</option>
                                    <option value="8">I</option>
                                    <option value="9">J</option>
                                    <option value="10">K</option>
                                    <option value="11">L</option>
                            </select>
 
                            <select name="sorting_item" class="sits__sort sit-number" tabindex="1">
                                    <option value="1" selected='selected'>1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                            </select>

                            <a href="#" class="btn btn-md btn--warning toogle-sits">Ehoose sit</a>
                        </div>
                    </div>

                    <a href="#" class="watchlist add-sits-line">Add new sit</a>

                    <aside class="sits__checked">
                            <div class="checked-place">
                                <span class="choosen-place"></span>
                            </div>
                            <div class="checked-result" >
                                $0
                            </div>
                    </aside>

                    <img alt="" src="/~team2/images/components/sits_mobile.png">
                </div>
            </div>   
                
            </div>
                

            </div>
        </section>
        </div>
        
        

        <div class="clearfix"></div>
        <form id='film-and-time' class="booking-form" method='get' action=''>

            <input type='text' name='choosen-number' class="choosen-number">
            <input type='text' name='choosen-number--cheap' class="choosen-number--cheap">
            <input type='text' name='choosen-number--middle' class="choosen-number--middle">
            <input type='text' name='choosen-number--expansive' class="choosen-number--expansive">
            <input type='text' name='choosen-cost' class="choosen-cost">
            <input type='text' name='choosen-sits' class="choosen-sits">


            <div class="booking-pagination booking-pagination--margin">
                    <!--<a href="book1.html" class="booking-pagination__prev">
                        <span class="arrow__text arrow--prev">prev step</span>
                        <span class="arrow__info">what&amp;where&amp;when</span>
                    </a>-->

<script>
$(function(){

			$(".booking-pagination__next").on("click",function(){
			var a = $("#movie_n").val();
			var b = $("#city_n").val();
			var c = $("#jijum_n").val();
			var d = $("#date_n").val();
			var e = $("#time_n").val();
			var f = $("#seat_n").val();
			var g =(parseInt($("#excount_n").val())+parseInt($("#midcount_n").val())+parseInt($("#chcount_n").val()));
			var j = $("#prices_n").val();
			var h = $("#no").val();

			$.ajax({
						url: "/~team2/book/updatebook",
						type: "post",
						data:{
						"movie_n":a,
						"city_n":b,
						"jijum_n":c,
						"date_n":d,
						"time_n":e,
						"seat_n":f,
						"count_n":g,
						"prices_n":j,
						"no":h
					},
						dataType: 'html',

						complete: function(xhr) {	
							var no = xhr.responseText;
							alert(no);	
							location.href = "/~team2/book/book3";
					},

						error:function(request,status,error){
						console.log("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);}

					});

			});

			});
</script>

                    <a href="#" class="booking-pagination__next">
                        <span class="arrow__text arrow--next">next step</span>
                        <span class="arrow__info">checkout</span>
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
                    <button type="button" class="overlay-close">Elose</button>
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

        <!-- Form element -->
        <script src="/~team2/js/external/form-element.js"></script>
        <!-- Form validation -->
        <script src="/~team2/js/form.js"></script>

        <!-- Eustom -->
        <script src="/~team2/js/custom.js"></script>
		
		<script type="text/javascript">
            $(document).ready(function() {
                init_BookingTwo();
            });
		</script>

</body>
</html>
