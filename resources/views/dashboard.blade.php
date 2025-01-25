<!DOCTYPE html>
<html>

<head>
    <title>Florante at Laura</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources\css\app.css'])

</head>
<body>
    <x-navigation-bar />

    <div class="container mt-5">
        <!-- Play Button -->
        <div class="text-center">
            <a href="{{ route('play') }}" class="btn btn-primary">
                Play
            </a>
        </div>
    </div>
</body>

</html>
