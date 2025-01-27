<!DOCTYPE html>
<html>

<head>
    <title>Florante at Laura</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources\css\main.css'])

</head>
<body class="play-body" style="background: url('{{ asset('FrontendAssets/homepage.png') }}') no-repeat center center fixed; background-size: cover;">
    <x-navigation-bar />

    {{-- <div class="container mt-5">
        <!-- Play Button -->
        <div>
            <a href="{{ route('play') }}" class="btn btn-primary">
                Play
            </a>
        </div>
    </div> --}}
</body>

</html>
