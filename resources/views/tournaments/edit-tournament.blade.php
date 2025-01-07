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

    <form action="{{ route('courses.update', $tournament->id) }}" method="POST" class="bg-white shadow-md rounded-lg p-6">
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
            <label for="start_time" class="block text-gray-700 font-bold mb-2">Start Time</label>
            <input type="number" step="0.1" id="start_time" name="start_time" value="{{ $tournament->start_time }}" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            @error('start_time') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="status" class="block text-gray-700 font-bold mb-2">Status</label>
            <input type="number" step="0.1" id="status" name="status" value="{{ $tournament->status }}" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            @error('status') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>


        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update Course</button>
    </form>
</div>

</body>
</html>
