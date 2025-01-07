{{--<x-app-layout>--}}
{{--    <div class="py-12">--}}

{{--        <x-slot name="header">--}}
{{--            <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">--}}
{{--                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">--}}
{{--                    {{ __('Dashboard') }}--}}
{{--                </h2>--}}
{{--            </div>--}}
{{--        </x-slot>--}}
{{--    </div>--}}

{{--<div class="container mx-auto py-8">--}}
{{--    <div class="bg-white shadow-md rounded-lg p-6">--}}
{{--        <h1 class="text-3xl font-bold mb-6">Edit Tournament</h1>--}}

{{--        @if (session()->has('message'))--}}
{{--            <div class="bg-green-500 text-white p-4 rounded mb-4">--}}
{{--                {{ session('message') }}--}}
{{--            </div>--}}
{{--        @endif--}}

{{--        <form action="{{ route('tournaments.`update`', $tournament->id) }}" method="POST" class="bg-white shadow-md rounded-lg p-6">--}}
{{--            @csrf--}}
{{--            @method('PUT')--}}

{{--            <div class="mb-4">--}}
{{--                <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>--}}
{{--                <input type="text" id="name" name="name" value="{{ $tournament->name }}" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">--}}
{{--                @error('name') <span class="text-red-500">{{ $message }}</span> @enderror--}}
{{--            </div>--}}

{{--            <div class="mb-4">--}}
{{--                <label for="date" class="block text-gray-700 font-bold mb-2">Date:</label>--}}
{{--                <input type="date" id="date" name="date" value="{{ $tournament->date }}" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">--}}
{{--                @error('date') <span class="text-red-500">{{ $message }}</span> @enderror--}}
{{--            </div>--}}

{{--            <div class="mb-4">--}}
{{--                <label for="start_time" class="block text-gray-700 font-bold mb-2">Start Time:</label>--}}
{{--                <input type="time" id="start_time" name="start_time" value="{{ $tournament->start_time }}" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">--}}
{{--                @error('start_time') <span class="text-red-500">{{ $message }}</span> @enderror--}}
{{--            </div>--}}

{{--            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update Tournament</button>--}}
{{--        </form>--}}
{{--    </div>--}}
{{--</div>--}}

{{--</x-app-layout>--}}
