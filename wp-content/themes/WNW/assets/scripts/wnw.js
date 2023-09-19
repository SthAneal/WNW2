jQuery(function ($) {
	// $(document).ready(function() {
	$(window).on("scroll", function () {
		if ($(window).scrollTop() > 100) {
			$("header.main").addClass("fixed");
			// $('header.main .logo > img:last-of-type').fadeOut("slow");
		} else {
			$("header.main").removeClass("fixed");
			// $('header.main nav .logo img:last-of-type').fadeIn("slow");
		}
	});
	// });
});

// jQuery(function ($) {
// 	var lastScrollTop = 0;
// 	$("window").scroll(function (e) {
// 		var st = $(this).scrollTop();
// 		// console.log(lastScrollTop - st);

// 		$(".back").each((i, elm) => {
// 			// let posY = $(elm).css
// 			$(elm).css({
// 				backgroundPositionY: function (ii, value) {
// 					// console.log('float val=' + parseFloat(value));
// 					return parseFloat(value) + (lastScrollTop - st) * 0.12;
// 					// return parseFloat( value ) - 0.002;
// 				},
// 			});
// 		});

// 		lastScrollTop = st;
// 	});
// });

/**
 * parallax
 */

jQuery(function ($) {
	var images = document.querySelectorAll("img.thumbnail");
	new simpleParallax(images, {scale:1.5});
});

// jQuery(function ($) {
// 	var lastScrollTop = (st = 0);
// 	var windowHeight = $(window).height();
// 	var dir = 1;
// 	var scrollAmount = 0;

// 	// $(".parallax-img").each((i, elm) => {
// 	// 	$(elm).css({
// 	// 		top: function (ii, value) {
// 	// 			return windowHeight * 0.2;
// 	// 		},
// 	// 	});
// 	// });

// 	$(window).scroll(function (e) {
// 		st = $(this).scrollTop();

// 		if (st - lastScrollTop > 0) {
// 			dir = -1; // scrolling down
// 		} else {
// 			dir = 1; // scrolling up
// 		}

// 		scrollAmount = lastScrollTop - st;

// 		// console.log("direction", dir);

// 		// $("#service > div:last-child > div").each((i, elm) => {
// 		// 	let elmHeight = $(elm).height();

// 		// 	let elmTopPos = $(elm).offset().top - st;

// 		// 	let totalHeight = windowHeight + elmHeight;
// 		// 	let movConst = 409.4 / totalHeight;

// 		// 	if (elmTopPos < windowHeight && lastScrollTop > 0) {
// 		// 		if (elmTopPos + elmHeight >= 0) {
// 		// 			let elmMoved = windowHeight - elmTopPos;
// 		// 			console.log(elmMoved);

// 		// 			$(elm).children('img').css({
// 		// 				top: function (ii, value) {
// 		// 					return parseFloat(value) + elmTopPos * movConst * dir;
// 		// 				}
// 		// 			});
// 		// 		}
// 		// 	}
// 		// });

// 		$("#service > div:last-child > div").each((i, elm) => {
// 			let elmHeight = $(elm).height();

// 			let elmTopPos = $(elm).offset().top - st;

// 			if (elmTopPos < windowHeight && lastScrollTop > 0) {
// 				if (elmTopPos + elmHeight >= 0) {
// 					$(elm)
// 						.children("img")
// 						.css({
// 							top: function (ii, value) {
// 								return parseFloat(value) + (lastScrollTop - st) * 0.12;
// 							}
// 						});
// 				}
// 			}
// 		});

// 		lastScrollTop = st;

// 	});
// });

jQuery(function ($) {
	// const target = document.getElementById("group0");
	// const targets = document.querySelectorAll("#main > section");


	// const target = $("#group2");

	const targets = document.querySelectorAll("#service .services > dl");
	const hours = document.querySelectorAll("#hours dl > div");


	function callback(entries, observer) {
		entries.forEach((entry) => {
			if (entry.isIntersecting) {
				// console.log("Fully visible");
				// console.log("entering");
				// entry.target.classList.add("fadeInUp");
				entry.target.classList.add("fadeIn");

				// entry.target.classList.remove("fadeOut");
			} else {
				// console.log("not fully visible");
				// entry.target.classList.add("fadeOut");
				// entry.target.classList.remove("fadeIn");
			}
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

	// createObserver($(target), callback);
	createObserver(targets, callback);

	createObserver(hours, callback);
});
