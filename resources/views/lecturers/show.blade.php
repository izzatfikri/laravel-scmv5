@extends('layouts.app2')
@section('content')
<body>
<div class="container-fluid">
    <div class="card">
  <div class="card-header">
    Featured
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