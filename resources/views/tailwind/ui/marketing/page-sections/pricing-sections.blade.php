@extends('layouts.tailwind-ui')

@section('title', 'Pricing Sections')

@section('content')
<div class="bg-gray-100">
    <div class="pt-12 sm:pt-16 lg:pt-20">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2
                    class="text-3xl leading-9 font-extrabold text-gray-900 sm:text-4xl sm:leading-10 lg:text-5xl lg:leading-none">
                    Simple no-tricks pricing
                </h2>
                <p class="mt-4 text-xl leading-7 text-gray-500">
                    If you're not satisfied, contact us within the first 14 days and we'll send you a full refund.
                </p>
            </div>
        </div>
    </div>
    <div class="mt-8 bg-white pb-16 sm:mt-12 sm:pb-20 lg:pb-28">
        <div class="relative">
            <div class="absolute inset-0 h-1/2 bg-gray-100"></div>
            <div class="relative max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-lg mx-auto rounded-lg shadow-lg overflow-hidden lg:max-w-none lg:flex">
                    <div class="bg-white px-6 py-8 lg:flex-shrink-1 lg:p-12">
                        <h3 class="text-2xl leading-8 font-extrabold text-gray-900 sm:text-3xl sm:leading-9">
                            Lifetime Membership
                        </h3>
                        <p class="mt-6 text-base leading-6 text-gray-500">
                            Lorem ipsum dolor sit amet consect etur adipisicing elit. Itaque amet indis perferendis
                            blanditiis repellendus etur quidem assumenda.
                        </p>
                        <div class="mt-8">
                            <div class="flex items-center">
                                <h4
                                    class="flex-shrink-0 pr-4 bg-white text-sm leading-5 tracking-wider font-semibold uppercase text-indigo-600">
                                    What's included
                                </h4>
                                <div class="flex-1 border-t-2 border-gray-200"></div>
                            </div>
                            <ul class="mt-8 lg:grid lg:grid-cols-2 lg:col-gap-8 lg:row-gap-5">
                                <li class="flex items-start lg:col-span-1">
                                    <div class="flex-shrink-0">
                                        <svg class="h-5 w-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <p class="ml-3 text-sm leading-5 text-gray-700">
                                        Private forum access
                                    </p>
                                </li>
                                <li class="mt-5 flex items-start lg:col-span-1 lg:mt-0">
                                    <div class="flex-shrink-0">
                                        <svg class="h-5 w-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <p class="ml-3 text-sm leading-5 text-gray-700">
                                        Member resources
                                    </p>
                                </li>
                                <li class="mt-5 flex items-start lg:col-span-1 lg:mt-0">
                                    <div class="flex-shrink-0">
                                        <svg class="h-5 w-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <p class="ml-3 text-sm leading-5 text-gray-700">
                                        Entry to annual conference
                                    </p>
                                </li>
                                <li class="mt-5 flex items-start lg:col-span-1 lg:mt-0">
                                    <div class="flex-shrink-0">
                                        <svg class="h-5 w-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <p class="ml-3 text-sm leading-5 text-gray-700">
                                        Official member t-shirt
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div
                        class="py-8 px-6 text-center bg-gray-50 lg:flex-shrink-0 lg:flex lg:flex-col lg:justify-center lg:p-12">
                        <p class="text-lg leading-6 font-medium text-gray-900">
                            Pay once, own it forever
                        </p>
                        <div
                            class="mt-4 flex items-center justify-center text-5xl leading-none font-extrabold text-gray-900">
                            <span>
                                $349
                            </span>
                            <span class="ml-3 text-xl leading-7 font-medium text-gray-500">
                                USD
                            </span>
                        </div>
                        <p class="mt-4 text-sm leading-5">
                            <a href="#" class="font-medium text-gray-500 underline">
                                Learn about our membership policy
                            </a>
                        </p>
                        <div class="mt-6">
                            <div class="rounded-md shadow">
                                <a href="#"
                                    class="flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-gray-900 hover:bg-gray-800 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
                                    Get Access
                                </a>
                            </div>
                        </div>
                        <div class="mt-4 text-sm leading-5">
                            <a href="#" class="font-medium text-gray-900">
                                Get a free sample
                                <span class="font-normal text-gray-500">
                                    (20MB)
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr class="my-6 border-2 rounded-full border-gray-200">
<div class="bg-gray-900">
    <div class="pt-12 px-4 sm:px-6 lg:px-8 lg:pt-20">
        <div class="text-center">
            <h2 class="text-lg leading-6 font-semibold text-gray-300 uppercase tracking-wider">
                Pricing
            </h2>
            <p
                class="mt- text-3xl leading-9 font-extrabold text-white sm:text-4xl sm:leading-10 lg:text-5xl lg:leading-none">
                The right price for you, whoever you are
            </p>
            <p class="mt-3 max-w-4xl mx-auto text-xl leading-7 text-gray-300 sm:mt-5 sm:text-2xl sm:leading-8">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit numquam eligendi quos odit doloribus
                molestiae voluptatum.
            </p>
        </div>
    </div>

    <div class="mt-16 bg-white pb-12 lg:mt-20 lg:pb-20">
        <div class="relative z-0">
            <div class="absolute inset-0 h-5/6 bg-gray-900 lg:h-2/3"></div>
            <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="relative lg:grid lg:grid-cols-7">
                    <div
                        class="mx-auto max-w-md lg:mx-0 lg:max-w-none lg:col-start-1 lg:col-end-3 lg:row-start-2 lg:row-end-3">
                        <div
                            class="h-full flex flex-col rounded-lg shadow-lg overflow-hidden lg:rounded-none lg:rounded-l-lg">
                            <div class="flex-1 flex flex-col">
                                <div class="bg-white px-6 py-10">
                                    <div>
                                        <h2 class="text-center text-2xl leading-8 font-medium text-gray-900">
                                            Hobby
                                        </h2>
                                        <div class="mt-4 flex items-center justify-center">
                                            <span
                                                class="px-3 flex items-start text-6xl leading-none tracking-tight text-gray-900">
                                                <span class="mt-2 mr-2 text-4xl font-medium">
                                                    $
                                                </span>
                                                <span class="font-extrabold">
                                                    79
                                                </span>
                                            </span>
                                            <span class="text-xl leading-7 font-medium text-gray-400">
                                                /month
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="flex-1 flex flex-col justify-between border-t-2 border-gray-100 p-6 bg-gray-50 sm:p-10 lg:p-6 xl:p-10">
                                    <ul>
                                        <li class="flex items-start">
                                            <div class="flex-shrink-0">
                                                <svg class="h-6 w-6 text-green-500" stroke="currentColor" fill="none"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7" />
                                                </svg>
                                            </div>
                                            <p class="ml-3 text-base leading-6 font-medium text-gray-500">
                                                Pariatur quod similique
                                            </p>
                                        </li>
                                        <li class="mt-4 flex items-start">
                                            <div class="flex-shrink-0">
                                                <svg class="h-6 w-6 text-green-500" stroke="currentColor" fill="none"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7" />
                                                </svg>
                                            </div>
                                            <p class="ml-3 text-base leading-6 font-medium text-gray-500">
                                                Sapiente libero doloribus
                                            </p>
                                        </li>
                                        <li class="mt-4 flex items-start">
                                            <div class="flex-shrink-0">
                                                <svg class="h-6 w-6 text-green-500" stroke="currentColor" fill="none"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7" />
                                                </svg>
                                            </div>
                                            <p class="ml-3 text-base leading-6 font-medium text-gray-500">
                                                Vel ipsa esse repudiandae
                                            </p>
                                        </li>
                                    </ul>
                                    <div class="mt-8">
                                        <div class="rounded-lg shadow-md">
                                            <a href="#" data-gumroad-single-product="true"
                                                class="block w-full text-center rounded-lg border border-transparent bg-white px-6 py-3 text-base leading-6 font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:shadow-outline transition ease-in-out duration-150">
                                                Start your trial
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="mt-10 max-w-lg mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-start-3 lg:col-end-6 lg:row-start-1 lg:row-end-4">
                        <div class="relative z-10 rounded-lg shadow-xl">
                            <div class="pointer-events-none absolute inset-0 rounded-lg border-2 border-indigo-600">
                            </div>
                            <div class="absolute inset-x-0 top-0 transform translate-y-px">
                                <div class="flex justify-center transform -translate-y-1/2">
                                    <span
                                        class="inline-flex rounded-full bg-indigo-600 px-4 py-1 text-sm leading-5 font-semibold tracking-wider uppercase text-white">
                                        Most popular
                                    </span>
                                </div>
                            </div>
                            <div class="bg-white rounded-t-lg px-6 pt-12 pb-10">
                                <div>
                                    <h2 class="text-center text-3xl leading-9 font-semibold text-gray-900 sm:-mx-6">
                                        Growth
                                    </h2>
                                    <div class="mt-4 flex items-center justify-center">
                                        <span
                                            class="px-3 flex items-start text-6xl leading-none tracking-tight text-gray-900 sm:text-6xl">
                                            <span class="mt-2 mr-2 text-4xl font-medium">
                                                $
                                            </span>
                                            <span class="font-extrabold">
                                                149
                                            </span>
                                        </span>
                                        <span class="text-2xl leading-8 font-medium text-gray-400">
                                            /month
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="border-t-2 border-gray-100 rounded-b-lg pt-10 pb-8 px-6 bg-gray-50 sm:px-10 sm:py-10">
                                <ul>
                                    <li class="flex items-start">
                                        <div class="flex-shrink-0">
                                            <svg class="h-6 w-6 text-green-500" stroke="currentColor" fill="none"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                                        <p class="ml-3 text-base leading-6 font-medium text-gray-500">
                                            Quia rem est sed impedit magnam
                                        </p>
                                    </li>
                                    <li class="mt-4 flex items-start">
                                        <div class="flex-shrink-0">
                                            <svg class="h-6 w-6 text-green-500" stroke="currentColor" fill="none"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                                        <p class="ml-3 text-base leading-6 font-medium text-gray-500">
                                            Dolorem vero ratione voluptates
                                        </p>
                                    </li>
                                    <li class="mt-4 flex items-start">
                                        <div class="flex-shrink-0">
                                            <svg class="h-6 w-6 text-green-500" stroke="currentColor" fill="none"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                                        <p class="ml-3 text-base leading-6 font-medium text-gray-500">
                                            Qui sed ab doloribus voluptatem dolore
                                        </p>
                                    </li>
                                    <li class="mt-4 flex items-start">
                                        <div class="flex-shrink-0">
                                            <svg class="h-6 w-6 text-green-500" stroke="currentColor" fill="none"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                                        <p class="ml-3 text-base leading-6 font-medium text-gray-500">
                                            Laborum commodi molestiae id et fugiat
                                        </p>
                                    </li>
                                    <li class="mt-4 flex items-start">
                                        <div class="flex-shrink-0">
                                            <svg class="h-6 w-6 text-green-500" stroke="currentColor" fill="none"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                                        <p class="ml-3 text-base leading-6 font-medium text-gray-500">
                                            Nam ut ipsa nesciunt culpa modi dolor
                                        </p>
                                    </li>
                                </ul>
                                <div class="mt-10">
                                    <div class="rounded-lg shadow-md">
                                        <a href="#" data-gumroad-single-product="true"
                                            class="block w-full text-center rounded-lg border border-transparent bg-indigo-600 px-6 py-4 text-xl leading-6 font-medium text-white hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo transition ease-in-out duration-150">
                                            Start your trial
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="mt-10 mx-auto max-w-md lg:m-0 lg:max-w-none lg:col-start-6 lg:col-end-8 lg:row-start-2 lg:row-end-3">
                        <div
                            class="h-full flex flex-col rounded-lg shadow-lg overflow-hidden lg:rounded-none lg:rounded-r-lg">
                            <div class="flex-1 flex flex-col">
                                <div class="bg-white px-6 py-10">
                                    <div>
                                        <h2 class="text-center text-2xl leading-8 font-medium text-gray-900">
                                            Scale
                                        </h2>
                                        <div class="mt-4 flex items-center justify-center">
                                            <span
                                                class="px-3 flex items-start text-6xl leading-none tracking-tight text-gray-900">
                                                <span class="mt-2 mr-2 text-4xl font-medium">
                                                    $
                                                </span>
                                                <span class="font-extrabold">
                                                    349
                                                </span>
                                            </span>
                                            <span class="text-xl leading-7 font-medium text-gray-400">
                                                /month
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="flex-1 flex flex-col justify-between border-t-2 border-gray-100 p-6 bg-gray-50 sm:p-10 lg:p-6 xl:p-10">
                                    <ul>
                                        <li class="flex items-start">
                                            <div class="flex-shrink-0">
                                                <svg class="h-6 w-6 text-green-500" stroke="currentColor" fill="none"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7" />
                                                </svg>
                                            </div>
                                            <p class="ml-3 text-base leading-6 font-medium text-gray-500">
                                                Pariatur quod similique
                                            </p>
                                        </li>
                                        <li class="mt-4 flex items-start">
                                            <div class="flex-shrink-0">
                                                <svg class="h-6 w-6 text-green-500" stroke="currentColor" fill="none"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7" />
                                                </svg>
                                            </div>
                                            <p class="ml-3 text-base leading-6 font-medium text-gray-500">
                                                Sapiente libero doloribus
                                            </p>
                                        </li>
                                        <li class="mt-4 flex items-start">
                                            <div class="flex-shrink-0">
                                                <svg class="h-6 w-6 text-green-500" stroke="currentColor" fill="none"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7" />
                                                </svg>
                                            </div>
                                            <p class="ml-3 text-base leading-6 font-medium text-gray-500">
                                                Vel ipsa esse repudiandae
                                            </p>
                                        </li>
                                    </ul>
                                    <div class="mt-8">
                                        <div class="rounded-lg shadow-md">
                                            <a href="#" data-gumroad-single-product="true"
                                                class="block w-full text-center rounded-lg border border-transparent bg-white px-6 py-3 text-base leading-6 font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:shadow-outline transition ease-in-out duration-150">
                                                Start your trial
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr class="my-6 border-2 rounded-full border-gray-200">
<div class="bg-gray-900">
    <div class="pt-12 sm:pt-16 lg:pt-24">
        <div class="max-w-screen-xl mx-auto text-center px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto lg:max-w-none">
                <h2 class="text-lg leading-6 font-semibold text-gray-300 uppercase tracking-wider">
                    Pricing
                </h2>
                <p
                    class="mt-2 text-3xl leading-9 font-extrabold text-white sm:text-4xl sm:leading-10 lg:text-5xl lg:leading-none">
                    The right price for you, whoever you are
                </p>
                <p class="mt-2 text-xl leading-7 text-gray-300">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum sequi unde repudiandae natus.
                </p>
            </div>
        </div>
    </div>
    <div class="mt-8 pb-12 bg-gray-50 sm:mt-12 sm:pb-16 lg:mt-16 lg:pb-24">
        <div class="relative">
            <div class="absolute inset-0 h-3/4 bg-gray-900"></div>
            <div class="relative z-10 max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-md mx-auto lg:max-w-5xl lg:grid lg:grid-cols-2 lg:gap-5">
                    <div class="rounded-lg shadow-lg overflow-hidden">
                        <div class="px-6 py-8 bg-white sm:p-10 sm:pb-6">
                            <div>
                                <span
                                    class="inline-flex px-4 py-1 rounded-full text-sm leading-5 font-semibold tracking-wide uppercase bg-indigo-100 text-indigo-600">
                                    Standard
                                </span>
                            </div>
                            <div class="mt-4 flex items-baseline text-6xl leading-none font-extrabold">
                                $49
                                <span class="ml-1 text-2xl leading-8 font-medium text-gray-500">
                                    /mo
                                </span>
                            </div>
                            <p class="mt-5 text-lg leading-7 text-gray-500">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            </p>
                        </div>
                        <div class="px-6 pt-6 pb-8 bg-gray-50 sm:p-10 sm:pt-6">
                            <ul>
                                <li class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <svg class="h-6 w-6 text-green-500" stroke="currentColor" fill="none"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                    <p class="ml-3 text-base leading-6 text-gray-700">
                                        Pariatur quod similique
                                    </p>
                                </li>
                                <li class="mt-4 flex items-start">
                                    <div class="flex-shrink-0">
                                        <svg class="h-6 w-6 text-green-500" stroke="currentColor" fill="none"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                    <p class="ml-3 text-base leading-6 text-gray-700">
                                        Sapiente libero doloribus modi nostrum
                                    </p>
                                </li>
                                <li class="mt-4 flex items-start">
                                    <div class="flex-shrink-0">
                                        <svg class="h-6 w-6 text-green-500" stroke="currentColor" fill="none"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                    <p class="ml-3 text-base leading-6 text-gray-700">
                                        Vel ipsa esse repudiandae excepturi
                                    </p>
                                </li>
                                <li class="mt-4 flex items-start">
                                    <div class="flex-shrink-0">
                                        <svg class="h-6 w-6 text-green-500" stroke="currentColor" fill="none"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                    <p class="ml-3 text-base leading-6 text-gray-700">
                                        Itaque cupiditate adipisci quibusdam
                                    </p>
                                </li>
                            </ul>
                            <div class="mt-6 rounded-md shadow">
                                <a href="#"
                                    class="flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-gray-900 hover:bg-gray-800 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
                                    Get started
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 rounded-lg shadow-lg overflow-hidden lg:mt-0">
                        <div class="px-6 py-8 bg-white sm:p-10 sm:pb-6">
                            <div>
                                <span
                                    class="inline-flex px-4 py-1 rounded-full text-sm leading-5 font-semibold tracking-wide uppercase bg-indigo-100 text-indigo-600">
                                    Enterprise
                                </span>
                            </div>
                            <div class="mt-4 flex items-baseline text-6xl leading-none font-extrabold">
                                $79
                                <span class="ml-1 text-2xl leading-8 font-medium text-gray-500">
                                    /mo
                                </span>
                            </div>
                            <p class="mt-5 text-lg leading-7 text-gray-500">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            </p>
                        </div>
                        <div class="px-6 pt-6 pb-8 bg-gray-50 sm:p-10 sm:pt-6">
                            <ul>
                                <li class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <svg class="h-6 w-6 text-green-500" stroke="currentColor" fill="none"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                    <p class="ml-3 text-base leading-6 text-gray-700">
                                        Pariatur quod similique
                                    </p>
                                </li>
                                <li class="mt-4 flex items-start">
                                    <div class="flex-shrink-0">
                                        <svg class="h-6 w-6 text-green-500" stroke="currentColor" fill="none"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                    <p class="ml-3 text-base leading-6 text-gray-700">
                                        Sapiente libero doloribus modi nostrum
                                    </p>
                                </li>
                                <li class="mt-4 flex items-start">
                                    <div class="flex-shrink-0">
                                        <svg class="h-6 w-6 text-green-500" stroke="currentColor" fill="none"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                    <p class="ml-3 text-base leading-6 text-gray-700">
                                        Vel ipsa esse repudiandae excepturi
                                    </p>
                                </li>
                                <li class="mt-4 flex items-start">
                                    <div class="flex-shrink-0">
                                        <svg class="h-6 w-6 text-green-500" stroke="currentColor" fill="none"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                    <p class="ml-3 text-base leading-6 text-gray-700">
                                        Itaque cupiditate adipisci quibusdam
                                    </p>
                                </li>
                            </ul>
                            <div class="mt-6 rounded-md shadow">
                                <a href="#"
                                    class="flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-gray-900 hover:bg-gray-800 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
                                    Get started
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-4 relative max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8 lg:mt-5">
            <div class="max-w-md mx-auto lg:max-w-5xl">
                <div class="rounded-lg bg-gray-100 px-6 py-8 sm:p-10 lg:flex lg:items-center">
                    <div class="flex-1">
                        <div>
                            <span
                                class="inline-flex px-4 py-1 rounded-full text-sm leading-5 font-semibold tracking-wide uppercase bg-white text-gray-800">
                                Discounted
                            </span>
                        </div>
                        <div class="mt-4 text-lg leading-7 text-gray-500">
                            Get full access to all of standard license features for solo projects that make less than
                            $20k gross revenue for
                            <strong class="font-semibold text-gray-900">
                                $29
                            </strong>
                            .
                        </div>
                    </div>
                    <div class="mt-6 rounded-md shadow lg:mt-0 lg:ml-10 lg:flex-shrink-0">
                        <a href="#"
                            class="flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-gray-900 bg-white hover:text-gray-700 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
                            Buy Discounted License
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr class="my-6 border-2 rounded-full border-gray-200">
@endsection
