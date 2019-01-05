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
      
    {{ Form::model($patients, ['route' => ['patient.update', $patients]]) }}
        {{csrf_field()}}
        {{ Form::rdsText('name') }}
        {{ Form::rdsDate('birth_date') }}      
        {{ Form::rdsSelect('employment_status', ['student' => 'Student','employed' => 'Employed', 'unemployed' => 'Unemployed']) }}    
        {{ Form::rdsSelect('civil_status', ['single' => 'Single','married' => 'Married', 'widowed' => 'Widowed', 'divorced' => 'Divorced']) }}          
        {{ Form::rdsRadio('gender',['male','female'])}}
        {{ Form::rdsText('mobile') }}     
        {{ Form::rdsText('home') }}        
        {{ Form::rdsText('email') }}    
        {{ Form::rdsText('address') }}
        {{ Form::rdsText('religion') }}
        {{ Form::rdsText('valid_id') }}        
        <button class="btn btn-primary" type="submit">Add</button>    
    {{Form::close()}}
<br><br><br>
</div>
@endsection