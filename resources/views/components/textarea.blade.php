@props(['field'])
<textarea
    {{ $attributes->class('form-textarea w-full resize-none rounded-lg bg-slate-150 p-2.5 placeholder:text-slate-400 dark:bg-navy-900 dark:placeholder:text-navy-300')->merge($field->attributes) }}>
    </textarea>
