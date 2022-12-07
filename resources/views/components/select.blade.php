@props(['field'])
<select
    {{ $attributes->class('form-select  w-full rounded-lg border border-slate-300 bg-white px-3 py-2 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent')->merge($field->attributes) }}>
    <option>
        --Selecione--</option>
    @if ($options = $field->options)
        @foreach ($options as $key => $values)
            @if (is_string($values))
                <option value="{{ $key }}"> {{ $values }}</option>
            @elseif(is_numeric($values))
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
