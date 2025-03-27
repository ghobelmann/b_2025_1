<x-app-layout>
    <div class="container ml-32 w-5/6">
    <div class="container w-2/3 mx-auto py-8">
        @if (session()->has('message'))
            <div class="bg-green-500 text-white p-4 rounded mb-4">
                {{ session('message') }}
            </div>
        @endif

            <livewire:course-list />

    </div>
    </div>
</x-app-layout>
