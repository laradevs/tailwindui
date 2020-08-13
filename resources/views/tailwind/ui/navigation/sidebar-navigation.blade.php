@extends('layouts.tailwind-ui')

@section('title', 'Sidebar Navigation')

@section('content')
<div class="flex flex-col flex-grow border-r border-gray-200 pt-5 pb-4 bg-white overflow-y-auto">
    <div class="flex items-center flex-shrink-0 px-4">
        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-on-white.svg" alt="Workflow">
    </div>
    <div class="mt-5 flex-grow flex flex-col">
        <nav class="flex-1 px-2 bg-white">
            <div>
                <a href="#"
                    class="group w-full flex items-center pl-7 pr-2 py-2 text-sm leading-5 font-medium text-gray-900 rounded-md bg-gray-100 hover:text-gray-900 hover:bg-gray-100 focus:outline-none focus:bg-gray-200 transition ease-in-out duration-150">
                    Dashboard
                </a>
            </div>
            <div>
                <button
                    class="mt-1 group w-full flex items-center pr-2 py-2 text-sm leading-5 font-medium rounded-md bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition ease-in-out duration-150">
                    <!-- Expanded: "text-gray-400 rotate-90", Collapsed: "text-gray-300" -->
                    <svg class="mr-2 h-5 w-5 transform group-hover:text-gray-400 group-focus:text-gray-400 transition-colors ease-in-out duration-150"
                        viewBox="0 0 20 20">
                        <path d="M6 6L14 10L6 14V6Z" fill="currentColor" />
                    </svg>
                    Team
                </button>
                <!-- Expandable link section, show/hide based on state. -->
                <div class="mt-1">
                    <a href="#"
                        class="group w-full flex items-center pl-10 pr-2 py-2 text-sm leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition ease-in-out duration-150">
                        Overview
                    </a>
                    <a href="#"
                        class="mt-1 group w-full flex items-center pl-10 pr-2 py-2 text-sm leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition ease-in-out duration-150">
                        Members
                    </a>
                    <a href="#"
                        class="mt-1 group w-full flex items-center pl-10 pr-2 py-2 text-sm leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition ease-in-out duration-150">
                        Calendar
                    </a>
                    <a href="#"
                        class="mt-1 group w-full flex items-center pl-10 pr-2 py-2 text-sm leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition ease-in-out duration-150">
                        Settings
                    </a>
                </div>
            </div>
            <div>
                <button
                    class="mt-1 group w-full flex items-center pr-2 py-2 text-sm leading-5 font-medium rounded-md bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition ease-in-out duration-150">
                    <!-- Expanded: "text-gray-400 rotate-90", Collapsed: "text-gray-300" -->
                    <svg class="mr-2 h-5 w-5 transform group-hover:text-gray-400 group-focus:text-gray-400 transition-colors ease-in-out duration-150"
                        viewBox="0 0 20 20">
                        <path d="M6 6L14 10L6 14V6Z" fill="currentColor" />
                    </svg>
                    Projects
                </button>
                <!-- Expandable link section, show/hide based on state. -->
                <div class="mt-1">
                    <a href="#"
                        class="group w-full flex items-center pl-10 pr-2 py-2 text-sm leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition ease-in-out duration-150">
                        Overview
                    </a>
                    <a href="#"
                        class="mt-1 group w-full flex items-center pl-10 pr-2 py-2 text-sm leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition ease-in-out duration-150">
                        Members
                    </a>
                    <a href="#"
                        class="mt-1 group w-full flex items-center pl-10 pr-2 py-2 text-sm leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition ease-in-out duration-150">
                        Calendar
                    </a>
                    <a href="#"
                        class="mt-1 group w-full flex items-center pl-10 pr-2 py-2 text-sm leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition ease-in-out duration-150">
                        Settings
                    </a>
                </div>
            </div>
            <div>
                <button
                    class="mt-1 group w-full flex items-center pr-2 py-2 text-sm leading-5 font-medium rounded-md bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition ease-in-out duration-150">
                    <!-- Expanded: "text-gray-400 rotate-90", Collapsed: "text-gray-300" -->
                    <svg class="mr-2 h-5 w-5 transform group-hover:text-gray-400 group-focus:text-gray-400 transition-colors ease-in-out duration-150"
                        viewBox="0 0 20 20">
                        <path d="M6 6L14 10L6 14V6Z" fill="currentColor" />
                    </svg>
                    Calendar
                </button>
                <!-- Expandable link section, show/hide based on state. -->
                <div class="mt-1">
                    <a href="#"
                        class="group w-full flex items-center pl-10 pr-2 py-2 text-sm leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition ease-in-out duration-150">
                        Overview
                    </a>
                    <a href="#"
                        class="mt-1 group w-full flex items-center pl-10 pr-2 py-2 text-sm leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition ease-in-out duration-150">
                        Members
                    </a>
                    <a href="#"
                        class="mt-1 group w-full flex items-center pl-10 pr-2 py-2 text-sm leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition ease-in-out duration-150">
                        Calendar
                    </a>
                    <a href="#"
                        class="mt-1 group w-full flex items-center pl-10 pr-2 py-2 text-sm leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition ease-in-out duration-150">
                        Settings
                    </a>
                </div>
            </div>
            <div>
                <button
                    class="mt-1 group w-full flex items-center pr-2 py-2 text-sm leading-5 font-medium rounded-md bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition ease-in-out duration-150">
                    <!-- Expanded: "text-gray-400 rotate-90", Collapsed: "text-gray-300" -->
                    <svg class="mr-2 h-5 w-5 transform group-hover:text-gray-400 group-focus:text-gray-400 transition-colors ease-in-out duration-150"
                        viewBox="0 0 20 20">
                        <path d="M6 6L14 10L6 14V6Z" fill="currentColor" />
                    </svg>
                    Documents
                </button>
                <!-- Expandable link section, show/hide based on state. -->
                <div class="mt-1">
                    <a href="#"
                        class="group w-full flex items-center pl-10 pr-2 py-2 text-sm leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition ease-in-out duration-150">
                        Overview
                    </a>
                    <a href="#"
                        class="mt-1 group w-full flex items-center pl-10 pr-2 py-2 text-sm leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition ease-in-out duration-150">
                        Members
                    </a>
                    <a href="#"
                        class="mt-1 group w-full flex items-center pl-10 pr-2 py-2 text-sm leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition ease-in-out duration-150">
                        Calendar
                    </a>
                    <a href="#"
                        class="mt-1 group w-full flex items-center pl-10 pr-2 py-2 text-sm leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition ease-in-out duration-150">
                        Settings
                    </a>
                </div>
            </div>
            <div>
                <button
                    class="mt-1 group w-full flex items-center pr-2 py-2 text-sm leading-5 font-medium rounded-md bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition ease-in-out duration-150">
                    <!-- Expanded: "text-gray-400 rotate-90", Collapsed: "text-gray-300" -->
                    <svg class="mr-2 h-5 w-5 transform group-hover:text-gray-400 group-focus:text-gray-400 transition-colors ease-in-out duration-150"
                        viewBox="0 0 20 20">
                        <path d="M6 6L14 10L6 14V6Z" fill="currentColor" />
                    </svg>
                    Reports
                </button>
                <!-- Expandable link section, show/hide based on state. -->
                <div class="mt-1">
                    <a href="#"
                        class="group w-full flex items-center pl-10 pr-2 py-2 text-sm leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition ease-in-out duration-150">
                        Overview
                    </a>
                    <a href="#"
                        class="mt-1 group w-full flex items-center pl-10 pr-2 py-2 text-sm leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition ease-in-out duration-150">
                        Members
                    </a>
                    <a href="#"
                        class="mt-1 group w-full flex items-center pl-10 pr-2 py-2 text-sm leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition ease-in-out duration-150">
                        Calendar
                    </a>
                    <a href="#"
                        class="mt-1 group w-full flex items-center pl-10 pr-2 py-2 text-sm leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition ease-in-out duration-150">
                        Settings
                    </a>
                </div>
            </div>
        </nav>
    </div>
</div>


{{-- <hr class="my-6 border-2 rounded-full border-gray-200"> --}}
@endsection
