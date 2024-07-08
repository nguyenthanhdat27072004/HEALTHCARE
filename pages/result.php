<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url_for('static', filename='css/style.css') }}">
    <title>Result</title>
</head>
<body>
    <h1>Prediction Result</h1>
    <p>The uploaded image is classified as: {{ drug }}</p>
    <img src="{{ url_for('static', filename='uploads/' + filename) }}" alt="Uploaded Image">
    <br>
    <a href="{{ url_for('main') }}">Go back to main page</a>
</body>
</html>
