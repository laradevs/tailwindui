@extends('layouts.tailwind-ui')

@section('title', 'Notifications')

@section('content')
<div
    class="fixed inset-0 flex items-end justify-center px-4 py-6 pointer-events-none sm:p-6 sm:items-start sm:justify-end">
    <div x-data="{ show: true }" x-show="show" x-transition:enter="transform ease-out duration-300 transition"
        x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
        x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
        x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0" class="max-w-sm w-full bg-white shadow-lg rounded-lg pointer-events-auto">
        <div class="rounded-lg shadow-xs overflow-hidden">
            <div class="p-4">
                <div class="flex items-center">
                    <div class="w-0 flex-1 flex justify-between">
                        <p class="w-0 flex-1 text-sm leading-5 font-medium text-gray-900">
                            Discussion archived
                        </p>
                        <button
                            class="ml-3 flex-shrink-0 text-sm leading-5 font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                            Undo
                        </button>
                    </div>
                    <div class="ml-4 flex-shrink-0 flex">
                        <button @click="show = false; setTimeout(() => show = true, 20000)"
                            class="inline-flex text-gray-400 focus:outline-none focus:text-gray-500 transition ease-in-out duration-150">
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div
    class="fixed inset-0 flex items-end justify-center px-4 py-6 pointer-events-none sm:p-6 sm:items-start sm:justify-end">
    <div x-data="{ show: true }" x-show="show" x-transition:enter="transform ease-out duration-300 transition"
        x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
        x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
        x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0" class="max-w-sm w-full bg-white shadow-lg rounded-lg pointer-events-auto">
        <div class="rounded-lg shadow-xs overflow-hidden">
            <div class="p-4">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <svg class="h-6 w-6 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div class="ml-3 w-0 flex-1 pt-0.5">
                        <p class="text-sm leading-5 font-medium text-gray-900">
                            Successfully saved!
                        </p>
                        <p class="mt-1 text-sm leading-5 text-gray-500">
                            Anyone with a link can now view this file.
                        </p>
                    </div>
                    <div class="ml-4 flex-shrink-0 flex">
                        <button @click="show = false; setTimeout(() => show = true, 20000)"
                            class="inline-flex text-gray-400 focus:outline-none focus:text-gray-500 transition ease-in-out duration-150">
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div
    class="fixed inset-0 flex items-end justify-center px-4 py-6 pointer-events-none sm:p-6 sm:items-start sm:justify-end">
    <div x-data="{ show: true }" x-show="show" x-transition:enter="transform ease-out duration-300 transition"
        x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
        x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
        x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0" class="max-w-sm w-full bg-white shadow-lg rounded-lg pointer-events-auto">
        <div class="rounded-lg shadow-xs overflow-hidden">
            <div class="p-4">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <svg class="h-6 w-6 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                        </svg>
                    </div>
                    <div class="ml-3 w-0 flex-1 pt-0.5">
                        <p class="text-sm leading-5 font-medium text-gray-900">
                            Discussion moved
                        </p>
                        <p class="mt-1 text-sm leading-5 text-gray-500">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit oluptatum tenetur.
                        </p>
                        <div class="mt-2">
                            <button
                                class="text-sm leading-5 font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                                Undo
                            </button>
                            <button
                                class="ml-6 text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                                Dismiss
                            </button>
                        </div>
                    </div>
                    <div class="ml-4 flex-shrink-0 flex">
                        <button @click="show = false; setTimeout(() => show = true, 20000)"
                            class="inline-flex text-gray-400 focus:outline-none focus:text-gray-500 transition ease-in-out duration-150">
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div
    class="fixed inset-0 flex items-end justify-center px-4 py-6 pointer-events-none sm:p-6 sm:items-start sm:justify-end">
    <div x-data="{ show: true }" x-show="show" x-transition:enter="transform ease-out duration-300 transition"
        x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
        x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
        x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0" class="max-w-md w-full bg-white shadow-lg rounded-lg pointer-events-auto">
        <div class="flex rounded-lg shadow-xs">
            <div class="w-0 flex-1 p-4">
                <div class="flex items-start">
                    <div class="flex-shrink-0 pt-0.5">
                        <img class="h-10 w-10 rounded-full"
                            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                            alt="" />
                    </div>
                    <div class="ml-3 w-0 flex-1">
                        <p class="text-sm leading-5 font-medium text-gray-900">
                            Emilia Gates
                        </p>
                        <p class="mt-1 text-sm leading-5 text-gray-500">
                            Sure! 8:30pm works great!
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex border-l border-gray-200">
                <button @click="show = false; setTimeout(() => show = true, 20000)"
                    class="-ml-px flex items-center justify-center w-full border border-transparent rounded-r-lg p-4 text-sm leading-5 font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:text-indigo-700 active:bg-gray-50 transition ease-in-out duration-150">
                    Reply
                </button>
            </div>
        </div>
    </div>
</div>
<div
    class="fixed inset-0 flex items-end justify-center px-4 py-6 pointer-events-none sm:p-6 sm:items-start sm:justify-end">
    <div x-data="{ show: true }" x-show="show" x-transition:enter="transform ease-out duration-300 transition"
        x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
        x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
        x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0" class="max-w-sm w-full bg-white shadow-lg rounded-lg pointer-events-auto">
        <div class="rounded-lg shadow-xs">
            <div class="p-4">
                <div class="flex items-start">
                    <div class="flex-shrink-0 pt-0.5">
                        <img class="h-10 w-10 rounded-full"
                            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                            alt="" />
                    </div>
                    <div class="ml-3 w-0 flex-1">
                        <p class="text-sm leading-5 font-medium text-gray-900">
                            Emilia Gates
                        </p>
                        <p class="mt-1 text-sm leading-5 text-gray-500">
                            Sent you an invite to connect.
                        </p>
                        <div class="mt-4 flex">
                            <span class="inline-flex rounded-md shadow-sm">
                                <button type="button"
                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
                                    Accept
                                </button>
                            </span>
                            <span class="ml-3 inline-flex rounded-md shadow-sm">
                                <button type="button"
                                    class="inline-flex items-center px-3 py-2 border border-gray-300 text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150">
                                    Decline
                                </button>
                            </span>
                        </div>
                    </div>
                    <div class="ml-4 flex-shrink-0 flex">
                        <button @click="show = false; setTimeout(() => show = true, 20000)"
                            class="inline-flex text-gray-400 focus:outline-none focus:text-gray-500 transition ease-in-out duration-150">
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div
    class="fixed inset-0 flex items-end justify-center px-4 py-6 pointer-events-none sm:p-6 sm:items-start sm:justify-end">
    <div x-data="{ show: true }" x-show="show" x-transition:enter="transform ease-out duration-300 transition"
        x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
        x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
        x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0" class="max-w-md w-full bg-white shadow-lg rounded-lg pointer-events-auto">
        <div class="flex rounded-lg shadow-xs">
            <div class="w-0 flex-1 flex items-center p-4">
                <div class="w-full">
                    <p class="text-sm leading-5 font-medium text-gray-900">
                        Receive notifications
                    </p>
                    <p class="mt-1 text-sm leading-5 text-gray-500">
                        Notications may include alerts, sounds, and badges.
                    </p>
                </div>
            </div>
            <div class="flex border-l border-gray-200">
                <div class="-ml-px flex flex-col">
                    <div class="h-0 flex-1 flex border-b border-gray-200">
                        <button @click="show = false; setTimeout(() => show = true, 20000)"
                            class="-mb-px flex items-center justify-center w-full rounded-tr-lg border border-transparent px-4 py-3 text-sm leading-5 font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:text-indigo-700 active:bg-gray-50 transition ease-in-out duration-150">
                            Reply
                        </button>
                    </div>
                    <div class="-mt-px h-0 flex-1 flex">
                        <button @click="show = false; setTimeout(() => show = true, 20000)"
                            class="flex items-center justify-center w-full rounded-br-lg border border-transparent px-4 py-3 text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150">
                            Don't allow
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
