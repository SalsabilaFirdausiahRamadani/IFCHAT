
@extends('layouts.app')

@section('content')
    <h1>Edit User</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="User">User:</label>
            <input type="text" class="form-control" name="User" value="{{ $user->User }}" required>
        </div>
        <div class="form-group">
            <label for="Username">Username:</label>
            <input type="text" class="form-control" name="Username" value="{{ $user->Username }}" required>
        </div>
        <div class="form-group">
            <label for="Password">Password:</label>
            <input type="password" class="form-control" name="Password" value="{{ $user->Password }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
