<?
    $page = $this ->uri->segment(6);
?>
<div class="alert mycolor1 mymargin5" role="alert">구분</div>
<form name="form1" method="POST" action="/~sale8/product/edit/no/<?=$row->no8;?>/page/<?=$page?>" enctype="multipart/form-data"> <!--$page 처리-->
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
        <div class="form-inline" style="display:block">
        <select name="gubun_no" class="form-control form-control-sm">
                <option value="">선택하세요. </option>
<?
  foreach ($list as $row1){
    if($row->gubun_no8 == $row1->no8)
        echo("<option value='$row1->no8' selected>$row1->name8</option>");
    else
        echo("<option value='$row1->no8'>$row1->name8</option>");
  }
?>
        </div>
    </td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">
        <font color="red">*</font> 제품명 </td>
    <td width="80%" align="left">
        <div class="form-inline" style="display:block">
            <input  type="text" name="name" value="<?=$row->name8;?>" class="form-control form-control-sm">
            
        </div>
    </td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">
        <font color="red">*</font> 단가
    </td>
    <td width="80%" align="left">
        <div class="form-inline" style="display:block">
            <input  type="text" name="price" value="<?=$row->price8;?>" class="form-control form-control-sm">
            
        </div>
    </td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">
      재고
    </td>
    <td width="80%" align="left">
        <div class="form-inline" style="display:block">
            <input  type="text" name="jaego" value="<?=$row->jaego8;?>" maxlength="20" class="form-control form-control-sm">
        </div>
    </td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">
      사진
    </td>
    <td width="80%" align="left">
        <div class="form-inline" style="display:block">
          <b> 파일이름</b> : <?=$row->pic8 ?> <br>
          <input  type="file" name="pic" value="" class="form-control form-control-sm"><br>
        </div>
        <?
        if ($row->pic8)     // 이미지가 있는 경우
            echo("<img src='/~sale8/product_img/$row->pic8' width='200’ class='img-fluid img-thumbnail'>");
        else                   // 이미지가 없는 경우
            echo("<img src='' width='200’ class='img-fluid img-thumbnail'>");
        ?>
    </td>
</tr>
</table>

<div align="center" style="margin: 10px;">
    <input type="submit" value="저장" class="btn btn-primary">
    <a href="/~sale8/product/lists" onclick="javascript:history.back();"><input type="button" value="이전화면" class="btn btn-primary"></a>
</div>
</form>
<div>

