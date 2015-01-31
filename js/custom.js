// JavaScript Document
$(document).ready(function() {
	//js for adding adding active class on click (start)
	$(function() {
		$('.main_nav li').click(function() {
				$('.main_nav li.active').removeClass('active');
				$(this).addClass('active');
			});
		});
	//js for adding adding active class on click (end)
	//js for carousel (start)	
		$('#mycarousel').carousel({

		});
	//js for carousel (end)	
	//js for responsive image map (start)
		$('img[usemap]').rwdImageMaps();
	//js for responsive image map (end)
	//js for logo slider  (start)	
		$('.slider1').bxSlider({
			slideWidth: 200,
			minSlides: 2,
			maxSlides: 4,
			slideMargin: 10,
			slideHeight:120
		  });
	//js for logo slider  (end)
	//js for inner page left_sec tab  (start)	  
		  $('#left_tab a').click(function (e) {
			  e.preventDefault()
			  $(this).tab('show')
			})
	//js for inner page left_sec tab  (end)
	
	//js for inner page right_sec tab  (start)	  
		  $('#right_tab a').click(function (e) {
			  e.preventDefault()
			  $(this).tab('show')
			})
	//js for inner page right_sec tab  (end)
	
	//js for inner page bottom left_sec tab  (start)	  
		  $('#bottom_left a').click(function (e) {
			  e.preventDefault()
			  $(this).tab('show')
			})
	//js for inner page bottom left_sec tab  (end)
	
	//js for inner page bottom right_sec tab  (start)	  
		  $('#bottom_right a').click(function (e) {
			  e.preventDefault()
			  $(this).tab('show')
			})
	//js for inner page bottom right_sec tab  (end)
    
});