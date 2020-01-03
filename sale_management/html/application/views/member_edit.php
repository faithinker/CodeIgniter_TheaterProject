<?
    $page = $this ->uri->segment(6);
    
?>
<div class="alert mycolor1 mymargin5" role="alert">사용자</div>
<form name="form1" method="post" action="/~sale8/member/edit/no/<?=$row->no8;?>/page/<?=$page?>"> <!--$page 처리-->
<table class="table table-bordered table-sm mymargin5">
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle"> 번호</td>
    <td width="80%" align="left">&nbsp; &nbsp; <?=$row->no8; ?></td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">
        <font color="red">*</font> 이름
    </td>
    <td width="80%" align="left">
        <div class="form-inline" style="display:block">
            <input  type="text" name="name"  value="<?=$row->name8; ?>" class="form-control form-control-sm">
            <? if(form_error("name")==true) echo form_error("name"); ?>
        </div>
    </td>
</tr><tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">
        <font color="red">*</font> 아이디
    </td>
    <td width="80%" align="left">
        <div class="form-inline" style="display:block">
            <input  type="text" name="uid" value="<?=$row->uid8; ?>" class="form-control form-control-sm">
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
            <input  type="text" name="pwd" value="<?=$row->pwd8; ?>" maxlength="20" class="form-control form-control-sm">
            <? if(form_error("pwd")==true) echo form_error("pwd"); ?>
        </div>
    </td>
</tr>
<?
    $tel1 = trim(substr($row->tel8,0,3));
    $tel2 = trim(substr($row->tel8,3,4));
    $tel3 = trim(substr($row->tel8,7,4));
?>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">전화</td>
    <td width="80%" align="left">
        <div class="form-inline">
            <input type="text" name="tel1" value="<?=$tel1;?>" maxlength="3" class="form-control form-control-sm" style="width: 10%" >&nbsp;-&nbsp;
			<input type="text" name="tel2" value="<?=$tel2;?>" maxlength="4" class="form-control form-control-sm" style="width: 10%"> &nbsp;-&nbsp;
			<input type="text" name="tel3" value="<?=$tel3;?>" maxlength="4" class="form-control form-control-sm" style="width: 10%">
        </div>
    </td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">등급</td>
    <td width="80%" align="left">
        <div class="form-inline">
        <?
        if($row->rank8==0){
        ?>
           <input type="radio" name="rank" value="0" checked>&nbsp;직원 &nbsp; &nbsp;
		   <input type="radio" name="rank" value="1">&nbsp;관리자
        <?
        }
        else{ ?>
            <input type="radio" name="rank" value="0">&nbsp;직원 &nbsp; &nbsp;
		    <input type="radio" name="rank" value="1" checked>&nbsp;관리자
        <?
        }
        ?>   
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

