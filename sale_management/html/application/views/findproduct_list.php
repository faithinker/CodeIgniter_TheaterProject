<div class="alert mycolor1 mymargin5" role="alert">제품선택</div>
<script>
	function find_text(){
		if(!form1.text1.value)
			form1.action="/~sale8/findproduct/lists/page";
		else
			form1.action="/~sale8/findproduct/lists/text1/" + form1.text1.value+"/page";
		form1.submit();
	}

	function SendProduct(no, name, price){
        opener.form1.product_no.value = no;
        opener.form1.product_name.value = name;
        opener.form1.price.value = price;
        opener.form1.prices.value = Number(price) * Number(opener.form1.numo.value);
        self.close();
  }
</script>
<form name="form1" action="" method="POST">
	<div class="row">
		<div class="col-6" align="left">            
			<div class="input-group  input-group-sm">
				<div class="input-group-prepend">
						<span class="input-group-text">제품명</span>
				</div>
				<input type="text" name="text1" class="form-control" value="<?=$text1; ?>" placeholder="제품명 입력하세요."
				onKeydown="if(event.keyCode == 13) {find_text();}">
				<div class="input-group-append">
						<button class="btn btn-primary" type="button" onClick="javascript:find_text();">검색</button>
				</div>
			</div>
		</div>
		<div class="col-6" align="right">
		</div>
	</div>
</form>

	<table class="table table-bordered table-sm mymargin5">
		<tr class="mycolor1">
				<td width="10%">번호</td>
				<td width="20%">구분명</td>
        <td width="20%">제품명</td>
        <td width="20%">단가</td>
        <td width="20%">재고</td>
		</tr>
<?php
	foreach ($list as $row) {                            // 연관배열 list를 row를 통해 출력한다.
		$no=$row->no8;
?>   
		<tr>
			<td><?=$no; ?></td>
			<td><?=$row->gubun_name8; ?></td>
			<td><a href="javascript:SendProduct(<?=$row->no8; ?>,'<?=$row->name8; ?>',<?=$row->price8; ?>);"><?=$row->name8;?></a></td>
      <td><?=number_format($row->price8); ?></td>
      <td><?=number_format($row->jaego8); ?></td>
		</tr>
<?
  }
?>
		<!--날짜 : &nbsp; -->
	</table>
	<br>
	<?=$pagination; ?>
	
<div>




