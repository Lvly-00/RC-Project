<!DOCTYPE html>
<html>

<head>
    <title>Florante at Laura</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources\css\app.css', 'resources\js\app.js'])

</head>
<body class="chapters-body">
    <x-navigation-bar />

    <div class="back-button shrink-0 flex items-center">
        <a href="{{ route('play') }}">
            <button>Back</button>
        </a>
    </div>
    <div>
        <div class="container">
            <div>
                <p>MGA KABANATA</p>
            </div>
            <div>
                <div>
                    @foreach (range(1, 30) as $chapter)
                        <a href="{{ route('chapters.show', ['number' => $chapter]) }}" id="kabanata">
                            <div>
                                <h1>Kabanata {{ $chapter }}</h1>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</body>

</html>
