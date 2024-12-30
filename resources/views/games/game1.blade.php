<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <!-- resources/views/games/game1.blade.php -->

        <h1>Level 1 Game</h1>
        <p>Description: {{ $description }}</p>
        <!-- Add your game logic here -->


        @if (session('word'))
            <h2>Guess the Word!</h2>
            <p>Description: {{ session('description') }}</p>

            <!-- Display the current state of the guessed word -->
            <p>Word:
                @php
                    $word = session('word');
                    $guesses = session('guesses', []);
                    $displayWord = '';

                    foreach (str_split($word) as $letter) {
                        $displayWord .= in_array($letter, $guesses) ? $letter . ' ' : '_ ';
                    }
                @endphp
                {{ trim($displayWord) }}
            </p>

            <!-- Show attempts left -->
            <p>Attempts left: {{ session('attempts') }}</p>

            <!-- Display guessed letters -->
            <p>Guessed Letters:
                @if (!empty($guesses))
                    {{ implode(', ', $guesses) }}
                @else
                    None yet.
                @endif
            </p>

            <!-- Display the alphabet -->
            <div>
                <h3>Remaining Attempts: {{ session('attempts', 5) }}</h3>

                <h3>Choose a letter:</h3>
                <div>
                    @foreach (range('A', 'Z') as $letter)
                        @php
                            // Your existing logic for determining the button class or style
                            $isDisabled = session('attempts', 5) <= 0; // Check if attempts are zero or less
                        @endphp
                        <form action="{{ route('guess') }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" name="letter" value="{{ $letter }}"
                                style="
                border: none;
                margin: 2px;
                padding: 10px;
                font-size: 16px;
                cursor: {{ $isDisabled ? 'not-allowed' : 'pointer' }};"
                                {{ $isDisabled ? 'disabled' : '' }}> <!-- Disable button if game is over -->
                                {{ $letter }}
                            </button>
                        </form>
                    @endforeach
                </div>

                @if (session('attempts', 5) <= 0)
                    <h3>Game Over! No attempts left.</h3>
                @endif

                <pre>{{ print_r($guesses, true) }}</pre>
                <pre>{{ $word }}</pre>

                <!-- Restart game button -->
                @if (session('attempts', 5) <= 0)
                    <h3>Game Over! No attempts left.</h3>
                    <form action="{{ route('restart') }}" method="GET">
                        @csrf
                        <button type="submit">Restart Game</button>
                    </form>
                @endif
                <!-- Display messages -->
                @if (session('message'))
                    <p>{{ session('message') }}</p>
                @endif
            @else
                <h2>Welcome to the Hangman Game!</h2>
                <p>Please select a level to start.</p>
        @endif


        <a href="{{ route('index', ['level' => 'level2']) }}">Go to Level 2</a>

</body>



{{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                {{ __('Game1') }}

            </div>
        </div>
    </div> --}}


</body>

</html>
