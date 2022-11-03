@props(['field', "flex"=>'col'])
<label class="block {{ sprintf('col-span-%s', $field->span) }}">
    <span>{{ $field->label }}:</span>
    <span class="relative mt-1.5 flex flex-{{$field->flex}}">
        {{ $slot }}
        @if ($icon = data_get($field, 'icon'))
            <span
                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                <i class="fa-regular fa-user text-base"></i>
            </span>
        @endif
    </span>
</label>