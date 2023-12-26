<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Models\Trip;
use App\Models\SeatAllocation;



class TicketController extends Controller
{
    public function showAvailableSeats($tripId) {
        $trip = Trip::findOrFail($tripId);
        return view('tickets.show', compact('trip'));
    }

    public function purchaseTicket(Request $request, $tripId) {
        
        SeatAllocation::create([
            'trip_id' => $tripId,
            'user_id' => auth()->user()->id, 
            'seat_number' => $request->seat_number,
        ]);

        return redirect()->route('trips.index');
    }
}
