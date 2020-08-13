@extends('layouts.tailwind-ui')

@section('title', 'Containers')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 bg-white">
    max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 bg-white
</div>
<hr class="my-6 border-2 rounded-full border-gray-200">
<div class="container mx-auto px-4 sm:px-6 lg:px-8 bg-white">
    container mx-auto px-4 sm:px-6 lg:px-8 bg-white
</div>
<hr class="my-6 border-2 rounded-full border-gray-200">
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white">
    max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white
</div>
<hr class="my-6 border-2 rounded-full border-gray-200">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 bg-white">
    <!-- We've used 3xl here, but feel free to try other max-widths based on your needs -->
    <div class="max-w-3xl mx-auto">
        max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 bg-white > max-w-3xl mx-auto
    </div>
</div>
<hr class="my-6 border-2 rounded-full border-gray-200">
@endsection
