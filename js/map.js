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

    $('#c-select').select2({
        placeholder: $('label[for="c-select"] .sr-only').text()
    });

    $('.btn-alt').on('click', function(){
        $(this).parent().parent().parent().parent().parent().modal('hide');
    });

    $('#play-pause').on('click', function(){
        if($('#play-pause a i').hasClass('fa-play')) {
            $("video").get(0).play();
            $('#play-pause a i').removeClass('fa-play').addClass('fa-pause');
        } else {
            $("video").get(0).pause();
            $('#play-pause a i').removeClass('fa-pause').addClass('fa-play');
        }
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