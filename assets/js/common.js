(function($) {
    $(document).on('mouseenter focusin', '#gnb .container', function() {
        $('#gnb').addClass('opened');
    });
    $(document).on('mouseleave', '#gnb .container', function() {
        $('#gnb').removeClass('opened');
    }); 
})(jQuery);