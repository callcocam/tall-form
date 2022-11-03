@props(['label', 'max' => "max-w-full"])
<div class="card px-4 pb-4 sm:px-5">
    <div class="my-3 flex h-8 items-center justify-between">
        <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
            {{ $label }}
        </h2>
    </div>
    <div class="{{ $max }}">
        @isset($help)
            <p>
                {{ $help }}
            </p>
        @endisset
        <div class="mt-5">
            <label class="flex w-full">
                {{ $slot }}
            </label>
        </div>
    </div>
</div>
