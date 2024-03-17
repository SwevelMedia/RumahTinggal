$(document).ready(function () {
	var owlOne = $(".owl-carousel-one");
	owlOne.owlCarousel({
		items: 1,
		margin: 20,
		loop: true,
		nav: true,
		autoplay: true,
		autoplayTimeout: 5000,
		dots: true,
		responsive: {
			0: {
				items: 1,
				dots: false,
				nav: false,
			},
			576: {
				items: 2,
				nav: false,
			},
			768: {
				items: 3,
				nav: false,
			},
			992: {
				items: 4,
				nav: false,
			},
		},
	});

	$("#nextBtnOne").click(function () {
		owlOne.trigger("next.owl.carousel");
	});

	var owlTwo = $(".owl-carousel-two");
	owlTwo.owlCarousel({
		items: 1,
		nav: true,
		margin: 20,
		loop: true,
		lazyLoad: true,
		autoplay: true,
		autoplayTimeout: 5000,
		responsive: {
			0: {
				items: 1,
				dots: false,
				nav: false,
			},
			576: {
				items: 2,
				nav: false,
			},
			768: {
				items: 3,
				nav: false,
			},
			992: {
				items: 4,
				nav: false,
			},
		},
	});

	$("#nextBtnTwo").click(function () {
		owlTwo.trigger("next.owl.carousel");
	});

	var owlThree = $(".owl-carousel-three");
	owlThree.owlCarousel({
		items: 1,
		nav: false,
		margin: 20,
		loop: true,
		lazyLoad: true,
		autoplay: true,
		autoplayTimeout: 5000,
		dots: false,
	});
	$("#nextBtnThree").click(function () {
		owlThree.trigger("next.owl.carousel");
	});
	$("#prevBtnThree").click(function () {
		owlThree.trigger("prev.owl.carousel");
	});

	var owlFour = $(".owl-carousel-four");
	owlFour.owlCarousel({
		items: 1,
		nav: false,
		margin: 10,
		loop: true,
		lazyLoad: true,
		dots: false,
		autoplay: true,
		autoplayTimeout: 7000,
		responsive: {
			0: {
				items: 1,
			},
			576: {
				items: 1,
			},
			768: {
				items: 2,
			},
			992: {
				items: 2,
			},
		},
	});

	$("#nextBtnFour").click(function () {
		owlFour.trigger("next.owl.carousel");
	});

	var owlFive = $(".owl-carousel-five");
	owlFive.owlCarousel({
		items: 1.5,
		nav: false,
		margin: 20,
		loop: true,
		lazyLoad: true,
		dots: false,
		autoplay: true,
		autoplayTimeout: 5000,
		responsive: {
			0: {
				items: 1,
			},
			576: {
				items: 1,
			},
			768: {
				items: 1.5,
			},
			992: {
				items: 1.5,
			},
		},
	});
	$("#nextBtnFive").click(function () {
		owlFive.trigger("next.owl.carousel");
	});

	var owlSeven = $(".owl-carousel-seven");
	owlSeven.owlCarousel({
		items: 1,
		nav: false,
		margin: 20,
		loop: true,
		lazyLoad: true,
		dots: false,
		autoplay: true,
		autoplayTimeout: 5000,
	});
	var owlSeven = $(".owl-carousel-eight");
	owlSeven.owlCarousel({
		items: 1,
		nav: false,
		margin: 20,
		loop: true,
		lazyLoad: true,
		dots: false,
		autoplay: true,
		autoplayTimeout: 3000,
	});
	var owlKoleksi = $(".owl-carousel-koleksi");
	owlKoleksi.owlCarousel({
		items: 1,
		nav: false,
		margin: 20,
		loop: true,
		lazyLoad: true,
		dots: false,
		responsive: {
			0: {
				items: 1,
				dots: false,
				nav: false,
			},
			576: {
				items: 1,
			},
			768: {
				items: 1,
			},
			992: {
				items: 1,
			},
		},
	});
	$("#nextBtnKoleksi").click(function () {
		owlKoleksi.trigger("next.owl.carousel");
	});
	$("#prevBtnKoleksi").click(function () {
		owlKoleksi.trigger("prev.owl.carousel");
	});
});

// // Function to handle panjangLahan
// $("#kurang-panjang").click(function () {
// 	let newValue = parseInt($("#panjangLahan").val()) - 1;
// 	if (newValue >= 4) {
// 		$("#panjangLahan").val(newValue);
// 		$("#ubahPanjang").html(newValue);
// 	}
// });

// $("#tambah-panjang").click(function () {
// 	let newValue = parseInt($("#panjangLahan").val()) + 1;
// 	if (newValue <= 20) {
// 		$("#panjangLahan").val(newValue);
// 		$("#ubahPanjang").html(newValue);
// 	}
// });

// $("#panjangLahan").change(function () {
// 	let newValue = parseInt($("#panjangLahan").val());
// 	if (newValue >= 4 && newValue <= 20) {
// 		$("#ubahPanjang").html(newValue);
// 	}
// });

// // Function to handle lebarLahan
// $("#kurang-lebar").click(function () {
// 	let newValue = parseInt($("#lebarLahan").val()) - 1;
// 	if (newValue >= 6) {
// 		$("#lebarLahan").val(newValue);
// 		$("#ubahLebar").html(newValue);
// 	}
// });

// $("#tambah-lebar").click(function () {
// 	let newValue = parseInt($("#lebarLahan").val()) + 1;
// 	if (newValue <= 30) {
// 		$("#lebarLahan").val(newValue);
// 		$("#ubahLebar").html(newValue);
// 	}
// });

// $("#lebarLahan").change(function () {
// 	let newValue = parseInt($("#lebarLahan").val());
// 	if (newValue >= 6 && newValue <= 30) {
// 		$("#ubahLebar").html(newValue);
// 	}
// });

var baseUrl = $("#baseUrl").val();
var images = [
	`${baseUrl}assets/demo/img/slide1.png`,
	`${baseUrl}assets/demo/img/slide2.png`,
	`${baseUrl}assets/demo/img/slide3.png`,
];

var index = 0;
var slideshow = document.querySelector(".slideshow");
var slideshowImage = slideshow.querySelector("img");

function changeImage() {
	slideshowImage.src = images[index];
	index = (index + 1) % images.length;
}

setTimeout(function () {
	changeImage();
	setInterval(changeImage, 4000);
}, 3000);

function formatRupiah(number) {
	var reverse = number.toString().split("").reverse().join(""),
		ribuan = reverse.match(/\d{1,3}/g);
	ribuan = ribuan.join(".").split("").reverse().join("");
	return "Rp " + ribuan;
}

function toggleDropdown(arrow) {
	var dropdownContent = arrow.parentElement.nextElementSibling;
	dropdownContent.style.display =
		dropdownContent.style.display === "none" ||
		dropdownContent.style.display === ""
			? "block"
			: "none";
}

//js gambar detail koleksi
var $sliderSlides = $(".slider-photos .slides.owl-carousel"),
	$sliderThumbs = $(".slider-photos .slider-thumbs.owl-carousel"),
	speed = 700,
	activeClass = "active";

// Start Carousel
$sliderSlides
	.owlCarousel({
		loop: true,
		items: 1,
		margin: 0,
		nav: true,
		smartSpeed: speed,
	})
	.on("click", ".owl-prev", function () {
		var i = $(this).index();
		var activeThumb = $sliderThumbs.find(".slide.active").parent();
		var all = $sliderThumbs.find(".owl-item").length - 1;

		if (activeThumb.prev().length) {
			activeThumb.find(".slide").removeClass(activeClass);
			activeThumb.prev().find(".slide").addClass(activeClass);
			$sliderThumbs.trigger("to.owl.carousel", [i, speed, true]);
		} else {
			$sliderThumbs
				.find(".owl-item")
				.eq(all)
				.find(".slide")
				.addClass(activeClass);
			$sliderThumbs.trigger("to.owl.carousel", [all, speed, true]);
		}
	})
	.on("click", ".owl-next", function () {
		var i = $(this).index();
		var activeThumb = $sliderThumbs.find(".slide.active").parent();

		if (activeThumb.next().length) {
			activeThumb.find(".slide").removeClass(activeClass);
			activeThumb.next().find(".slide").addClass(activeClass);
			$sliderThumbs.trigger("to.owl.carousel", [i, speed, true]);
		} else {
			$sliderThumbs
				.find(".owl-item")
				.eq(0)
				.find(".slide")
				.addClass(activeClass);
			$sliderThumbs.trigger("to.owl.carousel", [0, speed, true]);
		}
	});

$sliderThumbs
	.owlCarousel({
		loop: true,
		margin: 0,
		items: 5,
		nav: true,
		smartSpeed: speed,
	})
	.on("click", ".owl-item", function () {
		var i = $(this).index();

		$sliderThumbs.trigger("to.owl.carousel", [i, speed, true]);
		$sliderSlides.trigger("to.owl.carousel", [i, speed, true]);
	});

// If the loop is disabled
// .on('click', '.owl-next.disabled', function() {
// 	$sliderThumbs.trigger('to.owl.carousel', [0, speed, true]);
// })
// .on('click', '.owl-prev.disabled', function() {
// 	var last = $sliderThumbs.find('.owl-item').length;
// 	$sliderThumbs.trigger('to.owl.carousel', [last, speed, true]);
// })

$(".slider-photos .counter .all").text(
	$(".slider-photos .slider-thumbs .slide").length
);

$sliderThumbs.find(".slide").on("click", function (event) {
	event.preventDefault();

	$sliderThumbs.find(".slide.active").removeClass(activeClass);
	$(this).addClass(activeClass);
});
