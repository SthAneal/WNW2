// jQuery(function ($) {
// 	$(window).on("scroll", function () {
// 		if ($(window).scrollTop() > 100) {
// 			$("header.main").addClass("fixed");
// 			// $('header.main .logo > img:last-of-type').fadeOut("slow");
// 		} else {
// 			$("header.main").removeClass("fixed");
// 			// $('header.main nav .logo img:last-of-type').fadeIn("slow");
// 		}
// 	});
// });


// jQuery(function ($) {
// 	const services = document.querySelectorAll("#service .services > dl");
// 	const hours = document.querySelectorAll("#hours dl > div");
// 	const contact = document.querySelectorAll("#contact > div");
// 	const products = document.querySelectorAll("#product .products > dl");


// 	function callback(entries, observer) {
// 		entries.forEach((entry) => {
// 			if (entry.isIntersecting) {
// 				entry.target.classList.add("fadeIn");
// 			}
// 			// else {
// 			// 	// console.log("not fully visible");
// 			// 	// entry.target.classList.add("fadeOut");
// 			// 	// entry.target.classList.remove("fadeIn");
// 			// }
// 		});
// 	}
// 	function createObserver(targets, callback) {
// 		const options = {
// 			root: null,
// 			threshold: 0,
// 		};
// 		const observer = new IntersectionObserver(callback, options);
// 		targets.forEach((target) => {
// 			observer.observe(target);
// 		});
// 	}

// 	createObserver(services, callback);
// 	createObserver(products, callback);
// 	createObserver(hours, callback);
// 	createObserver(contact, callback);
// });

// jQuery(function ($) {
// 	$('.bubble').parent().hover(function (e) {
// 		var relX = e.pageX - $(this).offset().left;
// 		var relY = e.pageY - $(this).offset().top;
// 		// $(this).children('.bubble').css({"left":relX+"px", "top":relY+"px"});
// 		$(this).css("overflow", "hidden");
// 		$(this).children('.bubble').css({ "left": relX + "px", "top": relY + "px", "height": $(this).height() * 4, "width": $(this).width() * 4 });
// 	}, function () {
// 		$(this).children('.bubble').css({ "height": "0px", "width": "0px" });
// 	})
// });


jQuery(function ($) {

	$('#hamburger img').on('click', function () {
		var state = $('body').hasClass('open-menu');
		$('body').toggleClass('open-menu', !state).toggleClass('close-menu', state);
	})
});

//slider 

jQuery(function ($) {
	const slider = $('#slider');
	let activeItem = parseInt($(slider).attr('active-item'));
	let totalItem = $('#slider > div.item').length;
	let animationFrameId;
	let lastTimestamp = 0;
	let dir = 'next';

	function playSlider() {
		let now = Date.now();

		if (now - lastTimestamp >= 10 * 1000) {
		// if (false) {
			lastTimestamp = now;

			if (dir === 'next') {
				activeItem = activeItem >= totalItem ? 1 : activeItem + 1;
				$(slider).attr('slider-direction', 'next');
			} else if (dir === 'prev') {
				activeItem = activeItem <= 1 ? totalItem : activeItem - 1;
				$(slider).attr('slider-direction', 'prev');
			}

			$('#slider > div.item.active').removeClass('active').addClass('hide');
			$(`#slider > div.item:nth-child(${activeItem})`).addClass('active').removeClass('hide');
			$(slider).attr('active-item', activeItem);
			dir = 'next';
		}
		animationFrameId = requestAnimationFrame(playSlider);
	}

	animationFrameId = requestAnimationFrame(playSlider);

	$('#prev').on('click', function () {
		cancelAnimationFrame(animationFrameId);
		lastTimestamp = 0;
		dir = 'prev';
		animationFrameId = requestAnimationFrame(playSlider);
	});

	$('#next').on('click', function () {
		cancelAnimationFrame(animationFrameId);
		lastTimestamp = 0;
		dir = 'next';
		animationFrameId = requestAnimationFrame(playSlider);

	});
});