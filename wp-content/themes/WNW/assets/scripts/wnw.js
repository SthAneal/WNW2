jQuery(function ($) {
	$('#hamburger img').on('click', function () {
		var state = $('body').hasClass('open-menu');
		$('body').toggleClass('open-menu', !state).toggleClass('close-menu', state);
	})
});

//slider 

jQuery(function ($) {
	const slider = $('#slider');

	// if no slider element detected exit
	if (!$(slider).length)
		return;

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

// gallery
jQuery(function ($) {
	// to hold image srcs
	const imagesList = [];

	// to hold the current image index
	let currentImage;

	// get reference of the galleryDialog
	const galleryDialog = document.getElementById('galleryDialog');

	// reference of target where image is to be displayed
	const imgTarget = $('#galleryDialog > img');
	const captionTarget = $('#galleryDialog > .image-caption');

	// getting list of all image
	$('figure.wp-block-gallery > figure').each((i, elm) => {
		imagesList.push({src:$(elm).children('img').attr('src'), caption:$(elm).children('figcaption').text()});

		$(elm).on('click', function () {
			let imgIndex = imagesList.findIndex(imgObj=>imgObj.src===$(this).children('img').attr('src'));
			galleryDialog.showModal();
			updateImage(imgIndex);
		});
	});

	// Updating the current image
	function updateImage(imgIndex) {
		currentImage = imgIndex < 0 ? imagesList.length - 1 : imgIndex >= imagesList.length ? 0 : imgIndex;
		imgTarget.attr('src', imagesList[currentImage].src);
		captionTarget.text(imagesList[currentImage].caption)
	}

	// closing the modal
	$('button[value="close"], .controls').on('click', function () {
		galleryDialog.close();
	});

	$('button[value="prev"]').on('click', function (e) {
		e.stopPropagation();
		updateImage(currentImage - 1);
	});

	$('button[value="next"]').on('click', function (e) {
		e.stopPropagation();
		updateImage(currentImage + 1);
	});
});
