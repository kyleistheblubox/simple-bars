$(document).ready(function (){
	radials = new radials();
});

function radials () {

	var $window = $(window),  
		radials = $('div.radial').map(function () {
			var item = $(this)
			if (item.length) {
				return item;
			}
		}),
		offset = 25,
		lastCall = 0;

	var _construct = function () {
		radials.each(function(){
			_reset($(this));
		});

		_initialize();
	};

	var _initialize = function () {
		$window.on('scroll resize', _listener);
	};

	var _reset = function(obj) {
	
		var percent = obj.data('percent'),
			color = obj.data('color');

	 	obj.children('.radial-fill').css({'-webkit-transform': 'rotate(0deg)', '-moz-transform': 'rotate(0deg)', '-o-transform': 'rotate(0deg)', 'transform': 'rotate(0deg)'});
	 	obj.find('.radial-center > h2').html('0%');

	 	if (percent > 50) {
	 		obj.append("<div class='radial-fill2 " + color + " '><div>");
	 		obj.children('.radial-fill2').css({'display': 'none', '-webkit-transform': 'rotate(0deg)'});
	 	}

	};

	var _listener = function () {

		var now = Date.now();

		if (lastCall + 250 < now) {
		var windowTop = $(window).scrollTop(),
			currentView = windowTop + $(window).height();
            lastCall = now;
		       			
			radials = radials.map(function (){
				if ($(this).offset().top + offset < currentView && $(this).css('display') != 'none') {
					_animate($(this));
				} else {
					return $(this);
				}
			});

			if (!radials.length) {
				$window.off('scroll resize', _listener);
			}
	 	}
	};

	var _animate = function (obj) {
		// Animation here
		var degrees = (obj.data('percent') / 100) * 360;

		if (degrees > 180) {
			// Do with the second.
			obj.children('.radial-fill').animate({  borderSpacing: degrees }, {
			    step: function(now,fx) {
			      $(this).css('-webkit-transform','rotate(' + now + 'deg)');
			      $(this).css('-moz-transform','rotate(' + now + 'deg)');
			      $(this).css('transform','rotate(' + now + 'deg)');
			      $(this).siblings('.radial-center').children('h2').html(Math.round((now / 360) * 100) + '%');

			      if ($(this).siblings('.radial-clip').css('display') !== 'none' && Math.round(now) > 180) {
			      	$(this).siblings('.radial-fill2').css('display', 'block');
			      	$(this).siblings('.radial-clip').css('display', 'none');
			      }

			    },
			    duration: 1500,
			},'linear');
		} else {
			obj.children('.radial-fill').animate({  borderSpacing: degrees }, {
			    step: function(now,fx) {
			      $(this).css('-webkit-transform','rotate(' + now + 'deg)');
			      $(this).css('-moz-transform','rotate(' + now + 'deg)');
			      $(this).css('transform','rotate(' + now + 'deg)');
			      $(this).siblings('.radial-center').children('h2').html(Math.round((now / 360) * 100) + '%');
			    },
			    duration: 1000,
			},'linear');
		}
	};

	var _throttle = function(func, interval) {

	    var lastCall = 0;
	    return function() {
	        var now = Date.now();
	        if (lastCall + interval < now) {
	            lastCall = now;
	            return func.apply(this, arguments);
	        }
	    };
	};

	_construct();

}