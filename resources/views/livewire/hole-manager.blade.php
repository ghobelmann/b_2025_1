<div class="container mx-auto py-8">
    @if (session()->has('message'))
        <div class="bg-green-500 text-white p-4 rounded mb-4">
            {{ session('message') }}
        </div>
    @endif

    <h1 class="text-2xl font-bold mb-6">Create Holes for {{ $course->name }}</h1>

    <form wire:submit.prevent="createHoles" class="bg-white shadow-md rounded-lg p-6">
        @foreach ($holes as $index => $hole)
            <div class="mb-4">
                <h2 class="text-xl font-bold mb-2">Hole {{ $hole['hole_number'] }}</h2>

                <div class="mb-2">
                    <label for="holes.{{ $index }}.red_tee_yardage" class="block text-gray-700 font-bold mb-1">Red Tee Yardage:</label>
                    <input type="number" wire:model="holes.{{ $index }}.red_tee_yardage" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="mb-2">
                    <label for="holes.{{ $index }}.white_tee_yardage" class="block text-gray-700 font-bold mb-1">White Tee Yardage:</label>
                    <input type="number" wire:model="holes.{{ $index }}.white_tee_yardage" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="mb-4">
                    <label for="holes.{{ $index }}.blue_tee_yardage" class="block text-gray-700 font-bold mb-1">Blue Tee Yardage:</label>
                    <input type="number" wire:model="holes.{{ $index }}.blue_tee_yardage" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
            </div>
        @endforeach

        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create Holes</button>
    </form>
</div>
