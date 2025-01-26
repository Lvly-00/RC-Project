<!DOCTYPE html>
<html>
<head>
    <title>Florante at Laura</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: url('{{ asset('FrontendAssets/homepage.png') }}') no-repeat center center fixed; background-size: cover;">
    <x-navigation-bar/>
    <div class="container text-center">
        <nav class="nav-links">
            <a href="{{ route('dashboard') }}">Home</a>
            <a href="{{ route('characters') }}" class="active">Mga Tauhan</a>
            <a href="{{ route('chapters') }}">Mga Kabanata</a>
            <a href="#">Settings</a>
        </nav>
        
        <h3 class="text-light">Mga Tauhan</h3>
        <div class="row justify-content-center">
            <!-- Character 1 -->
            <div class="col-md-4">
                <div class="character-card" style="background: url('{{ asset('FrontendAssets/oldpaper.png') }}') no-repeat center center fixed; background-size: cover;">
                    <img src="{{ asset('FrontendAssets/florante.png') }}" alt="Florante" class="character-img">
                    <div class="character-name">Florante</div>
                </div>
            </div>

            <!-- Character 2 -->
            <div class="col-md-4">
                <div class="character-card">
                    <img src="{{ asset('FrontendAssets/laura.png') }}" alt="Laura" class="character-img">
                    <div class="character-name">Laura</div>
                </div>
            </div>

            <!-- Character 3 -->
            <div class="col-md-4">
                <div class="character-card">
                    <img src="{{ asset('FrontendAssets/menalipo.png') }}" alt="Menalipo" class="character-img">
                    <div class="character-name">Menalipo</div>
                </div>
            </div>
        </div>
    </div>
    @yield('content')
</body>
</html>
