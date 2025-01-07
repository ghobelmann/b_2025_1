<x-app-layout>
    <div class="container ml-32 w-5/6">
    <div class="container w-2/3 mx-auto py-8">
        @if (session()->has('message'))
            <div class="bg-green-500 text-white p-4 rounded mb-4">
                {{ session('message') }}
            </div>
        @endif

            <livewire:course-list />

        <h1 class="text-2xl font-bold mb-6 text-gray-700 dark:text-gray-200">Create Course New</h1>

        <form wire:submit.prevent="createCourse" class="bg-white shadow-md rounded-lg p-6">
            <!-- Course fields -->
            <div class="bg-white shadow">
                <div class="max-w-7xl mx-auto grid grid-cols-12 bg-gray-200">
            <div class="col-span-12 mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
                <input type="text" id="name" wire:model="name" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="col-span-4">
                <label for="slope" class="block text-gray-700 font-bold mb-2">Slope:</label>
                <input type="number" id="slope" wire:model="slope" class="w-1/3 px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('slope') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="col-span-4">
                <label for="red_tee_rating" class="block text-gray-700 font-bold mb-2">Red Tee Rating:</label>
                <input type="number" step="0.1" id="red_tee_rating" wire:model="red_tee_rating" class="w-1/3 px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('red_tee_rating') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="col-span-4 mb-4">
                <label for="white_tee_rating" class="block text-gray-700 font-bold mb-2">White Tee Rating:</label>
                <input type="number" step="0.1" id="white_tee_rating" wire:model="white_tee_rating" class="w-1/3 px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('white_tee_rating') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="col-span-4 mb-4">
                <label for="blue_tee_rating" class="block text-gray-700 font-bold mb-2">Blue Tee Rating:</label>
                <input type="number" step="0.1" id="blue_tee_rating" wire:model="blue_tee_rating" class="w-1/3 px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('blue_tee_rating') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="col-span-4 mb-4">
                <label for="red_tee_yardage" class="block text-gray-700 font-bold mb-2">Red Tee Yardage:</label>
                <input type="number" id="red_tee_yardage" wire:model="red_tee_yardage" class="w-1/3 px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('red_tee_yardage') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="col-span-4 mb-4">
                <label for="white_tee_yardage" class="block text-gray-700 font-bold mb-2">White Tee Yardage:</label>
                <input type="number" id="white_tee_yardage" wire:model="white_tee_yardage" class="w-1/3 px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('white_tee_yardage') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="col-span-4 mb-4">
                <label for="blue_tee_yardage" class="block text-gray-700 font-bold mb-2">Blue Tee Yardage:</label>
                <input type="number" id="blue_tee_yardage" wire:model="blue_tee_yardage" class="w-1/3 px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('blue_tee_yardage') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
    </div>
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create Course</button>
                @if(session()->has('created_course_id'))
                    <a href="{{ route('holes.create', session('created_course_id')) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Add Holes</a>
                @endif
            </div>
        </form>



    </div>

    </div>
</x-app-layout>
