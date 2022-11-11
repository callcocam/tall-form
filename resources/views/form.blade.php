<x-tall-app-form-main :formAttr="$formAttr">
    <x-tall-app-form :formAttr="$formAttr">
        <x-slot name="messages">
            <x-tall-errors :$errors :$fields />
        </x-slot>
        @if ($fields)
            @foreach ($fields as $field)
                <x-tall-label :field="$field">
                    <x-dynamic-component component="tall-{{ $field->component }}" :field="$field" />
                    <x-tall-input-error :for="$field->key" />
                </x-tall-label>
            @endforeach
        @endif
    </x-tall-app-form>
</x-tall-app-form-main>
