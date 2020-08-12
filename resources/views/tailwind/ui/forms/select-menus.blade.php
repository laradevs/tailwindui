@extends('layouts.tailwind-ui')

@section('title', 'Select Menus')

@section('content')
<div class="p-6">
    <div class="space-y-1 w-64 mx-auto">
        <label id="listbox-label" class="block text-sm leading-5 font-medium text-gray-700">
            Assigned to
        </label>
        <div class="relative">
            <span class="inline-block w-full rounded-md shadow-sm">
                <button type="button" aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label"
                    class="cursor-default relative w-full rounded-md border border-gray-300 bg-white pl-3 pr-10 py-2 text-left focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                    <div class="flex items-center space-x-3">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="" class="flex-shrink-0 h-6 w-6 rounded-full" />
                        <span class="block truncate">
                            Tom Cook
                        </span>
                    </div>
                    <span class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="none" stroke="currentColor">
                            <path d="M7 7l3-3 3 3m0 6l-3 3-3-3" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </span>
                </button>
            </span>

            <!-- Select popover, show/hide based on select state. -->
            <div class="absolute mt-1 w-full rounded-md bg-white shadow-lg">
                <ul tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-item-3"
                    class="max-h-56 rounded-md py-1 text-base leading-6 shadow-xs overflow-auto focus:outline-none sm:text-sm sm:leading-5">

                    <!--
                Select option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation.

                Highlighted: "text-white bg-indigo-600", Not Highlighted: "text-gray-900"
              -->
                    <li id="listbox-item-0" role="option"
                        class="text-gray-900 cursor-default select-none relative py-2 pl-3 pr-9">
                        <div class="flex items-center space-x-3">
                            <img src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                alt="" class="flex-shrink-0 h-6 w-6 rounded-full" />
                            <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
                            <span class="font-normal block truncate">
                                Wade Cooper
                            </span>
                        </div>

                        <!--
                  Checkmark, only display for selected option.

                  Highlighted: "text-white", Not Highlighted: "text-indigo-600"
                -->
                        <span class="absolute inset-y-0 right-0 flex items-center pr-4">
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </li>

                    <!-- More options... -->
                </ul>
            </div>
        </div>
    </div>
    <hr class="mt-16 mb-6 border-2 rounded-full border-gray-200">
    <div class="space-y-1 w-64 mx-auto">
        <label id="listbox-label" class="block text-sm leading-5 font-medium text-gray-700">
            Assigned to
        </label>
        <div class="relative">
            <span class="inline-block w-full rounded-md shadow-sm">
                <button type="button" aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label"
                    class="cursor-default relative w-full rounded-md border border-gray-300 bg-white pl-3 pr-10 py-2 text-left focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                    <span class="block truncate">
                        Tom Cook
                    </span>
                    <span class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="none" stroke="currentColor">
                            <path d="M7 7l3-3 3 3m0 6l-3 3-3-3" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </span>
                </button>
            </span>

            <!-- Select popover, show/hide based on select state. -->
            <div class="absolute mt-1 w-full rounded-md bg-white shadow-lg">
                <ul tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-item-3"
                    class="max-h-60 rounded-md py-1 text-base leading-6 shadow-xs overflow-auto focus:outline-none sm:text-sm sm:leading-5">

                    <!--
                Select option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation.

                Highlighted: "text-white bg-indigo-600", Not Highlighted: "text-gray-900"
              -->
                    <li id="listbox-item-0" role="option"
                        class="text-gray-900 cursor-default select-none relative py-2 pl-8 pr-4">
                        <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
                        <span class="font-normal block truncate">
                            Wade Cooper
                        </span>

                        <!--
                  Checkmark, only display for selected option.

                  Highlighted: "text-white", Not Highlighted: "text-indigo-600"
                -->
                        <span class="absolute inset-y-0 left-0 flex items-center pl-1.5">
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </li>

                    <!-- More options... -->
                </ul>
            </div>
        </div>
    </div>
    <hr class="mt-16 mb-6 border-2 rounded-full border-gray-200">
    <div class="space-y-1 w-64 mx-auto">
        <label id="listbox-label" class="block text-sm leading-5 font-medium text-gray-700">
            Assigned to
        </label>
        <div class="relative">
            <span class="inline-block w-full rounded-md shadow-sm">
                <button type="button" aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label"
                    class="cursor-default relative w-full rounded-md border border-gray-300 bg-white pl-3 pr-10 py-2 text-left focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                    <div class="flex items-center space-x-3">
                        <!-- On: "bg-green-400", Off: "bg-gray-200" -->
                        <span aria-label="Online"
                            class="bg-green-400 flex-shrink-0 inline-block h-2 w-2 rounded-full"></span>
                        <span class="block truncate">
                            Tom Cook
                        </span>
                    </div>
                    <span class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="none" stroke="currentColor">
                            <path d="M7 7l3-3 3 3m0 6l-3 3-3-3" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </span>
                </button>
            </span>

            <!-- Select popover, show/hide based on select state. -->
            <div class="absolute mt-1 w-full rounded-md bg-white shadow-lg">
                <ul tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-item-3"
                    class="max-h-60 rounded-md py-1 text-base leading-6 shadow-xs overflow-auto focus:outline-none sm:text-sm sm:leading-5">

                    <!--
                Select option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation.

                Highlighted: "text-white bg-indigo-600", Not Highlighted: "text-gray-900"
              -->
                    <li id="listbox-item-0" role="option"
                        class="text-gray-900 cursor-default select-none relative py-2 pl-3 pr-9">
                        <div class="flex items-center space-x-3">
                            <!-- Online: "bg-green-400", Not Online: "bg-gray-200" -->
                            <span aria-label="Online"
                                class="bg-green-400 flex-shrink-0 inline-block h-2 w-2 rounded-full"></span>
                            <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
                            <span class="font-normal block truncate">
                                Wade Cooper
                            </span>
                        </div>

                        <!--
                  Checkmark, only display for selected option.

                  Highlighted: "text-white", Not Highlighted: "text-indigo-600"
                -->
                        <span class="absolute inset-y-0 right-0 flex items-center pr-4">
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </li>

                    <!-- More options... -->
                </ul>
            </div>
        </div>
    </div>
    <hr class="mt-16 mb-6 border-2 rounded-full border-gray-200">
    <div class="space-y-1 w-64 mx-auto">
        <label id="listbox-label" class="block text-sm leading-5 font-medium text-gray-700">
            Assigned to
        </label>
        <div class="relative">
            <span class="inline-block w-full rounded-md shadow-sm">
                <button type="button" aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label"
                    class="cursor-default relative w-full rounded-md border border-gray-300 bg-white pl-3 pr-10 py-2 text-left focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                    <span class="block truncate">
                        Tom Cook
                    </span>
                    <span class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="none" stroke="currentColor">
                            <path d="M7 7l3-3 3 3m0 6l-3 3-3-3" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </span>
                </button>
            </span>

            <!-- Select popover, show/hide based on select state. -->
            <div class="absolute mt-1 w-full rounded-md bg-white shadow-lg">
                <ul tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-item-3"
                    class="max-h-60 rounded-md py-1 text-base leading-6 shadow-xs overflow-auto focus:outline-none sm:text-sm sm:leading-5">

                    <!--
                Select option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation.

                Highlighted: "text-white bg-indigo-600", Not Highlighted: "text-gray-900"
              -->
                    <li id="listbox-option-0" role="option"
                        class="text-gray-900 cursor-default select-none relative py-2 pl-3 pr-9">
                        <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
                        <span class="font-normal block truncate">
                            Wade Cooper
                        </span>

                        <!--
                  Checkmark, only display for selected option.

                  Highlighted: "text-white", Not Highlighted: "text-indigo-600"
                -->
                        <span class="text-indigo-600 absolute inset-y-0 right-0 flex items-center pr-4">
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </li>

                    <!-- More options... -->
                </ul>
            </div>
        </div>
    </div>
    <hr class="mt-16 mb-6 border-2 rounded-full border-gray-200">
    <div class="w-64 mx-auto">
        <label for="location" class="block text-sm leading-5 font-medium text-gray-700">Location
        </label>
        <select id="location"
            class="mt-1 form-select block w-full pl-3 pr-10 py-2 text-base leading-6 border-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
            <option>USA
            </option>
            <option selected>Canada
            </option>
            <option>EU
            </option>
        </select>
    </div>
    <hr class="my-6 border-2 rounded-full border-gray-200">
    <div class="space-y-1 w-64 mx-auto">
        <label id="listbox-label" class="block text-sm leading-5 font-medium text-gray-700">
            Assigned to
        </label>
        <div class="relative">
            <span class="inline-block w-full rounded-md shadow-sm">
                <button type="button" aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label"
                    class="cursor-default relative w-full rounded-md border border-gray-300 bg-white pl-3 pr-10 py-2 text-left focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                    <span class="w-full inline-flex space-x-2 truncate">
                        <span class="truncate">
                            Tom Cook
                        </span>
                        <span class="truncate text-gray-500">
                            @tomcook
                        </span>
                    </span>
                    <span class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="none" stroke="currentColor">
                            <path d="M7 7l3-3 3 3m0 6l-3 3-3-3" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </span>
                </button>
            </span>

            <!-- Select popover, show/hide based on select state. -->
            <div class="absolute mt-1 w-full rounded-md bg-white shadow-lg">
                <ul tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-item-3"
                    class="max-h-60 rounded-md py-1 text-base leading-6 shadow-xs overflow-auto focus:outline-none sm:text-sm sm:leading-5">

                    <!--
                Select option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation.

                Highlighted: "text-white bg-indigo-600", Not Highlighted: "text-gray-900"
              -->
                    <li id="listbox-item-0" role="option"
                        class="text-gray-900 cursor-default select-none relative py-2 pl-3 pr-9">
                        <div class="flex space-x-2">
                            <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
                            <span class="font-normal truncate">
                                Wade Cooper
                            </span>
                            <!-- Highlighted: "text-indigo-200", Not Highlighted: "text-gray-500" -->
                            <span class="text-gray-500 truncate">
                                @wadecooper
                            </span>
                        </div>

                        <!--
                  Checkmark, only display for selected option.

                  Highlighted: "text-white", Not Highlighted: "text-indigo-600"
                -->
                        <span class="absolute inset-y-0 right-0 flex items-center pr-4">
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </li>

                    <!-- More options... -->
                </ul>
            </div>
        </div>
    </div>
    <hr class="mt-16 mb-6 border-2 rounded-full border-gray-200">
</div>
@endsection
