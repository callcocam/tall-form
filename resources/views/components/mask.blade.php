@props(['field'])
<input
    {{ $attributes->class('form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent')->merge($field->attributes) }}
    x-mask:dynamic="(input)=>{ return input.length <= 14 ? '999.999.999-99' : '99.999.999/9999-99' }">
