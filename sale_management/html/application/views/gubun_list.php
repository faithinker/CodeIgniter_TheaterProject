
<div class="alert mycolor1 mymargin5" role="alert">구분</div>
<script>
	function find_text(){
		if(!form1.text1.value)
			form1.action="/~sale8/gubun/lists/page";
		else
			form1.action="/~sale8/gubun/lists/text1/" + form1.text1.value+"/page";
		form1.submit();
	}
</script>
<form name="form1" action="" method="post">
	<div class="row">
		<div class="col-4" align="left">            
			<div class="input-group  input-group-sm">
				<div class="input-group-prepend">
						<span class="input-group-text">구분명</span>
				</div>
				<input type="text" name="text1" class="form-control" value="<?=$text1; ?>" placeholder="구분명을 입력하세요."
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
			<a href="/~sale8/gubun/add<?=$tmp; ?>" class="btn btn-sm mycolor1">추가</a>
		</div>
	</div>
</form>

	<table class="table table-bordered table-sm mymargin5">
		<tr class="mycolor1">
				<td width="10%">번호</td>
				<td width="20%">구분명</td>
		</tr>
<?php
	foreach ($list as $row) {                            // 연관배열 list를 row를 통해 출력한다.
    $no=$row->no8;    
?>   
		<tr>
			<td><?=$no; ?></td>
			<td><a href="/~sale8/gubun/view/no/<?=$no ?><?=$tmp; ?>"><?=$row->name8; ?></a></td>
		</tr>
<?
  }
?>
		<!--날짜 : &nbsp; -->
	</table>
	<br>
	<?=$pagination; ?>
	
<div>




