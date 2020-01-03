<?
    $page = $this ->uri->segment(6);
?>
<div class="alert mycolor1 mymargin5" role="alert">매입장</div>
<script>
    //$('#date').pickadate();
    $(function() {
		$('#writeday').datetimepicker({
			locale:'ko',
			format:'YYYY-MM-DD',
			defaultDate: moment()
		});

		$("#text1") .on("dp.change", function (e){
			find_text();
		});
    });
    
    function select_product(){
        var str;
        str = form1.sel_product_no.value;
        if (str==""){
            form1.product_no.value = "";
            form1.price.value = "";
            form1.prices.value = "";
        }
        else{
            str = str.split("^^");
            form1.product_no.value = str[0];
            form1.price.value = str[1];
            form1.prices.value = Number(form1.price.value) * Number(form1.numi.value);
        }
    }

    function cal_prices(){
        form1.prices.value = Number(form1.price.value) * Number(form1.numi.value);
        form1.bigo.focus(); 
    }
</script>
<form name="form1" method="POST" action="" enctype="multipart/form-data"> <!--$page 처리-->
<table class="table table-bordered table-sm mymargin5">
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle"> 번호</td>
    <td width="80%" align="left">&nbsp; &nbsp; <?=$row->no8; ?></td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">
        <font color="red">*</font> 날짜 </td>
    <td width="80%" align="left">
        <div class="form-inline" style="display:block">
          <div class="input-group input-group-sm date" id="writeday" style="width:20%">
            <input  type="text"  name="writeday" value="<?=$row->writeday8; ?>" class="form-control form-control-sm">
            <div class="input-group-append">
                <div class="input-group-text">
                    <div class="input-group-addon">
                        <i class="fas fa-calendar-alt fa-lg"></i>
                    </div>
		        </div>
            <div>
          </div>
        </div>
    </td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">
        <font color="red">*</font> 제품명
    </td>
    <td width="80%" align="left">
        <div class="form-inline" style="display:block">
        <input type="hidden" name="product_no" value="<?=$row->product_no8;?>">
        <select name="sel_product_no" class="form-control form-control-sm" onChange="select_product();">
            <option value="">선택하세요. &nbsp;</option>
<?  
    $product_no=set_value("product_no");
    foreach ($list as $row1){
        $t1 = "$row1->no8^^$row1->price8";
        $t2 = " $row1->name8 ($row1->price8)";
        if($row->product_no8 == $row1->no8)
            echo("<option value='$t1' selected>$t2 </option>");
        else
            echo("<option value='$t1'> $t2 </option>");
    }
?>
        </div>
    </td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">
        <font color="red">*</font> 단가
    </td>
    <td width="80%" align="left">
        <div class="form-inline" style="display:block">
            <input  type="text" name="price" value="<?=$row->price8;?>" class="form-control form-control-sm" onChange="cal_prices();">
        </div>
    </td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">
      수량
    </td>
    <td width="80%" align="left">
        <div class="form-inline" style="display:block">
            <input  type="text" name="numi" value="<?=$row->numi8;?>" maxlength="20" class="form-control form-control-sm" onChange="cal_prices();">
        </div>
    </td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">
      금액
    </td>
    <td width="80%" align="left">
        <div class="form-inline" style="display:block">
            <input  type="text" name="prices" value="<?=$row->prices8;?>" maxlength="20" class="form-control form-control-sm" readOnly style="boreder();">
        </div>
    </td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">
      비고
    </td>
    <td width="80%" align="left">
        <div class="form-inline" style="display:block">
            <input  type="text" name="bigo" value="<?=$row->bigo8;?>" maxlength="20" class="form-control form-control-sm">
        </div>
    </td>
</tr>
</table>

<div align="center" style="margin: 10px;">
    <input type="submit" value="저장" class="btn btn-primary">
    <a href="/~sale8/jangbui/lists" onclick="javascript:history.back();"><input type="button" value="이전화면" class="btn btn-primary"></a>
</div>
</form>
<div>