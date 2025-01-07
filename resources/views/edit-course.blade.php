<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit the Course</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-6">Edit Course</h1>

    <form action="{{ route('courses.update', $course->id) }}" method="POST" class="bg-white shadow-md rounded-lg p-6">
        @csrf
        @method('PUT')

        <!-- Course fields -->
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-bold mb-2">Course Name New:</label>
            <input type="text" id="name" name="name" value="{{ $course->name }}" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="slope" class="block text-gray-700 font-bold mb-2">Slope:</label>
            <input type="number" id="slope" name="slope" value="{{ $course->slope }}" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            @error('slope') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="red_tee_rating" class="block text-gray-700 font-bold mb-2">Red Tee Rating:</label>
            <input type="number" step="0.1" id="red_tee_rating" name="red_tee_rating" value="{{ $course->red_tee_rating }}" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            @error('red_tee_rating') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="white_tee_rating" class="block text-gray-700 font-bold mb-2">White Tee Rating:</label>
            <input type="number" step="0.1" id="white_tee_rating" name="white_tee_rating" value="{{ $course->white_tee_rating }}" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            @error('white_tee_rating') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="blue_tee_rating" class="block text-gray-700 font-bold mb-2">Blue Tee Rating:</label>
            <input type="number" step="0.1" id="blue_tee_rating" name="blue_tee_rating" value="{{ $course->blue_tee_rating }}" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            @error('blue_tee_rating') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="red_tee_yardage" class="block text-gray-700 font-bold mb-2">Red Tee Yardage:</label>
            <input type="number" id="red_tee_yardage" name="red_tee_yardage" value="{{ $course->red_tee_yardage }}" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            @error('red_tee_yardage') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="white_tee_yardage" class="block text-gray-700 font-bold mb-2">White Tee Yardage:</label>
            <input type="number" id="white_tee_yardage" name="white_tee_yardage" value="{{ $course->white_tee_yardage }}" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            @error('white_tee_yardage') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="blue_tee_yardage" class="block text-gray-700 font-bold mb-2">Blue Tee Yardage:</label>
            <input type="number" id="blue_tee_yardage" name="blue_tee_yardage" value="{{ $course->blue_tee_yardage }}" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            @error('blue_tee_yardage') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update Course</button>
    </form>
</div>

</body>
</html>
