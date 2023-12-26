@extends('layouts.app')

@section('content')
    <h1>Book Ticket</h1>

    <form action="{{ route('tickets.store') }}" method="post">
        @csrf
        <label for="user_id">User ID:</label>
        <input type="text" name="user_id" required>

        <label for="trip_id">Trip ID:</label>
        <input type="text" name="trip_id" required>

        <label for="seat_number">Seat Number:</label>
        <input type="text" name="seat_number" required>

        <button type="submit">Book Ticket</button>
    </form>
@endsection
