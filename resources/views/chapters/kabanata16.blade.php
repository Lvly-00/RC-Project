<!DOCTYPE html>
<html>

<head>
    <title>Maintenance Page</title>
    @vite(['resources\css\app.css'])
</head>

<body>
    <div class="loader-container">
        <div class="loader">
            <div class="dot-one"></div>
            <div class="dot-two"></div>
            <div class="dot-three"></div>
        </div>
        <div class="message">
            <p>Maraming Salamat sa iyong partisipasyon sa Beta Test.</p>
        </div>
        <a href="{{ route('chapters') }}" class="btn-danger">Back</a>
    </div>
</body>

</html>
