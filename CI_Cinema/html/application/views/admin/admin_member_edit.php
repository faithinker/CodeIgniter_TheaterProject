		 <!-- MAIN CONTENT-->
         <script>
            function find_text(){
                if(!form1.text1.value)
                    form1.action="/~team2/adminmember/lists/page";
                else
                    form1.action="/~team2/adminmember/lists/text1/" + form1.text1.value+"/page";
                form1.submit();
            }
        </script>
        
        
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <h2>멤버</h2><br>
                         <div class="row">
                            <div class="col-lg-12">
                                <!-- USER DATA-->
                                <form name="form1" action="" method="post">
                                <div class="user-data m-b-30">
                                    <h3 class="title-3 m-b-30">
                                        <i class="zmdi zmdi-account-calendar"></i>멤버 수정</h3>
                                    <div class="filters m-b-45">
										<div class="input-group-append">
					<form name="form1" method="post" action="">

				<table class="table table-bordered table-sm mymargin5">

				<tr>
					<td width="20%" class="mycolor2" style="vertical-align:middle">
						<font color="red">*</font> 이름
					</td>
					<td width="80%" align="left">
						<div class="form-inline" style="display:block">
							<input  type="text" name="name" size="20" maxlength="20" value="<?=$row->name?>"
										 class="form-control form-control-sm">
							<? if (form_error("name")==true) echo form_error("name"); ?>

						</div>
					</td>
				</tr>
				<tr>
					<td width="20%" class="mycolor2" style="vertical-align:middle">
						<font color="red">*</font> 아이디
					</td>
					<td width="80%" align="left">
						<div class="form-inline" style="display:block">
							<input  type="text" name="uid" size="20" maxlength="20" value="<?=$row->uid?>"
										 class="form-control form-control-sm">
							<? if (form_error("uid")==true) echo form_error("uid"); ?>

						</div>
					</td>
				</tr>
				<tr>
					<td width="20%" class="mycolor2" style="vertical-align:middle">
						<font color="red">*</font> 암호
					</td>
					<td width="80%" align="left">
						<div class="form-inline" style="display:block">
							<input  type="text" name="pwd" size="20" maxlength="20" value="<?=$row->pwd ?>"
										 class="form-control form-control-sm">
							<? if (form_error("pwd")==true) echo form_error("pwd"); ?>
						</div>
					</td>
				</tr>

				<?
					$tel1=trim(substr($row->tel,0,3));
					$tel2=trim(substr($row->tel,3,4));
					$tel3=trim(substr($row->tel,7,4));

					$birthday1=substr($row->birth,0,4);            
					$birthday2=substr($row->birth,5,2);
					$birthday3=substr($row->birth,8,2);
				?>
			<tr>
					<td width="20%" class="mycolor2" style="vertical-align:middle">
						 전화
					</td>
					<td width="80%" align="left">
						<div class="form-inline">
							<input  type="text" name="tel1" size="3" maxlength="3" value="<?=$tel1?>"
										 class="form-control form-control-sm">&nbsp -  &nbsp
							<input  type="text" name="tel2" size="4" maxlength="4" value="<?=$tel2?>"
										 class="form-control form-control-sm">&nbsp-  &nbsp
							<input  type="text" name="tel3" size="4" maxlength="4" value="<?=$tel3?>"
										 class="form-control form-control-sm">			
						</div>
					</td>
				</tr>
				<tr>
					<td width="20%" class="mycolor2" style="vertical-align:middle">
						이메일
					</td>
					<td width="80%" align="left">
						<div class="form-inline" style="display:block">
							<input  type="text" name="email" size="20" maxlength="20" value="<?=$row->email?>"
										 class="form-control form-control-sm">
						</div>
					</td>
				</tr>
				<tr>
					<td width="20%" class="mycolor2" style="vertical-align:middle">
						생년월일
					</td>
					<td>
					<div class="form-inline">
							<input type="text" name="birthday1" size = "4" maxlength = "4" value = "<?=$birthday1?>" class="form-control form-control-sm"> <font color="898989">년</font>&nbsp
							<input type="text" name='birthday2' size = "2" maxlength = "2" value = "<?=$birthday2?>" class="form-control form-control-sm"> <font color="898989">월</font> &nbsp
							<input type="text" name='birthday3' size = "2" maxlength = "2" value = "<?=$birthday3?>" class="form-control form-control-sm"> <font color="898989">일</font>							
						&nbsp&nbsp&nbsp
						<?
						$sm=$row->sm;
						if ($sm==0){
							?>
						<input type="radio" name='sm' value = "0" checked> <font color="898989">양력</font> &nbsp
						<input type="radio" name='sm' value = "1" > <font color="898989">음력</font>
						<? }
						else{ ?>
						<input type="radio" name='sm' value = "0"> <font color="898989">양력</font> &nbsp
						<input type="radio" name='sm' value = "1"  checked> <font color="898989">음력</font>
						<?
						}
						?>

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


