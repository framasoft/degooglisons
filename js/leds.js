$(document).ready(function() {
    $('a[href="#leds"]').on('click', function() {
        $('.leds').slideDown('slow');
    });
    $('.leds .close').on('click', function() {
        $('.leds').slideUp();
    });
    
    $('a[href="#"]').on('click', function() {
        $('html, body').animate({
            scrollTop: 0
        }, 1000);
    });
});

$(window).scroll(function() {
    if($(window).scrollTop() > $(window).height()) {
        $("#back-to-top").show();
    } else {
        $("#back-to-top").hide();
    };
});
