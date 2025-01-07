<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Course</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-6">Edit Tournament</h1>

    <form action="{{ route('tournaments.update', $tournament->id) }}" method="POST" class="bg-white shadow-md rounded-lg p-6">
        @csrf
        @method('PUT')

        <!-- Course fields -->
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-bold mb-2">Course Name New:</label>
            <input type="text" id="name" name="name" value="{{ $tournament->name }}" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="date" class="block text-gray-700 font-bold mb-2">Date:</label>
            <input type="number" id="date" name="date" value="{{ $tournament->date }}" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            @error('date') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="start_time" class="block text-gray-700 font-bold mb-2">Start Time:</label>
            <input type="number" step="0.1" id="start_time" name="start_time" value="{{ $tournament->start_time }}" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            @error('start_time') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="white_tee_rating" class="block text-gray-700 font-bold mb-2">White Tee Rating:</label>
            <input type="number" step="0.1" id="white_tee_rating" name="white_tee_rating" value="{{ $tournament->white_tee_rating }}" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            @error('white_tee_rating') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="blue_tee_rating" class="block text-gray-700 font-bold mb-2">Blue Tee Rating:</label>
            <input type="number" step="0.1" id="blue_tee_rating" name="blue_tee_rating" value="{{ $tournament->blue_tee_rating }}" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            @error('blue_tee_rating') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="red_tee_yardage" class="block text-gray-700 font-bold mb-2">Red Tee Yardage:</label>
            <input type="number" id="red_tee_yardage" name="red_tee_yardage" value="{{ $tournament->red_tee_yardage }}" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            @error('red_tee_yardage') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="white_tee_yardage" class="block text-gray-700 font-bold mb-2">White Tee Yardage:</label>
            <input type="number" id="white_tee_yardage" name="white_tee_yardage" value="{{ $tournament->white_tee_yardage }}" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            @error('white_tee_yardage') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="blue_tee_yardage" class="block text-gray-700 font-bold mb-2">Blue Tee Yardage:</label>
            <input type="number" id="blue_tee_yardage" name="blue_tee_yardage" value="{{ $tournament->blue_tee_yardage }}" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            @error('blue_tee_yardage') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update Course</button>
    </form>
</div>

</body>
</html>
