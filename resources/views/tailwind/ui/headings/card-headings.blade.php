@extends('layouts.tailwind-ui')

@section('title', 'Card Headings')

@section('content')
<div class="p-6">
    <div class="bg-white px-4 py-5 border-b border-gray-200 sm:px-6">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            Job Postings
        </h3>
    </div>
    <hr class="my-6 border-2 rounded-full border-gray-200">
    <div class="bg-white px-4 py-5 border-b border-gray-200 sm:px-6">
        <div class="-ml-4 -mt-2 flex items-center justify-between flex-wrap sm:flex-no-wrap">
            <div class="ml-4 mt-2">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Job Postings
                </h3>
            </div>
            <div class="ml-4 mt-2 flex-shrink-0">
                <span class="inline-flex rounded-md shadow-sm">
                    <button type="button"
                        class="relative inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-700 active:bg-indigo-700">
                        Create new job
                    </button>
                </span>
            </div>
        </div>
    </div>
    <hr class="my-6 border-2 rounded-full border-gray-200">
    <div class="bg-white px-4 py-5 border-b border-gray-200 sm:px-6">
        <div class="-ml-4 -mt-4 flex justify-between items-center flex-wrap sm:flex-no-wrap">
            <div class="ml-4 mt-4">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <img class="h-12 w-12 rounded-full"
                            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="" />
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                            Tom Cook
                        </h3>
                        <p class="text-sm leading-5 text-gray-500">
                            <a href="#">
                                @tom_cook
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="ml-4 mt-4 flex-shrink-0 flex">
                <span class="inline-flex rounded-md shadow-sm">
                    <button type="button"
                        class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm leading-5 font-medium rounded-md text-gray-700 bg-white hover:text-gray-600 focus:outline-none focus:shadow-outline focus:border-blue-300">
                        <svg class="-ml-1 mr-2 h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                        </svg>
                        <span>
                            Phone
                        </span>
                    </button>
                </span>

                <span class="ml-3 inline-flex rounded-md shadow-sm">
                    <button type="button"
                        class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm leading-5 font-medium rounded-md text-gray-700 bg-white hover:text-gray-600 focus:outline-none focus:shadow-outline focus:border-blue-300">
                        <svg class="-ml-1 mr-2 h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884zM18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"
                                clip-rule="evenodd" />
                        </svg>
                        <span>
                            Email
                        </span>
                    </button>
                </span>
            </div>
        </div>
    </div>
    <hr class="my-6 border-2 rounded-full border-gray-200">
    <div class="bg-white px-4 py-5 border-b border-gray-200 sm:px-6">
        <div class="-ml-4 -mt-4 flex justify-between items-center flex-wrap sm:flex-no-wrap">
            <div class="ml-4 mt-4">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Job Postings
                </h3>
                <p class="mt-1 text-sm leading-5 text-gray-500">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit quam corrupti consectetur.
                </p>
            </div>
            <div class="ml-4 mt-4 flex-shrink-0">
                <span class="inline-flex rounded-md shadow-sm">
                    <button type="button"
                        class="relative inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-700 active:bg-indigo-700">
                        Create new job
                    </button>
                </span>
            </div>
        </div>
    </div>
    <hr class="my-6 border-2 rounded-full border-gray-200">
    <div class="bg-white px-4 py-5 border-b border-gray-200 sm:px-6">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            Job Postings
        </h3>
        <p class="mt-1 text-sm leading-5 text-gray-500">
            Lorem ipsum dolor sit amet consectetur adipisicing elit quam corrupti consectetur.
        </p>
    </div>
</div>

@endsection
