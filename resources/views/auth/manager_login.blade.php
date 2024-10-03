@extends('layouts.app')

@section('content')
<body style="background-color: red">
<div style="border: 3px solid black; padding: 15px; border-radius: 10px;box-shadow: 10px 10px  5px gold; " class="container">
    <h2>Manager Login</h2>
    <form method="POST" action="{{ url('manager/login') }}">
        @csrf

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>
<br>
@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</body>
@endsection
