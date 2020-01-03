<?
    $no=$row->no8;
    $tmp = $text1 ? "/no/$no/text1/$text1/page/$page" : "/no/$no/page/$page";
?>
<div class="alert mycolor1 mymargin5" role="alert">매입장</div>
<form name="form1" method="post" action="">
<table class="table table-bordered table-sm mymargin5">
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle"> 번호</td>
    <td width="80%" align="left">&nbsp; <?=$row->no8; ?></td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">
        <font color="red">*</font> 날짜 </td>
    <td width="80%" align="left">
        <div class="form-inline"> &nbsp;
          <?=$row->writeday8; ?>
        </div>
    </td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">
        <font color="red">*</font> 제품명
    </td>
    <td width="80%" align="left">
        <div class="form-inline"> &nbsp;
            <?=$row->product_name8; ?>
        </div>
    </td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">단가</td>
    <td width="80%" align="left">
        <div class="form-inline" style="display:block">&nbsp;
          <?=$row->price8?>    
        </div>
    </td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">수량</td>
    <td width="80%" align="left">
        <div class="form-inline" style="display:block">&nbsp;
          <?=$row->numi8?>    
        </div>
    </td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">금액</td>
    <td width="80%" align="left">
        <div class="form-inline" style="display:block">&nbsp;
           <?=$row->prices8?>
        </div>
    </td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">비고</td>
    <td width="80%" align="left">
        <div class="form-inline" style="display:block">&nbsp;
           <?=$row->bigo8?>
        </div>
    </td>
</tr>

</table>

<div align="center" style="margin: 10px;">
    <!--<input type="button" value="수정" class="btn btn-sm hmycolor1"></input>
	<input type="button" value="삭제" class="btn btn-sm hmycolor1"></input>
	<input type="button" value="저장" class="btn btn-sm hmycolor1"></input>
	<input type="button" value="이전화면" class="btn btn-sm hmycolor1"></input>-->

   <a href="/~sale8/jangbui/edit<?=$tmp; ?>" class="btn btn-primary">수정</a>
   <a href="/~sale8/jangbui/del<?=$tmp; ?>" onClick="return confirm('삭제할까요?');" class="btn btn-primary">삭제</a>
   <a href="/~sale8/jangbui/lists/" onClick="javascript:history.back();" class="btn btn-primary">이전화면</a>
   
   
</div>
</form>


	
	

<div>

