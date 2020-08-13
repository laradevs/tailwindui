@extends('layouts.tailwind-ui')

@section('title', 'Slide-overs')

@section('content')
<div class="fixed inset-0 overflow-hidden">
    <div class="absolute inset-0 overflow-hidden">
        <!--
        Background overlay, show/hide based on slide-over state.
  
        Entering: "ease-in-out duration-500"
          From: "opacity-0"
          To: "opacity-100"
        Leaving: "ease-in-out duration-500"
          From: "opacity-100"
          To: "opacity-0"
      -->
        <div class="absolute inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
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
            <div class="relative w-screen max-w-md">
                <!--
            Close button, show/hide based on slide-over state.
  
            Entering: "ease-in-out duration-500"
              From: "opacity-0"
              To: "opacity-100"
            Leaving: "ease-in-out duration-500"
              From: "opacity-100"
              To: "opacity-0"
          -->
                <div class="absolute top-0 left-0 -ml-8 pt-4 pr-2 flex sm:-ml-10 sm:pr-4">
                    <button aria-label="Close panel"
                        class="text-gray-300 hover:text-white transition ease-in-out duration-150">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="h-full flex flex-col space-y-6 py-6 bg-white shadow-xl overflow-y-scroll">
                    <header class="px-4 sm:px-6">
                        <h2 class="text-lg leading-7 font-medium text-gray-900">
                            Panel title
                        </h2>
                    </header>
                    <div class="relative flex-1 px-4 sm:px-6">
                        <!-- Replace with your content -->
                        <div class="absolute inset-0 px-4 sm:px-6">
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
