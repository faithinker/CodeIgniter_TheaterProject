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
                                <form name="form1" action="" method="post">
                                <div class="user-data m-b-30">
                                    <h3 class="title-3 m-b-30">
                                        <i class="zmdi zmdi-account-calendar"></i>movie data</h3>
                                    <div class="filters m-b-45">
										<div class="input-group-append">
											<input type="text" name="text1" value="<?=$text1;?>" placeholder="   이름을 검색하세요" onKeydown="if(event.keyCode == 13) {find_text();}" style="background:#d6d5d2" >			   
											<button class="btn  btn-primary" type="button" onClick="find_text();">검색</button>
										</div>		
										<br>
                                        <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border"	>
										
                                            <select class="js-select2" name="property">
                                                <option selected="selected">All Properties</option>
                                                <option value="">Products</option>
                                                <option value="">Services</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--dark rs-select2--sm rs-select2--border">
                                            <select class="js-select2 au-select-dark" name="time">
                                                <option selected="selected">All Time</option>
                                                <option value="">By Month</option>
                                                <option value="">By Day</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
										<button type="button" class="btn btn-info"><a href="/~team2/adminmovie/add">추가</a></button>
                                    </div>
                                </form>

								

                                    <div class="table-responsive table-data" style="background:#EAEAEA; height:672px;">
                                        <table class="table" style="padding-bottom:0px;">
										
                                            <thead style="text-align:center">
                                                <tr>
													<td width="2%">no</td>
													<td width="5%">포스터</td>
													<td width="8%">영화이름</td>
													<td width="15%">줄거리</td>
													<td width="7%">개봉일</td>
													<td width="7%">시청등급</td>
                                                    <td width="7%">장르</td>
                                                    <td width="7%">상영시간</td>
													<td width="7%">상영중/상영종료</td>
													<td width="7%">수정/삭제</td>
													
                                                </tr>
                                            </thead>
                                            <tbody style="text-align:center">
                                            <?
                                                foreach ($list as $row) {           
													if($row->status==0){
													$status ="상영중";}
													else if($row->status==1){
														$status ="상영종료" ;
													}
													else if($row->status==2){
														$status ="상영예정" ;
													}
                                                $synopsis=mb_strimwidth($row->synopsis,0,200,"...","utf-8");// 사용자번호 (말줄임표)
                                                
                                                ?>
                                                <tr>
												<td>
												<?=$row->no?>
												</td>
												<td>
												<a href="#"><img src="/~team2/movie_img/<?=$row->poster?>" style="height:3em"></a>
												</td>
												<td>
												<?=$row->name?>
												</td>
												<td style="font-size:10px">
												<?=$synopsis?>
												</td>
												
												<td>
												<?=$row->openday?>
												</td>
												<td>
												<?=$row->grade?>
												</td>
												<td>
												<?=$row->genre_name?>
												</td>
												<td>
												<?=$row->running_time?> 분
												</td>
												<td>
												<?=$status?>
												</td>
												
												<td style="background-color:lightgray;"><a href="/~team2/adminmovie/edit/no/<?=$row->no;?>">수정</a>/<a href="/~team2/adminmovie/del/no/<?=$row->no;?>" onClick="return confirm('정말 지우시겠습니까?');">삭제</a></td>
											</tr>

												
                                            <?
                                            }
                                            ?>
                                            </tbody>
                                        </table>
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


