(function($) {
            
    // GNB 이벤트
    $(document).on('mouseenter focusin', '#header #gnb div ul li', function(e) {
        $('#header').addClass('gnb-opened');
    });
    $(document).on('mouseleave', '#header #gnb', function(e) {
        $('#header').removeClass('gnb-opened');
    });

    // 하단 협력사 슬라이드
    var partnerSlider = $('.partners .slider').bxSlider({
        minSlides: 5,
        maxSlides: 5,
        slideWidth: 170,
        slideMargin: 30,
        pager: false,
        controls: false
    });
    $(document).on('click', '.partners .controls .prev', function(e) {
        partnerSlider.goToPrevSlide();
        e.preventDefault();
    });
    $(document).on('click', '.partners .controls .next', function(e) {
        partnerSlider.goToNextSlide();
        e.preventDefault();
    });
    
    // 퀵메뉴 토글버튼
    $(document).on('click', '#footer .quick .btn', function(e) {
        $('#footer .quick').toggleClass('collapsed');
    });

})(jQuery);