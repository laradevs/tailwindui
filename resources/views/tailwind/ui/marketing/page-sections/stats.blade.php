@extends('layouts.tailwind-ui')

@section('title', 'Stats Sections')

@section('content')
<div class="bg-gray-50 pt-12 sm:pt-16">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl leading-9 font-extrabold text-gray-900 sm:text-4xl sm:leading-10">
                Trusted by developers from over 80 planets
            </h2>
            <p class="mt-3 text-xl leading-7 text-gray-500 sm:mt-4">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus repellat laudantium.
            </p>
        </div>
    </div>
    <div class="mt-10 pb-12 bg-white sm:pb-16">
        <div class="relative">
            <div class="absolute inset-0 h-1/2 bg-gray-50"></div>
            <div class="relative max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-4xl mx-auto">
                    <div class="rounded-lg bg-white shadow-lg sm:grid sm:grid-cols-3">
                        <div class="border-b border-gray-100 p-6 text-center sm:border-0 sm:border-r">
                            <p class="text-5xl leading-none font-extrabold text-indigo-600">
                                100%
                            </p>
                            <p class="mt-2 text-lg leading-6 font-medium text-gray-500">
                                Pepperoni
                            </p>
                        </div>
                        <div
                            class="border-t border-b border-gray-100 p-6 text-center sm:border-0 sm:border-l sm:border-r">
                            <p class="text-5xl leading-none font-extrabold text-indigo-600">
                                24/7
                            </p>
                            <p class="mt-2 text-lg leading-6 font-medium text-gray-500">
                                Delivery
                            </p>
                        </div>
                        <div class="border-t border-gray-100 p-6 text-center sm:border-0 sm:border-l">
                            <p class="text-5xl leading-none font-extrabold text-indigo-600">
                                100k
                            </p>
                            <p class="mt-2 text-lg leading-6 font-medium text-gray-500">
                                Calories
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr class="my-6 border-2 rounded-full border-gray-200">
<div class="bg-indigo-800">
    <div class="max-w-screen-xl mx-auto py-12 px-4 sm:py-16 sm:px-6 lg:px-8 lg:py-20">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl leading-9 font-extrabold text-white sm:text-4xl sm:leading-10">
                Trusted by developers from over 80 planets
            </h2>
            <p class="mt-3 text-xl leading-7 text-indigo-200 sm:mt-4">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus repellat laudantium.
            </p>
        </div>
        <div class="mt-10 text-center sm:max-w-3xl sm:mx-auto sm:grid sm:grid-cols-3 sm:gap-8">
            <div>
                <p class="text-5xl leading-none font-extrabold text-white">
                    100%
                </p>
                <p class="mt-2 text-lg leading-6 font-medium text-indigo-200">
                    Pepperoni
                </p>
            </div>
            <div class="mt-10 sm:mt-0">
                <p class="text-5xl leading-none font-extrabold text-white">
                    24/7
                </p>
                <p class="mt-2 text-lg leading-6 font-medium text-indigo-200">
                    Delivery
                </p>
            </div>
            <div class="mt-10 sm:mt-0">
                <p class="text-5xl leading-none font-extrabold text-white">
                    100k+
                </p>
                <p class="mt-2 text-lg leading-6 font-medium text-indigo-200">
                    Calories
                </p>
            </div>
        </div>
    </div>
</div>
<hr class="my-6 border-2 rounded-full border-gray-200">
<div class="relative bg-white">
    <div class="h-56 bg-indigo-600 sm:h-72 lg:absolute lg:left-0 lg:h-full lg:w-1/2">
        <img class="w-full h-full object-cover"
            src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80"
            alt="Support team" />
    </div>
    <div class="relative max-w-screen-xl mx-auto px-4 py-8 sm:py-12 sm:px-6 lg:py-16">
        <div class="max-w-2xl mx-auto lg:max-w-none lg:mr-0 lg:ml-auto lg:w-1/2 lg:pl-10">
            <div>
                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
            </div>
            <h2 class="mt-6 text-3xl leading-9 font-extrabold text-gray-900 sm:text-4xl sm:leading-10">
                Deliver what your customers want every time
            </h2>
            <p class="mt-6 text-lg leading-7 text-gray-500">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore nihil ea rerum ipsa. Nostrum
                consectetur sequi culpa doloribus omnis, molestiae esse placeat, exercitationem magnam quod molestias
                quia aspernatur deserunt voluptatibus.
            </p>
            <div class="mt-8 overflow-hidden">
                <div class="-mx-8 -mt-8 flex flex-wrap">
                    <div class="px-8 pt-8">
                        <p class="text-2xl leading-8 font-extrabold text-indigo-600 sm:text-3xl sm:leading-9">
                            24/7
                        </p>
                        <p class="text-base leading-6 font-medium text-gray-500">
                            Delivery
                        </p>
                    </div>
                    <div class="px-8 pt-8">
                        <p class="text-2xl leading-8 font-extrabold text-indigo-600 sm:text-3xl sm:leading-9">
                            99.9%
                        </p>
                        <p class="text-base leading-6 font-medium text-gray-500">
                            Pepperoni
                        </p>
                    </div>
                    <div class="px-8 pt-8">
                        <p class="text-2xl leading-8 font-extrabold text-indigo-600 sm:text-3xl sm:leading-9">
                            100k+
                        </p>
                        <p class="text-base leading-6 font-medium text-gray-500">
                            Calories
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr class="my-6 border-2 rounded-full border-gray-200">
@endsection
