$(function() {

    /*$("#educContainer").bind("append", function() {
        $(this).fadeIn(1000);
    });*/

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
        $x = $('#educGroup').wrap('<p/>').parent();

        //add new attainment
        $x.find('.close').html('<a>x</a>');
        $toAppend = "<hr />"+$x.html();
        $("#educContainer").append($toAppend);
        $('#educGroup').unwrap();

        $(".educ").next().find('.close').html("");
        addSchoolDatePicker();
    });

    //remove educational attainment
    $("#educContainer").on('click', '.close', function( $e ) {
        $e.preventDefault();

        $educToRemove = $(this).closest('#educGroup');
        $(this).remove();
        $educToRemove.prev().slideUp(500, function(){
            $educToRemove.prev().remove();
        });
        $educToRemove.slideUp(500, function(){ 
            $educToRemove.remove() 
        });
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
        $x = $('#workGroup').wrap('<p/>').parent();

        //add new work
        $x.find('.close').html('<a>x</a>');
        $("#workContainer").append("<hr />"+$x.html());
        $('#workGroup').unwrap();

        $(".work").next().find('.close').html("");
        addWorkDatePicker();
    });

    //remove work experience
    $("#workContainer").on('click', '.close', function( e ) {
        e.preventDefault();

        $workToRemove = $(this).closest('#workGroup');
        $(this).remove();
        $workToRemove.prev().slideUp(500, function(){
            $workToRemove.prev().remove();
        });
        $workToRemove.slideUp(500, function(){ 
            $workToRemove.remove() 
        });
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

    //Form ssubmissiotn confirmation
    $('input#BtnSave').bind('click', function() {
        if(!confirm('Make sure the information are correct.\nSubmit application?') )
            return false;
    });
});