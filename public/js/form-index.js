$(function() {
    /**
    * INITIALIZATION
    * Add date pickers
    **/
    addProfileDatePicker();
    addSchoolDatePicker();
    addWorkDatePicker();

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
        $newSchool = "<div class='col-lg-12'><hr ></div>"+$x.html();
        $("#educContainer").append($newSchool);
        $('#educGroup').unwrap();

        $('#educContainer').find('#educGroup:last-child')
            .hide()
            .slideDown(1000);

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
        $educToRemove.slideUp(1000, function(){ 
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

        //get educational group attainment form
        $x = $('#workGroup').wrap('<p/>').parent();

        //add new attainment
        $x.find('.close').html('<a>x</a>');
        $newWork = "<div class='col-lg-12'><hr ></div>"+$x.html();
        $("#workContainer").append($newWork);
        $('#workGroup').unwrap();

        $('#workContainer').find('#workGroup:last-child')
            .hide()
            .slideDown(1000);

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
        $workToRemove.slideUp(1000, function(){ 
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