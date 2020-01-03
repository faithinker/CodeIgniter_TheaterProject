<?
    $page = $this ->uri->segment(6);
?>
<div class="alert mycolor1 mymargin5" role="alert">구분</div>
<form name="form1" method="post" action="/~sale8/gubun/edit/no/<?=$row->no8;?>/page/<?=$page?>"> <!--$page 처리-->
<table class="table table-bordered table-sm mymargin5">
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle"> 번호</td>
    <td width="80%" align="left">&nbsp; &nbsp; <?=$row->no8; ?></td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">
        <font color="red">*</font> 구분명
    </td>
    <td width="80%" align="left">
        <div class="form-inline" style="display:block">&nbsp;
            <input  type="text" name="name"  value="<?=$row->name8; ?>" class="form-control form-control-sm">
            <? if(form_error("name")==true) echo form_error("name"); ?>
        </div>
    </td>
</tr>
</table>

<div align="center" style="margin: 10px;">
    <input type="submit" value="저장" class="btn btn-primary">
    <a href="/~sale8/gubun/lists" onclick="javascript:history.back();"><input type="button" value="이전화면" class="btn btn-primary"></a>
</div>
</form>
<div>

