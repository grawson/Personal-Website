$(document).ready(function() {

    /**************** var ************************/

    var projects = $("#projects");
    var dropdown = $("#dropdown")

    var navItems = [
        "spring-fair", "experience", "contact"
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

    console.log("program complete");
});
