@props(['field'])
<select x-init="$el._tom = new Tom($el)" {{ $attributes->merge($field->attributes) }}>
    <option>
        --Selecione--</option>
    @if ($options = $field->options)
        @foreach ($options as $key => $values)
            @if (is_string($values))
                <option value="{{ $key }}"> {{ $values }}</option>
            @elseif(is_array($values))
                <optgroup label="{{ $key }}">
                    @foreach ($values as $group => $value)
                        <option value="{{ $group }}"> {{ $value }}</option>
                    @endforeach
                </optgroup>
            @endif
        @endforeach
    @endif
</select>
