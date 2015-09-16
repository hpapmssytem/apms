$(document).ready( function() {

    //add another school attainment
    $("#AppendedSchool").click(function($e) {
        //get educational group attainment form
        $e.preventDefault();
        
        var x = $('#educGroup').wrap('<p/>').parent();

        //add new attainment
        x.find('.close').html('<a>x</a>');
        $("#educContainer").append("<hr />"+x.html());
        $('#educGroup').unwrap();

        $(".educ").next().find('.close').html("");
    });

    //delete the current educational attainment
    $("#educContainer").on('click', '.close', function( e ) {
        e.preventDefault();

        var educToDelete = $(this).closest('#educGroup');
        educToDelete.prev().remove();
        educToDelete.remove();
    });

    //add another work experience
    $("#AppendWork").click(function() {
        //get educational group attainment form
        var x = $('#workGroup').wrap('<p/>').parent();

        //add new attainment
        x.find('.close').html('<a>x</a>');
        $("#workContainer").append("<hr />"+x.html());
        $('#workGroup').unwrap();

        $(".work").next().find('.close').html("");

        $('.date').datepicker({
            weekStart: 1,
        });
        
        $('.year').datepicker({
            format: "mm-yyyy",
            viewMode: "months", 
            minViewMode: "months"
        });
    });

     $("#workContainer").on('click', '.close', function( e ) {
        e.preventDefault();

        var educToDelete = $(this).closest('#workGroup');
        educToDelete.prev().remove();
        educToDelete.remove();
    });
});