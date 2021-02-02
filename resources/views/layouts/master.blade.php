<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title') Cryptospor</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('assets/css/tailwind.output.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>
    <script src="{{ asset('assets/js/charts-lines.js')}}" defer></script>
    <script src="{{ asset('assets/js/charts-pie.js')}}" defer></script>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
    <script src="{{asset('assets/js/init-alpine.js')}}"></script>
        <link rel="apple-touch-icon" sizes="180x180" href="" />
        <link rel="icon" type="image/png" sizes="32x32" href="" />
        <link rel="icon" type="image/png" sizes="16x16" href="" />


    @livewireStyles

    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
        <!-- Desktop sidebar -->
        @include('partials._desktop_sidebar')
        <!-- Mobile sidebar -->
        <!-- Backdrop -->
        @include('partials._mobile_sidebar')
        <div class="flex flex-col flex-1 w-full">
            {{-- Top header --}}
            @include('partials._top_header')
            <main class="h-full overflow-y-auto">
                {{-- @yield('content') --}}
                {{ $slot }}
            </main>
        </div>
    </div>

    @stack('modals')


    {{-- @include('partials._modal') --}}

    @livewireScripts

</body>
</html>

