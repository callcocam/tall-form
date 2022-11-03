@props(['field'])
@if ($options = $field->options)
    @foreach ($options as $key => $value)
        <label class="inline-flex items-center space-x-2">
            <input value="{{ $value }}"
                {{ $attributes->class('form-radio is-basic h-5 w-5 rounded-full border-slate-400/70 checked:border-slate-500 checked:bg-slate-500 hover:border-slate-500 focus:border-slate-500 dark:border-navy-400 dark:checked:bg-navy-400')->merge($field->attributes) }} />
            <p>{{ $value }}</p>
        </label>
    @endforeach
@endif
