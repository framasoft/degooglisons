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

    // Animation bulles
    // (partiellement désactivée, ça fait sauter le background si les bulles ne sont pas dans leur taille finale)
    //$('.landing .col-sm-4 .well').css('padding','0').width(0).height(0);
    $('.landing .col-sm-4 .well a').hide();
    $('.landing .col-sm-4:eq(0) .well').delay(1000).css({visibility: 'visible'}).animate({
            width: '200px',
            height: '200px',
            padding: '29px 19px 19px'
        },{
        duration: 500, 
        complete: function() {
            $('.landing .col-sm-4:eq(0) .well a').show();
            $('.landing .col-sm-4:eq(1) .well').delay(500).css({visibility: 'visible'}).animate({
                    width: '200px',
                    height: '200px',
                    padding: '19px'
                },{
                duration: 500, 
                complete: function() {
                    $('.landing .col-sm-4:eq(1) .well a').show();
                    $('.landing .col-sm-4:eq(2) .well').delay(500).css({visibility: 'visible'}).animate({
                            width: '200px',
                            height: '200px',
                            padding: '34px 19px 19px'
                        },{
                        duration: 500, 
                        complete: function() {
                            $('.landing .col-sm-4:eq(2) .well a').show();
                        }
                    });
                }
            });
        }
    });
    
    $('a[href^="https://my.framasoft.org"]')
        .on('click', function(){
            $($(this).attr('data-target')+' .embed-responsive iframe').attr(
                'src',$(this).attr('href')
            );
            $($(this).attr('data-target')).modal('show');
            return false;
        });

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