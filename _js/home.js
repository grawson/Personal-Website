$(document).ready(function() {

    $(document).ready(function() {
        $('#fullpage').fullpage();
    });

    // Click on arrow
    $("#arrow").click(function() {
        $.fn.fullpage.moveSectionDown();
        $("#arrow").addClass("grow");
    });
});
