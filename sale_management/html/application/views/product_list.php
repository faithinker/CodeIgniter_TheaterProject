<div class="alert mycolor1 mymargin5" role="alert">제품</div>
<script>
	function find_text(){
		if(!form1.text1.value)
			form1.action="/~sale8/product/lists/page";
		else
			form1.action="/~sale8/product/lists/text1/" + form1.text1.value+"/page";
		form1.submit();
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
			<a href="/~sale8/product/add<?=$tmp; ?>" class="btn btn-sm mycolor1">추가</a> &nbsp;
			<a href="/~sale8/product/jaego<?= $tmp; ?>" class="btn btn-sm mycolor1">재고계산</a>
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
			<td><a href="/~sale8/product/view/no/<?=$no ?><?=$tmp; ?>"><?=$row->name8; ?></a></td>
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




