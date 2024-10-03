@extends('layouts.app')

@section('content')
<body style="background-color: crimson" >

<div  class="container">
    <h2>Edit Employee</h2>

    <form method="POST" action="{{ route('employees.update', $employee) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $employee->name }}" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">phone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $employee->phone }}" required>
        </div>
        <div class="mb-3">
            <label for="imges" class="form-label">imges</label>
            <input type="file" class="form-control" id="imges" name="imges" value="{{ $employee->imges }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Employee</button>
    </form>
</div>
</body>
@endsection
