@extends('layouts.app')

@section('content')
    <h1>Booked Tickets</h1>

    <ul>
        @foreach($tickets as $ticket)
            <li>{{ $ticket->user_id }} - Trip: {{ $ticket->trip_id }} - Seat: {{ $ticket->seat_number }}</li>
        @endforeach
    </ul>

    <a href="{{ route('tickets.create') }}">Book Ticket</a>
@endsection
