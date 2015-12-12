$(document).ready(function() {
    $('a:has(b)').css('text-decoration','none');

    $('.nav-year a').on('click', function() {
        var offset = $($(this).attr('href')).offset();
        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top
        }, 1000);

    });

    // Fix slide up on focus
    $('.tips .back a,.tips .back button').on('focus', function() {
        $('.tip-content').removeClass('show-back');
        $(this).parent().parent().parent('.tip-content').addClass('show-back');
    });
    $('.tips .back a,.tips .back button').on('focusout', function() {
        $('.tip-content').removeClass('show-back');
    });
    // Remove link in the front
    $('.front a').contents().unwrap();
    // Slide up on click for tablet/mobile
    $('.objectifs .front,.potion .front,.casque .front, .fight .front').on('click', function() {
        $(this).parent('.tip-content').addClass('show-back');
    });
    // No slide up on hover
    $('.potion .back').each(function(){
        if($(this).html()=='') {
            $(this).parent('.tip-content').addClass('hide-back');
        }
    });

    // Sticky
    $('body').attr({
        'data-spy': 'scroll',
        'data-target': '.nav-year'
    });
    $('header').append($('#sticky'));
});
$(window).scroll(function() {
    var $sticky = $("#sticky");
    if($(window).scrollTop() > 140) {
        $("#sticky").css('position','fixed');
    } else {
        $("#sticky").css('position','relative');
    };
    var $affix = $("#affix");
    if($(window).scrollTop() > 500) {
        $("#affix").css('position','fixed');
    } else {
        $("#affix").css('position','relative');
    };
});
