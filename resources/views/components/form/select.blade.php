<div class="form-group {{ $errors->has($name) ? 'has-error' : '' }}">
    {{ Form::label($name, null, ['class' => 'control-label']) }}  
   {{ Form::select($name, 
   $items, 
   $value,
    [   'class' => 'form-control',
        'id' => $name,
        'placeholder' => 'Please Select'])
   }}
    <small class="text-danger">{{$errors->first($name)}}</small>
</div>  