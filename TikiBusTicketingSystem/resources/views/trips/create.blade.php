@extends('layouts.app')

@section('content')
    <h1>Create Trip</h1>

    <form action="{{ route('trips.store') }}" method="post">
        @csrf
        <label for="from_location_id">From Location:</label>
        <input type="text" name="from_location_id" required>

        <label for="to_location_id">To Location:</label>
        <input type="text" name="to_location_id" required>

        <label for="trip_date">Trip Date:</label>
        <input type="date" name="trip_date" required>

        <button type="submit">Create Trip</button>
    </form>
@endsection
