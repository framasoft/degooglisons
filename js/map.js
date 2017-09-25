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
});
