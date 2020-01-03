<div class="alert mycolor1 mymargin5" role="alert">기간별 매출입 현황</div>
<script>
	function find_text(){ //$text1은 상품명이 아니라 캘린더이다.
		form1.action="/~sale8/best/lists/text1/" + form1.text1.value+"/text2/"+form1.text2.value+"/page";
		form1.submit();
	}
	
	//$('.date').pickadate();

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
</script>
<form name="form1" action="" method="post">
	<div class="row">
		<div class="col-4" align="left">            
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
    <div class="col-4" align="left">
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
    <div class="col-4"> </div>
	</div>
</form>

	<table class="table table-bordered table-sm mymargin5">
		<tr class="mycolor1">
      <td width="50%">제품명</td>
      <td width="50%">총 판매수량</td>
		</tr>
<?php
	foreach ($list as $row) {                            // 연관배열 list를 row를 통해 출력한다.
?>   
    <tr>
      <td><?=$row->product_name8; ?></td>
      <td><?=number_format($row->sumnumo); ?></td>
    </tr>
<?
  }
?>
	</table>
	<br>
	<?=$pagination; ?>
	
<div>




