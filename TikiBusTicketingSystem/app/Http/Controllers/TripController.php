<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;


class TripController extends Controller
{
    public function index() {
    return view('trips.create');
}

public function store(Request $request) {
    Trip::create($request->all());

    return redirect()->route('trips.index');
}

}

