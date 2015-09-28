jQuery(document).ready(function($) {
	$('a.dangnhap-window').click(function() {
		$('.dangnhap').fadeIn(300);
		$('.dangky').fadeOut(300);
		$('body').append('<div id="over">');
        $('#over').fadeIn(300);
        $('#col-menu').css("z-index","99");
        return false;
	});
	$('a.dangky-window').click(function() {
		$('.dangky').fadeIn(300);
		$('.dangnhap').fadeOut(300);
		$('body').append('<div id="over">');
        $('#over').fadeIn(300);
        $('#col-menu').css("z-index","99");
        return false;
	});
	$(document).on('click', "#over", function() {
       $('#over, .dangnhap, .dangky').fadeOut(300 , function() {
           $('#over').remove();
       });
      return false;
 	});
 	
 	$('#col-menu').mouseleave(function(event) {
 		/* Act on the event */
 		$('#over2').fadeOut(0, function() {
 			$('#over2').remove();
 		});
 	});

 	$('.menu1').mouseenter(function(event) {
 		/* Act on the event */
        $('#row-list-1').css('marginRight', '-3px');
 		$('.content-menu1').fadeIn(300);
 		$('#col-menu').css("z-index","99999");
		$('body').append('<div id="over2">');
        $('#over2').fadeIn(700);
        return false;
 	});
 	$('.menu1').mouseleave(function(event) {
 		/* Act on the event */
        $('#row-list-1').css('marginRight', '0px');
 		$('.content-menu1').fadeOut(0);
 	});

 	$('.menu2').mouseenter(function(event) {
 		/* Act on the event */
        $('#row-list-2').css('marginRight', '-3px');
 		$('.content-menu2').fadeIn(300);
 		$('#col-menu').css("z-index","99999");
		$('body').append('<div id="over2">');
        $('#over2').fadeIn(700);
        return false;
 	});
 	$('.menu2').mouseleave(function(event) {
 		/* Act on the event */
        $('#row-list-2').css('marginRight', '0px');
 		$('.content-menu2').fadeOut(0);
 	});

 	$('.menu3').mouseenter(function(event) {
 		/* Act on the event */
        $('#row-list-3').css('marginRight', '-3px');
 		$('.content-menu3').fadeIn(300);
 		$('#col-menu').css("z-index","99999");
		$('body').append('<div id="over2">');
        $('#over2').fadeIn(700);
        return false;
 	});
 	$('.menu3').mouseleave(function(event) {
 		/* Act on the event */
        $('#row-list-3').css('marginRight', '0px');
 		$('.content-menu3').fadeOut(0);
 	});

 	$('.menu4').mouseenter(function(event) {
 		/* Act on the event */
        $('#row-list-4').css('marginRight', '-3px');
 		$('.content-menu4').fadeIn(300);
 		$('#col-menu').css("z-index","99999");
		$('body').append('<div id="over2">');
        $('#over2').fadeIn(700);
        return false;
 	});
 	$('.menu4').mouseleave(function(event) {
 		/* Act on the event */
        $('#row-list-4').css('marginRight', '0px');
 		$('.content-menu4').fadeOut(0);
 	});

 	$('.menu5').mouseenter(function(event) {
 		/* Act on the event */
        $('#row-list-5').css('marginRight', '-3px');
 		$('.content-menu5').fadeIn(300);
 		$('#col-menu').css("z-index","99999");
		$('body').append('<div id="over2">');
        $('#over2').fadeIn(700);
        return false;
 	});
 	$('.menu5').mouseleave(function(event) {
 		/* Act on the event */
        $('#row-list-5').css('marginRight', '0px');
 		$('.content-menu5').fadeOut(0);
 	});

	$('.menu6').mouseenter(function(event) {
 		/* Act on the event */
        $('#row-list-6').css('marginRight', '-3px');
 		$('.content-menu6').fadeIn(300);
 		$('#col-menu').css("z-index","99999");
		$('body').append('<div id="over2">');
        $('#over2').fadeIn(700);
        return false;
 	});
 	$('.menu6').mouseleave(function(event) {
 		/* Act on the event */
        $('#row-list-6').css('marginRight', '0px');
 		$('.content-menu6').fadeOut(0);
 	}); 	

 	$('.menu7').mouseenter(function(event) {
 		/* Act on the event */
        $('#row-list-7').css('marginRight', '-3px');
 		$('.content-menu7').fadeIn(300);
 		$('#col-menu').css("z-index","99999");
		$('body').append('<div id="over2">');
        $('#over2').fadeIn(700);
        return false;
 	});
 	$('.menu7').mouseleave(function(event) {
 		/* Act on the event */
        $('#row-list-7').css('marginRight', '0px');
 		$('.content-menu7').fadeOut(0);
 	});

 	$('.menu8').mouseenter(function(event) {
 		/* Act on the event */
        $('#row-list-8').css('marginRight', '-3px');
 		$('.content-menu8').fadeIn(300);
 		$('#col-menu').css("z-index","99999");
		$('body').append('<div id="over2">');
        $('#over2').fadeIn(700);
        return false;
 	});
 	$('.menu8').mouseleave(function(event) {
 		/* Act on the event */
        $('#row-list-8').css('marginRight', '0px');
 		$('.content-menu8').fadeOut(0);
 	});

 	$('.menu9').mouseenter(function(event) {
 		/* Act on the event */
        $('#row-list-9').css('marginRight', '-3px');
 		$('.content-menu9').fadeIn(300);
 		$('#col-menu').css("z-index","99999");
		$('body').append('<div id="over2">');
        $('#over2').fadeIn(700);
        return false;
 	});
 	$('.menu9').mouseleave(function(event) {
 		/* Act on the event */
        $('#row-list-9').css('marginRight', '0px');
 		$('.content-menu9').fadeOut(0);
 	});
    $('.menu10').mouseenter(function(event) {
        /* Act on the event */
        $('#row-list-9').css('marginRight', '-3px');
        $('.content-menu9').fadeIn(300);
        $('#col-menu').css("z-index","99999");
        $('body').append('<div id="over2">');
        $('#over2').fadeIn(700);
        return false;
    });
    $('.menu10').mouseleave(function(event) {
        /* Act on the event */
        $('#row-list-9').css('marginRight', '0px');
        $('.content-menu9').fadeOut(0);
    });
});