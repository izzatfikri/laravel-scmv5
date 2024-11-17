@extends('layouts.app2')
@section('content')
<div class="container">
        <h1>Subjects - Edit</h1>
        <form method="POST" action="{{ route('subjects.update', $subject->id) }}">
            @method('PUT')
            <!--Prevention for phishing-->
            @csrf 
            <div class="form-group">
                <label>Code</label>
                <input type="text" class="form-control" placeholder="Enter subject code" name="code" value="{{ $subject->code }}">
            </div>
            <div class="form-group">
                <label>Student ID</label>
                <input type="text" class="form-control" placeholder="Enter subject name" name="name" value="{{ $subject->name }}">
            </div>
            <div class="form-group">
                <label>Credit Hours</label>
                <input type="integer" class="form-control" placeholder="Enter credit hour" name="creditHours" value="{{ $subject->creditHours }}">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection