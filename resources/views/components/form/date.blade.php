<div class="form-group {{ $errors->has($name) ? 'has-error' : '' }}">
    {{ Form::label($name, null, ['class' => 'control-label']) }}
    {{ Form::date($name, $value, array_merge(['class' => 'form-control'], $attributes)) }}
    <small class="text-danger">{{$errors->first($name)}}</small>
</div>