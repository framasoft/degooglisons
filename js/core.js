$(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();

    $('a[href="#presentation"]').on('click', function() {
        $('#presentation iframe').attr('src', function() {
            return $(this).attr('src')+'#/';
        });
    });

    $('a:has(b)').css('text-decoration','none');
    $('[data-toggle="tooltip"]').tooltip();

    $('#dangers,#t2-espionnum,#t2-fermetum,#t2-privatum,#t2-centralisum,#leds,#enjeux,#solutions,#concret').hide();

    $('a[href="#dangers"],a[href="#t2-espionnum"],a[href="#t2-fermetum"],a[href="#t2-privatum"],a[href="#t2-centralisum"],a[href="#leds"],a[href="#enjeux"],a[href="#solutions"],a[href="#concret"]').on('click', function() {
        $('#dangers,#t2-espionnum,#t2-fermetum,#t2-privatum,#t2-centralisum,#leds,#enjeux,#solutions,#concret').show();
        var offset = $($(this).attr('href')).offset();
        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top
        }, 1000);
    });

    $('.landing .col-sm-4:eq(0) .well').delay(1500).fadeIn();
    $('.landing .col-sm-4:eq(1) .well').delay(2500).fadeIn();
    $('.landing .col-sm-4:eq(2) .well').delay(3500).fadeIn();

    if (window.location.hash) {
        var f$_hash=window.location.hash;
        jQuery('.nav-tabs a').each(function(){
            if(jQuery(this).attr('href')==f$_hash) { jQuery(this).trigger('click'); }
        });
    }

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