<div class="alert mycolor1 mymargin5" role="alert">제품사진</div>
<script>
	function find_text(){
		if(!form1.text1.value)
			form1.action="/~sale8/picture/lists/page";
		else
			form1.action="/~sale8/picture/lists/text1/" + form1.text1.value;
		form1.submit();
	}
  function SendProduct(no, name, price){
    opener.form1.product_no.value = no;                // 제품번호
    opener.form1.product_name.value = name;       // 제품명
    opener.form1.price.value = price;                       // 가격
    opener.form1.prices.value = Number(price) * Number(opener.form1.numo.value);
    self.close();
  }
  function zoomimage(iname,pname){
    w=window.open("/~sale8/picture/zoom/iname/"+iname+"/pname/"+pname,"imageview","resizeble=yes,scrollbars=yes,status=no,width=800,height=600");
    w.focus();
  }
</script>
<form name="form1" action="" method="POST">
	<div class="row">
		<div class="col-4" align="left">            
			<div class="input-group  input-group-sm">
				<div class="input-group-prepend">
						<span class="input-group-text">이름</span>
				</div>
				<input type="text" name="text1" class="form-control" value="<?=$text1; ?>" placeholder="이름을 입력하세요."
				onKeydown="if(event.keyCode == 13) {find_text();}">
				<div class="input-group-append">
						<button class="btn btn-primary" type="button" onClick="javascript:find_text();">검색</button>
				</div>
			</div>
		</div>
		<div class="col-8" align="right">
		<?
			$tmp = $text1 ? "/text1/$text1/page/$page" : "/page/$page"; 
		?>
		</div>
	</div>
</form>
<div class="row">
<?php
	foreach ($list as $row) {                            // 연관배열 list를 row를 통해 출력한다.
    $iname=$row->pic8 ? $row->pic8 : "";
    $pname=$row->name8;
?>  
	      <div class="col-3">
        <div class="mythumb_box">
					<a href="javascript:zoomimage('<?=$iname ?>','<?=$pname ?>');">
          	<img src="/~sale8/product_img/thumb/<?=$iname?>" class="mythumb_image">
					</a>
          <div class="mythumb_text"><?=$pname ?></div>
        </div>
      </div>
<?
  }
?>
</div>

	<br>
	<?=$pagination; ?>
	
<div>




