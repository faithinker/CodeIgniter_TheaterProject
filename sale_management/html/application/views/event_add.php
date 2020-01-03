<script type="text/javascript" src="http://gamejigix.induk.ac.kr/~sale8/smarteditor/js/service/HuskyEZCreator.js" charset="utf-8"></script>
<script type="text/javascript" src="http://gamejigix.induk.ac.kr/~sale8/smarteditor/js/smarteditor2.js" charset="utf-8"></script>

<div class="alert mycolor1 mymargin5" role="alert">이벤트</div>
<form name="form1" method="POST" action="" enctype="multipart/form-data">

<table class="table table-bordered table-sm mymargin5">

<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">
        <font color="red">*</font> 프로그램명
    </td>
    <td width="80%" align="left">
        <div class="form-inline" style="display:block">
            <input  type="text" name="program" value="<?=set_value("program"); ?>" maxlength="20" class="form-control form-control-sm">
            <? if(form_error("program")==true) echo form_error("program"); ?>
        </div>
    </td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">
        <font color="red">*</font> 관리자 </td>
    <td width="80%" align="left">
        <div class="form-inline" style="display:block">
            <input  type="text" name="staff" value="<?=set_value("staff"); ?>" class="form-control form-control-sm">
            <? if(form_error("staff")==true) echo form_error("staff"); ?>
        </div>
    </td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">
        <font color="red">*</font> 번호
    </td>
    <td width="80%" align="left">
      <div class="form-inline">
        <input type="text" name="tel1" value="<?=set_value("tel1"); ?>" maxlength="3" class="form-control form-control-sm" style="width: 10%" >&nbsp;-&nbsp;
        <input type="text" name="tel2" value="<?=set_value("tel2"); ?>" maxlength="4" class="form-control form-control-sm" style="width: 10%"> &nbsp;-&nbsp;
        <input type="text" name="tel3" value="<?=set_value("tel3"); ?>" maxlength="4" class="form-control form-control-sm" style="width: 10%">
        <? if(form_error("tel1")==true) echo form_error("tel1"); ?>
        <? if(form_error("tel2")==true) echo form_error("tel2"); ?>
        <? if(form_error("tel3")==true) echo form_error("tel3"); ?>
      </div>
    </td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">
    <font color="red">*</font> 행사설명
    </td>
    <td width="80%" align="left">
        <div class="form-inline" style="display:block">
        <textarea name="account" form="inform" class="form-control form-control-sm" cols="80" rows="10" autofocus required wrap="hard" 
        placeholder="행사내용에 대해 적어주세요" style="resize: none;"></textarea>
            <!-- <input  type="text" name="account" value="" class="form-control form-control-sm"> -->
        </div>
    </td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">
      행사장소
    </td>
    <td width="80%" align="left">
        <div class="form-inline" style="display:block">
            <input  type="text" name="place" value="" maxlength="10" class="form-control form-control-sm" placeholder="행정 시"> &nbsp;
            <input  type="text" name="place2" value="" maxlength="10" class="form-control form-control-sm" placeholder="상세주소">
        </div>
    </td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">
      행사시간
    </td>
    <td width="80%" align="left"> 
    <div class="row">
    <div class="col-2" align="middle">시작시간</div> 
        <div class="col-3" align="left"> 
            <div class="input-group  input-group-sm table-sm table-sm date" id="startday"> 
                <input type="text" name="startday" class="form-control" value="" onKeydown="if (event.keyCode == 13) {find_text();}">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <div class="input-group-addon">
                            <i class="far fa-calendar-alt fa-lg"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-3">
            <select name="time_no" class="form-control form-control-sm">
                <option value="">선택하세요. &nbsp; </option>
<?  
    $time_no=set_value("time_no");
    foreach ($list as $row){
        if($row->no == $time_no)
            echo("<option value='$row->no' selected> $row->time</option>");
        else
            echo("<option value='$row->no'> $row->time</option>");
    }
?>
            </select>
        </div>
    </div>
        <br>
    <div class="row">
    <div class="col-2" align="middle">종료시간</div> 
        <div class="col-3" align="left"> 
            <div class="input-group  input-group-sm table-sm table-sm date" id="endday"> 
                <input type="text" name="endday" class="form-control" value="" onKeydown="if (event.keyCode == 13) {find_text();}">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <div class="input-group-addon">
                            <i class="far fa-calendar-alt fa-lg"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-3">
            <select name="time_no2" class="form-control form-control-sm">
                <option value="">선택하세요. &nbsp; </option>
<?  
    $time_no2=set_value("time_no2");
    foreach ($list as $row){
        if($row->no == $time_no2)
            echo("<option value='$row->no' selected> $row->time</option>");
        else
            echo("<option value='$row->no'> $row->time</option>");
    }
?>
            </select>
        </div>
    </div>     
    </td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">
      포스터
    </td>
    <td width="80%" align="left">
        <div class="form-inline" style="display:block">
            <input  type="file" name="poster" value="" class="form-control form-control-sm">
        </div>
    </td>
</tr>

</table>

<div align="center" style="margin: 10px;">
    <input type="submit" value="저장" class="btn btn-primary">
    <a href="/~sale8/event/lists" onClick="javascript:history.back();"><input type="button" value="이전화면" class="btn btn-primary"></a>
</div>
</form>






<div>








<form action="~sale8/event" method="post" style="position: relative; top: 50px; left:100px;"> 
<textarea name="ir1" id="ir1" rows="10" cols="100" value="" style="width:766px; height:412px;">

</textarea>
<p>
<input type="button" onclick="submitContents(this);" value="서버로 내용 전송"/> <br>
</p>
	<!--textarea name="ir1" id="ir1" rows="10" cols="100" style="width:100%; height:412px; min-width:610px; display:none;"></textarea-->
	<!-- <p>
		<input type="button" onclick="pasteHTML();" value="본문에 내용 넣기" />
		<input type="button" onclick="showHTML();" value="본문 내용 가져오기" />
		<input type="button" onclick="submitContents(this);" value="서버로 내용 전송" />
		<input type="button" onclick="setDefaultFont();" value="기본 폰트 지정하기 (궁서_24)" />
	</p> -->
</form>

<script type="text/javascript">
var oEditors = [];

var sLang = "ko_KR";	// 언어 (ko_KR/ en_US/ ja_JP/ zh_CN/ zh_TW), default = ko_KR

// 추가 글꼴 목록
//var aAdditionalFontSet = [["MS UI Gothic", "MS UI Gothic"], ["Comic Sans MS", "Comic Sans MS"],["TEST","TEST"]];

nhn.husky.EZCreator.createInIFrame({
	oAppRef: oEditors,
	elPlaceHolder: "ir1",
	sSkinURI: "/~sale8/smarteditor/SmartEditor2Skin.html",	
	htParams : {
		bUseToolbar : true,				// 툴바 사용 여부 (true:사용/ false:사용하지 않음)
		bUseVerticalResizer : true,		// 입력창 크기 조절바 사용 여부 (true:사용/ false:사용하지 않음)
		bUseModeChanger : true,			// 모드 탭(Editor | HTML | TEXT) 사용 여부 (true:사용/ false:사용하지 않음)
		//bSkipXssFilter : true,		// client-side xss filter 무시 여부 (true:사용하지 않음 / 그외:사용)
		//aAdditionalFontList : aAdditionalFontSet,		// 추가 글꼴 목록
		fOnBeforeUnload : function(){
			//alert("완료!");
		},
		I18N_LOCALE : sLang
	}, //boolean
	fOnAppLoad : function(){
		//예제 코드
		//oEditors.getById["ir1"].exec("PASTE_HTML", ["로딩이 완료된 후에 본문에 삽입되는 text입니다."]);
	},
	fCreator: "createSEditor2"
});

// function pasteHTML() {
// 	var sHTML = "<span style='color:#FF0000;'>이미지도 같은 방식으로 삽입합니다.<\/span>";
// 	oEditors.getById["ir1"].exec("PASTE_HTML", [sHTML]);
// }

// function showHTML() {
// 	var sHTML = oEditors.getById["ir1"].getIR();
// 	alert(sHTML);
// }
	
// function submitContents(elClickedObj) {
// 	oEditors.getById["ir1"].exec("UPDATE_CONTENTS_FIELD", []);	// 에디터의 내용이 textarea에 적용됩니다.
	
// 	// 에디터의 내용에 대한 값 검증은 이곳에서 document.getElementById("ir1").value를 이용해서 처리하면 됩니다.
	
// 	try {
// 		elClickedObj.form.submit();
// 	} catch(e) {}
// }

// function setDefaultFont() {
// 	var sDefaultFont = '궁서';
// 	var nFontSize = 12;
// 	oEditors.getById["ir1"].setDefaultFont(sDefaultFont, nFontSize);
// }


$(function() {
    $('#startday').datetimepicker({
        locale:'ko',
        format:'YYYY-MM-DD',
        defaultDate: moment()
    });
$('#endday').datetimepicker({
        locale:'ko',
        format:'YYYY-MM-DD',
        defaultDate: moment()
    });

    $("#startday") .on("dp.change", function (e){
        find_text();
    });
    $("#endday") .on("dp.change", function (e){
        find_text();
    });   
});

</script>










 
