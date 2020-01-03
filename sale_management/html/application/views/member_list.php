
<div class="alert mycolor1 mymargin5" role="alert">사용자</div>
<script>
	function find_text(){
		if(!form1.text1.value)
			form1.action="/~sale8/member/lists/page";
		else
			form1.action="/~sale8/member/lists/text1/" + form1.text1.value+"/page";
		form1.submit();
	}
</script>
<form name="form1" action="" method="post">
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
			<a href="/~sale8/member/add<?=$tmp; ?>" class="btn btn-sm mycolor1">추가</a>
		</div>
	</div>
</form>

	<table class="table table-bordered table-sm mymargin5">
		<tr class="mycolor1">
				<td width="10%">번호</td>
				<td width="20%">이름</td>
				<td width="20%">아이디</td>
				<td width="20%">암호</td>
				<td width="20%">전화</td>
				<td width="10%">등급</td>
		</tr>
<?php
	foreach ($list as $row)                             // 연관배열 list를 row를 통해 출력한다.
    {
        $no=$row->no8;                                    // 사용자번호
        $tel1 = trim(substr($row->tel8,0,3));      // 전화 : 지역번호 추출
        $tel2 = trim(substr($row->tel8,3,4));      // 전화 : 국번호 추출
        $tel3 = trim(substr($row->tel8,7,4));      // 전화 : 번호 추출
        $tel = $tel1 . "-" . $tel2 . "-" . $tel3;       // 합치기
        $rank = $row->rank8==0 ? "직원" : "관리자" ;      // 0->직원, 1->관리자 
?>
		<tr>
			<td><?=$no; ?></td>
			<td><a href="/~sale8/member/view/no/<?=$no ?><?=$tmp; ?>"><?=$row->name8; ?></a></td>
			<td><?=$row->uid8; ?></td>
			<td><?=$row->pwd8; ?></td>
			<td><?=$tel; ?></td>
			<td><?=$rank; ?></td>
		</tr>
<?
	}
?>
		<!--날짜 : &nbsp; -->
	</table>
	<br>
	<?=$pagination; ?>
	
<div>




