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
                <div class="h-full flex flex-col bg-white shadow-xl overflow-y-scroll">
                    <header class="space-y-1 py-6 px-4 bg-indigo-700 sm:px-6">
                        <div class="flex items-center justify-between space-x-3">
                            <h2 class="text-lg leading-7 font-medium text-white">
                                Panel title
                            </h2>
                            <div class="h-7 flex items-center">
                                <button aria-label="Close panel"
                                    class="text-indigo-200 hover:text-white transition ease-in-out duration-150">
                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div>
                            <p class="text-sm leading-5 text-indigo-300">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit aliquam ad hic recusandae
                                soluta.
                            </p>
                        </div>
                    </header>
                    <div class="relative flex-1 py-6 px-4 sm:px-6">
                        <!-- Replace with your content -->
                        <div class="absolute inset-0 py-6 px-4 sm:px-6">
                            <div class="h-full border-2 border-dashed border-gray-200"></div>
                        </div>
                        <!-- /End replace -->
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
