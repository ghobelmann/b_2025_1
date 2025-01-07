 <div class="container min-w-full mx-auto py-8">
        <h1 class="text-4xl font-bold mb-6">Courses</h1>

        <div class="bg-white shadow-md rounded-lg p-6">
            @if (session()->has('message'))
                <div class="bg-green-500 text-white p-4 rounded mb-4">
                    {{ session('message') }}
                </div>
            @endif

            <table class="bg-white">
                <thead>
                <tr>
                    <th class="py-2 px-4 bg-gray-200 border">Name</th>
                    <th class="py-2 px-4 bg-gray-200 border">Slope</th>
                    <th class="col-span-3 py-2 px-4 bg-gray-200 border"></th>
                    <th class="col-span-3 py-2 px-4 bg-gray-200 border">Tee - Rating</th>
                    <th class="col-span-3 py-2 px-4 bg-gray-200 border"></th>
                    <th class="col-span-4 py-2 px-4 bg-gray-200 border"></th>
                    <th class="col-span-3 py-2 px-4 bg-gray-200 border">Tee - Yardage</th>
                    <th class="col-span-3 py-2 px-4 bg-gray-200 border"></th>
                </tr>
                <tr>
                    <th class="py-2 px-4 bg-gray-200 border">Name</th>
                    <th class="py-2 px-4 bg-gray-200 border">Slope</th>
                    <th class="py-2 px-4 bg-gray-200 border">Red</th>
                    <th class="py-2 px-4 bg-gray-200 border">White</th>
                    <th class="py-2 px-4 bg-gray-200 border">Blue</th>
                    <th class="py-2 px-4 bg-gray-200 border">Red</th>
                    <th class="py-2 px-4 bg-gray-200 border">White</th>
                    <th class="py-2 px-4 bg-gray-200 border">Blue</th>
                    <th class="py-2 px-4 bg-gray-200 border">Actions 1</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($courses as $course)
                    <tr>
                        <td class="py-2 px-4 border">{{ $course->name }}</td>
                        <td class="py-2 px-4 border">{{ $course->slope }}</td>
                        <td class="py-2 px-4 border">{{ $course->red_tee_rating }}</td>
                        <td class="py-2 px-4 border">{{ $course->white_tee_rating }}</td>
                        <td class="py-2 px-4 border">{{ $course->blue_tee_rating }}</td>
                        <td class="py-2 px-4 border">{{ $course->red_tee_yardage }}</td>
                        <td class="py-2 px-4 border">{{ $course->white_tee_yardage }}</td>
                        <td class="py-2 px-4 border">{{ $course->blue_tee_yardage }}</td>
                        <td class="py-2 px-4 border space-x-2">
                            <a href="{{ route('courses.edit', $course->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">Edit</a>
                            <a href="{{ route('holes.create', ['course' => $course->id]) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 rounded">Add Holes</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
     <div class="block max-w-full p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
         <div class="w-3/4">
{{--             <livewire:course-manager />--}}
         </div>
     </div>
    </div>

