var $window = $(window);
var questionPopupAndroid = new QuestionPopupAndroid();
var questionPopupIos = new QuestionPopupIos();
var programPopups = new ProgramPopups();

(function(){
	// 상단
	mountMenuHandler(); // 최상단 메뉴버튼
	mountMainButtonHandler(); // 상단 참가신청/질문/자료 링크 버튼

	// 본문
	mountProgramHandler();

    // qrCode 링크 이벤트 핸들러
	mountQrCodeLinkClickHandler();

	// 푸터
	mountFooterHandler();

	// 기타 필요한 것들. 
	mountWindowHandler();
})();

// 최상단 메뉴버튼
function mountMenuHandler() {
	var onClass = 'on';
	var $menuBox = $('.menu_box');
	var $btnMenu = $('.btn_menu');
	var $btnClose = $('.btn_close');
	var $btnGotos = $('._btnGoto');

	/**
	 * menu events
	 */
	// 사이드 메뉴 열고 닫기
	$btnMenu.add($btnClose).on('click', function() {
		$menuBox.toggleClass(onClass);
		return false;
	});
	
	// 앵커이동
	$btnGotos.on('click', function(e) {
		var $header = $('#header');
		var headerHeight = $header.height();
		var destSelector = e.currentTarget.getAttribute('data-dest');

		$window.scrollTop($(destSelector).offset().top - headerHeight);
		$menuBox.toggleClass(onClass);

		return false;
	});
}

function mountMainButtonHandler() {
    var $mainWrapper = $('.main');
	var $btnBoxes = $mainWrapper.find('.btn_box');
	var btnLive = {
    		android: 'https://tv.naver.com/l/29118',
    		ios: 'https://tv.naver.com/l/29119'
    };
	var current = new Date().getTime();

	// 참가 신청 마감
	var registrationEnd = new Date(2019,6,1,9,30).getTime();
	var androidProgramStart = new Date(2019,6,11,12,30).getTime();
	var androidProgramEnd = new Date(2019,6,11,23,59).getTime();
	var iosProgramStart = new Date(2019,6,12,0,0).getTime();
	var iosProgramEnd = new Date(2019,6,12,23,59).getTime();

	var isAndroidProgramOnGoing = current >=androidProgramStart && current <= androidProgramEnd;
	var isIosProgramOnGoing = current >=iosProgramStart & current <=iosProgramEnd;

	if(current < registrationEnd) {
	    // 참가 신청
	    $btnBoxes.eq(0).show();
	} else if(current >=registrationEnd && current <=iosProgramEnd) {

	    if(isAndroidProgramOnGoing) {
	        // 안드로이드 행사중 -> 라이브영상 셋업
    	    $btnBoxes.eq(2).show();
            $btnBoxes.eq(2).find('.live').attr('data-link', btnLive.android)
	    } else if(isIosProgramOnGoing) {
	        // iOS 행사중 -> 라이브영상 셋업
	        $btnBoxes.eq(3).show();
        	$btnBoxes.eq(3).find('.live').attr('data-link', btnLive.ios)
	    } else {
	        // 참가 신청 마감
        	$btnBoxes.eq(1).show();
	    }
	} else {
	    // 행사 종료
	    $btnBoxes.eq(4).show();
	}

	$btnBoxes.find('button').on('click', function(e) {
		var link = e.currentTarget.getAttribute('data-link');
		var message = e.currentTarget.getAttribute('data-message');
		if(link == '#') {
		    if(message) {
		        alert(message);
		    } else {
    		    // 아무것도 안함.
		    }
		} else if(link) {
		    // 링크가 있으면 링크이동
        	window.open(link, '_blank');
		} else {
			// 없으면 질문 팝업
			if(isAndroidProgramOnGoing || message == 'android') {
			    questionPopupAndroid.show();
			} else if(isIosProgramOnGoing || message =='ios') {
			    questionPopupIos.show();
			}
			return false;
		}
	})
}

function mountProgramHandler() {
	var $programWrapper = $('.program');
	var $btnPrograms = $programWrapper.find('a');

	$btnPrograms.on('click', function(e) {
		var clickedIndex = $btnPrograms.index(e.currentTarget);

		programPopups.show(clickedIndex);
		return false;
	});	
}

// 안드로이드 실시간 질문하기 팝업
function QuestionPopupAndroid() {
	var onClass = 'on';
	var $wrapper = $('.question_popup_android');
	var $btnClose = $wrapper.find('.btn_ly_close');
	var $btnLinks = $wrapper.find('.btn');

	$btnLinks.on('click', function(e) {
		var link = e.currentTarget.getAttribute('data-link');
		window.open(link, '_blank');
	})
	
	$btnClose.on('click', function() {
		$wrapper.removeClass(onClass);
	});

	this.show = function() {
		$wrapper.addClass(onClass);
	}
	this.hide = function() {
		$wrapper.removeClass(onClass);
	}
}

// iOS 실시간 질문하기 팝업
function QuestionPopupIos() {
	var onClass = 'on';
	var $wrapper = $('.question_popup_ios');
	var $btnClose = $wrapper.find('.btn_ly_close');
	var $btnLinks = $wrapper.find('.btn');

	$btnLinks.on('click', function(e) {
		var link = e.currentTarget.getAttribute('data-link');
		window.open(link, '_blank');
	})

	$btnClose.on('click', function() {
		$wrapper.removeClass(onClass);
	});

	this.show = function() {
		$wrapper.addClass(onClass);
	}
	this.hide = function() {
		$wrapper.removeClass(onClass);
	}
}

function mountQrCodeLinkClickHandler() {
    var onClass = 'on';
	var $appDownload = $('.app_download');
	var $qrCode = $appDownload.find(".qr_code");

	$qrCode.on("click", function(e) {
	    var link = e.currentTarget.getAttribute('data-link');
	    window.open(link, '_blank');
	})
}

// 프로그램 상세 팝업
function ProgramPopups() {
	var onClass = 'on';
	var $programPopups = $('.program_popup');
	var $btnClose = $programPopups.find('.btn_ly_close');
	var $btnLinks = $programPopups.find('.btn');

	$btnClose.on('click', function() {
		$programPopups.removeClass(onClass);
	});

	$btnLinks.on('click', function(e) {
		var link = e.currentTarget.getAttribute('data-link');
		window.open(link, '_blank');
	})

	this.hideAll = function() {
		$programPopups.removeClass(onClass);
	}
	this.show = function(index) {
		$programPopups.removeClass(onClass)
			.eq(index).addClass(onClass);
	}
}

function mountFooterHandler() {
	var onClass = 'on';
	var $footer = $('#footer');
	var $eventBox = $footer.find('.event_box');
	var $btnEvent = $eventBox.find('.btn_event');

	$btnEvent.on('click', function(e) {
		$eventBox.toggleClass(onClass);
	});

	$window.on('click', function(e) {
		if(!$eventBox.get(0).contains(e.target)) {
			$eventBox.hasClass(onClass) && $eventBox.removeClass(onClass);
		}
	});
}


function mountWindowHandler() {
	var $wrap = $('.wrap');
	
	if (isIE () && isIE () < 10) {
		// is IE version less than 10
		$wrap.addClass('ie9');
	}

	/**
	 * window events
	 */
	$window.on('scroll', function() {
		if($(window).scrollTop() > 889) {
				$('#header').addClass('fixed');
		} else {
				$('#header').removeClass('fixed');
		}
		return false;
	});
}

function isIE () {
  var nav = navigator.userAgent.toLowerCase();
  return (nav.indexOf('msie') != -1) ? parseInt(nav.split('msie')[1]) : false;
}