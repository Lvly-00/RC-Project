
<!DOCTYPE html>
<html>
<head>
    <title>Florante at Laura</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <x-navigation-bar/>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <ul>
                    @foreach (range(1, 30) as $chapter)
                        <li>
                            <a href="{{ route('chapters.show', ['number' => $chapter]) }}">
                                Kabanata {{ $chapter }}
                            </a>
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>
</body>
</html>
