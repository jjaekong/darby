(function($) {
    
    $('.community .review ul').bxSlider({
        controls: false
    });
    
    var visualSlider = $('.visual .slider').bxSlider({
        controls: false,
        pager: false,
        adaptiveHeight: 600
    });
    $(document).on('click', '.visual .nav > li > a', function(e) {
        var clickedIndex = $(this).parent().index();
        visualSlider.goToSlide(clickedIndex);
        $(this).parent().siblings('.active').removeClass('active');
        $(this).parent().addClass('active');
        e.preventDefault();
    });    
    
    $('#appoint-date').datepicker({
        dateFormat: 'yy-mm-dd',
        prevText: '이전 달',
        nextText: '다음 달',
        monthNames: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
        monthNamesShort: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
        dayNames: ['일','월','화','수','목','금','토'],
        dayNamesShort: ['일','월','화','수','목','금','토'],
        dayNamesMin: ['일','월','화','수','목','금','토'],
        showMonthAfterYear: true,
        yearSuffix: '년'
    });
    
})(jQuery);