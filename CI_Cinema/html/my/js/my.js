$(document).ready(function(){
  $('.main i').on('click',function(){
      $('input').toggleClass('active');
      if($('input').hasClass('active')){
          $(this).attr('class',"fa fa-eye-slash fa-lg")
          .prev('input').attr('type',"text");
      }else{
          $(this).attr('class',"fa fa-eye fa-lg")
          .prev('input').attr('type','password');
      }
  });
});
function check(){
  if(form1.IDcodeCheck.value == 1){
     return true;
  }
  else {
     alert("아이디 중복체크를 해주세요");
     return false;
  }
}

function find_id() {
  if (!form1.uid.value) {
    alert("ID를 입력하십시요.");   form1.uid.focus();   return;
  }
  form1.IDcodeCheck.value= 1;
  window.open("/~tema2/findid?uid="+form1.uid.value,"","resizable=yes,scrollbars=no,width=400,height=400");
}
function idcheck(){
  opener.form1.uid.value=""; //폼에있던값을 지움
  self.close();
//if (form1.idCheck.checked == false) {
//   alert("회원ID를 다시 확인해 주세요.");
//}
}

// cinema_special  ads popup 광고 팝업
function setCookie(name, value, expiredays) {
  var today = new Date();
      today.setDate(today.getDate() + expiredays);
      document.cookie = name + '=' + escape(value) + '; path=/; expires=' + today.toGMTString() + ';'
  }
  function getCookie(name) {
      var cName = name + "=";
      var x = 0;
      while (i <= document.cookie.length) {
          var y = (x + cName.length);
          if (document.cookie.substring(x, y) == cName) {
              if ((endOfCookie = document.cookie.indexOf(";", y)) == -1) endOfCookie = document.cookie.length;
              return unescape(document.cookie.substring(y, endOfCookie));
          }
          x = document.cookie.indexOf(" ", x) + 1;
          if (x == 0) break;
      }
      return "";
  }

  function closePopupNotToday() {
      setCookie('notToday', 'Y', 1);
      $("#main_popup").hide('fade');
  }

  function closePopup() {
      $("#main_popup").hide('fade');
  }
  $(document).ready(function() {
      if (getCookie("notToday") != "Y") {
          $("#main_popup").show('fade');
      }
});