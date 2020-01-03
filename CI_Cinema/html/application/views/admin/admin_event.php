		 <!-- MAIN CONTENT-->
         <script>
            function find_text(){
                if(!form1.text1.value)
                    form1.action="/~team2/adminevent/lists/page";
                else
                    form1.action="/~team2/adminevent/lists/text1/" + form1.text1.value+"/page";
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
                                <form name="form1" action="" method="post">
                                <div class="user-data m-b-30">
                                    <h3 class="title-3 m-b-30">
                                        <i class="zmdi zmdi-account-calendar"></i>event data</h3>
                                    <div class="filters m-b-45">
										<div class="input-group-append">
											<input type="text" name="text1" value="<?=$text1;?>" placeholder="   이름을 검색하세요" onKeydown="if(event.keyCode == 13) {find_text();}" style="background:#d6d5d2" >			   
											<button class="btn  btn-primary" type="button" onClick="find_text();">검색</button>&nbsp;
											<button type="button" class="btn btn-outline-primary"><a href="/~team2/adminevent/add">추가</a></button>
										
										</div>		
										
                                        
										
                                    </div>
                                </form>

								

                                    <div class="table-responsive" style="background:#EAEAEA; ;">
                                        <table class="table" style="padding-bottom:0px;">

                                            <thead>
                                                <tr style="text-align:center">
													<td width="20%">no</td>
													<td width="20%">영화,시사회/무대인사</td>
													<td width="30%">이벤트 이름</td>
													<td width="20%">수정/삭제</td>
                                                </tr>
                                            </thead>
                                            <tbody style="text-align:center">
											
											  <?
                                                foreach ($list as $row) {   
													
													if($row->kind == 0) {
														$kind = "영화";
													}
													else if ($row->kind == 1){
														$kind= "시사회/무대인사";
                                                    }
                                                    else {
														$kind= "우리동네영화관";
													}
                                                ?>
                                                <tr>
												<td>
												<?=$row->no?>
												</td>
												<td>
												<?=$kind?>
												</td>
												<td>
												<?=$row->name?>
												</td>
										<td style="background-color:lightgray;"><a href="/~team2/adminevent/edit/no/<?=$row->no;?>" role="button">수정 </a>
												/
													<a href="/~team2/adminevent/del/no/<?=$row->no;?>" onClick="return confirm('정말 지우시겠습니까?');" role="button">삭제</a></td>
                                                </tr>

                                        <?
                                            }
                                            ?>
                                            </tbody>
											
                                        </table>
                                    </div><?=$pagination?>
                  
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


