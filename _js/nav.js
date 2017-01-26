$(document).ready(function() {

    /**************** var ************************/

    var projects = $("#projects");
    var dropdown = $("#dropdown")

    /**************** func ************************/



    /**************** main ************************/

    dropdown.hide();

    projects.click(function() {
        dropdown.toggle();
    });

    console.log("program complete");

});
