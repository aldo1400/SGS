$(document).ready(function(){
	$('.menu li:has(ul)').click(function(e){
		e.preventDefault();

		if ($(this).hasClass('activado')){
			$(this).removeClass('activado');
			$(this).children('ul').slideUp();
		} else {
			$('.menu li ul').slideUp();
			$('.menu li').removeClass('activado');
			$(this).addClass('activado');
			$(this).children('ul').slideDown();
		}
	});
	
	$('.menu1 li:has(ul)').click(function(e){
		e.preventDefault();

		if ($(this).hasClass('activado')){
			$(this).removeClass('activado');
			$(this).children('ul').slideUp();
		} else {
			$('.menu1 li ul').slideUp();
			$('.menu1 li').removeClass('activado');
			$(this).addClass('activado');
			$(this).children('ul').slideDown();
		}
	});

	$('.btn-menu').click(function(){
		$('.contenedor-menu .menu').slideToggle();
	});
	
	$('.btn-menu1').click(function(){
		$('.contenedor-menu1 .menu1').slideToggle();
	});

	$(window).resize(function(){
		if ($(document).width() > 450){
			$('.contenedor-menu .menu').css({'display' : 'block'});
		}

		if ($(document).width() < 450){
			$('.contenedor-menu .menu').css({'display' : 'none'});
			$('.menu li ul').slideUp();
			$('.menu li').removeClass('activado');
		}
	});
	
	$(window).resize(function(){
		if ($(document).width() > 450){
			$('.contenedor-menu1 .menu1').css({'display' : 'block'});
		}

		if ($(document).width() < 450){
			$('.contenedor-menu1 .menu1').css({'display' : 'none'});
			$('.menu1 li ul').slideUp();
			$('.menu1 li').removeClass('activado');
		}
	});

	$('.menu li ul li a').click(function(){
		window.location.href = $(this).attr("href");
	});
	$('.menu1 li ul li a').click(function(){
		window.location.href = $(this).attr("href");
	});
});