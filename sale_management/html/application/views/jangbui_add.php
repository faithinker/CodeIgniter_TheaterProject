<div class="alert mycolor1 mymargin5" role="alert">매입장</div>
<script>
    //$('#date').pickadate();
    $(function() {
		$('#writeday').datetimepicker({
			locale:'ko',
			format:'YYYY-MM-DD',
			defaultDate: moment()
		});

		$("text1") .on("dp.change", function (e){
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
<form name="form1" method="POST" action="" enctype="multipart/form-data">
<table class="table table-bordered table-sm mymargin5">
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">
        <font color="red">*</font> 날짜 </td>
    <td width="80%" align="left">
        <div class="form-inline" style="display:block">
          <div class="input-group input-group-sm date" id="writeday" style="width:20%">
            <input  type="text"  name="writeday" value="<?=set_value("writeday"); ?>" class="form-control form-control-sm">
            <? if(form_error("writeday")==TRUE) echo form_error("writeday"); ?>
            <div class="input-group-append">
                <div class="input-group-text">
                    <div class="input-group-addon">
                        <i class="far fa-calendar-alt fa-lg"></i>
                    </div>
		        </div>
            <div>
          </div>
        </div>
		<!--<button class="btn btn-primary" type="button" onClick="javascript:find_text();">검색</button>-->	
    </td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">
        <font color="red">*</font> 제품명
    </td>
    <td width="80%" align="left">
        <div class="form-inline" style="display:block">
        <!--  콤보박스 282p 수정 필요 -->
        <input type="hidden" name="product_no" value="<?=set_value("product_no"); ?>" >
        <select name="sel_product_no" class="form-control form-control-sm" onChange="select_product();">
            <!--<select name="product_no" class="form-control form-control-sm">-->
            <option value="">선택하세요. &nbsp; </option>
<?  
    $product_no=set_value("product_no");
    foreach ($list as $row){
        $t1 = "$row->no8^^$row->price8";
        $t2 = " $row->name8 ($row->price8)";
        if($row->no8 == $product_no)
            echo("<option value='$t1' selected>$t2 </option>");
        else
            echo("<option value='$t1'> $t2 </option>");
    }
?>
            </select>
        </div>
            <? if(form_error("product_no")==TRUE) echo form_error("product_no"); ?>
    </td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">단가 </td>
    <td width="80%" align="left">
        <div class="form-inline" style="display:block">
            <input  type="text" name="price" value="" class="form-control form-control-sm" onChange="cal_prices();">
        </div>
    </td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">수량</td>
    <td width="80%" align="left">
        <div class="form-inline" style="display:block">
            <input  type="text" name="numi" value="" class="form-control form-control-sm" onChange="cal_prices();">
        </div>
    </td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">금액</td>
    <td width="80%" align="left">
        <div class="form-inline" style="display:block">
            <input  type="text" name="prices" value="" maxlength="10" class="form-control form-control-sm" readOnly style="boreder:0">
        </div>
    </td>
</tr>
<tr>
<td width="20%" class="mycolor2" style="vertical-align:middle">비고</td>
    <td width="80%" align="left">
        <div class="form-inline" style="display:block">
            <input  type="text" name="bigo" value="" maxlength="10" class="form-control form-control-sm">
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

