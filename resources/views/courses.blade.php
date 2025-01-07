{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <title>Courses</title>--}}
{{--    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">--}}
{{--</head>--}}
{{--<body class="bg-gray-100">--}}

{{--<div class="container mx-auto py-8">--}}
{{--    <h1 class="text-3xl font-bold mb-6">Courses</h1>--}}

{{--    <div class="bg-white shadow-md rounded-lg p-6">--}}
{{--        <table class="min-w-full bg-white">--}}
{{--            <thead>--}}
{{--            <tr>--}}
{{--                <th class="py-2 px-4 bg-gray-200 border">Name</th>--}}
{{--                <th class="py-2 px-4 bg-gray-200 border">Slope</th>--}}
{{--                <th class="py-2 px-4 bg-gray-200 border">Red Tee Rating</th>--}}
{{--                <th class="py-2 px-4 bg-gray-200 border">White Tee Rating</th>--}}
{{--                <th class="py-2 px-4 bg-gray-200 border">Blue Tee Rating</th>--}}
{{--                <th class="py-2 px-4 bg-gray-200 border">Actions</th>--}}
{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            @foreach ($courses as $course)--}}
{{--                <tr>--}}
{{--                    <td class="py-2 px-4 border">{{ $course->name }}</td>--}}
{{--                    <td class="py-2 px-4 border">{{ $course->slope }}</td>--}}
{{--                    <td class="py-2 px-4 border">{{ $course->red_tee_rating }}</td>--}}
{{--                    <td class="py-2 px-4 border">{{ $course->white_tee_rating }}</td>--}}
{{--                    <td class="py-2 px-4 border">{{ $course->blue_tee_rating }}</td>--}}
{{--                    <td class="py-2 px-4 border space-x-2">--}}
{{--                        <a href="{{ route('courses.edit', $course->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">Edit</a>--}}
{{--                        <a href="{{ route('holes.create', $course->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 rounded">Add Holes</a>--}}
{{--                    </td>--}}
{{--                </tr>--}}
{{--            @endforeach--}}
{{--            </tbody>--}}
{{--        </table>--}}
{{--    </div>--}}
{{--</div>--}}

{{--</body>--}}
{{--</html>--}}
