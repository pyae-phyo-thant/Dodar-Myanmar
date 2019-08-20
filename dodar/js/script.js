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
	