@props(['field'])
<div x-data="{}" draggable="true" x-on:dragstart="(e)=>{
    console.log(e)

 }"
    x-on:dragover="(e)=>{
    e.preventDefault();
    e.dataTransfer.dropEffect ='move';

 }"
    x-on:dragenter="(e)=>{
    console.log(e)

 }" x-on:dragleave="(e)=>{
    console.log(e)

 }"
    x-on:dragend="(e)=>{
console.log(e)
 }"
    x-on:drop="(e)=>{
    e.preventDefault();
    const data = e.dataTransfer.getData('text/plain');
    console.log(datal)
    {{-- e.target.appendChild(document.getElementById(data)); --}}
 }"
    class="mt-1 flex justify-center rounded-md border-2 border-dashed border-gray-300 px-6 pt-5 pb-6">
    <div class="space-y-1 text-center">
        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48"
            aria-hidden="true">
            <path
                d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <div class="flex text-sm text-gray-600">
            <label for="file-upload" class="relative cursor-pointer">
                <span>{{ __('Upload a file') }}</span>
                <input {{ $attributes->class('sr-only')->merge($field->attributes) }}>
            </label>
            <p class="pl-1">{{ __('or drag and drop') }}</p>
        </div>
        <p class="text-xs text-gray-500">{{ $field->help }}</p>
    </div>
</div>
