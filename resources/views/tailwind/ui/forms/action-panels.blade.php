@extends('layouts.tailwind-ui')

@section('title', 'Action Panels')

@section('content')
<div class="p-6">
    <div class="bg-gray-50 sm:rounded-lg">
        <div class="px-4 py-5 sm:p-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                Need more bandwidth?
            </h3>
            <div class="mt-2 max-w-xl text-sm leading-5 text-gray-500">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus praesentium tenetur pariatur.
                </p>
            </div>
            <div class="mt-5">
                <span class="inline-flex rounded-md shadow-sm">
                    <button type="button"
                        class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm leading-5 font-medium rounded-md text-gray-700 bg-white hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150">
                        Contact sales
                    </button>
                </span>
            </div>
        </div>
    </div>
    <hr class="my-6 border-2 rounded-full border-gray-200">
    <div class="bg-white shadow sm:rounded-lg">
        <div class="px-4 py-5 sm:p-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                Delete your account
            </h3>
            <div class="mt-2 max-w-xl text-sm leading-5 text-gray-500">
                <p>
                    Once you delete your account, you will lose all data associated with it.
                </p>
            </div>
            <div class="mt-5">
                <button type="button"
                    class="inline-flex items-center justify-center px-4 py-2 border border-transparent font-medium rounded-md text-red-700 bg-red-100 hover:bg-red-50 focus:outline-none focus:border-red-300 focus:shadow-outline-red active:bg-red-200 transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                    Delete account
                </button>
            </div>
        </div>
    </div>
    <hr class="my-6 border-2 rounded-full border-gray-200">
    <div class="bg-white shadow sm:rounded-lg">
        <div class="px-4 py-5 sm:p-6">
            <div class="sm:flex sm:items-start sm:justify-between">
                <div>
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        Manage subscription
                    </h3>
                    <div class="mt-2 max-w-xl text-sm leading-5 text-gray-500">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae voluptatibus corrupti
                            atque repudiandae nam.
                        </p>
                    </div>
                </div>
                <div class="mt-5 sm:mt-0 sm:ml-6 sm:flex-shrink-0 sm:flex sm:items-center">
                    <span class="inline-flex rounded-md shadow-sm">
                        <button type="button"
                            class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
                            Change plan
                        </button>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <hr class="my-6 border-2 rounded-full border-gray-200">
    <div class="bg-white shadow sm:rounded-lg">
        <div class="px-4 py-5 sm:p-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                Manage subscription
            </h3>
            <div class="mt-2 sm:flex sm:items-start sm:justify-between">
                <div class="max-w-xl text-sm leading-5 text-gray-500">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae voluptatibus corrupti atque
                        repudiandae nam.
                    </p>
                </div>
                <div class="mt-5 sm:mt-0 sm:ml-6 sm:flex-shrink-0 sm:flex sm:items-center">
                    <span class="inline-flex rounded-md shadow-sm">
                        <button type="button"
                            class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
                            Change plan
                        </button>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <hr class="my-6 border-2 rounded-full border-gray-200">
    <div class="bg-white shadow sm:rounded-lg">
        <div class="px-4 py-5 sm:p-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                Update your email
            </h3>
            <div class="mt-2 max-w-xl text-sm leading-5 text-gray-500">
                <p>
                    Change the email address you want associated with your account.
                </p>
            </div>
            <div class="mt-5 sm:flex sm:items-center">
                <div class="max-w-xs w-full">
                    <label for="email" class="sr-only">Email</label>
                    <div class="relative rounded-md shadow-sm">
                        <input id="email" class="form-input block w-full sm:text-sm sm:leading-5"
                            placeholder="you@example.com" />
                    </div>
                </div>
                <span class="mt-3 w-ful inline-flex rounded-md shadow-sm sm:mt-0 sm:ml-3 sm:w-auto">
                    <button type="button"
                        class="w-full inline-flex items-center justify-center px-4 py-2 border border-transparent font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150 sm:w-auto sm:text-sm sm:leading-5">
                        Save
                    </button>
                </span>
            </div>
        </div>
    </div>
    <hr class="my-6 border-2 rounded-full border-gray-200">
    <div class="bg-white shadow sm:rounded-lg">
        <div class="px-4 py-5 sm:p-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                Continuous Integration
            </h3>
            <div class="mt-2 max-w-xl text-sm leading-5 text-gray-500">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, totam at reprehenderit maxime aut
                    beatae ad.
                </p>
            </div>
            <div class="mt-3 text-sm leading-5">
                <a href="#"
                    class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                    Learn more about our CI features &rarr;
                </a>
            </div>
        </div>
    </div>
    <hr class="my-6 border-2 rounded-full border-gray-200">
    <div class="bg-white shadow sm:rounded-lg">
        <div class="px-4 py-5 sm:p-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900" id="renew-headline">
                Renew subscription automatically
            </h3>
            <div class="mt-2 sm:flex sm:items-start sm:justify-between">
                <div class="max-w-xl text-sm leading-5 text-gray-500">
                    <p id="renew-description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo totam non cumque deserunt
                        officiis ex maiores nostrum.
                    </p>
                </div>
                <div class="mt-5 sm:mt-0 sm:ml-6 sm:flex-shrink-0 sm:flex sm:items-center">
                    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js" defer></script>

                    <span x-data="{ value: false, toggle() { this.value = !this.value } }"
                        :class="{ 'bg-gray-200': !value, 'bg-indigo-600': value }"
                        class="relative inline-block flex-no-shrink h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:shadow-outline"
                        role="checkbox" tabindex="0" @click="toggle()" @keydown.space.prevent="toggle()"
                        :aria-checked="value.toString()" aria-labelledby="renew-headline"
                        aria-describedby="renew-description">
                        <span aria-hidden="true" :class="{ 'translate-x-5': value, 'translate-x-0': !value }"
                            class="inline-block h-5 w-5 rounded-full bg-white shadow transform transition ease-in-out duration-200"></span>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <hr class="my-6 border-2 rounded-full border-gray-200">
    <div class="bg-white shadow sm:rounded-lg">
        <div class="px-4 py-5 sm:p-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                Payment method
            </h3>
            <div class="mt-5">
                <div class="rounded-md bg-gray-50 px-6 py-5 sm:flex sm:items-start sm:justify-between">
                    <div class="sm:flex sm:items-start">
                        <svg class="h-8 w-auto sm:flex-shrink-0 sm:h-6" fill="none" viewBox="0 0 36 24">
                            <rect width="36" height="24" fill="#224DBA" rx="4" />
                            <path fill="#fff" fill-rule="evenodd"
                                d="M10.925 15.673H8.874l-1.538-6c-.073-.276-.228-.52-.456-.635A6.575 6.575 0 005 8.403v-.231h3.304c.456 0 .798.347.855.75l.798 4.328 2.05-5.078h1.994l-3.076 7.5zm4.216 0h-1.937L14.8 8.172h1.937l-1.595 7.5zm4.101-5.422c.057-.404.399-.635.798-.635a3.54 3.54 0 011.88.346l.342-1.615A4.808 4.808 0 0020.496 8c-1.88 0-3.248 1.039-3.248 2.481 0 1.097.969 1.673 1.653 2.02.74.346 1.025.577.968.923 0 .519-.57.75-1.139.75a4.795 4.795 0 01-1.994-.462l-.342 1.616a5.48 5.48 0 002.108.404c2.108.057 3.418-.981 3.418-2.539 0-1.962-2.678-2.077-2.678-2.942zm9.457 5.422L27.16 8.172h-1.652a.858.858 0 00-.798.577l-2.848 6.924h1.994l.398-1.096h2.45l.228 1.096h1.766zm-2.905-5.482l.57 2.827h-1.596l1.026-2.827z"
                                clip-rule="evenodd" />
                        </svg>
                        <div class="mt-3 sm:mt-0 sm:ml-4">
                            <div class="text-sm leading-5 font-medium text-gray-900">
                                Ending with 4242
                            </div>
                            <div class="mt-1 text-sm leading-5 text-gray-600 sm:flex sm:items-center">
                                <div>
                                    Expires 12/20
                                </div>
                                <span class="hidden sm:mx-2 sm:inline">
                                    &middot;
                                </span>
                                <div class="mt-1 sm:mt-0">
                                    Last updated on 22 Aug 2017
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 sm:mt-0 sm:ml-6 sm:flex-shrink-0">
                        <span class="inline-flex rounded-md shadow-sm">
                            <button type="button"
                                class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm leading-5 font-medium rounded-md text-gray-700 bg-white hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150">
                                Edit
                            </button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="my-6 border-2 rounded-full border-gray-200">
</div>
@endsection
