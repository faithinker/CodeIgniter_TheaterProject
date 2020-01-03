       <!-- Main content -->
        <section class="container mymarginright20">
            <div class="col-sm-12">
                <h2 class="page-heading">영화관</h2>

<!-- 셀렉트 박스 체인지 불가
<div id="sbHolder_44975060" class="sbHolder" tabindex="0"><a id="sbToggle_44975060" href="#" class="sbToggle sbToggleOpen"></a>
    <a id="sbSelector_44975060" href="#" class="sbSelector">전국</a> 혅 표시되는 빨간밑줄
    <ul id="sbOptions_44975060" class="sbOptions" style="top: 30px; max-height: 536.091px; display: block;">
        <li><a href="#" rel="" class="sbFocus">전국</a></li> 드롭박스 
        <li><a href="#1" rel="1"> 서울</a></li>
        <li><a href="#2" rel="2"> 경기/인천</a></li>
    </ul>
</div>
템플릿 제공 파일 떄문에 적용 불가  http://gamejigix.induk.ac.kr/~team2/js/custom.js
-->
<style>
.mytags-area {
  border-top: 1px solid #dbdee1;
  border-bottom: 1px solid #dbdee1;
  margin-top: 40px;
  padding-top: 13px;
  padding-bottom: 6px;
}
.mytags-area--thin {
  padding-top: 8px;
  padding-bottom: 1px;
  margin-top: 27px;
}
.myselect {
  margin-left: 50px;
  padding-bottom: 5px;
}

</style>
<script>

</script>
                <div class="tags-area tags-area--thin">
                    <form id='select' class="select" method='get'>
                          <select name="select_city" id="select-sort" class="select__sort" tabindex="0">
                            <option value="">전국</option>
                        <?  
                            $select_city=set_value("select_city");
                            foreach ($list1 as $row){
                                if($row->no == $select_city)
                                    echo("<option value='$row->no' selected><a href='~team2/cinema/view/no/$row->no'>$row->name</a></option>");
                                else
                                    echo("<option value='$row->no'> $row->name</option>");
                            }
                        ?>
                                
                        </select>
                        <? if(form_error("select_city")==true) echo form_error("select_city"); ?>
                    </form>

                    <div class="tags tags--unmarked tags--aside">
                        <span class="tags__label">Sorted by:</span>
                            <ul><!--select jquery 라이브러리, 정렬도 확인필요-->
                                <li class="item-wrap"><a href="#" class="tags__item item-active" data-filter='all'>all</a></li>
                                <li class="item-wrap"><a href="#" class="tags__item" data-filter='name'>name</a></li>
                                <li class="item-wrap"><a href="#" class="tags__item" data-filter='popularity'>popularity</a></li>
                            </ul>
                    </div>
                </div>

                    <div class="cinema-wrap">
                        <div class="row">
                            <?php 
                            foreach($list2 as $row) {
                                $no = $row->cityNo;
                            echo("
                                <div class='col-xs-6 col-sm-3 cinema-item'>
                                    <div class='cinema'>
                                        <a href='/~team2/signle_cinema/view/$no' class='cinema__images'>
                                            <img alt='' src='images/cinema/cinema1.jpg'>
                                        </a>
                                        <a href='/~team2/signle_cinema/view/$no' class='cinema-title'>$row->jijumName</a>
                                    </div>
                                </div>");
                            }
                            ?>
                            
                        </div>
                        <!-- 광고  1140X90 픽셀 -->
                        <div class="adv-place"><img alt='' src="images/banners/film.jpg"></div>


                        <div class="adv-place"><img alt='' src="images/banners/film.jpg"></div>

                    </div>
            </div>
        </section>