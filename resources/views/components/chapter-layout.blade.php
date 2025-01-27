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

<body class="chapters-body" style="background: url('{{ asset('FrontendAssets/homepage.png') }}') no-repeat center center fixed; background-size: cover;">
    <div class="min-h-screen">
        <!-- Page Content -->
<<<<<<< HEAD
        <main>
            <div class="card">
                <div class="card-body">
                    {{-- <a href="{{ route('chapters') }}"><button class="btn-danger">Back</button></a> --}}
                    <p class="card-text">{{ $slot }}</p>
                </div>
=======
        <main >

            <div class="card" style="width: 50rem;top: 100px;">
                <div>
                    <div class="back-button">
                        <a href="{{ route('chapters') }}">
                            <button class="cursor-pointer duration-200 hover:scale-125 active:scale-100" title="Go Back">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" viewBox="0 0 24 24" class="stroke-white"><path stroke-linejoin="round" stroke-linecap="round" stroke-width="1.5" d="M11 6L5 12M5 12L11 18M5 12H19"></path></svg>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="card-body" style="background: url('{{ asset('FrontendAssets/kabanata1.png') }}') no-repeat center center fixed; background-size: cover;">
                    <p class="card-text"> {{ $slot }}</p>
                </div>




>>>>>>> c7416c2d9edd129082c11516a836c2f920cd59c1
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
