			 <!-- MAIN CONTENT-->
         <script>
            function find_text(){
                if(!form1.text1.value)
                    form1.action="/~team2/adminmovie/lists/page";
                else
                    form1.action="/~team2/adminmovie/lists/text1/" + form1.text1.value+"/page";
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
                                <form name="form1" method="post" enctype="multipart/form-data">
                                <div class="user-data m-b-30">
                                    <h3 class="title-3 m-b-30">
                                        <i class="zmdi zmdi-account-calendar"></i>영화 수정</h3>
                                    <div class="filters m-b-45">
										<div class="input-group-append">
				
<form name="form1" method="post" enctype="multipart/form-data">
				<table class="table table-bordered table-sm mymargin5">

				<tr>
					<td width="20%" class="mycolor2" style="vertical-align:middle">
						<font color="red">*</font> 영화명
					</td>
					<td width="80%" align="left">
						<div class="form-inline" style="display:block">
							<input  type="text" name="name" size="20" maxlength="20" value="<?=$row->name;?>"
										 class="form-control form-control-sm">
						</div>
					</td>
				</tr>
				<tr>
					<td width="20%" class="mycolor2" style="vertical-align:middle">
						<font color="red">*</font> 줄거리
					</td>
					<td width="80%" align="left">
						<div class="form-inline" style="display:block">
						<textarea name="synopsis" style="width:40%;height:200px; opacity:.8" class="form-control form-control-sm"><?=$row->synopsis?></textarea>
										 
						</div>
					</td>
				</tr>
				<tr>
					<td width="20%" class="mycolor2" style="vertical-align:middle">
						<font color="red">*</font> 감독
					</td>
					<td width="80%" align="left">
						<div class="form-inline" style="display:block">
							<input  type="text" name="director" size="20" maxlength="20" value="<?=$row->director?>"
										 class="form-control form-control-sm">
						</div>
					</td>
				</tr>
				<tr>
					<td width="20%" class="mycolor2" style="vertical-align:middle">
						<font color="red">*</font> 배우
					</td>
					<td width="80%" align="left">
						<div class="form-inline" style="display:block">
							<input  type="text" name="actor" size="20" maxlength="20" value="<?=$row->actor?>"
										 class="form-control form-control-sm">
						</div>
					</td>
				</tr>
				<tr>
					<td width="20%" class="mycolor2" style="vertical-align:middle">
						<font color="red">*</font> 개봉일
					</td>
						<td>
							<?

								$openday1=substr($row->openday,0,4);            
								$openday2=substr($row->openday,5,2);
								$openday3=substr($row->openday,8,2);
							?>
						<div class="form-inline">
								<input type="text" name="openday1" size = "4" maxlength = "4" value = "<?=$openday1?>" class="form-control form-control-sm"> <font color="898989">년</font>&nbsp
								<input type="text" name="openday2" size = "2" maxlength = "2" value = "<?=$openday2?>" class="form-control form-control-sm"> <font color="898989">월</font> &nbsp
								<input type="text" name="openday3" size = "2" maxlength = "2" value = "<?=$openday3?>" class="form-control form-control-sm"> <font color="898989">일</font>							
							&nbsp&nbsp&nbsp
							</div>
						</td>
				</tr>
				<tr>
					<td width="20%" class="mycolor2" style="vertical-align:middle">
						<font color="red">*</font> 시청등급
					</td>
					<td width="80%" align="left">
						<div class="form-inline" style="display:block">
						<select id="select-box" name="grade" class="form-control form-control-sm" >
							<option value="<?=$row->grade?>" selected><?=$row->grade?></option>
							  <option value="">선택하세요.</option>
								<option value="전체관람가">전체관람가</option>
								<option value="12세 이상 관람가">12세 이상 관람가</option>
								<option value="15세 이상 관람가">15세 이상 관람가</option>
								<option value="청소년 관람불가">청소년 관람불가</option> 
							</select>

						</div>
					</td>
				</tr>
				<tr>
					<td width="20%" class="mycolor2" style="vertical-align:middle">
						<font color="red">*</font> 장르
					</td>
						<td width="80%" align="left">
						<div class="form-inline" style="display:block">
							<select id="select-box" name="genre_no" class="form-control form-control-sm" >
							  <option value="">선택하세요.</option>
							  <?
									foreach($list as $row1){ //여기에는 genredb가 들어있음
								  if($row1->no==$row->genre_no)
									 echo("<option value='$row1->no'selected>$row1->name</option>");
								  
								   else
									 echo("<option value='$row1->no'>$row1->name</option>");    
								}
							?>

							</select>
							

						</div>
					</td>
				</tr>
				<tr>
					<td width="20%" class="mycolor2" style="vertical-align:middle">
						<font color="red">*</font> 상영시간
					</td>
					<td width="80%" align="left">
						<div class="form-inline" style="display:block">
							<input  type="text" name="running_time" size="5" maxlength="5" value="<?=$row->running_time?>"
										 class="form-control form-control-sm"> 분
						</div>
					</td>
				</tr>
				<tr>
					<td width="20%" class="mycolor2" style="vertical-align:middle">
						<font color="red">*</font> 상영상태
					</td>
						<td width="80%" align="left">
							<div class="form-inline">
							<? if($row->status == 0 ){
								?>
								<input  type="radio" name="status" value="0"  checked >상영중&nbsp;&nbsp;
								<input  type="radio" name="status" value="1">상영종료
								<input  type="radio" name="status" value="2">상영예정
								 <?
							}
								 else if($row->status == 1 ){
									 ?>

								<input  type="radio" name="status" value="0" >상영중&nbsp;&nbsp;
								<input  type="radio" name="status" value="1" checked >상영종료
								<input  type="radio" name="status" value="2">상영예정
<?
								 }
								 else if($row->status == 2 ){
									 ?>

								<input  type="radio" name="status" value="0" >상영중&nbsp;&nbsp;
								<input  type="radio" name="status" value="1" >상영종료
								<input  type="radio" name="status" value="2" checked>상영예정
							<?
								 }
								?>

							</div>
					</td>
				</tr>
						<tr>
						<td width="20%" class="mycolor2" style="vertical-align:middle">포스터</td>
					<td width="80%" align="left">
						<div class="form-inline" style="display:block">
						현재사진 : &nbsp;&nbsp;<img src="/~team2/movie_img/<?=$row->poster?>" style="padding-top:10px"><br><br>
							<input  type="file" name="poster" value="" class="form-control form-control-sm">
						</div>
					</td>
				</tr>

				<tr>
						<td width="20%" class="mycolor2" style="vertical-align:middle">트레일러1</td>
					<td width="80%" align="left">
						<div class="form-inline" style="display:block">
							<input  type="file" name="trailer1" value="" class="form-control form-control-sm">
						</div>
					</td>
				</tr>

				<tr>
						<td width="20%" class="mycolor2" style="vertical-align:middle">트레일러2</td>
					<td width="80%" align="left">
						<div class="form-inline" style="display:block">
							<input  type="file" name="trailer2" value="" class="form-control form-control-sm">
						</div>
					</td>
				</tr>

				<tr>
						<td width="20%" class="mycolor2" style="vertical-align:middle">트레일러3</td>
					<td width="80%" align="left">
						<div class="form-inline" style="display:block">
							<input  type="file" name="trailer3" value="" class="form-control form-control-sm">
						</div>
					</td>
				</tr>

				<tr>
						<td width="20%" class="mycolor2" style="vertical-align:middle">트레일러4</td>
					<td width="80%" align="left">
						<div class="form-inline" style="display:block">
							<input  type="file" name="trailer4" value="" class="form-control form-control-sm">
						</div>
					</td>
				</tr>

				<tr>
						<td width="20%" class="mycolor2" style="vertical-align:middle">트레일러5</td>
					<td width="80%" align="left">
						<div class="form-inline" style="display:block">
							<input  type="file" name="trailer5" value="" class="form-control form-control-sm">
						</div>
					</td>
				</tr>

				<tr>
						<td width="20%" class="mycolor2" style="vertical-align:middle">트레일러6</td>
					<td width="80%" align="left">
						<div class="form-inline" style="display:block">
							<input  type="file" name="trailer6" value="" class="form-control form-control-sm">
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


