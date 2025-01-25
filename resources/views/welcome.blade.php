<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources\css\app.css', 'resources\js\app.js'])

</head>

<body>
    <div>

        <div>
            <div>

                @if (Route::has('login'))
                    <nav>
                        @auth
                            <div>
                                <a href="{{ route('dashboard') }}">
                                    play
                                </a>
                            </div>
                        @else
                            <div>
                                <a href="{{ route('login') }}">
                                    LOG IN</a>
                            </div>

                            @if (Route::has('register'))
                                <div>
                                    <a href="{{ route('register') }}">
                                        REGISTER</a>
                            @endif
                        @endauth
                    </nav>
                @endif

            </div>
        </div>

    </div>
</body>

</html>
