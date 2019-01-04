@extends('layouts.app')

@section('content')

<div class="container">
  <h2>New Student</h2>
{!! Form::model($students) !!}
<!--            $table->increments('id');
			$table->char('name',255);
			$table->date('birthdate');
			$table->enum('civilstatus',['single','married','widow','widower']);
			$table->integer('age');
			$table->enum('sex',['male','female']);
				//optional
					$table->char('course',100);
			$table->integer('schoolyear');
			$table->integer('cell_num');
			$table->char('email');
			$table->char('address',100);
            $table->timestamps();-->
    <div class="form-group">
      {!! Form::label('lblname', 'Name') !!}
      {!! Form::text('name', '', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
       {!! Form::label('lblBirthdate', 'Birth Date') !!}
       {!! Form::Date('birthdate','', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
       {!! Form::label('lblCivilstatus', 'Civil Status') !!}
        <div class="radio">
            <label>{!! Form::radio('civilstatus', 'single' , true, ['class' => 'radio']) !!}Single</label>
        </div>
        <div class="radio">
            <label>{!! Form::radio('civilstatus', 'married' , false,  ['class' => 'radio']) !!}Married</label>
        </div>
        <div class="radio">
            <label>{!! Form::radio('civilstatus', 'widow' , false , ['class' => 'radio']) !!}Widow</label>
        </div>
        <div class="radio">
            <label>{!! Form::radio('civilstatus', 'widower' , false , ['class' => 'radio']) !!}Widower</label>
        </div>              
    </div>

    <div class="form-group">
       {!! Form::label('lblGender', 'Gender') !!}
        <div class="radio">
            <label>{!! Form::radio('gender', 'male' , true, ['class' => 'radio']) !!}Male</label>
        </div>
        <div class="radio">
            <label>{!! Form::radio('gender', 'female' , false,  ['class' => 'radio']) !!}Female</label>
        </div>           
    </div>

    <div class="form-group">
      {!! Form::label('lblSchoolYear', 'School Year') !!}
      {!! Form::number('schoolyear', '', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('lblMobileNumber', 'Mobile Number') !!}
      {!! Form::number('mobilenumber', '', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
        {!! Form::label('Email:') !!}
        {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}
        <span class="text-danger">{{ $errors->first('email') }}</span>
    </div>

    <div class="form-group">
      {!! Form::label('Address') !!}
      {!! Form::text('address', '', ['class' => 'form-control']) !!}
    </div>

    <button class="btn btn-primary" type="submit">Submit</button>    

{!! Form::close() !!}
<br><br><br>
</div>
@endsection