@extends('layouts.tailwind-ui')

@section('title', 'Toggles')

@section('content')
<div class="p-6">
    <span x-data="{ value: false, toggle() { this.value = !this.value }, focused: false }" @focus="focused = true"
        @blur="focused = false"
        class="relative inline-flex items-center justify-center flex-shrink-0 h-5 w-10 cursor-pointer focus:outline-none"
        role="checkbox" tabindex="0" @click="toggle()" @keydown.space.prevent="toggle()"
        :aria-checked="value.toString()">
        <span aria-hidden="true" :class="{ 'bg-indigo-600': value, 'bg-gray-200': !value }"
            class="absolute h-4 w-9 mx-auto rounded-full transition-colors ease-in-out duration-200"></span>
        <span aria-hidden="true"
            :class="{ 'translate-x-5': value, 'translate-x-0': !value, 'shadow-outline border-blue-300': focused }"
            class="absolute left-0 inline-block h-5 w-5 border border-gray-200 rounded-full bg-white shadow transform transition-transform ease-in-out duration-200"></span>
    </span>
    <hr class="my-6 border-2 rounded-full border-gray-200">
    <span x-data="{ value: false, toggle() { this.value = !this.value } }"
        :class="{ 'bg-gray-200': !value, 'bg-indigo-600': value }"
        class="relative inline-block flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:shadow-outline"
        role="checkbox" tabindex="0" @click="toggle()" @keydown.space.prevent="toggle()"
        :aria-checked="value.toString()">
        <span aria-hidden="true" :class="{ 'translate-x-5': value, 'translate-x-0': !value }"
            class="inline-block h-5 w-5 rounded-full bg-white shadow transform transition ease-in-out duration-200"></span>
    </span>
    <hr class="my-6 border-2 rounded-full border-gray-200">
    <span x-data="{ value: false, toggle() { this.value = !this.value } }"
        :class="{ 'bg-gray-200': !value, 'bg-indigo-600': value }"
        class="relative inline-block flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:shadow-outline"
        role="checkbox" tabindex="0" @click="toggle()" @keydown.space.prevent="toggle()"
        :aria-checked="value.toString()">
        <span aria-hidden="true" :class="{ 'translate-x-5': value, 'translate-x-0': !value }"
            class="relative inline-block h-5 w-5 rounded-full bg-white shadow transform transition ease-in-out duration-200">
            <span :class="{ 'opacity-0 ease-out duration-100': value, 'opacity-100 ease-in duration-200': !value }"
                class="absolute inset-0 h-full w-full flex items-center justify-center transition-opacity">
                <svg class="h-3 w-3 text-gray-400" fill="none" viewBox="0 0 12 12">
                    <path d="M4 8l2-2m0 0l2-2M6 6L4 4m2 2l2 2" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </span>
            <span :class="{ 'opacity-100 ease-in duration-200': value, 'opacity-0 ease-out duration-100': !value }"
                class="absolute inset-0 h-full w-full flex items-center justify-center transition-opacity">
                <svg class="h-3 w-3 text-indigo-600" fill="currentColor" viewBox="0 0 12 12">
                    <path
                        d="M3.707 5.293a1 1 0 00-1.414 1.414l1.414-1.414zM5 8l-.707.707a1 1 0 001.414 0L5 8zm4.707-3.293a1 1 0 00-1.414-1.414l1.414 1.414zm-7.414 2l2 2 1.414-1.414-2-2-1.414 1.414zm3.414 2l4-4-1.414-1.414-4 4 1.414 1.414z" />
                </svg>
            </span>
        </span>
    </span>
    <hr class="my-6 border-2 rounded-full border-gray-200">
</div>
@endsection
