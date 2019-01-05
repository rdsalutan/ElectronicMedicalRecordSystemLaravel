<div class="form-group {{ $errors->has($name) ? 'has-error' : '' }}">
    {{ Form::label($name, null, ['class' => 'control-label']) }}  
    @foreach ($items as $item)
        <div class="radio">
            <label>{{ Form::radio('gender', $item , true, ['class' => 'radio']) }} {{ ucfirst($item) }}</label>
        </div>
    @endforeach            
</div>