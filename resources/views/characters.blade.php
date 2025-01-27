<!DOCTYPE html>
<html>

<head>
    <title>Florante at Laura</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources\css\main.css', 'resources\js\app.js'])
</head>

<body
    style="background: url('{{ asset('FrontendAssets/homepage.png') }}') no-repeat center center fixed; background-size: cover;">
    <x-navigation-bar />
    <div class="container text-center">

        <div class="row justify-evenly">
            <!-- Character 1 -->
            <div class="col-md-4">
                <div class="character-card"
                    style="background: url('{{ asset('FrontendAssets/oldpaper.png') }}') no-repeat center center; background-size: contain;">
                    <img src="{{ asset('FrontendAssets/florante.png') }}" alt="Florante" class="character-img">
                    <div class="character-name">Florante</div>
                </div>
            </div>

            <!-- Character 2 -->
            <div class="col-md-4">
                <div class="character-card"
                    style="background: url('{{ asset('FrontendAssets/oldpaper.png') }}') no-repeat center center; background-size: contain;">
                    <img src="{{ asset('FrontendAssets/Laura.png') }}" alt="Laura" class="character-img">
                    <div class="character-name">Laura</div>
                </div>
            </div>

            <!-- Character 3 -->
            <div class="col-md-4">
                <div class="character-card"
                    style="background: url('{{ asset('FrontendAssets/oldpaper.png') }}') no-repeat center center; background-size: contain;">
                    <img src="{{ asset('FrontendAssets/menalipo.png') }}" alt="Menalipo" class="character-img">
                    <div class="character-name">Menalipo</div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="character-card"
                    style="background: url('{{ asset('FrontendAssets/oldpaper.png') }}') no-repeat center center; background-size: contain;">
                    <img src="{{ asset('FrontendAssets/flerida.png') }}" alt="Flerida" class="character-img">
                    <div class="character-name">Flerida</div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="character-card"
                    style="background: url('{{ asset('FrontendAssets/oldpaper.png') }}') no-repeat center center; background-size: contain;">
                    <img src="{{ asset('FrontendAssets/countadolfo.png') }}" alt="CountAdolfo" class="character-img">
                    <div class="character-name">Adolfo</div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="character-card"
                    style="background: url('{{ asset('FrontendAssets/oldpaper.png') }}') no-repeat center center; background-size: contain;">
                    <img src="{{ asset('FrontendAssets/princessfloresca.png') }}" alt="princessfloresca"
                        class="character-img">
                    <div class="character-name">Floresca</div>
                </div>
            </div>
        </div>
    </div>
    @yield('content')


</body>

</html>
