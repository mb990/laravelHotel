<div class="form-group">
    {{ Form::label($name, null, ['class' => 'control-label']) }}
    {{ Form::textarea($name, $value, array_merge(['style' => 'margin:0px;'], [$attributes])) }}
</div>