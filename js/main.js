$(document).ready(function() {
    console.log($('#section-tongthe').offset().top);
    if($('.wow').length > 0) {
    wow = new WOW(
        {
            boxClass:     'wow',      // default
            animateClass: 'animated', // default
            offset:       0,          // default
            mobile:       false,       // default
            live:         true        // default
        }
    )
    wow.init();
    }
    // Hidden Nav when scroll
    $(window).scroll(function() {
        if($(window).scrollTop() > 100) {
            $('body').addClass('scroll');
        }
        else {
            $('body').removeClass('scroll');
        }
    });

    // Slide bootstrap options
    $('#carouselHomeSlider').carousel({
      interval: 3000,
      pause: false
    })
    // Close menu mobile
    if($('#navbarMainMenu').length > 0) {
        $('button.navbar-toggler').click(function() {
            if($('#footer').hasClass('m-wrap')) {
                $('#footer').removeClass('m-wrap');
            }else {
                $('#footer').addClass('m-wrap');
            }
        });
        $('#navbarMainMenu i.close').click(function() {
            $(this).parent('#navbarMainMenu').removeClass('show');
            $('#footer').removeClass('m-wrap');
        });
        $(window).click(function(e) {
            //console.log($(e.target).parents('#navbarMainMenu'));
            if( $('#navbarMainMenu').hasClass('show') && $(e.target).parents('#navbarMainMenu').length == 0 && $(e.target).attr('id') != 'navbarMainMenu' ){
                $('#navbarMainMenu').removeClass('show');
                $('#footer').removeClass('m-wrap');
            }
        });
    }
    // Scroll vị trí
    // Select all links with hashes
    $('a[href*="#"]')
        // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function(event) {
        // On-page links
        if (
          location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
          && 
          location.hostname == this.hostname
        ) {
          // Figure out element to scroll to
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          // Does a scroll target exist?
          if (target.length) {
            // Only prevent default if animation is actually gonna happen
            event.preventDefault();
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000, function() {
              // Callback after animation
              // Must change focus!
              var $target = $(target);
              $target.focus();
              if ($target.is(":focus")) { // Checking if the target was focused
                return false;
              } else {
                $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                $target.focus(); // Set focus again
              };
            });
          }
        }
    });
    // smoothing mouse scroll
    // $(function(){

    //     var $window = $(window);
    //     var scrollTime = 10;
    //     var scrollDistance = 600;

    //     $window.on("mousewheel DOMMouseScroll", function(event){

    //         event.preventDefault();

    //         var delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
    //         var scrollTop = $window.scrollTop();
    //         var finalScroll = scrollTop - parseInt(delta*scrollDistance);

    //         TweenMax.to($window, scrollTime, {
    //             scrollTo : { y: finalScroll, autoKill:true },
    //                 ease: Power1.easeOut,
    //                 overwrite: 5
    //         });
    //     });
    // });
});
