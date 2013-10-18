//JSHint Validated Custom JS Code by Designova

/*global $:false */
/*global window: false */

(function(){
  "use strict";

  $('#cortina').show().delay(5000).fadeOut(1400);
  
  
		
		function scroll(){
			$('#scroll').animate({'bottom':'+=5px'}, 320).animate({'bottom':'-=5px'}, 280, function(){scroll();});
		}
		
		function type(){
			if(dots < 3)
			{
				$('#dots').append('.');
				dots++;
			}
			else
			{
				$('#dots').html('');
				dots = 0;
			}
		}
  
  
		$(window).scrollTop(0);
		$('.navigation').hide();
		
		scroll();
		
		$('#pacote-ver').click(function(){
			$('#pacote-esconde').slideDown();
		});
		
		
		// Ativa a anima��o dots
		$(function() {
		setInterval(type, 600); 
		});
		
		// Esconde o endere�o da home
		
		$(window).scroll(function (event) {  
			
			var y = $(this).scrollTop();
		  
			if (y >= 10) {
			  $('#endereco').fadeOut();
			} else {
			  $('#endereco').fadeIn();
			}
		});
		
		
		// Esconde o endere�o da home
		
		$(window).scroll(function (event) {  
			
			var y = $(this).scrollTop();
		  
			if (y >= 10) {
			  $('#endereco').fadeOut();
			} else {
			  $('#endereco').fadeIn();
			}
		});
		
		
		// Chama o bot�o de or�amento follow
		
		$(window).scroll(function (event) {  
			
			var y = $(this).scrollTop();
		  
			if (y >= 1300) {
			  $('#orcamento-follow').css({"top":"39px"});
			} else {
			  $('#orcamento-follow').css({"top":"-55px"});
			}
		});
		
		
		// Esconde a box preta fazemos
		
		
	$(function () {
	
		var top = $('#fazemos').offset().top - 100;
	
		$(window).scroll(function (event) {  
			
			var y = $(this).scrollTop();
		  
			if (y >= top) {
			  $('#fazemos').fadeOut();
			} else {
			  $('#fazemos').fadeIn();
			}
		});
	});
		
		// Ajustar intro ao tamnho da tela
	
		
		var windowWidth = $(window).width();
		
		if (windowWidth > 1100){
			$(".ca-menu li").animate({"width":"190px"});
		}
		
	
		
		
		$('img.lazy').show().lazyload({
			effect      : 'fadeIn',
			threshold : 150,
			skip_invisible : false
		});
		
		
  
  
  
  

//VIEWPORT DETECTION:
$(function ($) {
    var viewportHeight = $(window).height();
    $('.intro').css('height',viewportHeight);
    $('.intro').css('padding-top',viewportHeight/3);
});


//MASONRY PORTFOLIO INIT:
$(function () {

    var $container = $('#container');

    $container.isotope({
        itemSelector: '.element',
        layoutMode: 'masonry'
    });


    var $optionSets = $('#options .option-set'),
        $optionLinks = $optionSets.find('a');

    $optionLinks.click(function () {
        var $this = $(this);
        // don't proceed if already selected
        if ($this.hasClass('selected')) {
            return false;
        }
        var $optionSet = $this.parents('.option-set');
        $optionSet.find('.selected').removeClass('selected');
        $this.addClass('selected');

        // make option object dynamically, i.e. { filter: '.my-filter-class' }
        var options = {},
            key = $optionSet.attr('data-option-key'),
            value = $this.attr('data-option-value');
        var changeLayoutMode;
        // parse 'false' as false boolean
        value = value === 'false' ? false : value;
        options[key] = value;
        if (key === 'layoutMode' && typeof changeLayoutMode === 'function') {
            // changes in layout modes need extra logic
            changeLayoutMode($this, options);
        } else {
            // creativewise, apply new options
            $container.isotope(options);
        }

        return false;
    });


});


/*===========================================================*/
/*  Colorbox
/*===========================================================*/
$(function () {
    
    // var viewportHeight = $(window).height();
    // var introMargin = (viewportHeight / 3) - (viewportHeight / 12);
    // $('#intro').height(viewportHeight);
    // $('.promo-one').css('margin-top', introMargin);
    //Examples of how to assign the ColorBox event to elements
    $(".zoom-info").colorbox({
        rel: 'group1',
        transition: "fade",
        speed: 1700,
        onComplete: function () {
            $('.flexslider').flexslider({
                animation: "slide",
                controlNav: false,
                directionNav: true

            });
        }
    });

});




$(function() {
    $(' .da-thumbs > li ').each( function() { $(this).hoverdir({hoverDelay : 75}); } );
});






//FANCYBOX - LIGHTBOX
//=======================

$("a.fancythumb").fancybox({
                'overlayShow'   : false,
                'transitionIn'  : 'elastic',
                'transitionOut' : 'elastic'
            });

//WAYPOINTS - INTERACTION
//=======================

    //Triggering Navigation as Sticky when scrolled to second section:
    $('.beneath-intro').waypoint(function (event, direction) {
        if (direction === 'down') {
            $('.navigation').addClass('sticky').slideDown();
            $('#scroll').stop().animate({bottom: '-150px'}, 700);
        } else {
            $('#scroll').stop().animate({bottom: '0px'}, 700);
            $('.navigation').slideUp().removeClass('sticky');
        }
    }, { offset: 160 });



    $('.page').waypoint(function (event, direction) {
        var colSwatch = $(this).attr('data-live-color');
        if (direction === 'down') {
            $('#navigation').addClass('bg-'+colSwatch);
        } else {
            $('#navigation').removeClass('bg-'+colSwatch);
        }
    }, { offset: 50 });


    $('.news-img').mouseenter(function(){
        $(this).find('.news-date').slideUp();
    });
    $('.news-img').mouseleave(function(){
        $(this).find('.news-date').slideDown();
    });

    //Nav Menu Links Highlights and Active Transition
    $('.master-section').mouseenter(function () {
        var pageInd = $(this).attr('id');
        $('.navigation ul li > a').removeClass('lighted');
        $('#'+pageInd+'-linker').addClass('lighted');
    });

    $('.navigation ul li > a').click(function () {
        $('.navigation ul li > a').removeClass('lighted');
        $(this).addClass('lighted');
    });

    //Portfolio Hover
    $('.folio-item').mouseenter(function () {
        $(this).find('img').css('opacity', '0.2');
        $(this).find('.folio-trigger-icon').fadeIn();
        $(this).find('.titles').show();
    });

    $('.folio-item').mouseleave(function () {
        $('.folio-item').find('.titles').hide();
        $(this).find('.folio-trigger-icon').fadeOut();
        $('.folio-item').find('img').css('opacity', '1');
    });


    $('.element > img, .service-item, .about-feat').mouseleave(function () {
       
    });

    //Intro Interactions
    $('#intro-nav a').mouseenter(function(){
        // $(this).find('img').animate({opacity : 0});
        // $(this).find('h6').animate({opacity : 1});
    });
	
	
	
	
	
	
	
	

	
	
	
	
	
	



})();