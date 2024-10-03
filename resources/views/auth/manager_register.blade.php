@extends('layouts.app')

@section('content')
<body style="background-color:green">
<div style="border: 3px solid black; padding: 15px; border-radius: 10px;box-shadow: 10px 10px  10px greenyellow; " class="container">
    <h2>Manager Registration</h2>
    <form method="POST" action="{{ url('manager/register') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>
</body>
@endsection
