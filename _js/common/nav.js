$(document).ready(function() {

    // VAR *************************************************

    nav = $("#nav");
    burger = $("#burger-bar");
    aStart = "-80px";
    aEnd = "0px";
    aDuration = 400;


    // EVENTS **********************************************

    burger.click(function() {
         if (nav.css("display") == "none") {
             nav.css("margin-left", aStart);
             nav.show();
             nav.animate({ marginLeft: aEnd }, {
                 duration: aDuration,
            });
         } else {
             nav.animate({ marginLeft: aStart }, {
                 duration: aDuration,
                 complete: function() {
                     nav.hide();
                 }
             });
         }
    });



    console.log("nav.js complete.");
});
