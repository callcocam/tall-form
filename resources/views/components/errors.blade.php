@props(['fields', 'errors'])
@if ($errors->any())
    <div {{ $attributes }}>
        <div class="font-medium  text-slate-700 dark:text-red-200">{{ __('Whoops! Something went wrong.') }}</div>
        <ul class="mt-3 list-disc list-inside text-sm  text-slate-700 dark:text-red-200">
            @foreach ($fields as $field)
                @error($field->key)
                    <li>{{ str_replace([$field->key,"form data.{$field->name}"], $field->name, $message) }}</li>
                @enderror
            @endforeach
        </ul>
    </div>
@endif
