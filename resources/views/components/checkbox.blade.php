@props(['field', 'model'=>null])
@if ($field->multiple)
    <div class="mt-5 grid grid-cols-2 place-items-start gap-6 sm:grid-cols-4">
        @if ($options = $field->options)
            @foreach ($options as $key => $value)
                <label class="inline-flex items-center space-x-2">
                    <input value="{{ $key }}"
                        {{ $attributes->class(
                                'form-checkbox is-basic h-5 w-5 rounded border-slate-400/70 checked:bg-slate-500 checked:border-slate-500 hover:border-slate-500 focus:border-slate-500 dark:border-navy-400 dark:checked:bg-navy-400',
                            )->merge($field->attributes) }}
                        type="checkbox" />
                    <p>{{ $value }}
                        @if ($field->isFormatted())
                            {!! $field->formatted($model, $field, $key, $value) !!}
                        @endif
                    </p>
                </label>
            @endforeach
        @endif
    </div>
    {{-- {{ var_export(data_get($this->form_data, $field->name))}} --}}
@else
    <label class="inline-flex items-center">
        <input
            {{ $attributes->class('form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white dark:bg-navy-900 dark:before:bg-navy-300 dark:checked:bg-accent dark:checked:before:bg-white')->merge($field->attributes) }} />
    </label>
@endif
