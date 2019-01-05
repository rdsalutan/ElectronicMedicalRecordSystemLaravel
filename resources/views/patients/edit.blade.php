@extends('layouts.app')

@section('content')

<div class="container">

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Create</a></li>
        <li class="breadcrumb-item"><a href="#">Confirmation</a></li>
      </ol>
    </nav>
    
    <h2>Edit A Patient</h2><br  />
      @if (\Session::has('success'))
      <div class="alert alert-success">
          <p>{{ \Session::get('success') }}</p>
      </div><br />
      @endif          
      
    <form method="post" action="{{action('PatientController@update', $id)}}">
        {{csrf_field()}}
        <input name="_method" type="hidden" value="PATCH">
        {{ Form::rdsText('name','label', $patient->name) }}
        {{ Form::rdsDate('birth_date' ,'label', $patient->birth_date) }}      
        {{ Form::rdsSelect('employment_status', ['student' => 'Student','employed' => 'Employed', 'unemployed' => 'Unemployed'],'label', $patient->employment_status ) }}    
        {{ Form::rdsSelect('civil_status', ['single' => 'Single','married' => 'Married', 'widowed' => 'Widowed', 'divorced' => 'Divorced'],'label', $patient->civil_status) }}          
        <div class="form-group {{ $errors->has('gender') ? 'has-error' : '' }}">
            {{ Form::label('gender', null, ['class' => 'control-label']) }}  
            @foreach (['male','female'] as $item)
                <div class="radio">
                    <label>{{ Form::radio('gender', $item , $item == $patient->gender, ['class' => 'radio']) }} {{ ucfirst($item) }}</label>
                </div>
            @endforeach            
        </div>
        {{ Form::rdsText('mobile','label', $patient->mobile) }}     
        {{ Form::rdsText('home','label', $patient->home) }}        
        {{ Form::rdsText('email','label', $patient->email) }}    
        {{ Form::rdsText('address','label', $patient->address) }}
        {{ Form::rdsText('religion','label', $patient->religion) }}
        {{ Form::rdsText('valid_id','label', $patient->valid_id) }}        
        <button type="submit" class="btn btn-success">Update Product</button>    
    </form>
<br><br><br>
</div>
@endsection