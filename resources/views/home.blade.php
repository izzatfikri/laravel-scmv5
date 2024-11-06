@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
    <div class="row">
        <div class="col-md-3">
            <a href="{{ route('lecturers.index') }}" class="btn btn-primary btn-block">Lecturer</a>
        </div>
        <div class="col-md-3">
            <a href="{{ url('/assessments') }}" class="btn btn-primary btn-block">Assessment</a>
        </div>
        <div class="col-md-3">
            <a href="{{ url('/students') }}" class="btn btn-primary btn-block">Student</a>
        </div>
        <div class="col-md-3">
            <a href="{{ url('/subjects') }}" class="btn btn-primary btn-block">Subject</a>
        </div>
    </div>
</div>
</div>
@endsection
