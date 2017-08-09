function loadscroler(){
	$('body').prepend('<a href="#" class="bottom-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>');
	var amountScrolled = 300;
	$(window).on('scroll',function() {
		if ( $(window).scrollTop() > amountScrolled ) {
			$('a.bottom-top').fadeIn('slow');
		} else {
			$('a.bottom-top').fadeOut('slow');
		}
	});
	$('a.bottom-top').on('click',function() {
		$('html, body').animate({
			scrollTop: 0
		}, 700);
		return false;
	});
}
$(document).on('ready',function(){ 
	"use strict";
	loadscroler();
	
	
	/*slideshow script code start here*/
	$('.slideshow').owlCarousel({
		items: 6,
		autoPlay: 5000,
		singleItem: true,
		navigation: true,
		navigationText: false,
		pagination: true,
	});
	/*slideshow script code end here*/
	
	/*testimonials script code start here*/
	$("#testimonials").owlCarousel({
		 items : 3,
         itemsDesktop : [1199, 3],
         itemsDesktopSmall : [979, 2],
         itemsTablet : [768, 2],
         itemsMobile : [479, 1],
		  navigation : true,
		  slideSpeed : 300,
		  paginationSpeed : 400,
		  singleItem : false,
		  navigationText: ['<i class="fa fa-angle-left fa1"></i>', '<i class="fa fa-angle-right fa2"></i>'],
		  pagination: false
      });
	/*testimonials script code end here*/
	
	
	
	/*latest products script code start here*/
	 $("#latestsfeat").owlCarousel({
		  items : 1,
         itemsDesktop : [1199, 1],
         itemsDesktopSmall : [979, 1],
         itemsTablet : [768, 1],
         itemsMobile : [479, 1],
		  navigation : true,
		  slideSpeed : 300,
		  paginationSpeed : 400,
		  singleItem : true,
		  navigationText: ['<i class="fa fa-angle-left fa1"></i>', '<i class="fa fa-angle-right fa2"></i>'],
		  pagination: false
      });
	/*latest products script code end here*/
	
	/*latest products script code start here*/
	 $("#latests").owlCarousel({
		  items : 6,
         itemsDesktop : [1199, 6],
         itemsDesktopSmall : [979, 5],
         itemsTablet : [768, 4],
         itemsMobile : [479, 1],
		  navigation : true,
		  slideSpeed : 300,
		  paginationSpeed : 400,
		  singleItem : false,
		  navigationText: ['<i class="fa fa-angle-left fa1"></i>', '<i class="fa fa-angle-right fa2"></i>'],
		  pagination: false
      });
	/*latest products script code end here*/
	
	
	/*partners products script code start here*/
	 $("#partners").owlCarousel({
		  items : 5,
         itemsDesktop : [1199, 4],
         itemsDesktopSmall : [979, 3],
         itemsTablet : [768, 2],
         itemsMobile : [479, 1],
		  navigation : true,
		  slideSpeed : 300,
		  paginationSpeed : 400,
		  singleItem : false,
		  navigationText: ['<i class="fa fa-angle-left fa1"></i>', '<i class="fa fa-angle-right fa2"></i>'],
		  pagination: false
      });
	/*partners products script code end here*/
	
	// Product List
	$('#list-view').on('click',function(){
		$('#content .row > .product-grid').attr('class', 'product-layout product-list col-xs-12');
		localStorage.setItem('display', 'list');
	});
	
	// Product Grid
	$('#grid-view').on('click',function(){
		$('#content .product-list').attr('class', 'product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12');
		localStorage.setItem('display', 'grid');
	});
	
});