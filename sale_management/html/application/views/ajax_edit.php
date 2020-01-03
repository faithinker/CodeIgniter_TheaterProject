<br>
			<div class="alert mycolor1" role="alert">Ajax 구분</div>
			<form name="form1" method="post" action="">
<table class="table table-bordered table-sm mymargin5">
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">번호</td>
    <td width="80%" align="left"><?=$row->no8; ?></td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">
        <font color="red">*</font>구분명
    </td>
    <td width="80%" align="left">
        <div class="form-inline">
            <input  type="text" name="name8" value="<?=set_value("name8"); ?>"
                         class="form-control form-control-sm">
        </div>
		<? if(form_error("name8")==true) echo form_error("name8"); ?>
    </td>
</tr>
</table>
<div align="center">
    <input type="submit" value="저장" class="btn btn-sm mycolor1">&nbsp;
    <input type="button" value="이전화면" class="btn btn-sm mycolor1" onclick="history.back();">
    </div>
</form>
</body>
</html>
