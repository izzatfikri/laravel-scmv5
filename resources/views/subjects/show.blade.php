<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subject - Show</title>
</head>
<body>
    <h1>Subject - Show</h1>
    <a>Subject Code: {{ $subject -> code }}</a><br>
    <a>Subject Name: {{ $subject -> name }}</a><br>
    <a>Credit Hours: {{ $subject -> creditHours }}</a><br>
</body>
</html>
