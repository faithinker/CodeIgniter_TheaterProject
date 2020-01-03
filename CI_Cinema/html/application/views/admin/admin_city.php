		 <!-- MAIN CONTENT-->
         <script>
            function find_text(){
                if(!form1.text1.value)
                    form1.action="/~team2/admincity/lists/page";
                else
                    form1.action="/~team2/admincity/lists/text1/" + form1.text1.value+"/page";
                form1.submit();
            }
        </script>
        
        
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <h2>도시</h2><br>
                         <div class="row">
                            <div class="col-lg-12">
                                <!-- USER DATA-->
                                <form name="form1" action="" method="post">
                                <div class="user-data m-b-30">
                                    <h3 class="title-3 m-b-30">
                                        <i class="zmdi zmdi-account-calendar"></i>city data</h3>
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
										<button type="button" class="btn btn-info"><a href="/~team2/admincity/add">추가</a></button>
                                    </div>
                                </form>

								

                                    <div class="table-responsive table-data" style="background:#EAEAEA; height:672px;">
                                        <table class="table" style="padding-bottom:0px;">
										
                                            <thead>
                                                <tr>
													<td>no</td>
													<td>도시명</td>
													<td></td>
                                                </tr>
                                            </thead>
                                            <tbody>
										
                                            <?
                                                foreach ($list as $row) {    
													 $no=$row->no;    
                                                ?>
                                                <tr>
												<td>
												<?=$row->no?>
												</td>
												<td>
												<?=$row->name?></a>
												</td>
												<td style="background-color:lightgray;"><a href="/~team2/admincity/edit/no/<?=$row->no;?>" role="button">수정</a></td>
												
													<td style="background-color:lightgray;"><a href="/~team2/admincity/del/no/<?=$row->no;?>" onClick="return confirm('정말 지우시겠습니까?');" role="button">삭제</a></td>
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


