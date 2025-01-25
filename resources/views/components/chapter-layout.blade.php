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
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=STIX+Two+Text:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources\css\app.css', 'resources\css\chapters.css', 'resources\js\chapters.js'])
</head>

<body class="chapters-body">
    <div class="min-h-screen">
        @include('components.navigation-bar')

        <!-- Page Content -->
        <main>

            <div class="card" style="width: 50rem;top: 90px;">
                <div class="card-header">
                    <div class="shrink-0 flex items-center">
                        <a href="{{ route('chapters') }}"><button class="btn-danger">Back</button></a>
                    </div>
                </div>
                <div class="card-body" ">
                    <p class="card-text"> {{ $slot }}</p>
                </div>




            </div>

            <div id="sidebar" class="sidebar hidden">
                <button id="close-sidebar" class="close-button">&times;</button>

                <div id="sidebar-content" class="overflow-auto max-h-screen p-4">

                    <li class="word">
                        <div class="details">
                            <p id="word-name" style="display: inline;">__</p>
                            <span id="word-pronunciation" style="display: inline;">_ _</span>
                            <i class="fas fa-volume-up" id="play-audio-word"
                                style="cursor: pointer; margin-left: 5px;"></i> <!-- Audio icon for the word -->
                            <audio id="audio-word" src="" controls hidden></audio>
                        </div>
                    </li>
                    <div class="content">
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
                                <span id="synonyms-text"</span>
                            </div>
                        </li>
                        <li class="antonyms">
                            <div class="details">
                                <p>Antonyms</p>
                                <span id="antonyms-text"></div>
                        </li>
                    </div>

                </div>
            </div>
        </main>
    </div>



    </div>


    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/tippy.js@6"></script>
</body>

</html>
