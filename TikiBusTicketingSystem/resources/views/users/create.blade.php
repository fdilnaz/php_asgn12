@extends('layouts.app')

@section('content')
    <h1>Register User</h1>

    <form action="{{ route('users.store') }}" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <button type="submit">Register</button>
    </form>
@endsection
