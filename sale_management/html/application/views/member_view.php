<?
    $no=$row->no8;
    $tel1 = trim(substr($row->tel8,0,3));
    $tel2 = trim(substr($row->tel8,3,4));
    $tel3 = trim(substr($row->tel8,7,4));
    $tel = $tel1 . "-" . $tel2 . "-" . $tel3;
    $rank = $row->rank8==0 ? '직원' : '관리자';

    $tmp = $text1 ? "/no/$no/text1/$text1/page/$page" : "/no/$no/page/$page";
?>
<div class="alert mycolor1 mymargin5" role="alert">사용자</div>
<form name="form1" method="">
<table class="table table-bordered table-sm mymargin5">
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle"> 번호</td>
    <td width="80%" align="left">&nbsp; <?=$row->no8; ?></td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">
        <font color="red">*</font> 이름
    </td>
    <td width="80%" align="left">
        <div class="form-inline">
            <?=$row->name8; ?>
        </div>
    </td>
</tr><tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">
        <font color="red">*</font> 아이디
    </td>
    <td width="80%" align="left">
        <div class="form-inline">
            <?=$row->uid8; ?>
        </div>
    </td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">
        <font color="red">*</font> 암호
    </td>
    <td width="80%" align="left">
        <div class="form-inline">
            <?=$row->pwd8; ?>
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
    <td width="20%" class="mycolor2" style="vertical-align:middle">등급</td>
    <td width="80%" align="left">
        <div class="form-inline">
            <?=$rank; ?>
        </div>
    </td>
</tr>
</table>

<div align="center" style="margin: 10px;">
    <!--<input type="button" value="수정" class="btn btn-sm hmycolor1"></input>
	<input type="button" value="삭제" class="btn btn-sm hmycolor1"></input>
	<input type="button" value="저장" class="btn btn-sm hmycolor1"></input>
	<input type="button" value="이전화면" class="btn btn-sm hmycolor1"></input>-->

   <a href="/~sale8/member/edit<?=$tmp; ?>" class="btn btn-primary">수정</a>
   <a href="/~sale8/member/del<?=$tmp; ?>" onClick="return confirm('삭제할까요?');" class="btn btn-primary">삭제</a>
   <a href="/~sale8/member/lists/" onClick="javascript:history.back();" class="btn btn-primary">이전화면</a>
   
   
</div>
</form>


	
	

<div>

