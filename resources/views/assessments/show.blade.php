<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assessment - Show</title>
</head>
<body>
    <h1>Assessment - Show</h1>
    <a>Assessment Name: {{ $assessment -> name }}</a><br>
    <a>Type: {{ $assessment -> type }}</a><br>
    <a>Percentage: {{ $assessment -> percentage }}</a><br>
    <a>Subject ID: {{ $assessment -> subject_id }}</a><br>
    <a>Remarks: {{ $assessment -> remarks }}</a><br>
</body>
</html>
