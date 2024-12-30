<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
            <a href="https://img.logoipsum.com/329.svg" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://img.logoipsum.com/329.svg" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"></span>
            </a>
            <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button"
                    class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                    data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <span class="block text-sm text-gray-900 dark:text-white">{{ Auth::user()->name }}</span>
                    
                </button>
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                    id="user-dropdown">
                    <div class="px-4 py-3">
                        <span class="block text-sm text-gray-900 dark:text-white">{{ Auth::user()->name }}</span>
                        <span class="block text-sm text-gray-500 truncate dark:text-gray-400">{{ Auth::user()->email }}</span>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                            @if (Auth::user()->profile)
                                <div class="flex-1">
                                    <a href="/profile"><button
                                            class="bg-red-200 whitespace-nowrap border-red-300 block w-full rounded-lg border p-2 text-center text-base font-medium text-gray transition hover:bg-opacity-90">View
                                            Profile</button></a>
                                </div>
                            @else
                                <div class="flex-1">
                                    <a href="/create-profile"><button
                                            class="bg-red-200 whitespace-nowrap border-red-300 block w-full rounded-lg border p-2 text-center text-base font-medium text-gray transition hover:bg-opacity-90">Create
                                            Profile</button></a>
                                </div>
                            @endif
                        </li>
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

            <div class="max-w-screen-xl px-4 py-3 mx-auto">
                <div class="flex items-center">
                    <ul class="flex flex-row font-medium mt- 0 space-x-8 rtl:space-x-reverse text-sm">
                        <li>
                            <a href="{{ route('dashboard') }}"
                                class="{{ request()->routeIs('dashboard') ? 'active-link' : '' }}"
                                aria-current="{{ request()->routeIs('dashboard') ? 'page' : '' }}">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('leaderboard') }}"
                                class="{{ request()->routeIs('leaderboard') ? 'active-link' : '' }}"
                                aria-current="{{ request()->routeIs('leaderboard') ? 'page' : '' }}">Leaderboard</a>
                        </li>
                        <li>
                            <a href="{{ route('characters') }}"
                                class="{{ request()->routeIs('characters') ? 'active-link' : '' }}"
                                aria-current="{{ request()->routeIs('characters') ? 'page' : '' }}">Mga Tauhan</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <script>
        // Initialize Flowbite dropdowns
        document.addEventListener('DOMContentLoaded', function () {
            const dropdownButton = document.getElementById('user-menu-button');
            const dropdownMenu = document.getElementById('user-dropdown');

            dropdownButton.addEventListener('click', function () {
                dropdownMenu.classList.toggle('hidden');
            });

            // Close dropdown if clicked outside
            window.addEventListener('click', function (event) {
                if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                    dropdownMenu.classList.add('hidden');
                }
            });
        });
    </script>
</body>

</html>
