<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KGCA - Welcome</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">
<!-- Navigation -->
<header class="w-full bg-white shadow-md p-4 fixed top-0 left-0 z-50">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-2xl font-bold text-green-700">KGCA</h1>
        @livewire('welcome.navigation')
    </div>
</header>

<!-- Main Content -->
<main class="flex-grow flex items-center justify-center mt-20">

{{--    <div class="grid place-items-center v-screen">--}}
{{--        <img src="{{ asset('images/kgca.webp') }}" alt="Logo" class="w-[100%] h-[100%] object-cover">--}}
{{--    </div></main>--}}

@livewireScripts

</html>
