jQuery(function ($) {
	$(window).on("scroll", function () {
		if ($(window).scrollTop() > 100) {
			$("header.main").addClass("fixed");
			// $('header.main .logo > img:last-of-type').fadeOut("slow");
		} else {
			$("header.main").removeClass("fixed");
			// $('header.main nav .logo img:last-of-type').fadeIn("slow");
		}
	});
});


/**
 * parallax
 */

jQuery(function ($) {
	var images = document.querySelectorAll("img.thumbnail");
	new simpleParallax(images, { scale: 1.5 });
});

jQuery(function ($) {
	const targets = document.querySelectorAll("#service .services > dl");
	const hours = document.querySelectorAll("#hours dl > div");
	const contact = document.querySelectorAll("#contact > div");

	function callback(entries, observer) {
		entries.forEach((entry) => {
			if (entry.isIntersecting) {
				entry.target.classList.add("fadeIn");
			}
			// else {
			// 	// console.log("not fully visible");
			// 	// entry.target.classList.add("fadeOut");
			// 	// entry.target.classList.remove("fadeIn");
			// }
		});
	}
	function createObserver(targets, callback) {
		const options = {
			root: null,
			threshold: 0,
		};
		const observer = new IntersectionObserver(callback, options);
		targets.forEach((target) => {
			observer.observe(target);
		});
	}

	createObserver(targets, callback);
	createObserver(hours, callback);
	createObserver(contact, callback);
});

jQuery(function ($) {
	$('.bubble').parent().hover(function (e) {
		var relX = e.pageX - $(this).offset().left;
		var relY = e.pageY - $(this).offset().top;
		// $(this).children('.bubble').css({"left":relX+"px", "top":relY+"px"});
		$(this).css("overflow", "hidden");
		$(this).children('.bubble').css({ "left": relX + "px", "top": relY + "px", "height": $(this).height() * 4, "width": $(this).width() * 4 });
	}, function () {
		$(this).children('.bubble').css({ "height": "0px", "width": "0px" });
	})
});