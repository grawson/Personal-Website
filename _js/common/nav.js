$(document).ready(function() {

    // VAR *************************************************

    nav = $("#nav");
    burger = $("#burger-bar");
    burgerImg = "/supporting-files/images/burger-bar.png"
    burgerImgSelected = "/supporting-files/images/burger-bar-selected.png"



    // EVENTS **********************************************

    burger.click(function() {

        // animate sliding nav bar
        if (nav.hasClass("slide-in")) {
            nav.removeClass("slide-in").addClass("slide-out");
        } else {
            nav.removeClass("slide-out").addClass("slide-in");
        }

        // Change burger bar image
        if (burger.attr("src") == burgerImg) {
            burger.attr("src", burgerImgSelected);
        } else {
            burger.attr("src", burgerImg);
        }
    });

    getSelected();


    // FUNC **********************************************

    // select the button for the current page
    function getSelected() {

        // parse url
        url = $(location).attr('href');
        urlTokens = url.split("/");

        // match tokens
        var navItems = ["projects"];
        var selected = false;
        for (var i in urlTokens) {
            for (var j in navItems) {
                if (urlTokens[i] === navItems[j]) {
                    $("#"+navItems[j]).show();
                    selected = true;
                    break;
                }
            }
        }

        // Home is selected
        if (!selected) {
            $("#home").show();
        }
    }






    console.log("nav.js complete.");
});
