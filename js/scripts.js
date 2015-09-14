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

    // Scroll sur Dangers
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
    $('a:has(b)').css('text-decoration','none');
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
