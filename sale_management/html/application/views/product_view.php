<?
    $no=$row->no8;

    $tmp = $text1 ? "/no/$no/text1/$text1/page/$page" : "/no/$no/page/$page";
?>
<div class="alert mycolor1 mymargin5" role="alert">구분</div>
<form name="form1" method="post" action="">
<table class="table table-bordered table-sm mymargin5">
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle"> 번호</td>
    <td width="80%" align="left">&nbsp; <?=$row->no8; ?></td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">
        <font color="red">*</font> 구분명
    </td>
    <td width="80%" align="left">
        <div class="form-inline"> &nbsp;
            <?=$row->gubun_name8; ?>
        </div>
    </td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">
        <font color="red">*</font> 제품명 </td>
    <td width="80%" align="left">
        <div class="form-inline" style="display:block">&nbsp;
          <?=$row->name8?>
        </div>
    </td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">
        <font color="red">*</font> 단가
    </td>
    <td width="80%" align="left">
        <div class="form-inline" style="display:block">&nbsp;
          <?=$row->price8?>    
        </div>
    </td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">
      재고
    </td>
    <td width="80%" align="left">
        <div class="form-inline" style="display:block">&nbsp;
           <?=$row->jaego8?>
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
          <?php
            if ($row->pic8)     // 이미지가 있는 경우
                echo("<img src='/~sale8/product_img/$row->pic8' width='200’ class='img-fluid img-thumbnail'>");
            else                   // 이미지가 없는 경우
                echo("<img src='' width='200’ class='img-fluid img-thumbnail'>");
          ?>
        </div>
    </td>
</tr>
</table>

<div align="center" style="margin: 10px;">
    <!--<input type="button" value="수정" class="btn btn-sm hmycolor1"></input>
	<input type="button" value="삭제" class="btn btn-sm hmycolor1"></input>
	<input type="button" value="저장" class="btn btn-sm hmycolor1"></input>
	<input type="button" value="이전화면" class="btn btn-sm hmycolor1"></input>-->

   <a href="/~sale8/product/edit<?=$tmp; ?>" class="btn btn-primary">수정</a>
   <a href="/~sale8/product/del<?=$tmp; ?>" onClick="return confirm('삭제할까요?');" class="btn btn-primary">삭제</a>
   <a href="/~sale8/product/lists/" onClick="javascript:history.back();" class="btn btn-primary">이전화면</a>
   
   
</div>
</form>


	
	

<div>

