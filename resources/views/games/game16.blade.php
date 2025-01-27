<!DOCTYPE html>
<html>

<head>
    <title>Kabanata {{ 16 }}</title>
    @vite(['resources\css\app.css', 'resources\js\app.js'])
</head>

<body>
    <div class="scroll">
        <h1>Kabanata {{ 15 }}</h1>

        <span class="loader"></span>

        <a href="{{ route('chapters') }}"><button class="btn-danger">Back</button></a>

    </div>

    <div id="warning-modal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <p id="warning-message"></p>
            <p id="score-message"></p>
        </div>
    </div>
</body>

</html>
