<div class="alert mycolor1 mymargin5" role="alert">기간별 매출입 현황</div>
<script>
	function find_text(){ //$text1은 상품명이 아니라 캘린더이다.
		form1.action="/~sale8/gigan/lists/text1/" + form1.text1.value+"/text2/"+form1.text2.value +"/text3/"+form1.text3.value +"/page";
		form1.submit();
	}

	$(function() {
		$('#text1').datetimepicker({
			locale:'ko',
			format:'YYYY-MM-DD',
			defaultDate: moment()
		});
    $('#text2').datetimepicker({
			locale:'ko',
			format:'YYYY-MM-DD',
			defaultDate: moment()
		});

		$("#text1") .on("dp.change", function (e){
			find_text();
		});
		$("#text2") .on("dp.change", function (e){
			find_text();
		});   
	});
	
	function make_excel(){
		form1.action="/~sale8/gigan/excel/text1/" + form1.text1.value+"/text2/" 
		+ form1.text2.value + "/text3/" + form1.text3.value + "/page";
		form1.submit();
	}  
</script>
<form name="form1" action="" method="post">
	<div class="row">
		<div class="col-3" align="left">            
			<div class="input-group  input-group-sm table-sm table-sm date" id="text1">
				<div class="input-group-prepend">
						<span class="input-group-text">날짜</span>
				</div>
				<input type="text" name="text1" class="form-control" value="<?=$text1; ?>" onKeydown="if (event.keyCode == 13) {find_text();}">
				<div class="input-group-append">
					<div class="input-group-text">
						<div class="input-group-addon">
							<i class="far fa-calendar-alt fa-lg"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
    &nbsp; - &nbsp;
    <div class="col-3" align="left">
      <div class="input-group  input-group-sm table-sm table-sm date" id="text2" style="width: 80%">
        <input type="text" name="text2" class="form-control" value="<?=$text2; ?>" onKeydown="if(event.keyCode == 13) {find_text();}">
        <div class="input-group-append">
					<div class="input-group-text">
						<div class="input-group-addon">
							<i class="far fa-calendar-alt fa-lg"></i>
						</div>
					</div>
				</div>
      </div>
    </div>
    
    <div class="col-3" align="left">            
			<div class="input-group  input-group-sm table-sm table-sm date" style="width: 80%">
        <div class="input-group-prepend">
              <span class="input-group-text">제품명</span>
        </div>
        
			  	<select name="text3" class="form-control form-control-sm"  onchange="javascript:find_text();">
            <option value="0">전체 &nbsp; </option>
<?  
    foreach ($list_product as $row){
        if($row->no8 == $text3)
            echo("<option value='$row->no8' selected>$row->name8 </option>");
        else
            echo("<option value='$row->no8'> $row->name8 </option>");
    }
?>
           </select>
			</div>
    </div>
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
		<div class="col-2" align="right"><!-- EXCEl 추가 -->
			<!-- <a href="/~sale8" class="btn btn-sm mycolor1">EXCEL</a> -->
			<input type="button" value="EXCEL" class="btn btn-sm mycolor1" onclick="if (confirm('엑셀파일로 저장할까요?')) make_excel();">
		</div>
	</div>
</form>

	<table class="table table-bordered table-sm mymargin5">
		<tr class="mycolor1">
      <td width="20%">날짜</td>
      <td width="20%">제품명</td>
      <td width="10%">단가</td>
      <td width="10%">매입수량</td>
      <td width="10%">매출수량</td>
      <td width="10%">금액</td>
      <td width="20%">비고</td>
		</tr>
<?php
	foreach ($list as $row) {                            // 연관배열 list를 row를 통해 출력한다.
		$no=$row->no8;
?>   
    <tr>
      <td><?=$row->writeday8; ?></td>
      <td><?=$row->product_name8; ?></td>
      <td><?=number_format($row->price8); ?></td>
      <td bgcolor="lightyellow"><?=number_format($row->numi8); ?></td>
      <td bgcolor="lightyellow"><?=number_format($row->numo8); ?></td>
      <td><?=number_format($row->prices8); ?></td>
      <td><?=$row->bigo8; ?></td>
    </tr>
<?
  }
?>
	</table>
	<br>
	<?=$pagination; ?>
	
<div>




