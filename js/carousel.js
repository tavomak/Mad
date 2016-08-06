$(document).ready(function () {
    $('.carousel-indicators li:first').addClass('active');
    $('.carousel-inner .item:first').addClass('active');

var carouselContainer = $('.carousel');
var slideInterval = 8000;

	function toggleH(){
		$('.toggleHeading').hide()
		var caption = carouselContainer.find('.active').find('.toggleHeading').addClass('animated fadeInRight').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
			function (){
			$(this).removeClass('animated fadeInRight')});
	caption.slideToggle();
	}

	function toggleC(){
		$('.toggleCaption').hide()
		var caption = carouselContainer.find('.active').find('.toggleCaption').addClass('animated fadeInRight').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
			function (){
			$(this).removeClass('animated fadeInRight')
	});
	caption.slideToggle();
	}
carouselContainer.carousel({
interval: slideInterval, cycle: true, pause: "hover"})
.on('slide.bs.carousel slid.bs.carousel', toggleH).trigger('slide.bs.carousel')
.on('slide.bs.carousel slid.bs.carousel', toggleC).trigger('slide.bs.carousel');

});
