$(document).ready(function () {
    "use strict";

});


/* ----- Carousel Caption Animation ----- */

var $myCarousel = $('#myCarousel');
$myCarousel.carousel();

function doAnimations(elems) {
    var animEndEv = 'webkitAnimationEnd animationend';

    elems.each(function () {
        var $this = $(this),
                $animationType = $this.data('animation');

        $this.addClass($animationType).one(animEndEv, function () {
            $this.removeClass($animationType);
        });
    });
}

var $firstAnimatingElems = $myCarousel.find('.item:first').find('[data-animation ^= "animated"]');

doAnimations($firstAnimatingElems);

$myCarousel.carousel({
    interval: 7000
});

$myCarousel.on('slide.bs.carousel', function (e) {
    var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
    doAnimations($animatingElems);
});



/* Equal Height Columns
 -----------------------------------------------------*/
equalheight = function (container) {

    var currentTallest = 0,
            currentRowStart = 0,
            rowDivs = new Array(),
            $el,
            topPosition = 0;
    $(container).each(function () {

        $el = $(this);
        $($el).height('auto')
        topPostion = $el.position().top;

        if (currentRowStart != topPostion) {
            for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
                rowDivs[currentDiv].height(currentTallest);
            }
            rowDivs.length = 0; // empty the array
            currentRowStart = topPostion;
            currentTallest = $el.height();
            rowDivs.push($el);
        } else {
            rowDivs.push($el);
            currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
        }
        for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
            rowDivs[currentDiv].height(currentTallest);
        }
    });

}

$(window).load(function () {
    equalheight('.equalheight');
});

$(window).resize(function () {
    equalheight('.equalheight');
});

if ((jQuery(window).height() + 100) < jQuery(document).height()) {
    jQuery('#top-link-block').removeClass('hidden').affix({
        offset: {top: 100}
    });
}