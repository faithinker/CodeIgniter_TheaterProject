<div class="alert mycolor1 mymargin5" role="alert">사용자</div>
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
</script>
<form name="form1" method="post" action="">
<table class="table table-bordered table-sm mymargin5">
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">
        <font color="red">*</font> 거래처명
    </td>
    <td width="80%" align="left">
        <div class="form-inline" style="display:block">
            <input  type="text" name="name"  value="<?=set_value("name"); ?>" class="form-control form-control-sm">
            <? if(form_error("name")==true) echo form_error("name"); ?>
        </div>
    </td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">
        <font color="red">*</font> 주소
    </td>
    <td width="80%" align="left">
        <div class="form-inline" style="display:block">
            <input  type="text" name="uid" value="<?=set_value("uid"); ?>" class="form-control form-control-sm">
            <? if(form_error("uid")==true) echo form_error("uid"); ?>
        </div>
    </td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">
        <font color="red">*</font> 창립일 </td>
    <td width="80%" align="left">
        <div class="form-inline" style="display:block">
          <div class="input-group input-group-sm date" id="writeday" style="width:20%">
            <input  type="text"  name="pwd" value="<?=set_value("pwd"); ?>" class="form-control form-control-sm">
            <? if(form_error("pwd")==TRUE) echo form_error("pwd"); ?>
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
    
    <!-- <td width="20%" class="mycolor2" style="vertical-align:middle">
        <font color="red">*</font> 창립일
    </td>
    <td width="80%" align="left">
        <div class="form-inline" style="display:block">
            <input  type="text" name="pwd" value="<?=set_value("pwd"); ?>" maxlength="20" class="form-control form-control-sm">
            <? if(form_error("pwd")==true) echo form_error("pwd"); ?>
        </div>
    </td> -->
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">전화</td>
    <td width="80%" align="left">
        <div class="form-inline">
            <input type="text" name="tel1" value="" maxlength="3" class="form-control form-control-sm" style="width: 10%" >&nbsp;-&nbsp;
			<input type="text" name="tel2" value="" maxlength="4" class="form-control form-control-sm" style="width: 10%"> &nbsp;-&nbsp;
			<input type="text" name="tel3" value="" maxlength="4" class="form-control form-control-sm" style="width: 10%">
        </div>
    </td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">소매/도매</td>
    <td width="80%" align="left">
        <div class="form-inline">
           <input type="radio" name="rank" value="0"cehcked>&nbsp;소매 &nbsp; &nbsp;
		   <input type="radio" name="rank" value="1">&nbsp;도매
        </div>
    </td>
</tr>
</table>

<div align="center" style="margin: 10px;">
    <input type="submit" value="저장" class="btn btn-primary">
    <a href="/~sale8/test/lists" onclick="javascript:history.back();"><input type="button" value="이전화면" class="btn btn-primary"></a>
</div>
</form>
<div>

