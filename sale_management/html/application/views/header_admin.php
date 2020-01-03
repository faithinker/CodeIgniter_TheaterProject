<!DOCTYPE html>
<html lang="kr">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>판매관리</title>

<link href="/~sale8/my/css/bootstrap.min.css" rel="stylesheet">
<link  href="/~sale8/my/css/bootstrap-datetimepicker.css" rel="stylesheet">
<link  href="/~sale8/my/css/fontawesome-all.min.css" rel="stylesheet">
<!-- <link href="/~sale8/my/css/slick.css" rel="stylesheet"> -->
 <!--<link href="/~sale8/my/css/my.scss" rel="stylesheet">-->
<link href="/~sale8/my/css/my.css" rel="stylesheet">
<!-- <link rel="stylesheet" type="text/css" href="my/css/slick-my.css"> -->

<script src="/~sale8/my/js/jquery-3.3.1.min.js"></script>
<script src="/~sale8/my/js/popper.min.js"></script>
<script src="/~sale8/my/js/bootstrap.min.js"></script>
<script src="/~sale8/my/js/popper.min.js"></script>
<script src="/~sale8/my/js/moment-with-locales.min.js"></script>
<script src="/~sale8/my/js/bootstrap-datetimepicker.js"></script>
<!-- <script src="/~sale8/my/js/slick.min.js"></script> -->
<script src="/~sale8/my/js/my.js"></script>



</head>
<body>
<div class="container-fluid"><!-- container:고정된 가로 폭 / container-fluid:화면 전체 가로 폭 -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/~sale8/event">이벤트 관리</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav mr-auto"> <!-- mr-auto: 양쪽 정렬 -->
      <li class="nav-item">
      <a class="nav-link" href="/~sale8">홈</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="/~sale8/event/add">이벤트 등록</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="/~sale8/event/speaker">발화자 등록</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/~sale8/event">개인과제</a>
      </li>
    </ul>
    <?
    if(!$this->session->userdata('uid'))
      echo("<a href='#exampleModal' data-toggle='modal' class='btn btn-sm btn-outline-secondary btn-dark'>로그인</a>");
    else
      echo("<a href='/~sale8/login/logout' data-toggle='modal' class='btn btn-sm btn-outline-secondary btn-dark'>로그아웃</a>");
  ?>
</div>
</nav>
<!-- Modal Login -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header mycolor1">
        <h4 class="modal-title" id="exampleModalLabel">로그인</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body bg-light" style="text-align:center">
        <form name="form_login" method="post" action="/~sale8/login/check">
          <div class="form-inline">
            아이디 : &nbsp;&nbsp;
            <input type="text" name="uid8" size="15" value="" class="form-control form-control-sm">
          </div>
		  <div style="height:10px"></div>
          <div class="form-inline">
			암 &nbsp;&nbsp; 호 : &nbsp;&nbsp;
			<input type="password" name="pwd8" size="15" value="" class="form-control form-control-sm">
          </div>
        </form>
      </div>
      <div class="modal-footer alert-secondary" style="text-align:center">
        <button type="button" class="btn btn-sm btn-secondary" onClick="javascript:form_login.submit();">확인</button>
        <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">닫기</button>
      </div>
    </div>
  </div>
</div>




