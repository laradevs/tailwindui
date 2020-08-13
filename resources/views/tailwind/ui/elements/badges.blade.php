@extends('layouts.tailwind-ui')

@section('title', 'Badges')

@section('content')
<span
    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium leading-4 bg-indigo-100 text-indigo-800">
    <svg class="-ml-0.5 mr-1.5 h-2 w-2 text-indigo-400" fill="currentColor" viewBox="0 0 8 8">
        <circle cx="4" cy="4" r="3" />
    </svg>
    Small
</span>
<span
    class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium leading-5 bg-indigo-100 text-indigo-800">
    <svg class="-ml-1 mr-1.5 h-2 w-2 text-indigo-400" fill="currentColor" viewBox="0 0 8 8">
        <circle cx="4" cy="4" r="3" />
    </svg>
    Large
</span>
<hr class="my-6 border-2 rounded-full border-gray-200">
<span
    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium leading-4 bg-indigo-100 text-indigo-800">
    Small
    <button type="button"
        class="flex-shrink-0 ml-1.5 inline-flex text-indigo-500 focus:outline-none focus:text-indigo-700">
        <svg class="h-2 w-2" stroke="currentColor" fill="none" viewBox="0 0 8 8">
            <path stroke-linecap="round" stroke-width="1.5" d="M1 1l6 6m0-6L1 7" />
        </svg>
    </button>
</span>
<span
    class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium leading-5 bg-indigo-100 text-indigo-800">
    Large
    <button type="button"
        class="flex-shrink-0 -mr-0.5 ml-1.5 inline-flex text-indigo-500 focus:outline-none focus:text-indigo-700">
        <svg class="h-2 w-2" stroke="currentColor" fill="none" viewBox="0 0 8 8">
            <path stroke-linecap="round" stroke-width="1.5" d="M1 1l6 6m0-6L1 7" />
        </svg>
    </button>
</span>
<hr class="my-6 border-2 rounded-full border-gray-200">
<span
    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium leading-4 bg-gray-100 text-gray-800">
    Badge
</span>
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium leading-4 bg-red-100 text-red-800">
    Badge
</span>
<span
    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium leading-4 bg-orange-100 text-orange-800">
    Badge
</span>
<span
    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium leading-4 bg-yellow-100 text-yellow-800">
    Badge
</span>
<span
    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium leading-4 bg-green-100 text-green-800">
    Badge
</span>
<span
    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium leading-4 bg-teal-100 text-teal-800">
    Badge
</span>
<span
    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium leading-4 bg-blue-100 text-blue-800">
    Badge
</span>
<span
    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium leading-4 bg-indigo-100 text-indigo-800">
    Badge
</span>
<span
    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium leading-4 bg-purple-100 text-purple-800">
    Badge
</span>
<span
    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium leading-4 bg-pink-100 text-pink-800">
    Badge
</span>
<hr class="my-6 border-2 rounded-full border-gray-200">
<span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium leading-5 bg-gray-100 text-gray-800">
    Badge
</span>
<span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium leading-5 bg-red-100 text-red-800">
    Badge
</span>
<span
    class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium leading-5 bg-orange-100 text-orange-800">
    Badge
</span>
<span
    class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium leading-5 bg-yellow-100 text-yellow-800">
    Badge
</span>
<span
    class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium leading-5 bg-green-100 text-green-800">
    Badge
</span>
<span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium leading-5 bg-teal-100 text-teal-800">
    Badge
</span>
<span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium leading-5 bg-blue-100 text-blue-800">
    Badge
</span>
<span
    class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium leading-5 bg-indigo-100 text-indigo-800">
    Badge
</span>
<span
    class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium leading-5 bg-purple-100 text-purple-800">
    Badge
</span>
<span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium leading-5 bg-pink-100 text-pink-800">
    Badge
</span>
<hr class="my-6 border-2 rounded-full border-gray-200">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-md text-sm font-medium leading-5 bg-gray-100 text-gray-800">
    Badge
</span>
<span class="inline-flex items-center px-2.5 py-0.5 rounded-md text-sm font-medium leading-5 bg-red-100 text-red-800">
    Badge
</span>
<span
    class="inline-flex items-center px-2.5 py-0.5 rounded-md text-sm font-medium leading-5 bg-orange-100 text-orange-800">
    Badge
</span>
<span
    class="inline-flex items-center px-2.5 py-0.5 rounded-md text-sm font-medium leading-5 bg-yellow-100 text-yellow-800">
    Badge
</span>
<span
    class="inline-flex items-center px-2.5 py-0.5 rounded-md text-sm font-medium leading-5 bg-green-100 text-green-800">
    Badge
</span>
<span class="inline-flex items-center px-2.5 py-0.5 rounded-md text-sm font-medium leading-5 bg-teal-100 text-teal-800">
    Badge
</span>
<span class="inline-flex items-center px-2.5 py-0.5 rounded-md text-sm font-medium leading-5 bg-blue-100 text-blue-800">
    Badge
</span>
<span
    class="inline-flex items-center px-2.5 py-0.5 rounded-md text-sm font-medium leading-5 bg-indigo-100 text-indigo-800">
    Badge
</span>
<span
    class="inline-flex items-center px-2.5 py-0.5 rounded-md text-sm font-medium leading-5 bg-purple-100 text-purple-800">
    Badge
</span>
<span class="inline-flex items-center px-2.5 py-0.5 rounded-md text-sm font-medium leading-5 bg-pink-100 text-pink-800">
    Badge
</span>
<hr class="my-6 border-2 rounded-full border-gray-200">
<span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium leading-4 bg-indigo-100 text-indigo-800">
    <svg class="mr-1.5 h-2 w-2 text-indigo-400" fill="currentColor" viewBox="0 0 8 8">
        <circle cx="4" cy="4" r="3" />
    </svg>
    Small
</span>
<span
    class="inline-flex items-center px-2.5 py-0.5 rounded-md text-sm font-medium leading-5 bg-indigo-100 text-indigo-800">
    <svg class="-ml-0.5 mr-1.5 h-2 w-2 text-indigo-400" fill="currentColor" viewBox="0 0 8 8">
        <circle cx="4" cy="4" r="3" />
    </svg>
    Large
</span>
<hr class="my-6 border-2 rounded-full border-gray-200">
<span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium leading-4 bg-gray-100 text-gray-800">
    Badge
</span>
<span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium leading-4 bg-red-100 text-red-800">
    Badge
</span>
<span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium leading-4 bg-orange-100 text-orange-800">
    Badge
</span>
<span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium leading-4 bg-yellow-100 text-yellow-800">
    Badge
</span>
<span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium leading-4 bg-green-100 text-green-800">
    Badge
</span>
<span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium leading-4 bg-teal-100 text-teal-800">
    Badge
</span>
<span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium leading-4 bg-blue-100 text-blue-800">
    Badge
</span>
<span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium leading-4 bg-indigo-100 text-indigo-800">
    Badge
</span>
<span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium leading-4 bg-purple-100 text-purple-800">
    Badge
</span>
<span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium leading-4 bg-pink-100 text-pink-800">
    Badge
</span>
<hr class="my-6 border-2 rounded-full border-gray-200">
@endsection
