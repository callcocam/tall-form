@props(['field'])
<select
    {{ $attributes->class('orm-select mt-1.5 w-full rounded-lg border border-slate-300 bg-white px-3 py-2 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent')->merge($field->attributes) }}>
    <option>
        --Selecione--</option>
    @if ($options = $field->options)
        @foreach ($options as $key => $value)
            <option value="{{ $key }}"> {{ $value }}</option>
        @endforeach
    @endif

    {{-- <optgroup label="JSON">
        <option value="JSON"
            title="Armazena e ativa acesso eficiente a dados em documentos JSON (Notação de Objectos em JavaScript)">
            JSON</option>
    </optgroup> --}}
</select>
