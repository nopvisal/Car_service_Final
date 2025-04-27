<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function create()
    {
        // Get all available services
        $services = Service::all(); // Get all services from the database

        // Get logged-in customer info
        $customer = Auth::guard('customer')->user();

        // Pass the services and customer info to the view
        return view('frontend.home.index', compact('services', 'customer'));
    }

    // Store a new booking
    public function store(Request $request)
    {
        // Validate the incoming data
        $request->validate([
            'phone' => 'required|string', // Validate phone field
            'email' => 'required|email', // Validate email field
            'service_id' => 'required|exists:services,id', // Ensure service exists
            'service_date' => 'required|date', // Ensure service date is provided
            'special_request' => 'nullable|string', // Special request is optional
        ]);

        // Create the booking and associate it with the logged-in customer
        $booking = Booking::create([
            'customer_id' => Auth::guard('customer')->id(), // Logged-in customer ID
            'phone' => $request->phone, // Phone input from form
            'email' => $request->email, // Email input from form
            'service_id' => $request->service_id, // Selected service ID
            'service_date' => $request->service_date, // Service date from form
            'special_request' => $request->special_request, // Special request from form
        ]);

        // Redirect to the booking list page (or another page) with a success message
        return redirect('/')->with('success', 'Booking successfully created!');
    }

    // List all bookings for the authenticated customer
    public function list()
    {
        // Get all bookings associated with the logged-in customer
        $bookings = Booking::where('customer_id', Auth::guard('customer')->id())->get();

        // Pass the bookings to the view
        return view('frontend.booking.list', compact('bookings'));
    }

    // Show the details of a specific booking (optional)
    public function show($id)
    {
        $booking = Booking::findOrFail($id); // Find the booking by ID

        // Ensure the booking belongs to the authenticated customer
        if ($booking->customer_id !== Auth::guard('customer')->id()) {
            abort(403); // Forbidden if the booking does not belong to the authenticated customer
        }

        // Pass the booking to the view
        return view('frontend.booking.show', compact('booking'));
    }
}
