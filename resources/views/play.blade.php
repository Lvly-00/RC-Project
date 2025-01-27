<!DOCTYPE html>
<html>

<head>
    <title>Florante at Laura</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    @vite(['resources\css\main.css'])

</head>

<body class="play-body" style="background: url('{{ asset('FrontendAssets/homepage.png') }}') no-repeat center center fixed; background-size: cover;">
    <x-navigation-bar />
    <!-- Back Button -->
    {{-- <div class="back-button">
        <a href="{{ route('dashboard') }}">
            <button class="cursor-pointer duration-200 hover:scale-125 active:scale-100" title="Go Back">
                <svg xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" viewBox="0 0 24 24" class=""><path stroke-linejoin="round" stroke-linecap="round" stroke-width="1.5" d="M11 6L5 12M5 12L11 18M5 12H19"></path></svg>
            </button>
        </a>
    </div> --}}

    <!-- Main Content -->
    <div class="content-container">

        <h1 class="title-text">Random Tagalog Word</h1>
        <div style="background: url('{{ asset('FrontendAssets/oldpaper.png') }}') no-repeat center; background-size: 650px 600px; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; margin: auto; padding: 40px; ">
            <h1 style="font-size: 3rem; font-weight: bold; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">{{ $word }}</h1>
            <p style="font-size: 1.5rem; font-weight: lighter; max-width: 90%; line-height: 1.5;">Meaning: {{ $meaning }}</p>
        </div>
    </div>
</body>

</html>
