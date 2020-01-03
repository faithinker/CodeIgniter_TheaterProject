         <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
							<h3>시간표 &nbsp;  &nbsp; &nbsp; &nbsp;<a href="/~team2/admintimetable/add"><button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>추가하기</button> </a></h3>
  
                            </div>

                        </div>
 
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
  
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                
                                                <th>영화이름</th>
                                                <th>도시이름</th>
                                                <th>지점이름</th>
                                          
                                                <th>날짜</th>
                                                <th>시간대</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
											<tr class="tr-shadow">
										<?
										foreach($list as $row){
										?>
                                            
                                                <td><?=$row->movie_name?></td>
                                                <td><?=$row->city_name?></td>
                                                <td class="desc"><?=$row->jijum_name?></td>
                                                
                                                <td>
                                                    <span class="status--process"><?=$row->day?></span>
                                                </td>
                                                <td><?=$row->time?></td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                            <i class="zmdi zmdi-mail-send"></i>
                                                        </button>
                                                        <a href="#"><button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i></a>
                                                        </button>
                                                       
                                                        
                                                        <a href="/~team2/admintimetable/del/no/<?=$row->no?>"> <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i></a>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
											<?
										}?>
                                            <tr class="spacer"></tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                        
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


