@extends('layouts.tailwind-ui')

@section('title', 'Input Groups')

@section('content')
<div class="p-6">
    <div class="w-64 mx-auto">
        <label for="company_website" class="block text-sm font-medium leading-5 text-gray-700">
            Company Website
        </label>
        <div class="mt-1 flex rounded-md shadow-sm">
            <span
                class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
                http://
            </span>
            <input id="company_website"
                class="form-input flex-1 block w-full px-3 py-2 rounded-none rounded-r-md sm:text-sm sm:leading-5"
                placeholder="www.example.com" />
        </div>
    </div>
    <hr class="my-6 border-2 rounded-full border-gray-200">
    <div class="w-64 mx-auto">
        <div class="flex justify-between">
            <label for="email" class="block text-sm font-medium leading-5 text-gray-700">Email</label>
            <span class="text-sm leading-5 text-gray-500">Optional</span>
        </div>
        <div class="mt-1 relative rounded-md shadow-sm">
            <input id="email" class="form-input block w-full sm:text-sm sm:leading-5" placeholder="you@example.com" />
        </div>
    </div>
    <hr class="my-6 border-2 rounded-full border-gray-200">
    <div class="w-64 mx-auto">
        <label for="email" class="sr-only">Email</label>
        <div class="relative rounded-md shadow-sm">
            <input id="email" class="form-input block w-full sm:text-sm sm:leading-5" placeholder="you@example.com" />
        </div>
    </div>
    <hr class="my-6 border-2 rounded-full border-gray-200">
    <div class="w-64 mx-auto">
        <label for="company_website" class="block text-sm font-medium leading-5 text-gray-700">Company Website</label>
        <div class="mt-1 relative rounded-md shadow-sm">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <span class="text-gray-500 sm:text-sm sm:leading-5">
                    http://
                </span>
            </div>
            <input id="company_website" class="form-input block w-full pl-16 sm:pl-14 sm:text-sm sm:leading-5"
                placeholder="www.example.com" />
        </div>
    </div>
    <hr class="my-6 border-2 rounded-full border-gray-200">
    <div class="w-64 mx-auto">
        <label for="price" class="block text-sm leading-5 font-medium text-gray-700">Price</label>
        <div class="mt-1 relative rounded-md shadow-sm">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <span class="text-gray-500 sm:text-sm sm:leading-5">
                    $
                </span>
            </div>
            <input id="price" class="form-input block w-full pl-7 pr-12 sm:text-sm sm:leading-5" placeholder="0.00" />
            <div class="absolute inset-y-0 right-0 flex items-center">
                <select aria-label="Currency"
                    class="form-select h-full py-0 pl-2 pr-7 border-transparent bg-transparent text-gray-500 sm:text-sm sm:leading-5">
                    <option>USD</option>
                    <option>CAD</option>
                    <option>EUR</option>
                </select>
            </div>
        </div>
    </div>
    <hr class="my-6 border-2 rounded-full border-gray-200">
    <div class="w-64 mx-auto">
        <label for="price" class="block text-sm font-medium leading-5 text-gray-700">Price</label>
        <div class="mt-1 relative rounded-md shadow-sm">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <span class="text-gray-500 sm:text-sm sm:leading-5">
                    $
                </span>
            </div>
            <input id="price" class="form-input block w-full pl-7 pr-12 sm:text-sm sm:leading-5" placeholder="0.00" />
            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                <span class="text-gray-500 sm:text-sm sm:leading-5">
                    USD
                </span>
            </div>
        </div>
    </div>
    <hr class="my-6 border-2 rounded-full border-gray-200">
    <div class="w-64 mx-auto">
        <label for="phone_number" class="block text-sm font-medium leading-5 text-gray-700">Phone Number</label>
        <div class="mt-1 relative rounded-md shadow-sm">
            <div class="absolute inset-y-0 left-0 flex items-center">
                <select aria-label="Country"
                    class="form-select h-full py-0 pl-3 pr-7 border-transparent bg-transparent text-gray-500 sm:text-sm sm:leading-5">
                    <option>US</option>
                    <option>CA</option>
                    <option>EU</option>
                </select>
            </div>
            <input id="phone_number" class="form-input block w-full pl-16 sm:text-sm sm:leading-5"
                placeholder="+1 (555) 987-6543" />
        </div>
    </div>
    <hr class="my-6 border-2 rounded-full border-gray-200">
    <div class="w-64 mx-auto">
        <label for="email" class="block text-sm font-medium leading-5 text-gray-700">Email</label>
        <div class="mt-1 relative rounded-md shadow-sm">
            <input id="email" class="form-input block w-full sm:text-sm sm:leading-5" placeholder="you@example.com" />
        </div>
        <p class="mt-2 text-sm text-gray-500">Make your password short and easy to guess.</p>
    </div>

    <hr class="my-6 border-2 rounded-full border-gray-200">
    <div class="w-64 mx-auto">
        <label for="email" class="block text-sm font-medium leading-5 text-gray-700">Email</label>
        <div class="mt-1 relative rounded-md shadow-sm">
            <input id="email" class="form-input block w-full sm:text-sm sm:leading-5" placeholder="you@example.com" />
        </div>
    </div>
    <hr class="my-6 border-2 rounded-full border-gray-200">
    <div class="w-64 mx-auto">
        <label for="email" class="block text-sm font-medium leading-5 text-gray-700">Search candidates</label>
        <div class="mt-1 flex rounded-md shadow-sm">
            <div class="relative flex-grow focus-within:z-10">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                    </svg>
                </div>
                <input id="email"
                    class="form-input block w-full rounded-none rounded-l-md pl-10 transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                    placeholder="John Doe" />
            </div>
            <button
                class="-ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm leading-5 font-medium rounded-r-md text-gray-700 bg-gray-50 hover:text-gray-500 hover:bg-white focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M3 3a1 1 0 000 2h11a1 1 0 100-2H3zm0 4a1 1 0 000 2h5a1 1 0 000-2H3zm0 4a1 1 0 100 2h4a1 1 0 100-2H3zm10 5a1 1 0 102 0v-5.586l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 101.414 1.414L13 10.414V16z"
                        clip-rule="evenodd" />
                </svg>
                <span class="ml-2">Sort</span>
            </button>
        </div>
    </div>
    <hr class="my-6 border-2 rounded-full border-gray-200">
    <div class="w-64 mx-auto">
        <label for="email" class="block text-sm font-medium leading-5 text-gray-700">Email</label>
        <div class="mt-1 relative rounded-md shadow-sm">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884zM18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"
                        clip-rule="evenodd" />
                </svg>
            </div>
            <input id="email" class="form-input block w-full pl-10 sm:text-sm sm:leading-5"
                placeholder="you@example.com" />
        </div>
    </div>
    <hr class="my-6 border-2 rounded-full border-gray-200">
    <div class="w-64 mx-auto">
        <label for="account_number" class="block text-sm font-medium leading-5 text-gray-700">Account number</label>
        <div class="mt-1 relative rounded-md shadow-sm">
            <input id="account_number" class="form-input block w-full pr-10 sm:text-sm sm:leading-5"
                placeholder="000-00-0000" />
            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                        clip-rule="evenodd" />
                </svg>
            </div>
        </div>
    </div>
    <hr class="my-6 border-2 rounded-full border-gray-200">
    <div class="w-64 mx-auto">
        <label for="email" class="block text-sm font-medium leading-5 text-gray-700">Email</label>
        <div class="mt-1 relative rounded-md shadow-sm">
            <input id="email"
                class="form-input block w-full pr-10 border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red sm:text-sm sm:leading-5"
                placeholder="you@example.com" value="adamwathan" />
            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                        clip-rule="evenodd" />
                </svg>
            </div>
        </div>
        <p class="mt-2 text-sm text-red-600">Your password must be less than 4 characters.</p>
    </div>
    <hr class="my-6 border-2 rounded-full border-gray-200">
    <div class="w-64 mx-auto">
        <div>
            <fieldset>
                <legend class="block text-sm font-medium leading-5 text-gray-700">Card Details</legend>
                <div class="mt-1 bg-white rounded-md shadow-sm">
                    <div>
                        <input aria-label="Card number"
                            class="form-input relative block w-full rounded-none rounded-t-md bg-transparent focus:z-10 transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                            placeholder="Card number" />
                    </div>
                    <div class="-mt-px flex">
                        <div class="w-1/2 flex-1 min-w-0">
                            <input aria-label="Card expiration date"
                                class="form-input relative block w-full rounded-none rounded-bl-md bg-transparent focus:z-10 transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                                placeholder="MM / YY" />
                        </div>
                        <div class="-ml-px flex-1 min-w-0">
                            <input aria-label="Card CVC"
                                class="form-input relative block w-full rounded-none rounded-br-md bg-transparent focus:z-10 transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                                placeholder="CVC" />
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>
        <div class="mt-6 bg-white">
            <fieldset>
                <legend class="block text-sm font-medium leading-5 text-gray-700">Billing address</legend>
                <div class="mt-1 rounded-md shadow-sm">
                    <div>
                        <select aria-label="Country"
                            class="form-select relative block w-full rounded-none rounded-t-md bg-transparent focus:z-10 transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                            <option>USA</option>
                            <option>Canada</option>
                        </select>
                    </div>
                    <div class="-mt-px">
                        <input aria-label="Postal code"
                            class="form-input relative block w-full rounded-none rounded-b-md bg-transparent focus:z-10 transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                            placeholder="Postal code" />
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
    <hr class="my-6 border-2 rounded-full border-gray-200">
</div>
@endsection
