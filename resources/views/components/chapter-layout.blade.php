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
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+DW+Pica:ital@0;1&family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    @vite(['resources/css/chapters.css', 'resources/js/chapters.js'])

    <style>
        .card {
            background-image: url("{{ asset('FrontendAssets/1.png') }}");
            background-size: 100% 100%;
            min-height: 100vh;
        }
    </style>
</head>

<body class="chapters-body">
    <div class="min-h-screen">
        <!-- Page Content -->
        <main>
            <div class="card">
                <div class="card-body">
                    {{-- <a href="{{ route('chapters') }}"><button class="btn-danger">Back</button></a> --}}
                    <p class="card-text">{{ $slot }}</p>
                </div>
            </div>

            <div id="sidebar" class="sidebar hidden">
                <button id="close-sidebar" class="close-button">&times;</button>
                <div id="sidebar-content" class="overflow-auto max-h-screen p-4">
                    <ul>
                        <li class="word">
                            <div class="details">
                                <p id="word-name" style="display: inline;">__</p>
                                <span id="word-pronunciation" style="display: inline;">_ _</span>
                                <i class="fas fa-volume-up" id="play-audio-word" style="cursor: pointer; margin-left: 5px;"></i>
                                <audio id="audio-word" src="" controls hidden></audio>
                            </div>
                        </li>
                        <li class="meaning">
                            <div class="details">
                                <p>Meaning (Tagalog)</p>
                                <span id="meaning-text"></span>
                            </div>
                        </li>
                        <li class="meaning-eng">
                            <div class="details">
                                <p>Meaning (English)</p>
                                <span id="meaning-eng-text"></span>
                            </div>
                        </li>
                        <li class="example">
                            <div class="details">
                                <p>Example</p>
                                <span id="example-text"></span>
                            </div>
                        </li>
                        <li class="synonyms">
                            <div class="details">
                                <p>Synonyms</p>
                                <span id="synonyms-text"></span>
                            </div>
                        </li>
                        <li class="antonyms">
                            <div class="details">
                                <p>Antonyms</p>
                                <span id="antonyms-text"></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </main>
    </div>
    <script></script>
</body>

</html>
