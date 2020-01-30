/*global $, document, window*/

$(document).ready(function () {
    "use strict";
    
    //nice scroll
    $("html").niceScroll();
    
    $('.carousel').carousel({
        interval: 6000
    });
    
    //show color option div when click on the gear
    $(".fa-cogs").click(function () {
        $(".color-option").fadeToggle();
    });

    //change theme color on click
    var colorLi = $(".color-option ul li"),
        scrollButton = $("#scroll-top");
    colorLi
        .eq(0).css("backgroundColor", "#E41B17").end()
        .eq(1).css("backgroundColor", "#f89d13").end()
        .eq(2).css("backgroundColor", "darkblue").end()
        .eq(3).css("backgroundColor", "dodgerblue").end()
        .eq(4).css("backgroundColor", "chartreuse");
    
    colorLi.click(function () {
        $("link[href*='theme']").attr("href", $(this).attr("data-value"));
    });
    
    
    $(window).scroll(function () {
        if ($(this).scrollTop() >= 700) {
            scrollButton.show();
        } else {
            scrollButton.hide();
        }
       
    });
        
    //click on button to scroll top
    scrollButton.click(function () {
        $("html,body").animate({scrollTop: 0}, 500);
    });
});

//loading screen
$(window).load(function () {
    "use strict";
    //loading elements
    $(".loading-overlay .spinner").fadeOut(2000,
        function () {
            $("body").css("overflow", "auto");
       
            $(this).parent().fadeOut(2000,
                function () {
                    //show the scroll
                    $(this).remove();
                });
        });
});