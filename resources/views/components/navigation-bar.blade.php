<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>

    <style>
        nav {
            /*background-color: #887f6780;*/
        }

    </style>
</head>

<body>

    <nav>
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
            <a href="https://img.logoipsum.com/329.svg" class="flex items-center space-x-3 rtl:space-x-reverse">
                <h3><a href="{{ route('dashboard') }}">Florante at Laura</a></h3>
                <span class="self-center text-2xl font-semibold whitespace-nowrap"></span>
            </a>
            <div class="flex items-center space-x-6 rtl:space-x-reverse">
                <a href="{{ route('characters') }}">Tauhan</a>
                <form action="{{ route('signout') }}" method="POST">
                    @csrf
                    <button
                        class="text-gray-900 block w-full -lg border border-gray-200 p-2 text-center text-base font-medium transition hover:border-red-300 hover:bg-red-7s00 hover:text-gray-500">
                        Log out</button>
                </form>
            </div>
        </div>
    </nav>
{{--
    <nav class="no-border fixed split-nav">
        <div class="nav-brand">
            <h3><a href="{{ route('dashboard') }}">Florante at Laura</a></h3>
        </div>
        <div class="collapsible">
            <input id="collapsible1" type="checkbox" name="collapsible1">
            <label for="collapsible1">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </label>
            <div class="collapsible-body">
                <ul class="inline">
                    <li><a href="{{ route('leaderboard') }}">Leaderboards</a></li>
                    <li><a href="{{ route('characters') }}">Tauhan</a></li>
                    <li>
                        <form action="{{ route('signout') }}" method="POST">
                            @csrf
                            <button
                                class="text-gray-900 block w-full -lg border border-gray-200 p-2 text-center text-base font-medium transition hover:border-red-300 hover:bg-red-400 hover:text-gray-500">
                                Log out</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav> --}}

    <script>
        // Initialize Flowbite dropdowns
        document.addEventListener('DOMContentLoaded', function() {
            const dropdownButton = document.getElementById('user-menu-button');
            const dropdownMenu = document.getElementById('user-dropdown');

            dropdownButton.addEventListener('click', function() {
                dropdownMenu.classList.toggle('hidden');
            });

            // Close dropdown if clicked outside
            window.addEventListener('click', function(event) {
                if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                    dropdownMenu.classList.add('hidden');
                }
            });
        });
    </script>
</body>

</html>
