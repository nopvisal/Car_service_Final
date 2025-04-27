<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

class BookingController extends Controller
{
    public function bookingDashboard()
    {
        return view('dashboard.booking.index');
    }
}
