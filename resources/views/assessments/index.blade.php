@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assessment - Index</title>
</head>
<body>
    <div class="container">
    <h1>Assessment - List</h1>
    <button type="button" class="btn btn-outline-primary"><a href="{{ route('assessments.create') }}">Add New Assessment</a></button>
    <table class="table" border="1">
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Type</th>
            <th>Percentage</th>
            <th>Subject</th>
            <th>Remarks</th>
            <th>Action</th>
        </tr>
        @if ($assessments -> count() > 0)
        <?php $no = 1; ?>
            @foreach ($assessments as $assessment)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $assessment -> name }}</td>
                    <td>{{ $assessment -> type }}</td>
                    <td>{{ $assessment -> percentage }}</td>
                    <td>{{ $assessment -> subject -> name }}</td>
                    <td>{{ $assessment -> remarks }}</td>
                    <td>
                        <a href="{{route('assessments.show', $assessment->id)}}">Show</a>
                        <a>Edit</a>
                        <a>Delete</a>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="6">No data found</td>
            </tr>
        @endif

    </table>
    </div>
</body>
</html>
@endsection