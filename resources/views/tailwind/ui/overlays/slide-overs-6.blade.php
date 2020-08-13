@extends('layouts.tailwind-ui')

@section('title', 'Slide-overs')

@section('content')
<div class="fixed inset-0 overflow-hidden">
    <div class="absolute inset-0 overflow-hidden">
        <section class="absolute inset-y-0 right-0 pl-10 max-w-full flex">
            <!--
          Slide-over panel, show/hide based on slide-over state.
  
          Entering: "transform transition ease-in-out duration-500 sm:duration-700"
            From: "translate-x-full"
            To: "translate-x-0"
          Leaving: "transform transition ease-in-out duration-500 sm:duration-700"
            From: "translate-x-0"
            To: "translate-x-full"
        -->
            <div class="w-screen max-w-md">
                <div class="h-full divide-y divide-gray-200 flex flex-col bg-white shadow-xl">
                    <div class="h-0 flex-1 py-6 space-y-6 overflow-y-scroll">
                        <header class="px-4 sm:px-6">
                            <div class="flex items-start justify-between space-x-3">
                                <h2 class="text-lg leading-7 font-medium text-gray-900">
                                    Panel title
                                </h2>
                                <div class="h-7 flex items-center">
                                    <button aria-label="Close panel"
                                        class="text-gray-400 hover:text-gray-500 transition ease-in-out duration-150">
                                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </header>
                        <div class="relative flex-1 px-4 sm:px-6">
                            <!-- Replace with your content -->
                            <div class="h-full border-2 border-dashed border-gray-200" style="height: 32rem"></div>
                            <!-- /End replace -->
                        </div>
                    </div>
                    <div class="flex-shrink-0 px-4 py-4 space-x-4 flex justify-end">
                        <span class="inline-flex rounded-md shadow-sm">
                            <button type="button"
                                class="py-2 px-4 border border-gray-300 rounded-md text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out">
                                Cancel
                            </button>
                        </span>
                        <span class="inline-flex rounded-md shadow-sm">
                            <button type="submit"
                                class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                                Save
                            </button>
                        </span>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
