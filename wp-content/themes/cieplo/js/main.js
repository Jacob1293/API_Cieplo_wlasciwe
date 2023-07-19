$(document).ready(function () {
    setTimeout(function() {
        $('#splash').fadeOut(500);
    }, 3000); 
    $('#splash').click(function(e) {
        $(this).fadeOut(500);
    });
    $('.menu a').click(function(e) {
        $('body').addClass('fade-out');
    });
    $('.cookies a.close')
        .on('click', function(e) {
            e.preventDefault();
            $(this).parents('.cookies').hide();
    });
    $("form").submit(function(){
        $("#urlstrony").val($("#strona").val());
        $("#tytulstrony").val($("#tytul").val());
    });
    refreshCookies();
    $(".gallery-icon a, .klient").attr('data-fancybox', 'galeria');
    $(".foto, .gallery-icon a, .galeria a, .media-img").fancybox({
        buttons : [
            'zoom',
            'close' 
        ]
    });
    $(window).scroll(function(event) {
        var scroll = $(window).scrollTop();
        $('.nav_top.second').toggleClass('show',scroll >= $('#pokamenu').offset().top);
        $('.nav_top_mobile').toggleClass('bg',scroll >= $('#pokamenu').offset().top);
    });
    $('.mobile-btn').click(function(e) {
        $(this).toggleClass('active');
        $('#top_mobile').find('.menu').toggleClass('show');
        $('body').toggleClass('block');
    });
    $('.nakladka').click(function(e) {
        $('#top_mobile').find('.menu').removeClass('show');
        $('body').removeClass('block');
    });
    (function($) {
        $('.wpcf7-acceptance input').change(function(){
            if($(this).is(":checked")) {
                $('.wpcf7-acceptance label').addClass("ok");
            } else {
                $('.wpcf7-acceptance label').removeClass("ok");
            }
        });
    })(jQuery);
    $(function() {
	  $('#przecinarka .button').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		  var windowWidth = $(window).width(); 
		  var offset = 0;
		  if(windowWidth>1199){ offset = 160;}else{ offset=110};
		  var target = $(this.hash);
		  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		  if (target.length) {
			$('html,body').animate({
			  scrollTop: target.offset().top-offset
			}, 500);
			return false;
		  }
		}
	  });
    });
    $(function() {
      $('#welcome .button').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		  var windowWidth = $(window).width(); 
		  var offset = 0;
		  if(windowWidth>1199){ offset = 0;}else{ offset=0};
		  var target = $(this.hash);
		  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		  if (target.length) {
			$('html,body').animate({
			  scrollTop: target.offset().top-offset
			}, 500);
			return false;
		  }
		}
	  });
	});
    //trigger the scroll
    $(window).scroll(); //ensure if you're in current position when page is refreshed
    $(window).on('load', function () {
        var mySwiper = new Swiper('.slajder_hasla', {
            loop: true,
            autoHeight: false,
            autoplay: 2000,
            speed: 1000,
            spaceBetween: 0,
            slidesPerView: 1,
            effect: 'fade',
        });
        var mySwiper = new Swiper('.slajder_zaufalinam', {
            loop: true,
            autoHeight: false,
            autoplay: 2000,
            speed: 1000,
            spaceBetween: 0,
            slidesPerView: 6,
            effect: 'slide',
            prevButton: '.slajder_zaufalinam_strzalka.lewa',
            nextButton: '.slajder_zaufalinam_strzalka.prawa',
            breakpoints: {
                991: {
                    slidesPerView: 4,
                },
                767: {
                    slidesPerView: 3,
                },
            }
        });
    });
    $(function() {
        $('body').removeClass('fade-out');
    });
});