@extends('layouts.app')

@section('content')
    <h1>Create User</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="User">User:</label>
            <input type="text" class="form-control" name="User" required>
        </div>
        <div class="form-group">
            <label for="Username">Username:</label>
            <input type="text" class="form-control" name="Username" required>
        </div>
        <div class="form-group">
            <label for="Password">Password:</label>
            <input type="password" class="form-control" name="Password" required>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
