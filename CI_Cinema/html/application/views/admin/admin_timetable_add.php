		 <!-- MAIN CONTENT-->
         <script>
/*
$(function(){
$("#city").on("change",function(){
var selectbox=$('#city');

var option_value = selectbox[0].value;
var selectbox=$('#city');
        var option_value = selectbox[0].value;
alert("option_value : " + option_value); //값 뭐받아왔는지 확인

});
}); 
*/
	$(function() {
				$("#city").on("change",function(){
					var selectbox=$('#city');
					var option_value = selectbox[0].value;
					alert(option_value);
					$.ajax({
						url: "/~team2/admintimetable/jijum_list",
						type: "post",
						data:{
							"option_value":option_value
						},
						dataType: 'html',

						complete: function(xhr) {	
						console.log(xhr);
						$("select[name=jijum]").html(xhr.responseText);
						},
							
						error:function(request,status,error){
						console.log("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);}
						});
				});

				$("select[name=jijum]").on("change",function(){
					var selectbox=$('select[name=jijum]');
					var option_value = selectbox[0].value;
					alert(option_value);
					$.ajax({
						url: "/~team2/admintimetable/hall_list",
						type: "post",
						data:{
							"option_value":option_value
						},
						dataType: 'html',

						complete: function(xhr) {	
						console.log(xhr);
						$("select[name=hall]").html(xhr.responseText);
						},
							
						error:function(request,status,error){
						console.log("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);}

						});
				});
			});
        </script>			
     
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <h2>시간표</h2><br>
                         <div class="row">
                            <div class="col-lg-12">
                                <!-- USER DATA-->
                                <form name="form1" action="" method="post">
                                <div class="user-data m-b-30">
                                    <h3 class="title-3 m-b-30">
                                        <i class="zmdi zmdi-account-calendar"></i>시간표 추가</h3>
                                    <div class="filters m-b-45">
										<div class="input-group-append">
					<form name="form1" method="post" action="">

				<table class="table table-bordered table-sm mymargin5">
        <tr>
					<td width="20%" class="mycolor2" style="vertical-align:middle">
						<font color="red">*</font> 영화 이름
					</td>
					<td width="80%" align="left">
						<div class="form-inline" style="display:block">
							<select name="movie_no" class="form-control form-control-sm" >
							  <option id="movie_no" value="">선택하세요.</option>
							  <?
							  $movie_no=set_value("movie_no");

									foreach($movie_list as $row){ //여기에는 citydb가 들어있음
								  if($row->no==$movie_no)
									 echo("<option value='$row->no'selected>$row->name</option>");
								  
								   else
									 echo("<option value='$row->no'>$row->name</option>");    
								}
							?>

							</select>
						</div>
				<? if (form_error("movie_no")==true) echo form_error("movie_no"); ?>
					</td>
				</tr>

				<tr>
					<td width="20%" class="mycolor2" style="vertical-align:middle">
						<font color="red">*</font> 도시이름
					</td>
					<td width="80%" align="left">
						<div class="form-inline" style="display:block">
							<select name="city_no" class="form-control form-control-sm" id="city">
							  <option id="city_no" value="" selected>선택하세요.</option>
							  <?
							 

									foreach($city_list as $row){ //여기에는 citydb가 들어있음
								  
									 echo("<option value='$row->no'>$row->name</option>");
							
								}
							?>

							</select>
						</div>
				
					</td>
				</tr>
				
<tr>
					<td width="20%" class="mycolor2" style="vertical-align:middle">
						<font color="red">*</font> 지점이름
					</td>
					<td width="80%" align="left">
						<div class="form-inline" style="display:block">
							<select name="jijum" class="form-control form-control-sm" >
							 
							</select>
						</div>
				
					</td>
				</tr>
				<tr>
					<td width="20%" class="mycolor2" style="vertical-align:middle">
						<font color="red">*</font> 관이름
					</td>
					<td width="80%" align="left">
						<div class="form-inline" style="display:block">
							<select name="hall" class="form-control form-control-sm" >
							  
							</select>
						</div>
				
					</td>
				</tr>
					
				<tr>
					<td width="20%" class="mycolor2" style="vertical-align:middle">
						날짜
					</td>
					<td width="80%" align="left">
						<div class="form-inline" style="display:block">
							<input  type="text" name="day" size="20" maxlength="20" value=""
										 class="form-control form-control-sm">
						</div>
					</td>
				</tr>
				<tr>
					<td width="20%" class="mycolor2" style="vertical-align:middle">
						<font color="red">*</font>시간
					<td width="80%" align="left">
						<div class="form-inline" style="display:block">
							<select name="time" class="form-control form-control-sm">
							  <option value="">선택하세요.</option>
							  <option value="09:00">09:00</option>
							  <option value="13:00">13:00</option>
							  <option value="15:00">15:00</option>
							  <option value="17:00">17:00</option>
						      <option value="19:00">19:00</option>


							</select>
						</div>
				<? if (form_error("cityno")==true) echo form_error("cityno"); ?>
					</td>
				</tr>

				</table>

				<div align="center">
					<input type="submit" value="저장" class="btn btn-sm mycolor1">&nbsp;
					<input type="button" value="이전화면으로" class="btn btn-sm mycolor1" onclick="history.back();">
						
				</div>
				</form>
                                    </div>
                  
                                </div>
                                <!-- END USER DATA-->
                            </div>
 
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>

    </div>


