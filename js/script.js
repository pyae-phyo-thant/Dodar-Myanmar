	$(window).scroll(function(){
		$('nav').toggleClass('scrolled', $(this).scrollTop() > 550);
	});
	// var pathdir = window.location.pathname //Get File Name <<
	// $('#navbarSupportedContent ul li a').each(function(data){            //Loop data list
	// 	var out = $(this).attr('href');                //Catch attr
	// 	if ("/" + out == pathdir) {
	// 		$(this).addClass('nav-link');
	// 	 }
	// 	 if("/" == pathdir) {
	// 		 $('#navbarSupportedContent ul li:first-child a').addClass('nav-link');
	// 	 }
	// 	 alert(pathdir);
	// });
	$(document).ready($(function ()
{      
    $("li").click(function(){
        $("li").removeClass("nav-link");
        $(this).addClass("active");
    });
  
}));
$(document).ready(function() {
	$('.icon-one').click(function() {
	  $('.icon-one').toggleClass('active-one');
	});
  });

// -------- show-img hover --------
  $(".bagan_img_wraper").hover(function() {
	$('.bagan_caption').removeClass('hidden');
  }, function() {
	$('.bagan_caption').addClass('hidden');
  });

  $(".mandalay_img_wraper").hover(function() {
	$('.mandalay_caption').removeClass('hidden');
  }, function() {
	$('.mandalay_caption').addClass('hidden');
  });

  $(".yangon_img_wraper").hover(function() {
	$('.yangon_caption').removeClass('hidden');
  }, function() {
	$('.yangon_caption').addClass('hidden');
  });


//   hover
$(document).ready(function(){
	$('.bagan_img_wraper').hover(
		function() {
			$('.bagan_caption').animate({opacity:'1'});
		},
		function() {
			$('.bagan_caption').animate({opacity:'0'});
		},
	);
});
$(document).ready(function(){
	$('.mandalay_img_wraper').hover(
		function() {
			$('.mandalay_caption').animate({opacity:'1'});
		},
		function() {
			$('.mandalay_caption').animate({opacity:'0'});
		},
	);
});
$(document).ready(function(){
	$('.yangon_img_wraper').hover(
		function() {
			$('.yangon_caption').animate({opacity:'1'});
		},
		function() {
			$('.yangon_caption').animate({opacity:'0'});
		},
	);
});



	