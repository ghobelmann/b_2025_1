<x-app-layout>

        @if (session()->has('message'))
            <div class="bg-green-500 text-white p-4 rounded mb-4">
                {{ session('message') }}
            </div>
        @endif

            <livewire:course-list />

</x-app-layout>
