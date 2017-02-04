$(document).ready(function() {

    /**************** var ************************/

    var projects = $("#projects");
    var dropdown = $("#dropdown")

    var navItems = [
        "experience",
    ];

    var dropdownItems = [
        "spring-fair"
    ];

    /**************** func ************************/

    function toggleDropdown() {
        dropdown.toggle();

        // toggle nav bar active state
        if (dropdown.is(":visible")) {
            projects.addClass("active");
        } else {
            projects.removeClass("active");
        }
    }

    /**************** main ************************/

    dropdown.hide();

    // Toggle dropdown
    projects.click(toggleDropdown);

    // Check for active nav bar link based on URL
    for (i in navItems) {
        if(document.URL.indexOf(navItems[i]) != -1) {
            $("#" + navItems[i]).addClass("active");
        }
    }
    for (i in dropdownItems) {
        if(document.URL.indexOf(dropdownItems[i]) != -1) {
            $("#" + dropdownItems[i]).addClass("dropdown-active");
        }
    }

    // hide dropdown on click-away
    $('body').click(function(e){
        if (e.target.id !== "dropdown-item" && e.target.id !== "projects") {
            dropdown.hide();
            projects.removeClass("active");
        }
    });

    // Fade in the header image
    $('#header-img').hide().fadeIn(2000);


    console.log("program complete");
});
