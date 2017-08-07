$(document).ready(function() {
    $('a:has(b)').css('text-decoration','none');
    $('[data-toggle="tooltip"]').tooltip();

    // Init map
    $('map').imageMapResize();
    $('#carte').maphilight();

    var carte = $('#carte').attr('src');
        carte = window.location.href.replace(/\?l=.*/, '')+carte.replace('victoires','fantome');

    /** Interactions **/
    // Description du camps au clic sur la carte
    $('area').on('click', function() {
        var areaId = $(this).attr('id');
        $('#'+$(this).attr('id').replace('a-','modal-t-')).modal('show');
    });

    // Description du camps à la selection dans le menu
    $('#c-select').on('change', function() {
        $( "#c-select option:selected" ).each(function() {
            $('#cartemap area').mouseout();
            $('#'+$(this).attr('id').replace('o-','a-')).mouseover();
            $('#'+$(this).attr('id').replace('o-','modal-t-')).modal('show');
        });
    });

    $('.btn-alt').on('click', function(){
        $(this).parent().parent().parent().parent().modal('hide');
    });

    // Scroll sur Dangers
    $('#leds.anchor, .row.leds').remove();
    $('a[href="#dangers"],a[href="#t2-espionnum"],a[href="#t2-fermetum"],a[href="#t2-privatum"],a[href="#t2-centralisum"],a[href="#leds"],a[href="#enjeux"],a[href="#solutions"],a[href="#concret"]').on('click', function() {
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

/* Coordonnées de la souris sur l'image
$(document).ready(function() {
   $('.well').append('<p id="log"></p>');
});
$( document ).on( "mousemove", function( event ) {
    var carte = $( "#carte" );
    var offset = carte.offset();
    $( "#log" ).text( "pageX: " + Math.floor(((event.pageX-offset.left)*1353/1130+5)/10)*10 + ", pageY: " + Math.floor(((event.pageY-offset.top)*1579/1319+5)/10)*10 );
});*/
