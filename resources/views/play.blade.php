<!DOCTYPE html>
<html>

<head>
    <title>Florante at Laura</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    @vite(['resources\css\app.css'])

</head>

<body class="play-body ">
    <x-navigation-bar />
    <br>
    <br>
    <br>
    <!-- Back Button -->
    <div class="back-button">
        <a href="{{ route('dashboard') }}">
            <button>Back</button>
        </a>
    </div>

    <!-- Main Content -->
    <div>

        <div>
            <h1>Random Tagalog Word: {{ $word }}</h1>
            <p>Meaning: {{ $meaning }}</p>
        </div>

        <!-- Chapters Link -->
        <div>
            <a href="{{ route('chapters') }}">
                MGA KABANATA
            </a>
        </div>
        <div>

            <!-- Characters Link -->
            <a href="{{ route('characters') }}">
                MGA TAUHAN
            </a>
        </div>
    </div>
</body>

</html>
