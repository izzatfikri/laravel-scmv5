@extends('layouts.app2')    
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subject - Show</title>
</head>
<body>
    <div class="container-fluid">
    <h1>Subject - Show</h1>
        <div class="card">
            <div class="card-header">
                Subject Details
            </div>
            <div class="card-body">
                <h5>Subject Code: {{ $subject -> code }}</h5>
                <h5>Subject Name: {{ $subject -> name }}</h5>
                <h5>Credit Hours: {{ $subject -> creditHours }}</h5>
            </div>
        </div>
    </div>
</body>
@endsection
