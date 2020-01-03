<script>

function idcheck(){
         opener.form1.uid.value=""; //폼에있던값을 지움
         self.close();
      //if (form1.idCheck.checked == false) {
      //   alert("회원ID를 다시 확인해 주세요.");
      //}
}
</script>

<?

if((int)$result>0){
echo("<h3>$uid 는 이미 있는 아이디 입니다</h3>");
echo("<button class='btn btn-primary' type='button' onClick='idcheck()'>닫기</button>");
}
else{
   echo("<h3>$uid 는 사용가능한 아이디입니다</h3>");
   echo("<button class='btn btn-primary' type='button' onClick='window.close()'>확인</button>");
}

?>