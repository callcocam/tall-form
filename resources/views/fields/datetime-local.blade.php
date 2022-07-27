@if ($field->wire_model == 'defer')
    <x-input type="datetime-local" class="w-full" wire:model.defer="{{ $field->key }}" placeholder="{{ $field->placeholder }}"
        prefix="{{ $field->prefix }}" suffix="{{ $field->suffix }}" icon="{{ $field->icon }}"
        hint="{{ $field->hint }}" right-icon="{{ $field->right_icon }}" corner-hint="{{ $field->corner_hint }}"
        label="{{ $field->label }}">
        @if ($field->append)
            @include('forms::fields.input-append')
        @endif
        @if ($field->prepend)
            @include('forms::fields.input-prepend')
        @endif
    </x-input>
@endif
@if ($field->wire_model == 'lazy')
    <x-input type="datetime-local" class="w-full" wire:model.lazy="{{ $field->key }}" placeholder="{{ $field->placeholder }}"
        prefix="{{ $field->prefix }}" suffix="{{ $field->suffix }}" icon="{{ $field->icon }}"
        hint="{{ $field->hint }}" right-icon="{{ $field->right_icon }}" corner-hint="{{ $field->corner_hint }}"
        label="{{ $field->label }}">
        @if ($field->append)
            @include('forms::fields.input-append')
        @endif
        @if ($field->prepend)
            @include('forms::fields.input-prepend')
        @endif
    </x-input>
@endif
@if ($field->wire_model == 'model')
    <x-input type="datetime-local" class="w-full" wire:model="{{ $field->key }}" placeholder="{{ $field->placeholder }}"
        prefix="{{ $field->prefix }}" suffix="{{ $field->suffix }}" icon="{{ $field->icon }}"
        hint="{{ $field->hint }}" right-icon="{{ $field->right_icon }}" corner-hint="{{ $field->corner_hint }}"
        label="{{ $field->label }}">
        @if ($field->append)
            @include('forms::fields.input-append')
        @endif
        @if ($field->prepend)
            @include('forms::fields.input-prepend')
        @endif
    </x-input>
@endif