<div class="clearfix"></div>
        <!-- popup ads -->
        <div id="main_popup" class="main_popup" style="position: absolute; z-index:10000; top:400px; left:10%;">
            <div id="floatdiv">
                <a href="" ><img src="/~team2/my/images/ad_pic.png" style="width:100%;height:auto;"/></a>
                <div class="popup_bottom">
                    <a href="javascript:closePopupNotToday()" class="white">오늘하루 그만보기</a>
                    <a class="pull-right white" href="javascript:closePopup();">닫기</a>
                </div>
            </div>
        </div>
			<!-- special cinema title -->

        <!-- Main content -->
        <section class="cinema-container mymarginright20">
            <div class="cinema cinema--full">
                <div class="cinema__rating" style="width:100%">CHAR LOTTE</div>
                <div id="content">
                    <div class="spec_shwrap">
                        <img src="/~team2/images/cinema_img/special_1.jpg">
                    </div>
                    <div class="spec_shwrap">
                        <img src="/~team2/images/cinema_img/special_2.jpg">
                    </div>
                    <div class="spec_shwrap">
                        <img src="/~team2/images/cinema_img/special_3.jpg">
                    </div>
                    <div class="spec_shwrap">
                        <img src="/~team2/images/cinema_img/special_4.jpg">
                    </div>
                </div>
                <div class="cinema__info" style="width:100%">
                    <p class="cinema__info-item"><strong>주소:</strong> 서울 송파구 </p>
                    <p class="cinema__info-item"><strong>전화번호:</strong> 02 - 224 - 0240</p>
                    <p class="cinema__info-item"><strong>홈페이지:</strong> <a href="/~team2/">gamejigix.induk.ac.kr/~team2/</a></p>
                </div>
            </div>


            <div class="share share--centered">
                <div class="addthis_toolbox addthis_default_style ">
                    <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                    <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
                </div>
            </div>

            <div class="tabs tabs--horisontal">
                      <!-- Nav tabs -->
                      <div class="container">
                          <ul class="nav nav-tabs" id="hTab">
                            <li class="active"><a href="#map1" data-toggle="tab">Map</a></li>
                          </ul>
                      </div>

                      <!-- Tab panes -->
                      <div class="tab-content">
                            <div class="tab-pane active" id="map1">
                                    <div id='cinema-map' class="map"></div>
                            </div>
                      </div>
            </div>
        </section>

        <div class="clearfix"></div>
<script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=qam1jsc3ga"></script>
<script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=qam1jsc3ga&callback=CALLBACK_FUNCTION"></script>
<script type="text/javascript">

var map = new naver.maps.Map('cinema-map', {
    center: new naver.maps.LatLng(37.5139576,127.1028367,17),
    zoom: 11 
});
map.setOptions("mapTypeControl", true);
map.setOptions({ //모든 지도 컨트롤 숨기기
            scaleControl: false,
            logoControl: false,
            mapDataControl: false,
            zoomControl: false,
            mapTypeControl: false
        });

//https://map.naver.com/v5/assets/img/sprites/marker@2x.png?t=1576139494322 네이버지도 이미지

var HOME_PATH = window.location.protocol + "/~team2";
//  var map = new naver.maps.Map('cinema-map', {               //37.5139576,127.1028367,17  0.0072807‬ , 0.0211928‬
//          bounds: naver.maps.LatLngBounds.bounds(new naver.maps.LatLng(37.5139576, 127.1028367,17),
//                                                new naver.maps.LatLng(37.5212383127‬, 127.124029517‬‬))
//      });
var defaultMarker = new naver.maps.Marker({
    position: new naver.maps.LatLng(37.5140576, 127.1047367,17),
    map: map,
    icon: {
        content: '<img src="'+ HOME_PATH +'/images/icon/cinema_marker.png" alt="" ' +
                 'style="margin: 0px; padding: 0px; border: 0px solid transparent; display: block; max-width: none; max-height: none; ' +
                 '-webkit-user-select: none; position: absolute; width: 40px; height: 55px; left: 0px; top: 0px;">',
        size: new naver.maps.Size(22, 35),
        anchor: new naver.maps.Point(11, 35)
    }
})
</script>


