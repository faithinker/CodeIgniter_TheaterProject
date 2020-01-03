		 <!-- MAIN CONTENT-->
         <script>
            function find_text(){
                if(!form1.text1.value)
                    form1.action="/~team2/adminjijum/lists/page";
                else
                    form1.action="/~team2/adminjijum/lists/text1/" + form1.text1.value+"/page";
                form1.submit();
            }
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
				<tr>
					<td width="20%" class="mycolor2" style="vertical-align:middle">
						<font color="red">*</font> 종류
					</td>
					<td width="80%" align="left">
						<div class="form-inline" style="display:block">
							<select id="select-box" name="kind" class="form-control form-control-sm" id="name">
							  <option value="">선택하세요.</option>
							  <option value=0 >영화</option>
							  <option value=1 >시사회/무대인사</option>	 
								<option value=2 >우리동네영화관</option>	 
								  

							</select>
						</div>

					</td>
				</tr>
				<tr>
					<td width="20%" class="mycolor2" style="vertical-align:middle">
						<font color="red">*</font> 이벤트 이름
					</td>
					<td width="80%" align="left">
						<div class="form-inline" style="display:block">
							<input  type="text" name="name" size="20" maxlength="20" value="<?=set_value("name"); ?>"
										 class="form-control form-control-sm">
							<? if (form_error("name")==true) echo form_error("name"); ?>

						</div>
					</td>
				</tr>

				<tr>
						<td width="20%" class="mycolor2" style="vertical-align:middle">메인사진</td>
					<td width="80%" align="left">
						<div class="form-inline" style="display:block">
							<input  type="file" name="pic1" value="" class="form-control form-control-sm">
						</div>
					</td>
				</tr>

				<tr>
						<td width="20%" class="mycolor2" style="vertical-align:middle">내용사진</td>
					<td width="80%" align="left">
						<div class="form-inline" style="display:block">
							<input  type="file" name="pic2" value="" class="form-control form-control-sm">
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


