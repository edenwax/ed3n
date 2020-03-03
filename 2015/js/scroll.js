$(document).ready(function(){
    $("#scrollDown").on("click" ,function(){
		$({myScrollTop:window.pageYOffset}).animate({myScrollTop:650}, {
			duration: 500,
			easing: 'swing',
			step: function(val) {
				window.scrollTo(0, val);
			}
		});
	});
});

$(document).ready(function(){
    $(".scrollUp").on("click" ,function(){
		$({myScrollTop:window.pageYOffset}).animate({myScrollTop:0}, {
			duration: 500,
			easing: 'swing',
			step: function(val) {
				window.scrollTo(0, val);
			}
		});
	});
});