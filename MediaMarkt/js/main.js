/*-----------------------------------------------------------------------------------

  Template Name: Asbab eCommerce HTML5 Template.
  Template URI: #
  Description: Asbab is a unique website template designed in HTML with a simple & beautiful look. There is an excellent solution for creating clean, wonderful and trending material design corporate, corporate any other purposes websites.
  Author: HasTech
  Author URI: https://themeforest.net/user/hastech/portfolio
  Version: 1.0

-----------------------------------------------------------------------------------*/

/*-------------------------------
[  Table of contents  ]
---------------------------------
    01. jQuery MeanMenu
    02. wow js active
    03. Product  Masonry (width)
    04. Sticky Header
    05. ScrollUp
    06. Search Bar
    07. Shopping Cart Area
    08. Filter Area
    09. Toogle Menu   
    10. User Menu 
    11. Menu 
    12. Menu Dropdown
    13. Overlay Close
    14. Testimonial Image Slider As Nav
    15. Brand Area
    16. Price Slider Active
    17. Accordion
    18. Ship to another
    19. Payment credit card    
    20 Slider Activations



/*--------------------------------
[ End table content ]
-----------------------------------*/


(function($) {
    'use strict';


/*-------------------------------------------
    01. jQuery MeanMenu
--------------------------------------------- */
    
    $('.mobile-menu nav').meanmenu({
        meanMenuContainer: '.mobile-menu-area',
        meanScreenWidth: "991",
        meanRevealPosition: "right",
    });

/*-------------------------------------------
    02. wow js active
--------------------------------------------- */

    new WOW().init();


/*-------------------------------------------
    03. Product  Masonry (width)
--------------------------------------------- */ 

    $('.htc__product__container').imagesLoaded( function() {
      
        // filter items on button click
        $('.product__menu').on( 'click', 'button', function() {
          var filterValue = $(this).attr('data-filter');
          $grid.isotope({ filter: filterValue });
        }); 
        // init Isotope
        var $grid = $('.product__list').isotope({
          itemSelector: '.single__pro',
          percentPosition: true,
          transitionDuration: '0.7s',
          masonry: {
            // use outer width of grid-sizer for columnWidth
            columnWidth: '.single__pro',
          }
        });

    });

    $('.product__menu button').on('click', function(event) {
        $(this).siblings('.is-checked').removeClass('is-checked');
        $(this).addClass('is-checked');
        event.preventDefault();
    });



/*-------------------------------------------
    04. Sticky Header
--------------------------------------------- */ 
    var win = $(window);
    var sticky_id = $("#sticky-header-with-topbar");
        win.on('scroll',function() {    
        var scroll = win.scrollTop();
        if (scroll < 245) {
        sticky_id.removeClass("scroll-header");
        }else{
            sticky_id.addClass("scroll-header");
        }
    });

/*--------------------------
    05. ScrollUp
---------------------------- */
    $.scrollUp({
        scrollText: '<i class="zmdi zmdi-chevron-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });


/*------------------------------------    
    06. Search Bar
--------------------------------------*/ 
    
    $( '.search__open' ).on( 'click', function () {
        $( 'body' ).toggleClass( 'search__box__show__hide' );
        return false;
    });

    $( '.search__close__btn .search__close__btn_icon' ).on( 'click', function () {
        $( 'body' ).toggleClass( 'search__box__show__hide' );
        return false;
    });


/*------------------------------------    
    07. Shopping Cart Area
--------------------------------------*/

    $('.cart__menu').on('click', function(e) {
        e.preventDefault();
        $('.shopping__cart').addClass('shopping__cart__on');
        $('.body__overlay').addClass('is-visible');

    });

    $('.offsetmenu__close__btn').on('click', function(e) {
        e.preventDefault();
        $('.shopping__cart').removeClass('shopping__cart__on');
        $('.body__overlay').removeClass('is-visible');
    });


/*------------------------------------    
    08. Filter Area
--------------------------------------*/

    $('.filter__menu').on('click', function(e) {
        e.preventDefault();
        $('.filter__wrap').addClass('filter__menu__on');
        $('.body__overlay').addClass('is-visible');

    });

    $('.filter__menu__close__btn').on('click', function(e) {
        e.preventDefault();
        $('.filter__wrap').removeClass('filter__menu__on');
        $('.body__overlay').removeClass('is-visible');
    });


/*------------------------------------    
    09. Toogle Menu
--------------------------------------*/

    $('.toggle__menu').on('click', function(e) {
        e.preventDefault();
        $('.offsetmenu').addClass('offsetmenu__on');
        $('.body__overlay').addClass('is-visible');

    });

    $('.offsetmenu__close__btn').on('click', function(e) {
        e.preventDefault();
        $('.offsetmenu').removeClass('offsetmenu__on');
        $('.body__overlay').removeClass('is-visible');
    });


/*------------------------------------    
    10. User Menu
--------------------------------------*/

    $('.user__menu').on('click', function(e) {
        e.preventDefault();
        $('.user__meta').addClass('user__meta__on');
        $('.body__overlay').addClass('is-visible');

    });

    $('.offsetmenu__close__btn').on('click', function(e) {
        e.preventDefault();
        $('.user__meta').removeClass('user__meta__on');
        $('.body__overlay').removeClass('is-visible');
    });



/*------------------------------------    
    11. Menu 
--------------------------------------*/

    $('.menu__click').on('click', function(e) {
        e.preventDefault();
        $('.off__canvars__wrap').addClass('off__canvars__wrap__on');
        $('.body__overlay').addClass('is-visible');
        $('body').addClass('off__canvars__open');
        $(this).hide();
    });

    $('.menu__close__btn').on('click', function() {
        $('.off__canvars__wrap').removeClass('off__canvars__wrap__on');
        $('.body__overlay').removeClass('is-visible');
        $('body').removeClass('off__canvars__open');
        $('.menu__click').show();
    });


/*------------------------------------    
    12. Menu Dropdown
--------------------------------------*/
    function offCanvasMenuDropdown(){

        $('.off__canvars__dropdown-menu').hide();

        $('.off__canvars__dropdown > a').on('click', function(e){
        e.preventDefault();

        $(this).find('i.zmdi').toggleClass('zmdi-chevron-up');
        $(this).siblings('.off__canvars__dropdown-menu').slideToggle();
        return false;
        });
    }
    offCanvasMenuDropdown();


/*------------------------------------    
    13. Overlay Close
--------------------------------------*/

    $('.body__overlay').on('click', function() {
        $(this).removeClass('is-visible');
        $('.offsetmenu').removeClass('offsetmenu__on');
        $('.shopping__cart').removeClass('shopping__cart__on');
        $('.filter__wrap').removeClass('filter__menu__on');
        $('.user__meta').removeClass('user__meta__on');
        $('.off__canvars__wrap').removeClass('off__canvars__wrap__on');
        $('body').removeClass('off__canvars__open');
        $('.menu__click').show();
    });


/*---------------------------------------------------
    14. Testimonial Image Slider As Nav
---------------------------------------------------*/

    $('.ht__testimonial__activation').slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    swipeToSlide: true,
    dots: false,
    centerMode: true,
    focusOnSelect: true,
    centerPadding: '10px',
    responsive: [
      {
        breakpoint: 600,
        settings: {
          dots: false,
          slidesToShow: 1,
          slidesToScroll: 1,  
          centerPadding: '10px',
          }
      },
      {
        breakpoint: 320,
        settings: {
          autoplay: true,
          dots: false,
          slidesToShow: 1,
          slidesToScroll: 1,
          centerMode: false,
          focusOnSelect: false,
          }
      }
    ]
    });


/*-----------------------------------------------
    15. Brand Area
-------------------------------------------------*/

    $('.brand__list').owlCarousel({
      loop: true,
      margin:0,
      nav:false,
      autoplay: true,
      autoplayTimeout: 10000,
      items:5,
      dots: false,
      lazyLoad: true,
      responsive: {
        0: {
          items: 2,
        },
        767: {
          items: 4,
        },
        991: {
          items: 5,
        }
      }
    });



/*-------------------------------
    16. Price Slider Active
--------------------------------*/

    $("#slider-range").slider({
          range: true,
          min: 10,
          max: 500,
          values: [110, 400],
          slide: function(event, ui) {
              $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
          }
    });
    $("#amount").val("$" + $("#slider-range").slider("values", 0) +
      " - $" + $("#slider-range").slider("values", 1));




/*---------------------------------------------------
    17. Accordion
---------------------------------------------------*/

    function emeAccordion(){
        $('.accordion__title')
          .siblings('.accordion__title').removeClass('active')
          .first().addClass('active');
        $('.accordion__body')
          .siblings('.accordion__body').slideUp()
          .first().slideDown();
        $('.accordion').on('click', '.accordion__title', function(){
          $(this).addClass('active').siblings('.accordion__title').removeClass('active');
          $(this).next('.accordion__body').slideDown().siblings('.accordion__body').slideUp();
        });
        };
    emeAccordion();


/*---------------------------------------------------
    18. Ship to another
---------------------------------------------------*/

    function shipToAnother(){
        var trigger = $('.ship-to-another-trigger'),
          container = $('.ship-to-another-content');
        trigger.on('click', function(e){
          e.preventDefault();
          container.slideToggle();
        });
    };
    shipToAnother();



/*---------------------------------------------------
    19. Payment credit card
---------------------------------------------------*/

    function paymentCreditCard(){
        var trigger = $('.paymentinfo-credit-trigger'),
        container = $('.paymentinfo-credit-content');
        trigger.on('click', function(e){
        e.preventDefault();
        container.slideToggle();
    });
    };
    paymentCreditCard();


/*-----------------------------------------------
    20 Slider Activations
-------------------------------------------------*/

    if ($('.slider__activation__wrap').length) {
        $('.slider__activation__wrap').owlCarousel({
        loop: true,
        margin:0,
        nav:true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        smartSpeed: 1000,
        autoplay: false,
        navText: [ '<i class="icon-arrow-left icons"></i>', '<i class="icon-arrow-right icons"></i>' ],
        autoplayTimeout: 10000,
        items:1,
        dots: false,
        lazyLoad: true,
        responsive: {
          0: {
            items: 1,
          },
          767: {
            items: 1,
          },
          991: {
            items: 1,
          }
        }
        });
    }




})(jQuery);


/**
 * main.js
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2015, Codrops
 * http://www.codrops.com
 */
(function() {

	var viewEl = document.querySelector('.view'),
		gridEl = viewEl.querySelector('.grid'),
		items = [].slice.call(gridEl.querySelectorAll('.product')),
		basket;

	// the compare basket
	function CompareBasket() {
		this.el = document.querySelector('.compare-basket');
		this.compareCtrl = this.el.querySelector('.action--compare');
		this.compareWrapper = document.querySelector('.compare'),
		this.closeCompareCtrl = this.compareWrapper.querySelector('.action--close')
		
		this.itemsAllowed = 3;
		this.totalItems = 0;
		this.items = [];

		// compares items in the compare basket: opens the compare products wrapper
		this.compareCtrl.addEventListener('click', this._compareItems.bind(this));
		// close the compare products wrapper
		var self = this;
		this.closeCompareCtrl.addEventListener('click', function() {
			// toggle compare basket
			classie.add(self.el, 'compare-basket--active');
			// animate..
			classie.remove(viewEl, 'view--compare');
		});
	}

	CompareBasket.prototype.add = function(item) {
		// check limit
		if( this.isFull() ) {
			return false;
		}

		classie.add(item, 'product--selected');

		// create item preview element
		var preview = this._createItemPreview(item);
		// prepend it to the basket
		this.el.insertBefore(preview, this.el.childNodes[0]);
		// insert item
		this.items.push(preview);

		this.totalItems++;
		if( this.isFull() ) {
			classie.add(this.el, 'compare-basket--full');
		}

		classie.add(this.el, 'compare-basket--active');
	};

	CompareBasket.prototype._createItemPreview = function(item) {
		var self = this;

		var preview = document.createElement('div');
		preview.className = 'product-icon';
		preview.setAttribute('data-idx', items.indexOf(item));
		
		var removeCtrl = document.createElement('button');
		removeCtrl.className = 'action action--remove';
		removeCtrl.innerHTML = '<i class="fa fa-remove"></i><span class="action__text action__text--invisible">Remove product</span>';
		removeCtrl.addEventListener('click', function() {
			self.remove(item);
		});
		
		var productImageEl = item.querySelector('img.product__image').cloneNode(true);

		preview.appendChild(productImageEl);
		preview.appendChild(removeCtrl);

		var productInfo = item.querySelector('.product__info').innerHTML;
		preview.setAttribute('data-info', productInfo);

		return preview;
	};

	CompareBasket.prototype.remove = function(item) {
		classie.remove(this.el, 'compare-basket--full');
		classie.remove(item, 'product--selected');
		var preview = this.el.querySelector('[data-idx = "' + items.indexOf(item) + '"]');
		this.el.removeChild(preview);
		this.totalItems--;

		var indexRemove = this.items.indexOf(preview);
		this.items.splice(indexRemove, 1);

		if( this.totalItems === 0 ) {
			classie.remove(this.el, 'compare-basket--active');
		}

		// checkbox
		var checkbox = item.querySelector('.action--compare-add > input[type = "checkbox"]');
		if( checkbox.checked ) {
			checkbox.checked = false;
		}
	};

	CompareBasket.prototype._compareItems = function() {
		var self = this;

		// remove all previous items inside the compareWrapper element
		[].slice.call(this.compareWrapper.querySelectorAll('div.compare__item')).forEach(function(item) {
			self.compareWrapper.removeChild(item);
		});

		for(var i = 0; i < this.totalItems; ++i) {
			var compareItemWrapper = document.createElement('div');
			compareItemWrapper.className = 'compare__item';

			var compareItemEffectEl = document.createElement('div');
			compareItemEffectEl.className = 'compare__effect';

			compareItemEffectEl.innerHTML = this.items[i].getAttribute('data-info');
			compareItemWrapper.appendChild(compareItemEffectEl);

			this.compareWrapper.insertBefore(compareItemWrapper, this.compareWrapper.childNodes[0]);
		}

		setTimeout(function() {
			// toggle compare basket
			classie.remove(self.el, 'compare-basket--active');
			// animate..
			classie.add(viewEl, 'view--compare');
		}, 25);
	};

	CompareBasket.prototype.isFull = function() {
		return this.totalItems === this.itemsAllowed;
	};

	function init() {
		// initialize an empty basket
		basket = new CompareBasket();
		initEvents();
	}

	function initEvents() {
		items.forEach(function(item) {
			var checkbox = item.querySelector('.action--compare-add > input[type = "checkbox"]');
			checkbox.checked = false;

			// ctrl to add to the "compare basket"
			checkbox.addEventListener('click', function(ev) {
				if( ev.target.checked ) {
					if( basket.isFull() ) {
						ev.preventDefault();
						return false;
					}
					basket.add(item);
				}
				else {
					basket.remove(item);
				}
			});
		});
	}

	init();

})();
