@props(['field'])
<div wire:ignore>
    <select {{ $attributes->merge($field->attributes) }} x-data="{
        options: @js($field->options),
        items: '{{ data_get($this->form_data, $field->name) }}',
        renderTemplate(data, escape) {
            return `<div class='flex space-x-3'>${data.src}<span>${escape(data.name)}</span></div>`;
        },
        itemTemplate(data, escape) {
            return `<span class='flex space-x-3'>${data.src}<span class='mx-2'>${escape(data.name)}</span></span>`;
        }
    }" x-init="$el._tom = new Tom($el, {
        valueField: 'id',
        searchField: 'name',
        options: options,
        items: items,
        render: {
            option: renderTemplate,
            item: itemTemplate
        }
    })"></select>
</div>
