<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url_for('static', filename='css/style.css') }}">
    <title>Main Web</title>
</head>
<body>
    <h1>Welcome to the Drug Finder</h1>
    <button onclick="window.location.href='{{ url_for('search') }}'">Search Drug by Image</button>
    <button onclick="window.location.href='{{ url_for('testwebcam') }}'">Search Drug by Webcam</button>
</body>
</html>
