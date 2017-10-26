$(document).ready(function () {

    "use strict";


    /* Add Hover effect to menus 
     -----------------------------------------------------*/

//    jQuery('ul.nav li.dropdown').hover(function () {
//        jQuery('.dropdown-menu', this).stop(true, true).slideDown('fast');
//        jQuery(this).addClass('close');
//    }, function () {
//        jQuery('.dropdown-menu', this).stop(true, true).slideUp('fast');
//        jQuery(this).removeClass('open');
//    });


    //Set the carousel options
    $('#quote-carousel').carousel({
        pause: true,
        interval: 6000,
    });

    $('#myCarousel2').carousel({
        interval: 8000
    });

    /* Animate Banner Carousel
     -----------------------------------------------------*/

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


});

/* Home Carousel
 -----------------------------------------------------*/

$(document).ready(function () {
    $("#partners-carousel").owlCarousel({
        autoPlay: 7000,
        items: 1,
        pagination: false,
        itemsCustom: [
            [450, 1],
            [768, 2],
            [992, 3],
            [1200, 5],
            [1400, 5]
        ],
    });

    var owl = $("#partners-carousel");

    owl.owlCarousel();

    // Custom Navigation Events
    $(".next").click(function () {
        owl.trigger('owl.next');
    })
    $(".prev").click(function () {
        owl.trigger('owl.prev');
    });
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

//Google Api

var myCenter = new google.maps.LatLng(35.73132, -81.3371913);
function initialize() {
    var mapCanvas = document.getElementById('map-canvas');
    var mapOptions = {
        center: myCenter,
        zoom: 13,
        mapTypeId: google.maps.MapTypeId.HYBRIDE

    }
    var map = new google.maps.Map(mapCanvas, mapOptions);
    var marker = new google.maps.Marker({
        position: myCenter
    });
    marker.setMap(map);
}
google.maps.event.addDomListener(window, 'load', initialize);

$(function () {
    $('#myCarousel').carousel({
        interval: 3000,
        pause: "false"
    });
    $('#playButton').click(function () {
        $('#myCarousel').carousel('cycle');
    });
    $('#pauseButton').click(function () {
        $('#myCarousel').carousel('pause');
    });
});



/* networx-catawba read more/less */
$(document).ready(function () {
    // Configure/customize these variables.
    var showChar = 200;  // How many characters are shown by default
    var ellipsestext = "...";
    var moretext = "view more >>";
    var lesstext = "<< view less";

    $('.job-description').each(function () {
        var content = $(this).html();

        if (content.length > showChar) {

            var c = content.substr(0, showChar);
            var h = content.substr(showChar, content.length - showChar);

            var html = c + '<span class="moreellipses">' + ellipsestext + '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

            $(this).html(html);
        }

    });

    $(".morelink").click(function () {
        if ($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });
    //$(".caret, .navbar-toggle, .sub-arrow")
});