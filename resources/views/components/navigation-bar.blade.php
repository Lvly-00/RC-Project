<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link rel="stylesheet" href="resources/css/home.css"> --}}
    @vite("resources/css/home.css")

    <title>Document</title>

    <style>
        nav {
            /*background-color: #887f6780;*/
        }

    </style>

</head>

<body>

        <div class="container-fluid">
            <!-- Centered Title -->
            <a href="{{ route('dashboard') }}" class="navbar-brand">
                <h3>Florante at Laura</h3>
            </a>

            <!-- Log out button -->
            <div class="logout-btn">
                <form action="{{ route('signout') }}" method="POST">
                    @csrf
                    <button> <span> Log out </span> </button>
                </form>
            </div>
        </div>

    <!-- Navigation links under the title -->
    <div class="nav-links">
        <a class="btn" href="{{ route('chapters') }}">Mga Kabanata</a>
        <a class="btn" href="{{ route('characters') }}">Mga Tauhan</a>
        <a class="btn" href="{{ route('play') }}">Mga Tagalog Na Salita</a>

    </div>

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
