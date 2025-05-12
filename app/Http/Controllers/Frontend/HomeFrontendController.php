<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;

class HomeFrontendController extends Controller
{
    public function homeFrontend(Request $request)
    {
        $services = Service::all(); 

        // Get the currently logged-in customer (using 'customer' guard)
        $customer = Auth::guard('customer')->user(); 
    
        // Return the view with both 'services' and 'customer' variables
        return view('frontend.home.index', compact('services', 'customer'));
    }
    public function customername(Request $request)
    {
        $services = Service::all(); 

        // Get the currently logged-in customer (using 'customer' guard)
        $customer = Auth::guard('customer')->user(); 
    
        // Return the view with both 'services' and 'customer' variables
        return view('frontend.layouts.topbar', compact('services', 'customer'));
    }
}
