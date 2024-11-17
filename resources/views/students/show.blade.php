@extends('layouts.app2')
@section('content')
<body>
    <div class="container-fluid">
    <h1>Student - Show</h1>
    <div class="card">
        <div class="card-header">
            Student Details
        </div>
        <div class="card-body">
            <h5>Student Name: {{ $student -> name }}</h5>
            <h5>Student ID: {{ $student -> studentNo }}</h5>
            <h5>Email: {{ $student -> email }}</h5>
        </div>
    </div>
    </div>
</body>
@endsection
