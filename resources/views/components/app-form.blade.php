@props(['formAttr' => []])
<form
        {{ $attributes->merge([
            'wire:submit.prevent' => data_get($formAttr, 'action', 'saveAndStay'),
        ]) }}
        class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
        @isset($messages)
            <div class="col-span-12">
                {{ $messages }}
            </div>
        @endisset
        {{-- <x-tall-alert on="notification">Savel</x-tall-alert> --}}
        @isset($rigth)
            <div class="col-span-12 lg:col-span-{{ data_get($formAttr, 'spanRigth', '4') }}">
                <div class="card p-4 sm:p-5">
                    {{ $rigth }}
                </div>
            </div>
        @endisset
        <div class="col-span-12 lg:col-span-{{ data_get($formAttr, 'span', '8') }} ">
            <div class="card">
                <div
                    class="flex flex-col items-center space-y-4 border-b border-slate-200 p-4 dark:border-navy-500 sm:flex-row sm:justify-between sm:space-y-0 sm:px-5">
                    <h2 class="text-lg font-medium tracking-wide text-slate-700 dark:text-navy-100">
                        {{ data_get($formAttr, 'title', 'Form Advanced') }}
                    </h2>
                    <div class="flex justify-center space-x-2">
                        @if ($routeList = data_get($formAttr, 'crud.list'))
                            <a href="{{ $routeList }}"
                                class="btn min-w-[7rem] rounded-full border border-slate-300 font-medium text-slate-700 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-100 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90">
                                {{ __('Cancel') }}
                            </a>
                        @endif

                        <button
                            class="btn min-w-[7rem] rounded-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                            {{ __('Save or Update') }}
                        </button>
                    </div>
                </div>
                <div class="p-4 sm:p-5">
                    @isset($avatar)
                        {{ $avatar }}
                        <div class="my-7 h-px bg-slate-200 dark:bg-navy-500"></div>
                    @endisset
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-12">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>
        @isset($left)
            <div class="col-span-12 lg:col-span-{{ data_get($formAttr, 'spanLeft', '4') }}">
                <div class="card p-4 sm:p-5">
                    {{ $left }}
                </div>
            </div>
        @endisset
    </form>