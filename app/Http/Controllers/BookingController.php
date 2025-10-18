<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /*public function index()
    {
        $bookings = Booking::all();
        return view('bookings.index', compact('bookings'));
    }*/
        public function index()
{
    $bookings = Booking::where('user_id', auth()->id())->get();
    return view('bookings.index', compact('bookings'));
}


    public function create()
    {
        $services = ['Transport', 'Meeting', 'Event'];
        $statuses = ['Pending', 'Confirmed', 'Cancelled'];
        return view('bookings.create', compact('services', 'statuses'));
    }

    /*public function store(Request $request)
    {
        $request->validate([
            'customer_name' => 'required',
            'email' => 'required|email',
            'booking_date' => 'required|date',
            'service_type' => 'required',
            'status' => 'required',
        ]);

        Booking::create($request->all());
        return redirect()->route('bookings.index')->with('success', 'Booking created successfully.');
    }*/
        public function store(Request $request)
{
    $request->validate([
        'customer_name' => 'required',
        'email' => 'required|email',
        'booking_date' => 'required|date',
        'service_type' => 'required',
        'status' => 'required',
    ]);

    // Attach booking to logged-in user
    Booking::create([
        'user_id' => auth()->id(),
        'customer_name' => $request->customer_name,
        'email' => $request->email,
        'booking_date' => $request->booking_date,
        'service_type' => $request->service_type,
        'status' => $request->status,
    ]);

    return redirect()->route('bookings.index')->with('success', 'Booking created successfully.');
}


    public function edit(Booking $booking)
    {
        $services = ['Transport', 'Meeting', 'Event'];
        $statuses = ['Pending', 'Confirmed', 'Cancelled'];
        return view('bookings.edit', compact('booking', 'services', 'statuses'));
    }

    public function update(Request $request, Booking $booking)
    {
        $request->validate([
            'customer_name' => 'required',
            'email' => 'required|email',
            'booking_date' => 'required|date',
            'service_type' => 'required',
            'status' => 'required',
        ]);

        $booking->update($request->all());
        return redirect()->route('bookings.index')->with('success', 'Booking updated successfully.');
    }

    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect()->route('bookings.index')->with('success', 'Booking deleted successfully.');
    }
}
