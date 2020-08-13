@extends('layouts.tailwind-ui')

@section('title', 'Contact Sections')

@section('content')
<div class="bg-white py-16 px-4 overflow-hidden sm:px-6 lg:px-8 lg:py-24">
    <div class="relative max-w-xl mx-auto">
        <svg class="absolute left-full transform translate-x-1/2" width="404" height="404" fill="none"
            viewBox="0 0 404 404">
            <defs>
                <pattern id="85737c0e-0916-41d7-917f-596dc7edfa27" x="0" y="0" width="20" height="20"
                    patternUnits="userSpaceOnUse">
                    <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                </pattern>
            </defs>
            <rect width="404" height="404" fill="url(#85737c0e-0916-41d7-917f-596dc7edfa27)" />
        </svg>
        <svg class="absolute right-full bottom-0 transform -translate-x-1/2" width="404" height="404" fill="none"
            viewBox="0 0 404 404">
            <defs>
                <pattern id="85737c0e-0916-41d7-917f-596dc7edfa27" x="0" y="0" width="20" height="20"
                    patternUnits="userSpaceOnUse">
                    <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                </pattern>
            </defs>
            <rect width="404" height="404" fill="url(#85737c0e-0916-41d7-917f-596dc7edfa27)" />
        </svg>
        <div class="text-center">
            <h2 class="text-3xl leading-9 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
                Contact sales
            </h2>
            <p class="mt-4 text-lg leading-6 text-gray-500">
                Nullam risus blandit ac aliquam justo ipsum. Quam mauris volutpat massa dictumst amet. Sapien tortor
                lacus arcu.
            </p>
        </div>
        <div class="mt-12">
            <form action="#" method="POST" class="grid grid-cols-1 row-gap-6 sm:grid-cols-2 sm:col-gap-8">
                <div>
                    <label for="first_name" class="block text-sm font-medium leading-5 text-gray-700">First name</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <input id="first_name"
                            class="form-input py-3 px-4 block w-full transition ease-in-out duration-150" />
                    </div>
                </div>
                <div>
                    <label for="last_name" class="block text-sm font-medium leading-5 text-gray-700">Last name</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <input id="last_name"
                            class="form-input py-3 px-4 block w-full transition ease-in-out duration-150" />
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="company" class="block text-sm font-medium leading-5 text-gray-700">Company</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <input id="company"
                            class="form-input py-3 px-4 block w-full transition ease-in-out duration-150" />
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="email" class="block text-sm font-medium leading-5 text-gray-700">Email</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <input id="email" type="email"
                            class="form-input py-3 px-4 block w-full transition ease-in-out duration-150" />
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="phone_number" class="block text-sm font-medium leading-5 text-gray-700">Phone
                        Number</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 flex items-center">
                            <select aria-label="Country"
                                class="form-select h-full py-0 pl-4 pr-8 border-transparent bg-transparent text-gray-500 transition ease-in-out duration-150">
                                <option>US</option>
                                <option>CA</option>
                                <option>EU</option>
                            </select>
                        </div>
                        <input id="phone_number"
                            class="form-input py-3 px-4 block w-full pl-20 transition ease-in-out duration-150"
                            placeholder="+1 (555) 987-6543" />
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="message" class="block text-sm font-medium leading-5 text-gray-700">Message</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <textarea id="message" rows="4"
                            class="form-textarea py-3 px-4 block w-full transition ease-in-out duration-150"></textarea>
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <span x-data="{ value: false, toggle() { this.value = !this.value } }"
                                :class="{ 'bg-gray-200': !value, 'bg-indigo-600': value }"
                                class="relative inline-block flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition ease-in-out duration-200 focus:outline-none focus:shadow-outline"
                                role="checkbox" tabindex="0" @click="toggle()" @keydown.space.prevent="toggle()"
                                :aria-checked="value.toString()">
                                <span aria-hidden="true" :class="{ 'translate-x-5': value, 'translate-x-0': !value }"
                                    class="inline-block h-5 w-5 rounded-full bg-white shadow transform transition ease-in-out duration-200"></span>
                            </span>
                        </div>
                        <div class="ml-3">
                            <p class="text-base leading-6 text-gray-500">
                                By selecting this, you agree to the
                                <a href="#" class="font-medium text-gray-700 underline">Privacy Policy</a>
                                and
                                <a href="#" class="font-medium text-gray-700 underline">Cookie Policy</a>.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <span class="w-full inline-flex rounded-md shadow-sm">
                        <button type="button"
                            class="w-full inline-flex items-center justify-center px-6 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
                            Let's talk
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>
<hr class="my-6 border-2 rounded-full border-gray-200">
<div class="bg-white">
    <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-24 lg:px-8">
        <div class="grid grid-cols-1 gap-16">
            <div class="lg:grid lg:grid-cols-3 lg:gap-8">
                <h2 class="text-2xl leading-8 font-extrabold text-gray-900 sm:text-3xl sm:leading-9">
                    Get in touch
                </h2>
                <div
                    class="mt-8 grid grid-cols-1 gap-12 sm:grid-cols-2 sm:col-gap-8 sm:row-gap-12 lg:mt-0 lg:col-span-2">
                    <div>
                        <h4 class="text-lg leading-6 font-medium text-gray-900">
                            Collaborate
                        </h4>
                        <dl class="mt-2 text-base leading-6 text-gray-500">
                            <div>
                                <dt class="sr-only">
                                    Email
                                </dt>
                                <dl>
                                    support@example.com
                                </dl>
                            </div>
                            <div class="mt-1">
                                <dt class="sr-only">
                                    Phone number
                                </dt>
                                <dl>
                                    +1 (555) 123-4567
                                </dl>
                            </div>
                        </dl>
                    </div>
                    <div>
                        <h4 class="text-lg leading-6 font-medium text-gray-900">
                            Press
                        </h4>
                        <dl class="mt-2 text-base leading-6 text-gray-500">
                            <div>
                                <dt class="sr-only">
                                    Email
                                </dt>
                                <dl>
                                    support@example.com
                                </dl>
                            </div>
                            <div class="mt-1">
                                <dt class="sr-only">
                                    Phone number
                                </dt>
                                <dl>
                                    +1 (555) 123-4567
                                </dl>
                            </div>
                        </dl>
                    </div>
                    <div>
                        <h4 class="text-lg leading-6 font-medium text-gray-900">
                            Join our team
                        </h4>
                        <dl class="mt-2 text-base leading-6 text-gray-500">
                            <div>
                                <dt class="sr-only">
                                    Email
                                </dt>
                                <dl>
                                    support@example.com
                                </dl>
                            </div>
                            <div class="mt-1">
                                <dt class="sr-only">
                                    Phone number
                                </dt>
                                <dl>
                                    +1 (555) 123-4567
                                </dl>
                            </div>
                        </dl>
                    </div>
                    <div>
                        <h4 class="text-lg leading-6 font-medium text-gray-900">
                            Say hello
                        </h4>
                        <dl class="mt-2 text-base leading-6 text-gray-500">
                            <div>
                                <dt class="sr-only">
                                    Email
                                </dt>
                                <dl>
                                    support@example.com
                                </dl>
                            </div>
                            <div class="mt-1">
                                <dt class="sr-only">
                                    Phone number
                                </dt>
                                <dl>
                                    +1 (555) 123-4567
                                </dl>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="border-t-2 border-gray-100"></div>
            <div class="lg:grid lg:grid-cols-3 lg:gap-8">
                <h2 class="text-2xl leading-8 font-extrabold text-gray-900 sm:text-3xl sm:leading-9">
                    Locations
                </h2>
                <div
                    class="mt-8 grid grid-cols-1 gap-12 sm:grid-cols-2 sm:col-gap-8 sm:row-gap-12 lg:mt-0 lg:col-span-2">
                    <div>
                        <h4 class="text-lg leading-6 font-medium text-gray-900">
                            Los Angeles
                        </h4>
                        <div class="mt-2 text-base leading-6 text-gray-500">
                            <p>
                                4556 Brendan Ferry
                            </p>
                            <p class="mt-1">
                                Los Angeles, CA 90210
                            </p>
                        </div>
                    </div>
                    <div>
                        <h4 class="text-lg leading-6 font-medium text-gray-900">
                            New York
                        </h4>
                        <div class="mt-2 text-base leading-6 text-gray-500">
                            <p>
                                886 Walter Streets
                            </p>
                            <p class="mt-1">
                                New York, NY 12345
                            </p>
                        </div>
                    </div>
                    <div>
                        <h4 class="text-lg leading-6 font-medium text-gray-900">
                            Toronto
                        </h4>
                        <div class="mt-2 text-base leading-6 text-gray-500">
                            <p>
                                7363 Cynthia Pass
                            </p>
                            <p class="mt-1">
                                Toronto, ON N3Y 4H8
                            </p>
                        </div>
                    </div>
                    <div>
                        <h4 class="text-lg leading-6 font-medium text-gray-900">
                            Chicago
                        </h4>
                        <div class="mt-2 text-base leading-6 text-gray-500">
                            <p>
                                726 Mavis Island
                            </p>
                            <p class="mt-1">
                                Chicago, IL 60601
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr class="my-6 border-2 rounded-full border-gray-200">
<div class="bg-white">
    <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
        <div class="max-w-lg mx-auto md:max-w-none md:grid md:grid-cols-2 md:gap-8">
            <div>
                <h2 class="text-2xl leading-8 font-extrabold text-gray-900 sm:text-3xl sm:leading-9">
                    Sales Support
                </h2>
                <div class="mt-3">
                    <p class="text-lg leading-7 text-gray-500">
                        Nullam risus blandit ac aliquam justo ipsum. Quam mauris volutpat massa dictumst amet. Sapien
                        tortor lacus arcu.
                    </p>
                </div>
                <div class="mt-9">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-6 w-6 text-gray-400" fill="none" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                                <path
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                        <div class="ml-3 text-base leading-6 text-gray-500">
                            <p>
                                +1 (555) 123 4567
                            </p>
                            <p class="mt-1">
                                Mon-Fri 8am to 6pm PST
                            </p>
                        </div>
                    </div>
                    <div class="mt-6 flex">
                        <div class="flex-shrink-0">
                            <svg class="h-6 w-6 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div class="ml-3 text-base leading-6 text-gray-500">
                            <p>
                                support@example.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-12 sm:mt-16 md:mt-0">
                <h2 class="text-2xl leading-8 font-extrabold text-gray-900 sm:text-3xl sm:leading-9">
                    Technical Support
                </h2>
                <div class="mt-3">
                    <p class="text-lg leading-7 text-gray-500">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni, repellat error corporis
                        doloribus similique, voluptatibus numquam quam, quae officiis facilis.
                    </p>
                </div>
                <div class="mt-9">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-6 w-6 text-gray-400" fill="none" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                                <path
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                        <div class="ml-3 text-base leading-6 text-gray-500">
                            <p>
                                +1 (555) 123 4567
                            </p>
                            <p class="mt-1">
                                Mon-Fri 8am to 6pm PST
                            </p>
                        </div>
                    </div>
                    <div class="mt-6 flex">
                        <div class="flex-shrink-0">
                            <svg class="h-6 w-6 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div class="ml-3 text-base leading-6 text-gray-500">
                            <p>
                                support@example.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr class="my-6 border-2 rounded-full border-gray-200">
<div class="relative bg-white">
    <div class="absolute inset-0">
        <div class="absolute inset-y-0 left-0 w-1/2 bg-gray-50"></div>
    </div>
    <div class="relative max-w-7xl mx-auto lg:grid lg:grid-cols-5">
        <div class="bg-gray-50 py-16 px-4 sm:px-6 lg:col-span-2 lg:px-8 lg:py-24 xl:pr-12">
            <div class="max-w-lg mx-auto">
                <h2 class="text-2xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-3xl sm:leading-9">
                    Get in touch
                </h2>
                <p class="mt-3 text-lg leading-6 text-gray-500">
                    Nullam risus blandit ac aliquam justo ipsum. Quam mauris volutpat massa dictumst amet. Sapien tortor
                    lacus arcu.
                </p>
                <dl class="mt-8 text-base leading-6 text-gray-500">
                    <div>
                        <dt class="sr-only">Postal address</dt>
                        <dd>
                            <p>742 Evergreen Terrace</p>
                            <p>Springfield, OR 12345</p>
                        </dd>
                    </div>
                    <div class="mt-6">
                        <dt class="sr-only">Phone number</dt>
                        <dd class="flex">
                            <svg class="flex-shrink-0 h-6 w-6 text-gray-400" fill="none" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                                <path
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <span class="ml-3">
                                +1 (555) 123-4567
                            </span>
                        </dd>
                    </div>
                    <div class="mt-3">
                        <dt class="sr-only">Email</dt>
                        <dd class="flex">
                            <svg class="flex-shrink-0 h-6 w-6 text-gray-400" stroke="currentColor" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span class="ml-3">
                                support@example.com
                            </span>
                        </dd>
                    </div>
                </dl>
                <p class="mt-6 text-base leading-6 text-gray-500">
                    Looking for careers?
                    <a href="#" class="font-medium text-gray-700 underline">View all job openings</a>.
                </p>
            </div>
        </div>
        <div class="bg-white py-16 px-4 sm:px-6 lg:col-span-3 lg:py-24 lg:px-8 xl:pl-12">
            <div class="max-w-lg mx-auto lg:max-w-none">
                <form action="#" method="POST" class="grid grid-cols-1 row-gap-6">
                    <div>
                        <label for="full_name" class="sr-only">Full name</label>
                        <div class="relative rounded-md shadow-sm">
                            <input id="full_name"
                                class="form-input block w-full py-3 px-4 placeholder-gray-500 transition ease-in-out duration-150"
                                placeholder="Full name" />
                        </div>
                    </div>
                    <div>
                        <label for="email" class="sr-only">Email</label>
                        <div class="relative rounded-md shadow-sm">
                            <input id="email" type="email"
                                class="form-input block w-full py-3 px-4 placeholder-gray-500 transition ease-in-out duration-150"
                                placeholder="Email" />
                        </div>
                    </div>
                    <div>
                        <label for="phone" class="sr-only">Phone</label>
                        <div class="relative rounded-md shadow-sm">
                            <input id="phone"
                                class="form-input block w-full py-3 px-4 placeholder-gray-500 transition ease-in-out duration-150"
                                placeholder="Phone" />
                        </div>
                    </div>
                    <div>
                        <label for="message" class="sr-only">Message</label>
                        <div class="relative rounded-md shadow-sm">
                            <textarea id="message" rows="4"
                                class="form-input block w-full py-3 px-4 placeholder-gray-500 transition ease-in-out duration-150"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="">
                        <span class="inline-flex rounded-md shadow-sm">
                            <button type="submit"
                                class="inline-flex justify-center py-3 px-6 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                                Submit
                            </button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<hr class="my-6 border-2 rounded-full border-gray-200">
<div class="relative bg-white">
    <div class="lg:absolute lg:inset-0">
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="h-56 w-full object-cover lg:absolute lg:h-full"
                src="https://images.unsplash.com/photo-1556761175-4b46a572b786?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1567&q=80"
                alt="" />
        </div>
    </div>
    <div class="relative pt-12 pb-16 px-4 sm:pt-16 sm:px-6 lg:px-8 lg:max-w-7xl lg:mx-auto lg:grid lg:grid-cols-2">
        <div class="lg:pr-8">
            <div class="max-w-md mx-auto sm:max-w-lg lg:mx-0">
                <h2 class="text-3xl leading-9 font-extrabold tracking-tight sm:text-4xl sm:leading-10">
                    Let's work together
                </h2>
                <p class="mt-4 text-lg leading-7 text-gray-500 sm:mt-3">
                    We’d love to hear from you! Send us a message using the form opposite, or email us. We’d love to
                    hear from you! Send us a message using the form opposite, or email us.
                </p>
                <form action="#" method="POST" class="mt-9 grid grid-cols-1 row-gap-6 sm:grid-cols-2 sm:col-gap-8">
                    <div>
                        <label for="first_name" class="block text-sm font-medium leading-5 text-gray-700">First
                            name</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input id="first_name"
                                class="form-input block w-full transition ease-in-out duration-150 sm:text-sm sm:leading-5" />
                        </div>
                    </div>
                    <div>
                        <label for="last_name" class="block text-sm font-medium leading-5 text-gray-700">Last
                            name</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input id="last_name"
                                class="form-input block w-full transition ease-in-out duration-150 sm:text-sm sm:leading-5" />
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="email" class="block text-sm font-medium leading-5 text-gray-700">Email</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input id="email" type="email"
                                class="form-input block w-full transition ease-in-out duration-150 sm:text-sm sm:leading-5" />
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="company" class="block text-sm font-medium leading-5 text-gray-700">Company</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input id="company"
                                class="form-input block w-full transition ease-in-out duration-150 sm:text-sm sm:leading-5" />
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <div class="flex justify-between">
                            <label for="phone" class="block text-sm font-medium leading-5 text-gray-700">Phone</label>
                            <span class="text-sm leading-5 text-gray-500">Optional</span>
                        </div>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input id="phone"
                                class="form-input block w-full transition ease-in-out duration-150 sm:text-sm sm:leading-5" />
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <div class="flex justify-between">
                            <label for="how_can_we_help" class="block text-sm font-medium leading-5 text-gray-700">How
                                can we help you?</label>
                            <span class="text-sm leading-5 text-gray-500">Max. 500 characters</span>
                        </div>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <textarea id="how_can_we_help" rows="4"
                                class="form-textarea block w-full transition ease-in-out duration-150 sm:text-sm sm:leading-5"></textarea>
                        </div>
                    </div>
                    <fieldset class="sm:col-span-2">
                        <legend class="block text-sm font-medium leading-5 text-gray-700">
                            Expected budget
                        </legend>
                        <div class="mt-4 grid grid-cols-1 row-gap-4">
                            <div class="flex items-center">
                                <input id="budget_under_25k" name="budget" value="under_25k" type="radio"
                                    class="form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" />
                                <label for="budget_under_25k" class="ml-3">
                                    <span class="block text-sm leading-5 text-gray-700">Less than $25K</span>
                                </label>
                            </div>
                            <div class="flex items-center">
                                <input id="budget_25k-50k" name="budget" value="25k-50k" type="radio"
                                    class="form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" />
                                <label for="budget_25k-50k" class="ml-3">
                                    <span class="block text-sm leading-5 text-gray-700">$25K – $50K</span>
                                </label>
                            </div>
                            <div class="flex items-center">
                                <input id="budget_50k-100k" name="budget" value="50k-100k" type="radio"
                                    class="form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" />
                                <label for="budget_50k-100k" class="ml-3">
                                    <span class="block text-sm leading-5 text-gray-700">$50K – $100K</span>
                                </label>
                            </div>
                            <div class="flex items-center">
                                <input id="budget_over_100k" name="budget" value="over_100k" type="radio"
                                    class="form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" />
                                <label for="budget_over_100k" class="ml-3">
                                    <span class="block text-sm leading-5 text-gray-700">$100K+</span>
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <div class="sm:col-span-2">
                        <label for="how_did_you_hear_about_us"
                            class="block text-sm font-medium leading-5 text-gray-700">How did you hear about us?</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input id="how_did_you_hear_about_us"
                                class="form-input block w-full transition ease-in-out duration-150 sm:text-sm sm:leading-5" />
                        </div>
                    </div>
                    <div class="text-right sm:col-span-2">
                        <span class="inline-flex rounded-md shadow-sm">
                            <button type="submit"
                                class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                                Submit
                            </button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<hr class="my-6 border-2 rounded-full border-gray-200">
@endsection
