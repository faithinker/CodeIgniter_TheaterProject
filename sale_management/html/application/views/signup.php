<link href="https://event-us.kr/bundles/newstyles?v=oXdge-m2qg2GL4XrzjvLQP7JhdAPCvSoDLPDJB6x2cQ1" type="text/css" rel="stylesheet" media="screen,projection">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<style>
    /*.button-s {
        padding: 0;
        font-size: 10px;
    }*/
    .signup-btn, .loginbtn {
        line-height: 45px;
        height: 45px;
    }

    body.grey.lighten-3 {
        background: transparent !important;
    }

    label {
        width: auto !important;
    }

    .attIMG img {
        width: 100%;
    }

    .iconStyle {
        font-size: 30px;
        line-height: inherit;
        color: gray;
        width: 10%;
    }

    .abtnStyle {
        padding: 0 10px;
        display: inline;
        border-radius: 20px;
        box-shadow: none;
        border-width: 1px;
        border-style: solid;
        border-color: #b9b7b7;
    }

    .inputf {
        border: 4px solid #ffc200;
        background-color: white;
        color: black;
        width: inherit;
        border-radius: 20px;
    }

    .section h5 {
        font-size: 1.2rem;
        padding-bottom: .5rem;
    }

    .row .col {
        padding: 0 0.75rem;
    }

    .select_event {
        margin: 0px !important;
    }

    @media only screen and (min-width: 993px) {
        .row .col.w2 {
            width: 20% !important;
        }
    }

    .input-field .prefix ~ input {
        margin-left: 0;
        padding-left: 3rem;
    }

    .select-wrapper span.caret {
        color: #ffc200;
    }

    *::-webkit-input-placeholder {
        color: black;
    }

    *:-moz-placeholder {
        /* FF 4-18 */
        color: black;
    }

    *::-moz-placeholder {
        /* FF 19+ */
        color: black;
    }

    *:-ms-input-placeholder {
        /* IE 10+ */
        color: black;
    }

    #recommendations::-webkit-input-placeholder {
        color: #3a285d;
    }

    #recommendations:-moz-placeholder {
        /* FF 4-18 */
        color: #3a285d;
    }

    #recommendations ::-moz-placeholder {
        color: #3a285d;
    }

    #recommendations:-ms-input-placeholder {
        /* IE 10+ */
        color: #3a285d;
    }

    .divider {
        margin-top: 20px;
        margin-bottom: 20px;
        height: 1px;
    }

    .sign_divider {
        height: 2px;
        width: 42px;
        margin: 5px auto;
    }

    #id_apnia_risks > label {
        padding-left: 25px;
    }

    [type="checkbox"].filled-in:checked + label:after {
        background-color: #ffc200;
    }

    .terms_btn {
        border: 1px solid #3a285d;
        padding-left: 10px;
        padding-right: 10px;
        border-radius: 10px;
    }

    .newsModal {
        max-height: 50% !important;
        width: 25% !important;
    }

    @media only screen and (max-width: 601px) {
        .emailcheck {
            width: initial !important;
            display: initial !important;
        }

        .recommend_text {
            width: 100% !important;
            padding-left: 0px !important;
            display: inline-block !important;
        }

        .subdomain_text {
            padding-left: 15px !important;
            padding-right: 0px !important;
        }

        .subdmaincheck {
            padding-left: 17px !important;
            width: 50% !important;
        }

        .emailoverlapbtn {
            float: right !important;
        }

        .domainoverlapbtn {
            margin-top: 20px;
        }

        .newsModal {
            max-height: 70% !important;
            width: 55% !important;
        }

        .signupSection {
            margin: 30px auto 20px auto !important;
        }
    }

    .signup-label {
        font-weight: bold;
        font-size: 13px !important;
    }

    .legal-label {
        font-size: 13px !important;
    }

    input.valid:not([type]), input.valid:not([type]):focus, input[type=text].valid:not(.browser-default), input[type=text].valid:not(.browser-default):focus, input[type=password].valid:not(.browser-default), input[type=password].valid:not(.browser-default):focus, input[type=email].valid:not(.browser-default), input[type=email].valid:not(.browser-default):focus, input[type=url].valid:not(.browser-default), input[type=url].valid:not(.browser-default):focus, input[type=time].valid:not(.browser-default), input[type=time].valid:not(.browser-default):focus, input[type=date].valid:not(.browser-default), input[type=date].valid:not(.browser-default):focus, input[type=datetime].valid:not(.browser-default), input[type=datetime].valid:not(.browser-default):focus, input[type=datetime-local].valid:not(.browser-default), input[type=datetime-local].valid:not(.browser-default):focus, input[type=tel].valid:not(.browser-default), input[type=tel].valid:not(.browser-default):focus, input[type=number].valid:not(.browser-default), input[type=number].valid:not(.browser-default):focus, input[type=search].valid:not(.browser-default), input[type=search].valid:not(.browser-default):focus, textarea.materialize-textarea.valid, textarea.materialize-textarea.valid:focus, .select-wrapper.valid > input.select-dropdown {
        border: 1px solid #4caf50 !important;
        box-shadow: none;
    }
</style>
<br>
<div class=" row">
    <form class="myform col l6 s12 mx-auto" novalidate="novalidate">
        <div class="row mb-5">
            <div class="col s12 center">
                <h5 class="eventus-purple-text" style="font-weight: bold; font-size: 24px;">행사관리 회원가입</h5>
            </div>
            <div class="col s12">
                <div class="divider eventus-purple sign_divider"></div>
            </div>
        </div>
        <div class="row my-2" style="align-items: center !important;">
            <div class="col l3 s12 signup-label"><span class="signup-label">
                    이메일(ID)
                </span></div>
            <div class="col l9 s12 d-flex">
                <div id="id_username_container" class="required w-75 " aria-required="true"><input autocomplete="new-email" id="email" name="email" type="email" placeholder="이메일주소(ID)" class="eventus-input"></div>
                <div><span class="ml-2 text-center eventus-btn eventus-btn-g " style="width: 100px; height: 48px; line-height: 48px;">중복확인</span></div>
            </div>
        </div>
        <div class="row" style="align-items: center !important;">
            <div class="col l3 s12"><span class="signup-label">
                    이름/기업명
                </span></div>
            <div class="col l9 s12">
                <div id="id_username_container" class="required " aria-required="true"><input id="name" name="name" type="text" placeholder="이름 또는 기업명*" class="eventus-input "></div>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <div class="divider"></div>
            </div>
        </div>
        <div class="row" style="align-items: center !important;">
            <div class="col l9 s12 ml-auto"><span class="signup-label">
                비밀번호</span>
            </div>
            <div class="col l9 s12 ml-auto">
                <div class="required " aria-required="true"><input id="password" name="password" type="password" placeholder="비밀번호*" required="required" class="eventus-input" aria-required="true"></div>
            </div>
            <div class="col l9 s12 pt-2  ml-auto"><input id="cpassword" name="cpassword" type="password" placeholder="비밀번호확인*" required="required" class="eventus-input" aria-required="true"></div>
        </div>
        <div class="row">
            <div class="col s12">
                <div class="divider "></div>
            </div>
        </div>
        <div class="row" style="align-items: center !important; font-size: 13px;">
            <div class="col l3 s12 ">
                약관동의
            </div>
            <div class="col l9 s12">
                <div class="checkbox-field  "><input id="InforCheck" name="InforCheck" type="checkbox" class="filled-in  "><label for="InforCheck" class="legal-label">서비스이용약관 동의(필수)</label> <a href="/Legal/Service" target="_blank" class="modal-trigger  right eventus-purple-text " style="z-index: 1003;">약관보기</a></div>
            </div>
            <div class="col l9 s12 ml-auto">
                <div class="checkbox-field  "><input id="AgreeCheck" name="AgreeCheck" type="checkbox" class="filled-in "><label for="AgreeCheck" class="legal-label">개인정보처리방침 동의(필수)</label> <a href="/Legal/Privacy" target="_blank" class="modal-trigger  right eventus-purple-text " style="z-index: 1005;">약관보기</a></div>
            </div>
            <div class="col l9 s12  ml-auto">
                <div class="checkbox-field  "><input id="newsLetter" name="newsLetter" type="checkbox" class="filled-in "><label for="newsLetter" class="legal-label">마케팅 정보 수신동의(선택)</label> <a href="/l/marketing" target="_blank" class="modal-trigger  right eventus-purple-text " style="z-index: 1007;">약관보기</a></div>
            </div>
        </div>
        <div class="row mt-8">
            <div class="col s12 l7 mx-auto">
                <div class="row">
                    <div class="col s4"><a href="javascript:history.back()" class="eventus-btn eventus-btn-g signup-btn width100 ">취소</a></div>
                    <div class="col s8 "><button type="button" id="signbtn" class="eventus-btn eventus-btn-p signup-btn width100  ">회원가입</button></div>
                </div>
            </div>
        </div>
    </form>
</div>