@props(['field'])
<div wire:ignore>
    <div {{ $attributes->class('h-48')->merge($field->attributes) }}
         x-init="x_quill = new Quill($el, @js($field->options))
        x_quill.on('text-change', function() {
            $dispatch('quill-input', x_quill.root.innerHTML);
        })"
        x-on:quill-input.debounce.defer="@this.set('{{ $field->key }}', $event.detail)">
         {!! data_get($this->form_data, $field->name) !!}
    </div>
</div>
