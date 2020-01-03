		 <!-- MAIN CONTENT-->
         <script>
            function find_text(){
                if(!form1.text1.value)
                    form1.action="/~team2/adminjijum/lists/page";
                else
                    form1.action="/~team2/adminjijum/lists/text1/" + form1.text1.value+"/page";
                form1.submit();
						}
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
                        <h2>이벤트</h2><br>
                         <div class="row">
                            <div class="col-lg-12">
                                <!-- USER DATA-->
                                <form name="form1" action="" method="post" enctype="multipart/form-data">
                                <div class="user-data m-b-30">
                                    <h3 class="title-3 m-b-30">
                                        <i class="zmdi zmdi-account-calendar"></i>이벤트 추가</h3>
                                    <div class="filters m-b-45">
										<div class="input-group-append">
					<form name="form1" method="post" action="">

				<table class="table table-bordered table-sm mymargin5">

					<td width="20%" class="mycolor2" style="vertical-align:middle">
						<font color="red">*</font> 지점이름
					</td>
					<td width="80%" align="left">
						<div class="form-inline" style="display:block">
							<select name="jijum_no" class="form-control form-control-sm" id="city">
							  <option id="jijum_no" value="" selected>선택하세요.</option>
							  <?
							 

									foreach($list2 as $row){ //여기에는 citydb가 들어있음
								  
									 echo("<option value='$row->no'>$row->name</option>");
							
								}
								?>
							</select>
						</div>
				
					</td>



				<tr>
					<td width="20%" class="mycolor2" style="vertical-align:middle">
						<font color="red">*</font> 이벤트 제목
					</td>
					<td width="80%" align="left">
						<div class="form-inline" style="display:block">
							<input  type="text" name="title" size="20" maxlength="20" value="<?=set_value("title"); ?>"
										 class="form-control form-control-sm">
							<? if (form_error("title")==true) echo form_error("title"); ?>
						</div>
					</td>
				</tr>
				<tr>
					<td width="20%" class="mycolor2" style="vertical-align:middle">
						<font color="red">*</font> 이벤트 내용
					</td>
					<td width="80%" align="left">
						<div class="form-inline" style="display:block">
						<textarea name="contents" class="form-control"  style="width:100%">
							</textarea>
						</div>
					</td>
				</tr>
				<tr>
					<td width="20%" class="mycolor2" style="vertical-align:middle">
						<font color="red">*</font> 기간
					</td>
					<td width="80%" align="left">
						<div class="form-inline" style="display:block">
							<input  type="text" name="term" placeholder="0000-00-00 ~ 0000-00-00 으로 작성" class="form-control form-control-sm" style="width:100%">	 
						</div>
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


