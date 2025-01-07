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
    <h1 class="text-3xl font-bold mb-6">Edit Course</h1>

    <form action="{{ route('courses.update', $course->id) }}" method="POST" class="bg-white shadow-md rounded-lg p-6">
        @csrf
        @method('PUT')

        <!-- Course fields -->
        <div class="mb-4">
            <label for="first_name" class="block text-gray-700 font-bold mb-2">Player First Name:</label>
            <input type="text" id="first_name" name="first_name" value="{{ $course->first_name }}" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            @error('first_name') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="last_name" class="block text-gray-700 font-bold mb-2">Last Name:</label>
            <input type="number" id="last_name" name="last_name" value="{{ $course->last_name }}" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            @error('last_name') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="Status" class="block text-gray-700 font-bold mb-2">Status:</label>
            <input type="number" step="0.1" id="Status" name="Status" value="{{ $course->Status }}" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            @error('Status') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="grad_year" class="block text-gray-700 font-bold mb-2">Graduation Year:</label>
            <input type="number" step="0.1" id="grad_year" name="grad_year" value="{{ $course->grad_year }}" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            @error('grad_year') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>


        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update Course</button>
    </form>
</div>

</body>
</html>
