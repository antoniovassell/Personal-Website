// Portfolio
(function($) {
	"use strict";
	var $container = $('.portfolio'),
		$items = $container.find('.portfolio-item'),
		portfolioLayout = 'fitRows';

	if( $container.hasClass('portfolio-centered') ) {
		portfolioLayout = 'masonry';
	}

	$container.isotope({
		filter: '*',
		animationEngine: 'best-available',
		layoutMode: portfolioLayout,
		animationOptions: {
			duration: 750,
			easing: 'linear',
			queue: false
		},
		masonry: {
		}
	}, refreshWaypoints());

	function refreshWaypoints() {
		setTimeout(function() {
		}, 1000);
	}

	$('nav.portfolio-filter ul a').on('click', function() {
		var selector = $(this).attr('data-filter');
		$container.isotope({ filter: selector }, refreshWaypoints());
		$('nav.portfolio-filter ul a').removeClass('active');
		$(this).addClass('active');
		return false;
	});

	function getColumnNumber() {
		var winWidth = $(window).width(),
			columnNumber = 1;

		if (winWidth > 1200) {
			columnNumber = 5;
		} else if (winWidth > 950) {
			columnNumber = 4;
		} else if (winWidth > 600) {
			columnNumber = 3;
		} else if (winWidth > 400) {
			columnNumber = 2;
		} else if (winWidth > 250) {
			columnNumber = 1;
		}
		return columnNumber;
	}

	function setColumns() {
		var winWidth = $(window).width(),
			columnNumber = getColumnNumber(),
			itemWidth = Math.floor(winWidth / columnNumber);

		$container.find('.portfolio-item').each(function() {
			$(this).css( {
				width : itemWidth + 'px'
			});
		});
	}

	function setPortfolio() {
		setColumns();
		$container.isotope('reLayout');
	}

	$container.imagesLoaded(function () {
		setPortfolio();
	});

	$(window).on('resize', function () {
		setPortfolio();
	});
})(jQuery);

// Parallax
(function($) {
	$('#headerwrap').parallax("50%", -0.9);
	$('#twrap').parallax("50%", -0.2, true);
})(jQuery);

// Map
function initialize() {
	var map_canvas = document.getElementById('map_canvas');
	var map_options = {
		center: new google.maps.LatLng(18.0137463, -76.8096801),
		zoom: 14,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		controls: {
			panControl: false,
			zoomControl: true,
			mapTypeControl: false,
			scaleControl: false,
			streetViewControl: false,
			overviewMapControl: false
		},
		scrollwheel: false
	}
	var map = new google.maps.Map(map_canvas, map_options)
	map.set('styles', [
		{
			featureType: 'road',
			elementType: 'geometry'
		}, {
			featureType: 'landscape',
			elementType: 'geometry',
			stylers: [
				{ hue: '#ffff00' },
				{ gamma: 1.4 },
				{ saturation: 82 },
				{ lightness: 96 }
			]
		}, {
			featureType: 'poi',
			elementType: 'geometry',
			stylers: [
				{ visibility: 'off' }
			]
		}
	]);
}
(function($) {
	var Page = (function() {
		var $navArrows = $( '#nav-arrows' ),
			$nav = $( '#nav-dots > span' ),
			slitslider = $( '#slider' ).slitslider( {
				onBeforeChange : function( slide, pos ) {

					$nav.removeClass( 'nav-dot-current' );
					$nav.eq( pos ).addClass( 'nav-dot-current' );

				}
			} ),
			init = function() {
				initEvents();
			},
			initEvents = function() {
				// add navigation events
				$navArrows.children( ':last' ).on( 'click', function() {
					slitslider.next();
					return false;
				} );
				$navArrows.children( ':first' ).on( 'click', function() {

					slitslider.previous();
					return false;

				} );
				$nav.each( function( i ) {

					$( this ).on( 'click', function( event ) {

						var $dot = $( this );

						if( !slitslider.isActive() ) {

							$nav.removeClass( 'nav-dot-current' );
							$dot.addClass( 'nav-dot-current' );
						}
						slitslider.jump( i + 1 );
						return false;
					} );
				} );
			};
		return { init : init };
	})();
	Page.init();
})(jQuery);