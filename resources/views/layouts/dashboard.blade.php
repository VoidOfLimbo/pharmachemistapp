{{-- master page defining layout of components for webpages implementing dashboard layout --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    {{-- will be useful to display messages attached with session if requested by client --}}
    <x-jet-banner />

    <div class="min-h-screen bg-gray-100">
        <div class="flex flex-no-wrap h-full">
            <!-- Nav Bar -->
            <x-navigation.sidenav />

            {{-- body  --}}
            <div class="md:ml-64 w-full">

                {{-- if there is header put it here --}}
                @if (isset($header))
                    <header class="bg-white shadow">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">

                            {{-- actual header items can be different in different childrens --}}
                            {{ $header }}
                        </div>
                    </header>
                @endif

                <!-- rest of the page Content -->
                {{ $slot }}
            </div>
        </div>
    </div>

    {{-- stack models sent by implementing child pages  --}}
    @stack('modals')

    {{-- our local script for navigation in dashboard layout --}}
    <script src="{{ asset('/js/dashboard.js') }}"></script>

    {{-- inserting necessary laravel livewire scripts --}}
    @livewireScripts

</body>

</html>
