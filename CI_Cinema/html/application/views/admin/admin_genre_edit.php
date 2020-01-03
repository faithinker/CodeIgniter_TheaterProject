		 <!-- MAIN CONTENT-->
         <script>
            function find_text(){
                if(!form1.text1.value)
                    form1.action="/~team2/admingenre/lists/page";
                else
                    form1.action="/~team2/admingenre/lists/text1/" + form1.text1.value+"/page";
                form1.submit();
            }
        </script>
        
        
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <h2>영화</h2><br>
                         <div class="row">
                            <div class="col-lg-12">
                                <!-- USER DATA-->
                                <form name="form1" action="" method="post">
                                <div class="user-data m-b-30">
                                    <h3 class="title-3 m-b-30">
                                        <i class="zmdi zmdi-account-calendar"></i>장르 수정</h3>
                                    <div class="filters m-b-45">
										<div class="input-group-append">
					<form name="form1" method="post" action="">

				<table class="table table-bordered table-sm mymargin5">
				<tr>
					<td width="20%" class="mycolor2" style="vertical-align:middle">
						<font color="red">*</font> 장르명
					</td>
					<td width="80%" align="left">
						<div class="form-inline" style="display:block">
							<input  type="text" name="name" size="20" maxlength="20" value="<?=$row->name?>"
										 class="form-control form-control-sm">

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


