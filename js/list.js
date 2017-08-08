$(document).ready(function() {
    $('a:has(b)').css('text-decoration','none');

    $('#sticky .navbar a').on('click', function() {
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

    $('#tags-select').on('change', function() {
        $('#results').html('');
        $('#results_wrapper').hide();
        $( "#tags-select option:selected").each(function() {
            $('.'+$(this).attr('id')).clone().appendTo('#results');
            $('#results_wrapper').show();
        });
        // Remove duplicate entries
        dejavu = {};
        $('#results .col-md-3.col-sm-6').each(function() {
            var html = $(this).html();
            if (dejavu[html]) {
                $(this).remove();
            } else {
                dejavu[html] = true;
            }
        });
    });

    $("#tags-select").select2({
        placeholder: "Recherche par mots-clés"
    });

    // Sticky
    $('body').attr({
        'data-spy': 'scroll',
        'data-target': '#sticky .navbar'
    });
    $('header').append($('#sticky:has(.nav-year)'));

    // Horizontal scroll
    var hidWidth;
    var scrollBarWidths = 40;

    var widthOfList = function(){
      var itemsWidth = 0;
      $('.nav-tabs li').each(function(){
        var itemWidth = $(this).outerWidth();
        itemsWidth+=itemWidth;
      });
      return itemsWidth;
    };

    var widthOfHidden = function(){
      return (($('.nav-cats').outerWidth())-widthOfList()-getLeftPosi())-scrollBarWidths;
    };

    var getLeftPosi = function(){
      return $('.nav-tabs').position().left;
    };

    var reAdjust = function(){
      if (($('.nav-cats').outerWidth()) < widthOfList()) {
        $('.scroller-right').show();
      }
      else {
        $('.scroller-right').hide();
      }

      if (getLeftPosi()<0) {
        $('.scroller-left').show();
      }
      else {
        $('.item').animate({left:"-="+getLeftPosi()+"px"},'slow');
        $('.scroller-left').hide();
      }
    }

    reAdjust();

    $(window).on('resize',function(e){
        reAdjust();
    });

    $('.scroller-right').click(function() {

      $('.scroller-left').fadeIn('slow');
      $('.scroller-right').fadeOut('slow');

      $('.nav-tabs').animate({left:"+="+widthOfHidden()+"px"},'slow',function(){

      });
    });

    $('.scroller-left').click(function() {

        $('.scroller-right').fadeIn('slow');
        $('.scroller-left').fadeOut('slow');

        $('.nav-tabs').animate({left:"-="+getLeftPosi()+"px"},'slow',function(){

        });
    });
});
$(window).scroll(function() {
    var $sticky = $("#sticky");
    if($(window).scrollTop() > 140) {
        $("#sticky").css('position','fixed');
    } else {
        $("#sticky").css('position','relative');
    };
    if($(window).scrollTop() > 540) {
        $("#sticky.cats").css('position','fixed');
    } else {
        $("#sticky.cats").css('position','relative');
    };
});
