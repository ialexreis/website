<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        @livewireStyles
    </head>
    <body class="antialiased">
        <div class="relative overflow-hidden">
            <div class="max-w-7xl h-full mx-auto">
                <livewire:navigation-bar/>
                <livewire:about-banner/>
            </div>
        </div>
        @livewireScripts
    </body>
</html>
