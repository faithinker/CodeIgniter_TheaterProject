<?
    $no=$row->no8;
    $tel1 = trim(substr($row->phone8,0,3));
    $tel2 = trim(substr($row->phone8,3,4));
    $tel3 = trim(substr($row->phone8,7,4));
    $tel = $tel1 . "-" . $tel2 . "-" . $tel3;
    $gubun = $row->gubun8==0 ? "소매" : "도매" ;

    $tmp = $text1 ? "/no/$no/text1/$text1/page/$page" : "/no/$no/page/$page";
?>
<div class="alert mycolor1 mymargin5" role="alert">사용자</div>
<form name="form1" method="test_insert.html">
<table class="table table-bordered table-sm mymargin5">
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle"> 번호</td>
    <td width="80%" align="left">&nbsp; <?=$row->no8; ?></td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">
        <font color="red">*</font> 거래처명
    </td>
    <td width="80%" align="left">
        <div class="form-inline">
            <?=$row->coname8; ?>
        </div>
    </td>
</tr><tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">
        <font color="red">*</font> 주소
    </td>
    <td width="80%" align="left">
        <div class="form-inline">
            <?=$row->juso8; ?>
        </div>
    </td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">
        <font color="red">*</font> 창립일
    </td>
    <td width="80%" align="left">
        <div class="form-inline">
            <?=$row->startday8; ?>
        </div>
    </td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">전화</td>
    <td width="80%" align="left">
        <div class="form-inline">
            <?=$tel; ?>
        </div>
    </td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">소매/도매</td>
    <td width="80%" align="left">
        <div class="form-inline">
            <?=$gubun; ?>
        </div>
    </td>
</tr>
</table>

<div align="center" style="margin: 10px;">
    <!--<input type="button" value="수정" class="btn btn-sm hmycolor1"></input>
	<input type="button" value="삭제" class="btn btn-sm hmycolor1"></input>
	<input type="button" value="저장" class="btn btn-sm hmycolor1"></input>
	<input type="button" value="이전화면" class="btn btn-sm hmycolor1"></input>-->

   <a href="/~sale8/test/edit<?=$tmp; ?>" class="btn btn-primary">수정</a>
   <a href="/~sale8/test/del<?=$tmp; ?>" onClick="return confirm('삭제할까요?');" class="btn btn-primary">삭제</a>
   <a href="/~sale8/test/lists/" onClick="javascript:history.back();" class="btn btn-primary">이전화면</a>
   
   
</div>
</form>


	
	

<div>

