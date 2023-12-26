@extends('layouts.app')

@section('content')
    <h1>Trips</h1>

    <ul>
        @foreach($trips as $trip)
            <li>{{ $trip->from_location_id }} to {{ $trip->to_location_id }} on {{ $trip->trip_date }}</li>
        @endforeach
    </ul>

    <a href="{{ route('trips.create') }}">Create Trip</a>
@endsection
