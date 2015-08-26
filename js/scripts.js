$(function(){
	$( ".contactMe" ).click(function() {
  		$( ".contactForm" ).slideToggle( "fast" );
	});
});

portfolioScroll = $(".portfolio").fadeTo(0, 0);

$(window).scroll(function(d,h) {
    portfolioScroll.each(function(i) {
        a = $(this).offset().top + $(this).height();
        b = $(window).scrollTop() + $(window).height();
        if (a < b) $(this).fadeTo(500,1);
    });
});