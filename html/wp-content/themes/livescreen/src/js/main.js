// @codekit-prepend  "/jquery.min.js", "/slick.min.js";



$(document).ready(function() {

    // Shuffle the dom elements again as we'll be serving static files 
    // rather than php otherwise we'll get the same order of slides each time

	$.fn.shuffle = function() {

    var allElems = this.get(),
        getRandom = function(max) {
            return Math.floor(Math.random() * max);
        },
        shuffled = $.map(allElems, function() {
            var random = getRandom(allElems.length),
                randEl = $(allElems[random]).clone(true)[0];
            allElems.splice(random, 1);
            return randEl;
        });

    this.each(function(i) {
        $(this).replaceWith($(shuffled[i]));
    });

    return $(shuffled);

};

$('ul li').shuffle();

    // Initiate slick slide

    $('ul').slick({
        lazyLoad: 'progressive',
        arrows: false,
        autoplay: true,
        fade: true,
        autoplaySpeed: 30000,
        pauseOnHover: false,
        infinite: false,
        cssEase: 'linear'
    });
});







