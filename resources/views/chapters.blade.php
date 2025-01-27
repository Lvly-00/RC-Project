<!DOCTYPE html>
<html>

<head>
    <title>Florante at Laura</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources\css\app.css', 'resources\js\app.js'])

</head>
<body class="chapters-body" style="background: url('{{ asset('FrontendAssets/homepage.png') }}') no-repeat center center fixed; background-size: cover;">
    <x-navigation-bar />

    <div class="back-button shrink-0 flex items-center">
        <a href="{{ route('play') }}">
            <button class="cursor-pointer duration-200 hover:scale-125 active:scale-100" title="Go Back">
                <svg xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" viewBox="0 0 24 24" class="stroke-white"><path stroke-linejoin="round" stroke-linecap="round" stroke-width="1.5" d="M11 6L5 12M5 12L11 18M5 12H19"></path></svg>
            </button>
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
