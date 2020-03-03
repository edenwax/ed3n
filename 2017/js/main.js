$(".magic-wrapper").hover(function() {
  $(this).toggleClass("rw-desc-hover");
  $(this).find(".rw-hover-text").toggleClass("rw-invis");
});


$(window).scroll(function(){
    if ($(window).scrollTop() >= 1) {
       $('header').addClass('shrinkydink');
    }
    else {
       $('header').removeClass('shrinkydink');
    }
});

var easter_egg = new Konami(function() { window.location.href = "https://www.youtube.com/watch?v=m81koYhgc5o&t=8s"; });