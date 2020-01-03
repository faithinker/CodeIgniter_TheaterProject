<link href="https://event-us.kr/bundles/newstyles?v=oXdge-m2qg2GL4XrzjvLQP7JhdAPCvSoDLPDJB6x2cQ1" type="text/css" rel="stylesheet" media="screen,projection">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<style>

    .login-btn {
        width: 100%;
        line-height: 50px;
        height: 50px;
    }

    .input-field .prefix ~ input {
        margin-left: 0;
        padding-left: 3rem;
    }

    .login_divider {
        height: 2px;
        width: 42px;
        margin: 5px auto;
    }

    body {
        min-height: 100vh;
        flex-direction: column;
    }

    h5 {
        font-size: 1.5rem;
    }

    @media only screen and (min-width: 769px) {
        .sweet-alert {
            left: 51%
        }
    }
</style>

<div class="row">
        <div class="col l4 s12 mx-auto">
            <div>
<form action="/~sale8/admin/check" id="form0" method="post">
<input name="Sub" type="text" hidden="">
                    <input name="AbsolutePath" type="text" value="" hidden="">
                    <br><br>
                    <div class="row">
                        <div class="col s12 center">
                            <h5 class="eventus-purple-text font-weight-bold" style="font-weight:bold">
                                행사관리 로그인
                            </h5>
                        </div>
                        <div class="col s12">
                            <div class="divider eventus-purple login_divider"></div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="input-field col s12 center" style="margin-top:0">

                        </div>
                    </div>
                    <div class="row mt-30 mb-3">
                        <div class=" col s12">
                            <span style="font-weight:bold">이메일(ID)</span>
                            <input class="eventus-input" name="Email" id="username" type="email" required="" placeholder="이메일주소(ID)">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col s12">
                            <span style="font-weight:bold">비밀번호</span>
                            <input class="eventus-input" name="Password" id="password" type="password" required="" placeholder="비밀번호" style="margin-bottom:10px">
                        </div>
                    </div>
                    <div class="row ">
                        <div class=" col s12">
                            <input name="RememberMe" type="checkbox" id="remember-me" value="true">
                            <label for="remember-me">로그인 저장</label>
                            <a class="right black-text" href="/account/ForgotPassword" style="text-decoration:underline">비밀번호 찾기</a>
                        </div>
                        <input name="RememberMe" type="hidden" value="false">
                    </div>
                    <div class="row" style="margin-top:40px">
                        <div class="col s12">
                            <button type="submit" class="eventus-btn eventus-btn-p login-btn">로그인</button>
                        </div>
                    </div>
                    <div class="row" style="margin-top:10px">
                        <div class="col s12">
                            <a href="/account/NonMemberConfirm" class="eventus-btn  eventus-btn-y login-btn">비회원 신청내역 확인</a>
                        </div>
                    </div>
</form>                <div class="row" style="margin-top:40px">
                    <div class="col s12">
                        
<style>
    .sns-btn {
        line-height: 50px;
        height: 50px;
    }
</style>

                    </div>
                </div>
                <div class="row" style="margin:30px auto 10px auto;">

                    <div class="col s12 center">
                        <span>
                            아직 행사관리 회원이 아니신가요? <a class="eventus-purple-text" href="/~sale8/event/signup" style="font-weight:bold">회원가입</a>
                        </span>
                    </div>
                </div>
                <div class="row">
                    
                    
                </div>
            </div>
        </div>
    </div>