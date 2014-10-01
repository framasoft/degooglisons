$(document).ready(function() {
    // Init map
    $('#carte').maphilight();
    $('map').imageMapResize();

    // Init text
    $('.c-text').hide();
    $('#o-village').attr('selected', 'selected');
    $('#t-village').show();

    /** Interactions **/
    // Description du camps au clic sur la carte
    $('area').on('click', function() {
        var areaId = $(this).attr('id');
        // Affiche la colone de droite 1 fois
        // au premier clic sur la carte ou au focus sur le select
        if ($('.description').hasClass('away')) {
            $('.description').hide().removeClass('away').animate({width:'toggle'},200);
            $('.map').removeClass('col-md-offset-2');
        }

        $('.c-text').hide();
        $('#'+$(this).attr('id').replace('a-','t-')).fadeIn('slow');
        $('#'+$(this).attr('id').replace('a-','o-'));
        $('#c-select option').removeAttr("selected");
        $('#'+$(this).attr('id').replace('a-','o-')).attr('selected','selected');

        // déplacement de l'attention sur la description
        $('#c-select').focus();
        var offset = $('.description').offset();
        if($('.description').offset().top > 500) { // scroll sur mobile
            $('html, body').animate({
                scrollTop: $('.description').offset().top
            }, 1000);
        }

    });

    // Description du camps à la selection dans le menu
    $('#c-select').on('change', function() {
        $( "#c-select option:selected" ).each(function() {
            $('#cartemap area').mouseout();
            $('#'+$(this).attr('id').replace('o-','a-')).mouseover();

            $('.c-text').hide();
            $('#'+$(this).attr('id').replace('o-','t-')).fadeIn('slow');
        });
    });
    $('#c-select').on('focus', function() {
        if ($('.description').hasClass('away')) {
            $('.description').hide().removeClass('away').animate({width:'toggle'},200);
            $('.map').removeClass('col-md-offset-2');
        }
    });

    // Scroll sur Dangers
    $('a[href="#dangers"],a[href="#t2-espionnum"],a[href="#t2-fermetum"],a[href="#t2-privatum"],a[href="#t2-centralisum"],a[href="#leds"]').on('click', function() {
        var offset = $($(this).attr('href')).offset();
        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top
        }, 1000);
    });

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
