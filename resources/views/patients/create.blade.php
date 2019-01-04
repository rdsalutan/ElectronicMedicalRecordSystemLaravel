@extends('layouts.app')

@section('content')

<div class="container">

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Create</a></li>
        <li class="breadcrumb-item"><a href="#">Confirmation</a></li>
      </ol>
    </nav>
    
  <h2>New Patient</h2>
      @if (\Session::has('success'))
      <div class="alert alert-success">
          <p>{{ \Session::get('success') }}</p>
      </div><br />
      @endif  
    {!! Form::model($patients, ['route' => ['patient.update', $patients]]) !!}
    {{csrf_field()}}
    <div class="form-group">
      {!! Form::label('Name') !!}
      {!! Form::text('name', '', ['class' => 'form-control']) !!}
      <span class="text-danger">{{ $errors->first('name') }}</span>
    </div>

    <div class="form-group">
       {!! Form::label('Birth Date') !!}
       {!! Form::Date('birthdate','', ['class' => 'form-control']) !!}
       <span class="text-danger">{{ $errors->first('birthdate') }}</span>
    </div>

    <div class="form-group">
       {!! Form::label('Civil Status') !!}
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
       {!! Form::label('Gender') !!}
        <div class="radio">
            <label>{!! Form::radio('gender', 'male' , true, ['class' => 'radio']) !!}Male</label>
        </div>
        <div class="radio">
            <label>{!! Form::radio('gender', 'female' , false,  ['class' => 'radio']) !!}Female</label>
        </div>           
    </div>

    <div class="form-group">
      {!! Form::label('Mobile Number') !!}
      {!! Form::number('mobile', '', ['class' => 'form-control']) !!}
      <span class="text-danger">{{ $errors->first('mobile') }}</span>
    </div>

    <div class="form-group">
      {!! Form::label('Home Number') !!}
      {!! Form::number('home', '', ['class' => 'form-control']) !!}
      <span class="text-danger">{{ $errors->first('home') }}</span>
    </div>

    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
        {!! Form::label('Email') !!}
        {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}
        <span class="text-danger">{{ $errors->first('email') }}</span>
    </div>

    <div class="form-group">
      {!! Form::label('Address') !!}
      {!! Form::text('address', '', ['class' => 'form-control']) !!}
      <span class="text-danger">{{ $errors->first('address') }}</span>
    </div>

    <div class="form-group">
      {!! Form::label('Religion') !!}
      {!! Form::text('religion', '', ['class' => 'form-control']) !!}
      <span class="text-danger">{{ $errors->first('religion') }}</span>
    </div>    
    
    <div class="form-group">
      {!! Form::label('Valid ID') !!}
      {!! Form::text('valid_id', '', ['class' => 'form-control']) !!}
      <span class="text-danger">{{ $errors->first('valid_id') }}</span>
    </div>    
    
    <button class="btn btn-primary" type="submit">Add</button>    

{!! Form::close() !!}
<br><br><br>
</div>
@endsection