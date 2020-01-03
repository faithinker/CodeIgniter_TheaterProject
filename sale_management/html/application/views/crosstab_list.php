<div class="alert mycolor1 mymargin5" role="alert">월별 제품별 현황</div>
<script>
	function find_text(){ //$text1은 상품명이 아니라 캘린더이다.
		form1.action="/~sale8/crosstab/lists/text1/" + form1.text1.value+"/page";
		form1.submit();
	}
	
	//$('.date').pickadate();

	$(function() {
		$('#text1').datetimepicker({
			locale:'ko',
			format:'YYYY',
      viewMode: "years",
			defaultDate: moment()
		});

		$("#text1") .on("dp.change", function (e){
			find_text();
		});
	});
</script>
<form name="form1" action="" method="post">
	<div class="row">
		<div class="col-4" align="left">            
			<div class="input-group  input-group-sm table-sm table-sm date" id="text1">
				<div class="input-group-prepend">
						<span class="input-group-text">년도</span>
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
    <div class="col-8"> </div>
	</div>
</form>

	<table class="table table-bordered table-sm mymargin5">
		<tr class="mycolor1">
      <td width="10%">제품명</td>
<?
  for($i=1; $i<13;$i++){
    echo("<td width='7.5%'>$i 월</td>");
  }
?>   
      <!-- <td width="10%">1월</td>
      <td width="10%">1월</td>
      <td width="10%">1월</td>
      <td width="10%">1월</td>
      <td width="10%">1월</td>
      <td width="10%">1월</td>
      <td width="10%">1월</td> -->
		</tr>
<?php
	foreach ($list as $row) {                            // 연관배열 list를 row를 통해 출력한다.
?>   
    <tr>
      <td bgcolor="lightyellow"><?=$row->product_name8; ?></td>
          <td><?=$row->s1==0 ? "" : number_format($row->s1);?></td>
          <td><?=$row->s2==0 ? "" : number_format($row->s2);?></td>
          <td><?=$row->s3==0 ? "" : number_format($row->s3);?></td>
          <td><?=$row->s4==0 ? "" : number_format($row->s4);?></td>
          <td><?=$row->s5==0 ? "" : number_format($row->s5);?></td>
          <td><?=$row->s6==0 ? "" : number_format($row->s6);?></td>
          <td><?=$row->s7==0 ? "" : number_format($row->s7);?></td>
          <td><?=$row->s8==0 ? "" : number_format($row->s8);?></td>
          <td><?=$row->s9==0 ? "" : number_format($row->s9);?></td>
          <td><?=$row->s10==0 ? "" : number_format($row->s10);?></td>
          <td><?=$row->s11==0 ? "" : number_format($row->s11);?></td>
          <td><?=$row->s12==0 ? "" : number_format($row->s12);?></td>
    </tr>
<?
  }
?>
	</table>
	<br>
	<?=$pagination; ?>
	
<div>




