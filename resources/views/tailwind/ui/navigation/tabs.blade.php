@extends('layouts.tailwind-ui')

@section('title', 'Tabs')

@section('content')
<div>
    <div class="sm:hidden">
        <select class="form-select block w-full">
            <option>My Account</option>
            <option>Company</option>
            <option selected>Team Members</option>
            <option>Billing</option>
        </select>
    </div>
    <div class="hidden sm:block">
        <div class="border-b border-gray-200">
            <nav class="-mb-px flex">
                <a href="#"
                    class="w-1/4 py-4 px-1 text-center border-b-2 border-transparent font-medium text-sm leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300">
                    My Account
                </a>
                <a href="#"
                    class="w-1/4 py-4 px-1 text-center border-b-2 border-transparent font-medium text-sm leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300">
                    Company
                </a>
                <a href="#"
                    class="w-1/4 py-4 px-1 text-center border-b-2 border-indigo-500 font-medium text-sm leading-5 text-indigo-600 focus:outline-none focus:text-indigo-800 focus:border-indigo-700">
                    Team Members
                </a>
                <a href="#"
                    class="w-1/4 py-4 px-1 text-center border-b-2 border-transparent font-medium text-sm leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300">
                    Billing
                </a>
            </nav>
        </div>
    </div>
</div>
<hr class="my-6 border-2 rounded-full border-gray-200">
<div>
    <div class="sm:hidden">
        <select class="form-select block w-full">
            <option>My Account</option>
            <option>Company</option>
            <option selected>Team Members</option>
            <option>Billing</option>
        </select>
    </div>
    <div class="hidden sm:block">
        <nav class="flex">
            <a href="#"
                class="px-3 py-2 font-medium text-sm leading-5 rounded-md text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 focus:bg-gray-200">
                My Account
            </a>
            <a href="#"
                class="ml-4 px-3 py-2 font-medium text-sm leading-5 rounded-md text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 focus:bg-gray-200">
                Company
            </a>
            <a href="#"
                class="ml-4 px-3 py-2 font-medium text-sm leading-5 rounded-md text-gray-800 bg-gray-200 focus:outline-none focus:bg-gray-300">
                Team Members
            </a>
            <a href="#"
                class="ml-4 px-3 py-2 font-medium text-sm leading-5 rounded-md text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 focus:bg-gray-200">
                Billing
            </a>
        </nav>
    </div>
</div>
<hr class="my-6 border-2 rounded-full border-gray-200">
<div>
    <div class="sm:hidden">
        <select class="form-select block w-full">
            <option>My Account</option>
            <option>Company</option>
            <option selected>Team Members</option>
            <option>Billing</option>
        </select>
    </div>
    <div class="hidden sm:block">
        <nav class="flex">
            <a href="#"
                class="px-3 py-2 font-medium text-sm leading-5 rounded-md text-gray-500 hover:text-gray-700 focus:outline-none focus:text-indigo-600 focus:bg-indigo-50">
                My Account
            </a>
            <a href="#"
                class="ml-4 px-3 py-2 font-medium text-sm leading-5 rounded-md text-gray-500 hover:text-gray-700 focus:outline-none focus:text-indigo-600 focus:bg-indigo-50">
                Company
            </a>
            <a href="#"
                class="ml-4 px-3 py-2 font-medium text-sm leading-5 rounded-md text-indigo-700 bg-indigo-100 focus:outline-none focus:text-indigo-800 focus:bg-indigo-200">
                Team Members
            </a>
            <a href="#"
                class="ml-4 px-3 py-2 font-medium text-sm leading-5 rounded-md text-gray-500 hover:text-gray-700 focus:outline-none focus:text-indigo-600 focus:bg-indigo-50">
                Billing
            </a>
        </nav>
    </div>
</div>
<hr class="my-6 border-2 rounded-full border-gray-200">
<div>
    <div class="sm:hidden">
        <select class="form-select block w-full">
            <option>My Account</option>
            <option>Company</option>
            <option selected>Team Members</option>
            <option>Billing</option>
        </select>
    </div>
    <div class="hidden sm:block">
        <nav class="flex">
            <a href="#"
                class="px-3 py-2 font-medium text-sm leading-5 rounded-md text-gray-500 hover:text-gray-700 focus:outline-none focus:text-gray-700 focus:bg-gray-100">
                My Account
            </a>
            <a href="#"
                class="ml-4 px-3 py-2 font-medium text-sm leading-5 rounded-md text-gray-500 hover:text-gray-700 focus:outline-none focus:text-gray-700 focus:bg-gray-100">
                Company
            </a>
            <a href="#"
                class="ml-4 px-3 py-2 font-medium text-sm leading-5 rounded-md text-gray-700 bg-gray-100 focus:outline-none focus:bg-gray-200">
                Team Members
            </a>
            <a href="#"
                class="ml-4 px-3 py-2 font-medium text-sm leading-5 rounded-md text-gray-500 hover:text-gray-700 focus:outline-none focus:text-gray-700 focus:bg-gray-100">
                Billing
            </a>
        </nav>
    </div>
</div>
<hr class="my-6 border-2 rounded-full border-gray-200">
<div>
    <div class="sm:hidden">
        <select class="form-select block w-full">
            <option>My Account</option>
            <option>Company</option>
            <option selected>Team Members</option>
            <option>Billing</option>
        </select>
    </div>
    <div class="hidden sm:block">
        <div class="border-b border-gray-200">
            <nav class="flex -mb-px">
                <a href="#"
                    class="group inline-flex items-center py-4 px-1 border-b-2 border-transparent font-medium text-sm leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300">
                    <svg class="-ml-0.5 mr-2 h-5 w-5 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-600"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                            clip-rule="evenodd" />
                    </svg>
                    <span>My Account</span>
                </a>
                <a href="#"
                    class="ml-8 group inline-flex items-center py-4 px-1 border-b-2 border-transparent font-medium text-sm leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300">
                    <svg class="-ml-0.5 mr-2 h-5 w-5 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-600"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z"
                            clip-rule="evenodd" />
                    </svg>
                    <span>Company</span>
                </a>
                <a href="#"
                    class="ml-8 group inline-flex items-center py-4 px-1 border-b-2 border-indigo-500 font-medium text-sm leading-5 text-indigo-600 focus:outline-none focus:text-indigo-800 focus:border-indigo-700">
                    <svg class="-ml-0.5 mr-2 h-5 w-5 text-indigo-500 group-focus:text-indigo-600" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path
                            d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                    </svg>
                    <span>Team Members</span>
                </a>
                <a href="#"
                    class="ml-8 group inline-flex items-center py-4 px-1 border-b-2 border-transparent font-medium text-sm leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300">
                    <svg class="-ml-0.5 mr-2 h-5 w-5 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-600"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4zm14 5H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z"
                            clip-rule="evenodd" />
                    </svg>
                    <span>Billing</span>
                </a>
            </nav>
        </div>
    </div>
</div>
<hr class="my-6 border-2 rounded-full border-gray-200">
<div>
    <div class="sm:hidden">
        <select aria-label="Selected tab"
            class="mt-1 form-select block w-full pl-3 pr-10 py-2 text-base leading-6 border-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5 transition ease-in-out duration-150">
            <option>My Account</option>
            <option>Company</option>
            <option selected>Team Members</option>
            <option>Billing</option>
        </select>
    </div>
    <div class="hidden sm:block">
        <div class="border-b border-gray-200">
            <nav class="-mb-px flex">
                <a href="#"
                    class="whitespace-no-wrap py-4 px-1 border-b-2 border-transparent font-medium text-sm leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300">
                    My Account
                </a>
                <a href="#"
                    class="whitespace-no-wrap ml-8 py-4 px-1 border-b-2 border-transparent font-medium text-sm leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300">
                    Company
                </a>
                <a href="#"
                    class="whitespace-no-wrap ml-8 py-4 px-1 border-b-2 border-indigo-500 font-medium text-sm leading-5 text-indigo-600 focus:outline-none focus:text-indigo-800 focus:border-indigo-700">
                    Team Members
                </a>
                <a href="#"
                    class="whitespace-no-wrap ml-8 py-4 px-1 border-b-2 border-transparent font-medium text-sm leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300">
                    Billing
                </a>
            </nav>
        </div>
    </div>
</div>
<hr class="my-6 border-2 rounded-full border-gray-200">
@endsection
