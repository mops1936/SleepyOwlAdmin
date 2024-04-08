<div {!! $width !!}>
    {{ html()->select('', $options, $default)->attributes($attributesArray) }}
{{--  {!! Form::select('', $options, $default, $attributesArray) !!}--}}
</div>
