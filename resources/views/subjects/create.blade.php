@extends('layouts.app2')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subjects - Create</title>
</head>
<body>
    <div class="container">
        <h1>Subjects - Create</h1>
        <form method="POST" action="{{ route('subjects.store') }}">
            @csrf
            <div class="form-group">
                <label>Code</label>
                <input type="text" class="form-control" placeholder="Enter subject code" name="code">
            </div>
            <div class="form-group">
                <label>Subject Name</label>
                <input type="text" class="form-control" placeholder="Enter subject name" name="name">
            </div>
            <div class="form-group">
                <label>Credit Hours</label>
                <input type="number" class="form-control" placeholder="Enter credit hours" name="creditHours">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</body>
</html>
@endsection