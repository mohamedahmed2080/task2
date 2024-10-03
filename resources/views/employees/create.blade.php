@extends('layouts.app')

@section('content')
<body style="background-color: silver">
<div class="container">
    <h2>Add Employee</h2>

    <form method="POST" action="{{ route('employees.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" >
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" >
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">phone</label>
            <input type="text" class="form-control" id="phone" name="phone" >
        </div>
        <div class="mb-3">
            <label for="imges" class="form-label">imges</label>
            <input type="file" class="form-control" id="imges"  name="imges" >
        </div>
        <div class="mb-3">
            <label for="manager_id" class="form-label">manager_id</label>
            <input type="text" class="form-control" id="manager_id"  name="manager_id" >
        </div>
        <button type="submit" class="btn btn-primary">Add Employee</button>
    </form>
</div>
</body>
@endsection
