<div class="alert mycolor1 mymargin5" role="alert">사용자</div>
<form name="form1" method="post" action="">
<table class="table table-bordered table-sm mymargin5">
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">
        <font color="red">*</font> 이름
    </td>
    <td width="80%" align="left">
        <div class="form-inline" style="display:block">
            <input  type="text" name="name"  value="<?=set_value("name"); ?>" class="form-control form-control-sm">
            <? if(form_error("name")==true) echo form_error("name"); ?>
        </div>
    </td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">
        <font color="red">*</font> 아이디
    </td>
    <td width="80%" align="left">
        <div class="form-inline" style="display:block">
            <input  type="text" name="uid" value="<?=set_value("uid"); ?>" class="form-control form-control-sm">
            <? if(form_error("uid")==true) echo form_error("uid"); ?>
        </div>
    </td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">
        <font color="red">*</font> 암호
    </td>
    <td width="80%" align="left">
        <div class="form-inline" style="display:block">
            <input  type="text" name="pwd" value="<?=set_value("pwd"); ?>" maxlength="20" class="form-control form-control-sm">
            <? if(form_error("pwd")==true) echo form_error("pwd"); ?>
        </div>
    </td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">전화</td>
    <td width="80%" align="left">
        <div class="form-inline">
            <input type="text" name="tel1" value="" maxlength="3" class="form-control form-control-sm" style="width: 10%" >&nbsp;-&nbsp;
			<input type="text" name="tel2" value="" maxlength="4" class="form-control form-control-sm" style="width: 10%"> &nbsp;-&nbsp;
			<input type="text" name="tel3" value="" maxlength="4" class="form-control form-control-sm" style="width: 10%">
        </div>
    </td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">등급</td>
    <td width="80%" align="left">
        <div class="form-inline">
           <input type="radio" name="rank" value="0"cehcked>&nbsp;직원 &nbsp; &nbsp;
		   <input type="radio" name="rank" value="1">&nbsp;관리자
        </div>
    </td>
</tr>
</table>

<div align="center" style="margin: 10px;">
    <input type="submit" value="저장" class="btn btn-primary">
    <a href="/~sale8/member/lists" onclick="javascript:history.back();"><input type="button" value="이전화면" class="btn btn-primary"></a>
</div>
</form>
<div>

