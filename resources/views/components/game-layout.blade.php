<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=STIX+Two+Text:ital,wght@0,400..700;1,400..700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/papercss@1.9.2/dist/paper.min.css" />
    <!-- Scripts -->
    @vite([ 'resources\css\game.css', 'resources\js\game.js'])
</head>

<body class="chapters-body">
    <div class="min-h-screen">
        @include('components.navigation-bar')

        <!-- Page Content -->
        <main>

            <div class="card" style="width: 50rem;">
                <div class="card-header">
                    <div class="shrink-0 flex items-center">
                        <a href="{{ route('chapters') }}"><button class="btn-danger">Back</button></a>
                    </div>
                </div>
                <div class="card-body">
                    <p class="card-text"> {{ $slot }}</p>
                </div>
                <div class="card-footer">
                    <a href="{{ route('games.show', ['number']) }}">
                        <button> Game</button>
                    </a>
                </div>
            </div>
        </main>
    </div>
</body>

</html>
