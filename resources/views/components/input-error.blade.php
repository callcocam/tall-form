@props(['for'])

@error($for)
    <p {{ $attributes->merge(['class' => 'text-sm py-2 text-red-600']) }}>{{ $message }}</p>
@enderror
