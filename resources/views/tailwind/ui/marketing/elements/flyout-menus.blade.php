@extends('layouts.tailwind-ui')

@section('title', 'Flyout Menus')

@section('content')
<!-- This example requires Tailwind CSS v1.4.0+ -->
<div class="z-0 relative">
    <div class="relative z-10 bg-white shadow">
        <div class="max-w-7xl mx-auto flex px-4 py-6 sm:px-6 lg:px-8">
            <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
            <button type="button"
                class="text-gray-500 group inline-flex items-center space-x-2 text-base leading-6 font-medium hover:text-gray-900 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150">
                <span>Solutions</span>
                <!-- Item active: "text-gray-600", Item inactive: "text-gray-400" -->
                <svg class="text-gray-400 h-5 w-5 group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150"
                    fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                </svg>
            </button>
        </div>
    </div>

    <!--
      Flyout menu, show/hide based on flyout menu state.
  
      Entering: "transition ease-out duration-200"
        From: "opacity-0 -translate-y-1"
        To: "opacity-100 translate-y-0"
      Leaving: "transition ease-in duration-150"
        From: "opacity-100 translate-y-0"
        To: "opacity-0 -translate-y-1"
    -->
    <div class="absolute inset-x-0 transform shadow-lg">
        <div class="absolute inset-0 flex">
            <div class="bg-white w-1/2"></div>
            <div class="bg-gray-50 w-1/2"></div>
        </div>
        <div class="relative max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2">
            <nav
                class="grid row-gap-10 px-4 py-8 bg-white sm:grid-cols-2 sm:col-gap-8 sm:py-12 sm:px-6 lg:px-8 xl:pr-12">
                <div class="space-y-5">
                    <h3 class="text-sm leading-5 font-medium tracking-wide text-gray-500 uppercase">
                        Company
                    </h3>
                    <ul class="space-y-6">
                        <li class="flow-root">
                            <a href="#"
                                class="-m-3 p-3 flex items-center space-x-4 rounded-md text-base leading-6 font-medium text-gray-900 hover:bg-gray-50 transition ease-in-out duration-150">
                                <svg class="flex-shrink-0 h-6 w-6 text-gray-400" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                    <path d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>About</span>
                            </a>
                        </li>
                        <li class="flow-root">
                            <a href="#"
                                class="-m-3 p-3 flex items-center space-x-4 rounded-md text-base leading-6 font-medium text-gray-900 hover:bg-gray-50 transition ease-in-out duration-150">
                                <svg class="flex-shrink-0 h-6 w-6 text-gray-400" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                                <span>Customers</span>
                            </a>
                        </li>
                        <li class="flow-root">
                            <a href="#"
                                class="-m-3 p-3 flex items-center space-x-4 rounded-md text-base leading-6 font-medium text-gray-900 hover:bg-gray-50 transition ease-in-out duration-150">
                                <svg class="flex-shrink-0 h-6 w-6 text-gray-400" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                                </svg>
                                <span>Press</span>
                            </a>
                        </li>
                        <li class="flow-root">
                            <a href="#"
                                class="-m-3 p-3 flex items-center space-x-4 rounded-md text-base leading-6 font-medium text-gray-900 hover:bg-gray-50 transition ease-in-out duration-150">
                                <svg class="flex-shrink-0 h-6 w-6 text-gray-400" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <span>Careers</span>
                            </a>
                        </li>
                        <li class="flow-root">
                            <a href="#"
                                class="-m-3 p-3 flex items-center space-x-4 rounded-md text-base leading-6 font-medium text-gray-900 hover:bg-gray-50 transition ease-in-out duration-150">
                                <svg class="flex-shrink-0 h-6 w-6 text-gray-400" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                                    <path
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                                <span>Privacy</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="space-y-5">
                    <h3 class="text-sm leading-5 font-medium tracking-wide text-gray-500 uppercase">
                        Resources
                    </h3>
                    <ul class="space-y-6">
                        <li class="flow-root">
                            <a href="#"
                                class="-m-3 p-3 flex items-center space-x-4 rounded-md text-base leading-6 font-medium text-gray-900 hover:bg-gray-50 transition ease-in-out duration-150">
                                <svg class="flex-shrink-0 h-6 w-6 text-gray-400" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                <span>Community</span>
                            </a>
                        </li>
                        <li class="flow-root">
                            <a href="#"
                                class="-m-3 p-3 flex items-center space-x-4 rounded-md text-base leading-6 font-medium text-gray-900 hover:bg-gray-50 transition ease-in-out duration-150">
                                <svg class="flex-shrink-0 h-6 w-6 text-gray-400" stroke="currentColor" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                </svg>
                                <span>Partners</span>
                            </a>
                        </li>
                        <li class="flow-root">
                            <a href="#"
                                class="-m-3 p-3 flex items-center space-x-4 rounded-md text-base leading-6 font-medium text-gray-900 hover:bg-gray-50 transition ease-in-out duration-150">
                                <svg class="flex-shrink-0 h-6 w-6 text-gray-400" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <span>Guides</span>
                            </a>
                        </li>
                        <li class="flow-root">
                            <a href="#"
                                class="-m-3 p-3 flex items-center space-x-4 rounded-md text-base leading-6 font-medium text-gray-900 hover:bg-gray-50 transition ease-in-out duration-150">
                                <svg class="flex-shrink-0 h-6 w-6 text-gray-400" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <span>Webinars</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="space-y-6 bg-gray-50 px-4 py-8 sm:py-12 sm:px-6 lg:px-8 xl:pl-12">
                <div class="space-y-6">
                    <h3 class="text-sm leading-5 font-medium tracking-wide text-gray-500 uppercase">
                        From the blog
                    </h3>
                    <ul class="space-y-6">
                        <li class="flow-root">
                            <a href="#"
                                class="-m-3 p-3 flex rounded-lg hover:bg-gray-100 transition ease-in-out duration-150 sm:space-x-8">
                                <div class="hidden sm:block flex-shrink-0">
                                    <img class="w-32 h-20 object-cover rounded-md"
                                        src="https://images.unsplash.com/photo-1558478551-1a378f63328e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2849&q=80"
                                        alt="" />
                                </div>
                                <div class="space-y-1 w-0 flex-1">
                                    <h4 class="text-base leading-6 font-medium text-gray-900 truncate">
                                        Boost your conversion rate
                                    </h4>
                                    <p class="text-sm leading-5 text-gray-500">
                                        Eget ullamcorper ac ut vulputate fames nec mattis pellentesque elementum.
                                        Viverra tempor id mus.
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li class="flow-root">
                            <a href="#"
                                class="-m-3 p-3 flex rounded-lg hover:bg-gray-100 transition ease-in-out duration-150 sm:space-x-8">
                                <div class="hidden sm:block flex-shrink-0">
                                    <img class="w-32 h-20 object-cover rounded-md"
                                        src="https://images.unsplash.com/1/apple-gear-looking-pretty.jpg?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80"
                                        alt="" />
                                </div>
                                <div class="space-y-1 w-0 flex-1">
                                    <h4 class="text-base leading-6 font-medium text-gray-900 truncate">
                                        How to use search engine optimization to drive traffic to your site
                                    </h4>
                                    <p class="text-sm leading-5 text-gray-500">
                                        Eget ullamcorper ac ut vulputate fames nec mattis pellentesque elementum.
                                        Viverra tempor id mus.
                                    </p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="text-sm leading-5 font-medium">
                    <a href="#" class="text-indigo-600 hover:text-indigo-500 transition ease-in-out duration-150">
                        View all posts &rarr;
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<!-- This example requires Tailwind CSS v1.4.0+ -->
<div class="z-0 relative">
    <div class="relative z-10 bg-white shadow">
        <div class="max-w-7xl mx-auto flex px-4 py-6 sm:px-6 lg:px-8">
            <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
            <button type="button"
                class="text-gray-500 group inline-flex items-center space-x-2 text-base leading-6 font-medium hover:text-gray-900 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150">
                <span>Solutions</span>
                <!-- Item active: "text-gray-600", Item inactive: "text-gray-400" -->
                <svg class="text-gray-400 h-5 w-5 group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150"
                    fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                </svg>
            </button>
        </div>
    </div>

    <!--
      Flyout menu, show/hide based on flyout menu state.
  
      Entering: "transition ease-out duration-200"
        From: "opacity-0 -translate-y-1"
        To: "opacity-100 translate-y-0"
      Leaving: "transition ease-in duration-150"
        From: "opacity-100 translate-y-0"
        To: "opacity-0 -translate-y-1"
    -->
    <div class="absolute inset-x-0 transform shadow-lg">
        <div class="bg-white">
            <div
                class="max-w-7xl mx-auto grid row-gap-6 px-4 py-6 sm:grid-cols-2 sm:gap-8 sm:px-6 sm:py-8 lg:grid-cols-4 lg:px-8 lg:py-12 xl:py-16">
                <a href="#"
                    class="-m-3 p-3 flex flex-col justify-between space-y-6 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                    <div class="space-x-4 flex md:h-full lg:flex-col lg:space-x-0 lg:space-y-4">
                        <div class="flex-shrink-0">
                            <span
                                class="inline-flex items-center justify-center h-10 w-10 rounded-md bg-indigo-500 text-white sm:h-12 sm:w-12">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                </svg>
                            </span>
                        </div>
                        <div class="space-y-2 md:flex-1 md:flex md:flex-col md:justify-between lg:space-y-4">
                            <div class="space-y-1">
                                <p class="text-base leading-6 font-medium text-gray-900">
                                    Analytics
                                </p>
                                <p class="text-sm leading-5 text-gray-500">
                                    Get a better understanding of where your traffic is coming from.
                                </p>
                            </div>
                            <p class="text-sm leading-5 font-medium text-indigo-600">
                                Learn more &rarr;
                            </p>
                        </div>
                    </div>
                </a>
                <a href="#"
                    class="-m-3 p-3 flex flex-col justify-between space-y-6 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                    <div class="space-x-4 flex md:h-full lg:flex-col lg:space-x-0 lg:space-y-4">
                        <div class="flex-shrink-0">
                            <span
                                class="inline-flex items-center justify-center h-10 w-10 rounded-md bg-indigo-500 text-white sm:h-12 sm:w-12">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                                </svg>
                            </span>
                        </div>
                        <div class="space-y-2 md:flex-1 md:flex md:flex-col md:justify-between lg:space-y-4">
                            <div class="space-y-1">
                                <p class="text-base leading-6 font-medium text-gray-900">
                                    Engagement
                                </p>
                                <p class="text-sm leading-5 text-gray-500">
                                    Speak directly to your customers in a more meaningful way.
                                </p>
                            </div>
                            <p class="text-sm leading-5 font-medium text-indigo-600">
                                Learn more &rarr;
                            </p>
                        </div>
                    </div>
                </a>
                <a href="#"
                    class="-m-3 p-3 flex flex-col justify-between space-y-6 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                    <div class="space-x-4 flex md:h-full lg:flex-col lg:space-x-0 lg:space-y-4">
                        <div class="flex-shrink-0">
                            <span
                                class="inline-flex items-center justify-center h-10 w-10 rounded-md bg-indigo-500 text-white sm:h-12 sm:w-12">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                                    <path
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </span>
                        </div>
                        <div class="space-y-2 md:flex-1 md:flex md:flex-col md:justify-between lg:space-y-4">
                            <div class="space-y-1">
                                <p class="text-base leading-6 font-medium text-gray-900">
                                    Security
                                </p>
                                <p class="text-sm leading-5 text-gray-500">
                                    Your customer data will be safe and secure.
                                </p>
                            </div>
                            <p class="text-sm leading-5 font-medium text-indigo-600">
                                Learn more &rarr;
                            </p>
                        </div>
                    </div>
                </a>
                <a href="#"
                    class="-m-3 p-3 flex flex-col justify-between space-y-6 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                    <div class="space-x-4 flex md:h-full lg:flex-col lg:space-x-0 lg:space-y-4">
                        <div class="flex-shrink-0">
                            <span
                                class="inline-flex items-center justify-center h-10 w-10 rounded-md bg-indigo-500 text-white sm:h-12 sm:w-12">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z" />
                                </svg>
                            </span>
                        </div>
                        <div class="space-y-2 md:flex-1 md:flex md:flex-col md:justify-between lg:space-y-4">
                            <div class="space-y-1">
                                <p class="text-base leading-6 font-medium text-gray-900">
                                    Integrations
                                </p>
                                <p class="text-sm leading-5 text-gray-500">
                                    Connect with third-party tools that you're already using.
                                </p>
                            </div>
                            <p class="text-sm leading-5 font-medium text-indigo-600">
                                Learn more &rarr;
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="bg-gray-50">
            <div class="max-w-7xl mx-auto space-y-6 px-4 py-5 sm:flex sm:space-y-0 sm:space-x-10 sm:px-6 lg:px-8">
                <div class="flow-root">
                    <a href="#"
                        class="-m-3 p-3 space-x-3 flex items-center rounded-md text-base leading-6 font-medium text-gray-900 hover:bg-gray-100 transition ease-in-out duration-150">
                        <svg class="flex-shrink-0 h-6 w-6 text-gray-400" fill="none" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            <path d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>Watch Demo</span>
                    </a>
                </div>
                <div class="flow-root">
                    <a href="#"
                        class="-m-3 p-3 space-x-3 flex items-center rounded-md text-base leading-6 font-medium text-gray-900 hover:bg-gray-100 transition ease-in-out duration-150">
                        <svg class="flex-shrink-0 h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>View all products</span>
                    </a>
                </div>
                <div class="flow-root">
                    <a href="#"
                        class="-m-3 p-3 space-x-3 flex items-center rounded-md text-base leading-6 font-medium text-gray-900 hover:bg-gray-100 transition ease-in-out duration-150">
                        <svg class="flex-shrink-0 h-6 w-6 text-gray-400" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                            <path
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <span>Contact Sales</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<!-- This example requires Tailwind CSS v1.4.0+ -->
<div class="relative">
    <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
    <button type="button"
        class="group text-gray-500 inline-flex items-center space-x-2 text-base leading-6 font-medium hover:text-gray-900 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150">
        <span>Solutions</span>
        <!-- Item active: "text-gray-600", Item inactive: "text-gray-400" -->
        <svg class="text-gray-400 h-5 w-5 group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150"
            fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd" />
        </svg>
    </button>

    <!--
      Flyout menu, show/hide based on flyout menu state.
  
      Entering: "transition ease-out duration-200"
        From: "opacity-0 translate-y-1"
        To: "opacity-100 translate-y-0"
      Leaving: "transition ease-in duration-150"
        From: "opacity-100 translate-y-0"
        To: "opacity-0 translate-y-1"
    -->
    <div class="absolute left-1/2 transform -translate-x-1/2 mt-3 px-2 w-screen max-w-xs sm:px-0">
        <div class="rounded-lg shadow-lg">
            <div class="rounded-lg shadow-xs overflow-hidden">
                <div class="z-20 relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                    <a href="#"
                        class="-m-3 p-3 block space-y-1 rounded-md hover:bg-gray-50 transition ease-in-out duration-150">
                        <p class="text-base leading-6 font-medium text-gray-900">
                            Blog
                        </p>
                        <p class="text-sm leading-5 text-gray-500">
                            Learn about tips, product updates and company culture.
                        </p>
                    </a>
                    <a href="#"
                        class="-m-3 p-3 block space-y-1 rounded-md hover:bg-gray-50 transition ease-in-out duration-150">
                        <p class="text-base leading-6 font-medium text-gray-900">
                            Help Center
                        </p>
                        <p class="text-sm leading-5 text-gray-500">
                            Get all of your questions answered in our forums of contact support.
                        </p>
                    </a>
                    <a href="#"
                        class="-m-3 p-3 block space-y-1 rounded-md hover:bg-gray-50 transition ease-in-out duration-150">
                        <p class="text-base leading-6 font-medium text-gray-900">
                            Guides
                        </p>
                        <p class="text-sm leading-5 text-gray-500">
                            Learn how to maximize our platform to get the most out of it.
                        </p>
                    </a>
                    <a href="#"
                        class="-m-3 p-3 block space-y-1 rounded-md hover:bg-gray-50 transition ease-in-out duration-150">
                        <p class="text-base leading-6 font-medium text-gray-900">
                            Events
                        </p>
                        <p class="text-sm leading-5 text-gray-500">
                            Check out webinars with experts and learn about our annual conference.
                        </p>
                    </a>
                    <a href="#"
                        class="-m-3 p-3 block space-y-1 rounded-md hover:bg-gray-50 transition ease-in-out duration-150">
                        <p class="text-base leading-6 font-medium text-gray-900">
                            Security
                        </p>
                        <p class="text-sm leading-5 text-gray-500">
                            Understand how we take your privacy seriously.
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<!-- This example requires Tailwind CSS v1.4.0+ -->
<div class="relative">
    <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
    <button type="button"
        class="group text-gray-500 inline-flex items-center space-x-2 text-base leading-6 font-medium hover:text-gray-900 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150">
        <span>Solutions</span>
        <!-- Item active: "text-gray-600", Item inactive: "text-gray-400" -->
        <svg class="text-gray-400 h-5 w-5 group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150"
            fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd" />
        </svg>
    </button>

    <!--
      Flyout menu, show/hide based on flyout menu state.
  
      Entering: "transition ease-out duration-200"
        From: "opacity-0 translate-y-1"
        To: "opacity-100 translate-y-0"
      Leaving: "transition ease-in duration-150"
        From: "opacity-100 translate-y-0"
        To: "opacity-0 translate-y-1"
    -->
    <div class="absolute left-1/2 transform -translate-x-1/2 mt-3 px-2 w-screen max-w-md sm:px-0">
        <div class="rounded-lg shadow-lg">
            <div class="rounded-lg shadow-xs overflow-hidden">
                <div class="z-20 relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                    <a href="#"
                        class="-m-3 p-3 flex items-start space-x-4 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" stroke="currentColor" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                        <div class="space-y-1">
                            <p class="text-base leading-6 font-medium text-gray-900">
                                Analytics
                            </p>
                            <p class="text-sm leading-5 text-gray-500">
                                Get a better understanding of where your traffic is coming from.
                            </p>
                        </div>
                    </a>
                    <a href="#"
                        class="-m-3 p-3 flex items-start space-x-4 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" stroke="currentColor" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                        </svg>
                        <div class="space-y-1">
                            <p class="text-base leading-6 font-medium text-gray-900">
                                Engagement
                            </p>
                            <p class="text-sm leading-5 text-gray-500">
                                Speak directly to your customers in a more meaningful way.
                            </p>
                        </div>
                    </a>
                    <a href="#"
                        class="-m-3 p-3 flex items-start space-x-4 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                            <path
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                        <div class="space-y-1">
                            <p class="text-base leading-6 font-medium text-gray-900">
                                Security
                            </p>
                            <p class="text-sm leading-5 text-gray-500">
                                Your customers data will be safe and secure.
                            </p>
                        </div>
                    </a>
                    <a href="#"
                        class="-m-3 p-3 flex items-start space-x-4 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" stroke="currentColor" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z" />
                        </svg>
                        <div class="space-y-1">
                            <p class="text-base leading-6 font-medium text-gray-900">
                                Integrations
                            </p>
                            <p class="text-sm leading-5 text-gray-500">
                                Connect with third-party tools that you’re already using.
                            </p>
                        </div>
                    </a>
                    <a href="#"
                        class="-m-3 p-3 flex items-start space-x-4 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                            <path
                                d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                        </svg>
                        <div class="space-y-1">
                            <p class="text-base leading-6 font-medium text-gray-900">
                                Automations
                            </p>
                            <p class="text-sm leading-5 text-gray-500">
                                Build strategic funnels that will drive your customers to convert
                            </p>
                        </div>
                    </a>
                </div>
                <div class="px-5 py-5 bg-gray-50 space-y-6 sm:flex sm:space-y-0 sm:space-x-10 sm:px-8">
                    <div class="flow-root">
                        <a href="#"
                            class="-m-3 p-3 flex items-center space-x-3 rounded-md text-base leading-6 font-medium text-gray-900 hover:bg-gray-100 transition ease-in-out duration-150">
                            <svg class="flex-shrink-0 h-6 w-6 text-gray-400" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                <path d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Watch Demo</span>
                        </a>
                    </div>
                    <div class="flow-root">
                        <a href="#"
                            class="-m-3 p-3 flex items-center space-x-3 rounded-md text-base leading-6 font-medium text-gray-900 hover:bg-gray-100 transition ease-in-out duration-150">
                            <svg class="flex-shrink-0 h-6 w-6 text-gray-400" fill="none" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                                <path
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <span>Contact Sales</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<!-- This example requires Tailwind CSS v1.4.0+ -->
<div class="relative">
    <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
    <button type="button"
        class="group text-gray-500 inline-flex items-center space-x-2 text-base leading-6 font-medium hover:text-gray-900 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150">
        <span>Solutions</span>
        <!-- Item active: "text-gray-600", Item inactive: "text-gray-400" -->
        <svg class="text-gray-400 h-5 w-5 group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150"
            fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd" />
        </svg>
    </button>

    <!--
      Flyout menu, show/hide based on flyout menu state.
  
      Entering: "transition ease-out duration-200"
        From: "opacity-0 translate-y-1"
        To: "opacity-100 translate-y-0"
      Leaving: "transition ease-in duration-150"
        From: "opacity-100 translate-y-0"
        To: "opacity-0 translate-y-1"
    -->
    <div class="absolute left-1/2 transform -translate-x-1/2 mt-3 px-2 w-screen max-w-md sm:px-0">
        <div class="rounded-lg shadow-lg">
            <div class="rounded-lg shadow-xs overflow-hidden">
                <div class="z-20 relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                    <a href="#"
                        class="-m-3 p-3 flex items-start space-x-4 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" fill="none" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                        <div class="space-y-1">
                            <p class="text-base leading-6 font-medium text-gray-900">
                                Help Center
                            </p>
                            <p class="text-sm leading-5 text-gray-500">
                                Get all of your questions answered in our forums or contact support.
                            </p>
                        </div>
                    </a>
                    <a href="#"
                        class="-m-3 p-3 flex items-start space-x-4 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" fill="none" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <div class="space-y-1">
                            <p class="text-base leading-6 font-medium text-gray-900">
                                Guides
                            </p>
                            <p class="text-sm leading-5 text-gray-500">
                                Learn how to maximize our platform to get the most out of it.
                            </p>
                        </div>
                    </a>
                    <a href="#"
                        class="-m-3 p-3 flex items-start space-x-4 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" stroke="currentColor" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <div class="space-y-1">
                            <p class="text-base leading-6 font-medium text-gray-900">
                                Events
                            </p>
                            <p class="text-sm leading-5 text-gray-500">
                                See what meet-ups and other events we might be planning near you.
                            </p>
                        </div>
                    </a>
                    <a href="#"
                        class="-m-3 p-3 flex items-start space-x-4 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                            <path
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                        <div class="space-y-1">
                            <p class="text-base leading-6 font-medium text-gray-900">
                                Security
                            </p>
                            <p class="text-sm leading-5 text-gray-500">
                                Understand how we take your privacy seriously.
                            </p>
                        </div>
                    </a>
                </div>
                <div class="px-5 py-5 bg-gray-50 space-y-5 sm:px-8 sm:py-8">
                    <div class="space-y-4">
                        <h3 class="text-sm leading-5 tracking-wide font-medium text-gray-500 uppercase">
                            Recent Posts
                        </h3>
                        <ul class="space-y-4">
                            <li class="text-base leading-6 truncate">
                                <a href="#"
                                    class="font-medium text-gray-900 hover:text-gray-700 transition ease-in-out duration-150">
                                    Boost your conversion rate
                                </a>
                            </li>
                            <li class="text-base leading-6 truncate">
                                <a href="#"
                                    class="font-medium text-gray-900 hover:text-gray-700 transition ease-in-out duration-150">
                                    How to use search engine optimization to drive traffic to your site
                                </a>
                            </li>
                            <li class="text-base leading-6 truncate">
                                <a href="#"
                                    class="font-medium text-gray-900 hover:text-gray-700 transition ease-in-out duration-150">
                                    Improve your customer experience
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="text-sm leading-5">
                        <a href="#"
                            class="font-medium text-indigo-600 hover:text-indigo-500 transition ease-in-out duration-150">
                            View all posts &rarr;
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<hr class="my-6 border-2 rounded-full border-gray-200">
<!-- This example requires Tailwind CSS v1.4.0+ -->
<div class="relative">
    <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
    <button type="button"
        class="group text-gray-500 inline-flex items-center space-x-2 text-base leading-6 font-medium hover:text-gray-900 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150">
        <span>Solutions</span>
        <!-- Item active: "text-gray-600", Item inactive: "text-gray-400" -->
        <svg class="text-gray-400 h-5 w-5 group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150"
            fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd" />
        </svg>
    </button>

    <!--
      Flyout menu, show/hide based on flyout menu state.
  
      Entering: "transition ease-out duration-200"
        From: "opacity-0 translate-y-1"
        To: "opacity-100 translate-y-0"
      Leaving: "transition ease-in duration-150"
        From: "opacity-100 translate-y-0"
        To: "opacity-0 translate-y-1"
    -->
    <div class="absolute left-1/2 transform -translate-x-1/2 mt-3 px-2 w-screen max-w-md sm:px-0 lg:max-w-3xl">
        <div class="rounded-lg shadow-lg">
            <div class="rounded-lg shadow-xs overflow-hidden">
                <div class="z-20 relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8 lg:grid-cols-2">
                    <a href="#"
                        class="-m-3 p-3 flex items-start space-x-4 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                        <div
                            class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-indigo-500 text-white sm:h-12 sm:w-12 ">
                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                        </div>
                        <div class="space-y-1">
                            <p class="text-base leading-6 font-medium text-gray-900">
                                Analytics
                            </p>
                            <p class="text-sm leading-5 text-gray-500">
                                Get a better understanding of where your traffic is coming from.
                            </p>
                        </div>
                    </a>
                    <a href="#"
                        class="-m-3 p-3 flex items-start space-x-4 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                        <div
                            class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-indigo-500 text-white sm:h-12 sm:w-12 ">
                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                            </svg>
                        </div>
                        <div class="space-y-1">
                            <p class="text-base leading-6 font-medium text-gray-900">
                                Engagement
                            </p>
                            <p class="text-sm leading-5 text-gray-500">
                                Speak directly to your customers in a more meaningful way.
                            </p>
                        </div>
                    </a>
                    <a href="#"
                        class="-m-3 p-3 flex items-start space-x-4 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                        <div
                            class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-indigo-500 text-white sm:h-12 sm:w-12 ">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                                <path
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <div class="space-y-1">
                            <p class="text-base leading-6 font-medium text-gray-900">
                                Security
                            </p>
                            <p class="text-sm leading-5 text-gray-500">
                                Your customers data will be safe and secure.
                            </p>
                        </div>
                    </a>
                    <a href="#"
                        class="-m-3 p-3 flex items-start space-x-4 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                        <div
                            class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-indigo-500 text-white sm:h-12 sm:w-12 ">
                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div class="space-y-1">
                            <p class="text-base leading-6 font-medium text-gray-900">
                                Integrations
                            </p>
                            <p class="text-sm leading-5 text-gray-500">
                                Connect with third-party tools that you’re already using.
                            </p>
                        </div>
                    </a>
                    <a href="#"
                        class="-m-3 p-3 flex items-start space-x-4 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                        <div
                            class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-indigo-500 text-white sm:h-12 sm:w-12 ">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                                <path
                                    d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                            </svg>
                        </div>
                        <div class="space-y-1">
                            <p class="text-base leading-6 font-medium text-gray-900">
                                Automations
                            </p>
                            <p class="text-sm leading-5 text-gray-500">
                                Build strategic funnels that will drive your customers to convert
                            </p>
                        </div>
                    </a>
                    <a href="#"
                        class="-m-3 p-3 flex items-start space-x-4 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                        <div
                            class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-indigo-500 text-white sm:h-12 sm:w-12 ">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                                <path
                                    d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </div>
                        <div class="space-y-1">
                            <p class="text-base leading-6 font-medium text-gray-900">
                                Reports
                            </p>
                            <p class="text-sm leading-5 text-gray-500">
                                Get detailed reports that will help you make more informed decisions
                            </p>
                        </div>
                    </a>
                </div>
                <div class="p-5 bg-gray-50 sm:p-8">
                    <a href="#"
                        class="-m-3 p-3 flow-root space-y-1 rounded-md hover:bg-gray-100 transition ease-in-out duration-150">
                        <div class="flex items-center space-x-3">
                            <div class="text-base leading-6 font-medium text-gray-900">
                                Enterprise
                            </div>
                            <span
                                class="inline-flex items-center px-3 py-0.5 rounded-full text-xs font-medium leading-5 bg-indigo-100 text-indigo-800">
                                New
                            </span>
                        </div>
                        <p class="text-sm leading-5 text-gray-500">
                            Empower your entire team with even more advanced tools.
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
