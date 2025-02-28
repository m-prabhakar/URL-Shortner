<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Shortener</title>
</head>
<body>
    <h2>Laravel URL Shortener</h2>
    <form action="/shorten" method="POST">
        @csrf
        <input type="url" name="original_url" placeholder="Enter URL" required>
        <button type="submit">Shorten</button>
    </form>

    @if(session('short_url'))
        <p>Shortened URL: <a href="{{ session('short_url') }}" target="_blank">{{ session('short_url') }}</a></p>
    @endif
</body>
</html>
