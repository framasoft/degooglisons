$(document).ready(function() {
    $('a:has(b)').css('text-decoration','none');
    $('[data-toggle="tooltip"]').tooltip();

    $('#dangers,#t2-espionnum,#t2-fermetum,#t2-privatum,#t2-centralisum,#leds,#enjeux,#solutions,#concret').hide();

    // Scroll sur Dangers
    $('#leds.anchor, .row.leds').remove();
    $('a[href="#dangers"],a[href="#t2-espionnum"],a[href="#t2-fermetum"],a[href="#t2-privatum"],a[href="#t2-centralisum"],a[href="#leds"],a[href="#enjeux"],a[href="#solutions"],a[href="#concret"]').on('click', function() {
        $('#dangers,#t2-espionnum,#t2-fermetum,#t2-privatum,#t2-centralisum,#leds,#enjeux,#solutions,#concret').show();
        var offset = $($(this).attr('href')).offset();
        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top
        }, 1000);
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