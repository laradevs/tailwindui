@extends('layouts.tailwind-ui')

@section('title', 'Header Centered')

@section('content')
<div class="relative bg-indigo-600">
    <div class="max-w-screen-xl mx-auto py-3 px-3 sm:px-6 lg:px-8">
        <div class="pr-16 sm:text-center sm:px-16">
            <p class="font-medium text-white">
                <span class="md:hidden">
                    We announced a new product!
                </span>
                <span class="hidden md:inline">
                    Big news! We're excited to announce a brand new product.
                </span>
                <span class="block sm:ml-2 sm:inline-block">
                    <a href="#" class="text-white font-bold underline">
                        Learn more &rarr;
                    </a>
                </span>
            </p>
        </div>
        <div class="absolute inset-y-0 right-0 pt-1 pr-1 flex items-start sm:pt-1 sm:pr-2 sm:items-start">
            <button type="button"
                class="flex p-2 rounded-md hover:bg-indigo-500 focus:outline-none focus:bg-indigo-500 transition ease-in-out duration-150">
                <svg class="h-6 w-6 text-white" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>
</div>
@endsection
