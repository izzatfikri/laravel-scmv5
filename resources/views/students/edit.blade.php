@extends('layouts.app2')
@section('content')
<div class="container">
        <h1>Students - Edit</h1>
        <form method="POST" action="{{ route('students.update', $student->id) }}">
            @method('PUT')
            <!--Prevention for phishing-->
            @csrf 
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter name" name="name" value="{{ $student->name }}">
            </div>
            <div class="form-group">
                <label>Student ID</label>
                <input type="text" class="form-control" placeholder="Enter student id" name="studentNo" value="{{ $student->studentNo }}">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter email" name="email" value="{{ $student->email }}">
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
@endsection