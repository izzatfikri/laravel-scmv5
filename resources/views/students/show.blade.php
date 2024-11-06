<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student - Show</title>
</head>
<body>
    <h1>Student - Show</h1>
    <a>Student Name: {{ $student -> name }}</a><br>
    <a>Student ID: {{ $student -> studentNo }}</a><br>
    <a>Email: {{ $student -> email }}</a><br>
</body>
</html>
