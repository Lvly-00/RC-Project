<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=// resources/views/leaderboard.blade.php
    <meta http-equiv="X-UA-Compatible"
        content="ie=edge">
    @vite(['resources\css\leaderboard.css', 'resources\js\leaderboard.js'])

    <title>Document</title>
</head>

<body style="background: url('{{ asset('FrontendAssets/homepage.png') }}') no-repeat center center fixed; background-size: cover;">

    <div class="container">
        <h1>Leaderboard</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Total Score</th>
                </tr>
            </thead>
            <tbody>                 
                @foreach ($leaderboard as $entry)
                    <tr>
                        <td>{{ $entry->name }}</td>
                        <td>{{ $entry->total_score }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
