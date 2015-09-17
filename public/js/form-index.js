$(function() {

    /**
    * INITIALIZATIONS
    * Add date pickers
    * CREATE message if existing
    **/
    addProfileDatePicker();
    addSchoolDatePicker();
    addWorkDatePicker();

    $('.alert-info').delay(5000).slideUp(700);

    /**
    * EUCATIONAL ATTAINMENT
    * @functions
    * CREATE additional educational experience
    * REMOVE an education experience
    **/
    $("#AppendedSchool").click(function($e) {
        //prevent add button from sending data
        $e.preventDefault();

        //get educational group attainment form
        var x = $('#educGroup').wrap('<p/>').parent();

        //add new attainment
        x.find('.close').html('<a>x</a>');
        $("#educContainer").append("<hr />"+x.html());
        $('#educGroup').unwrap();

        $(".educ").next().find('.close').html("");
        addSchoolDatePicker();
    });

    //remove educational attainment
    $("#educContainer").on('click', '.close', function( e ) {
        e.preventDefault();

        var educToDelete = $(this).closest('#educGroup');
        educToDelete.prev().remove();
        educToDelete.remove();
    });

    /**
    * WORK EXPERIENCE
    * @functions
    * CREATE additional work experience
    * REMOVE a work experience
    **/
    $("#AppendWork").click(function($e) {
        //prevent add button from sending data
        $e.preventDefault();

        //get work group attainment form
        var x = $('#workGroup').wrap('<p/>').parent();

        //add new work
        x.find('.close').html('<a>x</a>');
        $("#workContainer").append("<hr />"+x.html());
        $('#workGroup').unwrap();

        $(".work").next().find('.close').html("");
        addWorkDatePicker();
    });

    //remove work experience
    $("#workContainer").on('click', '.close', function( e ) {
        e.preventDefault();

        var educToDelete = $(this).closest('#workGroup');
        educToDelete.prev().remove();
        educToDelete.remove();
    });

    /**
    * DATEPICKERS
    **/
    function addProfileDatePicker()
    {
        $('.date').datepicker({
            weekStart: 1,
            format:"yyyy/mm/dd"
        });
    }

    function addSchoolDatePicker()
    {
        $('.year').datepicker({
            format: "yyyy",
            viewMode: "years", 
            minViewMode: "years"
        });
    }

    function addWorkDatePicker()
    {
        $('.year-month').datepicker({
            format: "mm-yyyy",
            viewMode: "months", 
            minViewMode: "months"
        });
    }
});