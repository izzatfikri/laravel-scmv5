@extends('layouts.app2')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecturers - Edit</title>
</head>
<body>
    <div class="container">
        <h1>Lecturers - Edit</h1>
        <form method="POST" action="{{ route('lecturers.update', $lecturer->id) }}">
            @method('PUT')
            <!--Prevention for phishing-->
            @csrf 
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter name" name="name" value="{{ $lecturer->name }}">
            </div>
            <div class="form-group">
                <label>Staff ID</label>
                <input type="text" class="form-control" placeholder="Enter staff id" name="staffNo" value="{{ $lecturer->staffNo }}">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter email" name="email" value="{{ $lecturer->email }}">
            </div>
            <div class="form-group">
                <label>Subject:</label>
                <select name="subject_id" required>
                    @foreach($subjects as $subject)
                        <option value="{{$subject->id}}">{{$subject->name}}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</body>
</html>
@endsection