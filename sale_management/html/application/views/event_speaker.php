
<div class="alert mycolor1 mymargin5" role="alert">발표자</div>
<script>//프로그램 선택시 시작시간과 종료시간 나타내는 함수 만들어야 함
    // function select_product(){
    //     var str;
    //     str = form1.sel_program_no.value;
    //     var time = <?$firsttime?> 
    //     if (str==""){
    //         form1.program_no.value = "";
    //     }
    //     else{
    //        document.time.value = time;
    //     }
    // }
</script>
<form name="form1" method="POST" action="" enctype="multipart/form-data">
<table class="table table-bordered table-sm mymargin5">

<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">
        <font color="red">*</font> 참가 프로그램
    </td>
    <td width="80%" align="left">
        <div class="form-inline" style="display:block">
        <input type="hidden" name="program_no" value="<?=set_value("program_no"); ?>">
        <select name="sel_program_no" class="form-control form-control-sm"> <!--onClick="select_product();" -->
            <option value="">선택하세요. &nbsp; </option>
<?  
    $program_no=set_value("program_no");
    foreach ($list as $row){
        if($row->no == $program_no)
            echo("<option value='$row->no' selected> $row->program</option>");
        else
            echo("<option value='$row->no'> $row->program</option>");
    }
?>
            </select>
        </div>
    </td>
</tr>
<?
$date1=$row->startday;
$firsttime=substr($date1, 10, 6); //수정 필요

$date2=$row->endday;
$endtime=substr($date2, 10, 6); //수정 필요

// $time1 = $row->starttime;
// $starttime=substr($time1, 0, -3);
// $time2 =  $row->endtime;
// $endtime=substr($time2, 0, -3);
?>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">발표시간 </td>
    <td width="80%" align="left">
      <div class="row mycolor3" style="display: contents;" name="time">
      &nbsp; &nbsp; 시작시간 <?=$firsttime?>&nbsp;~ &nbsp; 종료시간  <?=$endtime ?>
      </div><br><br>
      <div class="row">
      <div class="col-2" align="middle">시작시간</div> 
        <div class="col-3">
            <select name="time_no1" class="form-control form-control-sm">
                <option value="<?=set_value("time_no1")?>">선택하세요. &nbsp; </option>
<?  
    $time_no1=set_value("time_no1");
    foreach ($list2 as $row){
        if($row->no == $time_no1)
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
        <div class="col-3">
            <select name="time_no2" class="form-control form-control-sm">
                <option value="<?=set_value("time_no2")?>">선택하세요. &nbsp; </option>
<?  
    $time_no2=set_value("time_no2");
    foreach ($list2 as $row){
        if($row->no == $time_no)
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
    <td width="20%" class="mycolor2" style="vertical-align:middle">발표제목</td>
    <td width="80%" align="left">
        <div class="form-inline" style="display:block">
            <input  type="text" name="title" value="" class="form-control form-control-sm" >
        </div>
    </td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">이름</td>
    <td width="80%" align="left">
        <div class="form-inline" style="display:block">
            <input  type="text" name="name" value="" class="form-control form-control-sm" >
        </div>
    </td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">소속회사</td>
    <td width="80%" align="left">
        <div class="form-inline" style="display:block">
            <input  type="text" name="company" value="" class="form-control form-control-sm" >
        </div>
    </td>
</tr>
<tr>
<td width="20%" class="mycolor2" style="vertical-align:middle">발표내용</td>
    <td width="80%" align="left">
        <div class="form-inline" style="display:block">
        <textarea name="content" form="inform" class="form-control form-control-sm" cols="60" rows="2" autofocus required wrap="hard" 
         style="resize: none;"></textarea>
        </div>
    </td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">발표목차</td>
    <td width="80%" align="left">
        <div class="form-inline" style="display:block">
        <textarea name="sequence" form="inform" class="form-control form-control-sm" cols="30" rows="5" autofocus required wrap="hard" 
         style="resize: none;"></textarea>
        </div>
    </td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">사진</td>
    <td width="80%" align="left">
        <div class="form-inline" style="display:block">
          <input type="file" name="picture" value="" class="form-control form-control-sm">
        </div>
    </td>
</tr>
<tr>
    <td width="20%" class="mycolor2" style="vertical-align:middle">자기소개</td>
    <td width="80%" align="left">
        <div class="form-inline" style="display:block">
        <textarea name="introduce" form="inform" class="form-control form-control-sm" cols="60" rows="2" autofocus required wrap="hard" 
         style="resize: none;"></textarea>
        </div>
    </td>
</tr>
</table>

<div align="center" style="margin: 10px;">
    <input type="submit" value="저장" class="btn btn-primary">
    <a href="/~sale8/event/lists" onclick="javascript:history.back();">
        <input type="button" value="이전화면" class="btn btn-primary">
    </a>
</div>
</form>

<!-- footer 부분 -->
<div>
  

