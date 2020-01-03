<div class="alert mycolor1 mymargin5" role="alert">제품</div>
<form name="form1" method="POST" action="" enctype="multipart/form-data">

<table class="table table-bordered table-sm mymargin5">

<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">
        <font color="red">*</font> 구분명
    </td>
    <td width="80%" align="left">
        <div class="form-inline" style="display:block">
            <select name="gubun_no" value="" class="form-control form-control-sm">
                <option value="">&nbsp;선택하세요. &nbsp;  </option>
                
<?  
    $gubun_no=set_value("gubun_no");
    foreach ($list as $row){
        if($row->no8 == $gubun_no)
            echo("<option value='$row->no8' selected> $row->name8</option>");
        else
            echo("<option value='$row->no8'> $row->name8</option>");
    }
?>
            </select>
        </div>
        <? if(form_error("gubun_no")==true) echo form_error("gubun_no"); ?>
    </td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">
        <font color="red">*</font> 제품명 </td>
    <td width="80%" align="left">
        <div class="form-inline" style="display:block">
            <input  type="text" name="name" value="<?=set_value("name"); ?>" class="form-control form-control-sm">
            <? if(form_error("name")==true) echo form_error("name"); ?>
        </div>
    </td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">
        <font color="red">*</font> 단가
    </td>
    <td width="80%" align="left">
        <div class="form-inline" style="display:block">
            <input  type="text" name="price" value="<?=set_value("price"); ?>" class="form-control form-control-sm">
            <? if(form_error("price")==true) echo form_error("price"); ?>
        </div>
    </td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">
      재고
    </td>
    <td width="80%" align="left">
        <div class="form-inline" style="display:block">
            <input  type="text" name="jaego" value="" maxlength="10" class="form-control form-control-sm">
        </div>
    </td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">
      사진
    </td>
    <td width="80%" align="left">
        <div class="form-inline" style="display:block">
            <input  type="file" name="pic" value="" class="form-control form-control-sm">
        </div>
    </td>
</tr>

</table>

<div align="center" style="margin: 10px;">
    <input type="submit" value="저장" class="btn btn-primary">
    <a href="/~sale8/product/lists" onclick="javascript:history.back();"><input type="button" value="이전화면" class="btn btn-primary"></a>
</div>
</form>
<div>

