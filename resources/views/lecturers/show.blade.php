@extends('layouts.app2')
@section('content')
<body>
<div class="container-fluid">
<h1>Lecturer - Show</h1>
    <div class="card">
  <div class="card-header">
    Lecturer Details
  </div>
  <div class="card-body">
    <h5>Lecturer Name: {{ $lecturer -> name }}</h5>
    <h5>Staff ID: {{ $lecturer -> staffNo }}</h5>
    <h5>Email: {{ $lecturer -> email }}</h5>
  </div>
</div>
</div>


</body>
@endsection
