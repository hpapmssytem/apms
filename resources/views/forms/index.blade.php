@extends('layouts.master')

@section('styles')
    <title>APMS | Home</title>

    <style rel="text/css">
        select.form-control{
            width:150px;
        }
        .centred{
            margin: 0 auto;
            width: 50%;
        }
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/form-index.js"></script>
    <script src="js/alert-message.js"></script>
@endsection

@section('contents')
    <div class="row">
        <div class="col-lg-12">
            @if(Session::has('message'))
                <div class="alert alert-info alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    {{ Session::get('message') }}
                    {{ Session::forget('message') }}
                </div>
            @endif
            @if(Session::has('alertMessage'))
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    {{ Session::get('alertMessage') }}
                    {{ Session::forget('alertMessage') }}
                </div>
            @endif
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="row">
        @if(Session::has('newCode'))
            <div class="col-lg-12">
                <form method='post' action='{{ URL::route("form.store") }}'>
                    <?php echo Form::token() ?>

                    <!--PROFILE-->                             
                    <div class="row">
                        <div class="col-lg-12 profile row">
                            <h3>PROFILE</h3>
                        </div>
                        <div class="form-group col-md-6 floating-label-form-group controls">
                            <h5>Applying Position</h5>
                            <div class="form-group">
                                <select name="position_id" class='form-control'>
                                    @foreach($positions as $position)
                                        <option value="{{ $position->id }}">
                                            {{ $position->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <p class="help-block text-danger"></p>
                            <div class="control-group">
                                <h5>First Name</h5>
                                {!! Form::text('fname', null, array('required', 'class'=>'form-control')) !!}
                                <p class="help-block text-danger"></p>
                            </div>      
                            <div class="control-group"> 
                                <h5>Middle Name</h5>
                                {!! Form::text('mname', null, array('class'=>'form-control')) !!}
                            </div>
                            <div class="control-group"> 
                                <h5>Last Name</h5>
                                {!! Form::text('lname', null, array('required', 'class'=>'form-control')) !!}
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <h5>Age</h5>
                                {!! Form::number('age', null, array('required', 'class'=>'form-control', 'min'=>'18')) !!}
                                <p class="help-block text-danger"></p>
                            </div>                     
                        </div>
                        <div class="form-group col-md-6 floating-label-form-group controls">
                            <div class="control-group">
                                <h5>Date Applied</h5>
                                    <div class="input-append"  >
                                        {!! Form::text('date_applied', null, array('required', 'class'=>'date span2 form-control',
                                            'placeholder'=>'yyyy/mm/dd')) !!}
                                    </div>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <h5>Date of Birth</h5>
                                <div class="input-append" >
                                    {!! Form::text('birthdate', null, array('required', 'class'=>'date span2 form-control',
                                    'placeholder'=>'yyyy/mm/dd')) !!}
                                    <span class="add-on"><i class="icon-th"></i></span>
                                </div>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <h5>Address</h5>
                                    {!! Form::text('address', null, array('required', 'class'=>'form-control',
                                        'placeholder'=>'full address')) !!}
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <h5>Email Address</h5>
                                {!! Form::email('email_add', null, array('required', 'class'=>'form-control',
                                    'placeholder'=>'someone@example.com')) !!}
                                <p class="help-block text-danger"></p>
                            </div> 
                            <div class="control-group">
                                <h5>Contact Number</h5>
                                    {!! Form::number('contact_num', null, array('required', 'class'=>'form-control',
                                        'placeholder'=>'ex. 0910xxxxxxx')) !!}
                                <p class="help-block text-danger"></p>
                            </div> 
                        </div>
                    </div>
                    <!--END PROFILE-->
                    <!--EDUC ATTAINMENT-->                            
                    <div id="educContainer" class="row">
                        <div class="col-lg-12 educ row">
                            <h3>EDUCATIONAL ATTAINMENT</h3>
                        </div>  
                        <div id="educGroup">
                            <div class="col-lg-12 controls">
                                <div class="close"></div>
                            </div>
                            <br />
                            <div class="form-group col-md-6 floating-label-form-group controls">
                                <h5>Level</h5>
                                <div class="control-group">
                                    {!! Form::select('level[]', array(
                                        'Elementary' => 'Elementary', 
                                        'Secondary' => 'Secondary',
                                        'Tertiary' => 'Tertiary',
                                        'Postgrad' => 'Postgrad'), null, array('class' => 'form-control')) !!}
                                </div>
                                <div class="control-group">
                                    <h5>School/University</h5>
                                    {!! Form::text('school_name[]', null, array('required', 'class'=>'form-control')) !!}
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>

                            <div class="form-group col-md-6 floating-label-form-group controls">
                                <div class="control-group">
                                    <h5>School Year Graduated</h5>
                                    {!! Form::text('year_grad[]', null, array('required', 'class'=>'year form-control')) !!}
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group"><h5>Address</h5>
                                    {!! Form::text('school_address[]', null, array('required', 'class'=>'form-control',
                                    'placeholder'=>'full address')) !!}
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--add another educational attainment !-->
                    <button type="add" id="AppendedSchool" class="btn btn-success btn-sm">Add School/University</button>
                    <p class="help-block text-danger"></p>
                    <!--END EDUC ATTAINMENT-->      
                    <!-- WORK EXPERIENCE-->                     
                    <div id="workContainer" class="row">
                        <div class="col-lg-12 work row">
                           <h3>WORK EXPERIENCE</h3>
                        </div>
                        <div id="workGroup">
                            <div class="col-lg-12 controls">
                                <div class="close "></div>
                            </div>
                            <br />
                            <div class="form-group col-md-6 floating-label-form-group controls">
                                <div class="control-group">
                                    <h5>Position</h5>
                                    {!! Form::text('position[]', null, array('required', 'class'=>'form-control')) !!}
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <h5>Company</h5>
                                    {!! Form::text('company_name[]', null, array('required', 'class'=>'form-control')) !!}
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <h5>Started</h5>
                                    <div class="input-append">
                                        {!! Form::text('date_started[]', null, array('required', 'class'=>'span2 year-month form-control')) !!}
                                        <span class="add-on"><i class="icon-th"></i></span>
                                    </div>
                                    <p class="help-block text-danger">
                                    </p>
                                </div>
                                <div class="control-group">
                                    <h5>Ended</h5>
                                    {!! Form::text('date_ended[]', null, array('required', 'class'=>'span2 year-month form-control')) !!}
                                    <span class="add-on"><i class="icon-th"></i></span>
                                </div>
                            </div>
                            <div class="form-group col-md-6 floating-label-form-group controls">
                                <div class="control-group">
                                    <h5>Description of Tasks</h5>
                                    {!! Form::textarea('task_description[]', null, array('required', 'class'=>'form-control', 'rows' => '8.5')) !!}
                                    <p class="help-block text-danger"><br /></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="add" id="AppendWork" class="btn btn-success btn-sm">Add Work Experience</button>  
                    <!-- END WORK EXPERIENCE-->				
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12 text-center">
                            <input type="submit" id="BtnSave" class="btn btn-success btn-lg">
                        </div>
                    </div>
                </form>
            </div>
        @else
            {!! Form::open(array('route' => 'checkcode', 'class' => 'form code-form center')) !!}
            <div class="centred">
                <div class="col-lg-12 text-center">
                    <div class="form-group">
                        <h5>Enter valid code to apply</h5>
                        {!! Form::text('code', null,
                            array('required',
                                  'class' => 'form-control'))
                        !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Enter', array('class'=>'btn btn-success btn-lg')) !!}
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        @endif
    </div>
@endsection
@section('jqueries')
    <!-- Load jQuery and bootstrap datepicker scripts -->
    <!--<script src="js/jquery-1.9.1.min.js"></script>-->
    <script src="js/bootstrap-datepicker.js"></script>
@endsection