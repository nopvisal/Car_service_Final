<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class LinkController extends Controller
{
    public function aboutus(Request $request){
        $services = Service::all(); 

        // Get the currently logged-in customer (using 'customer' guard)
        $customer = Auth::guard('customer')->user(); 
    
        return view('frontend.aboutus.index', compact('services', 'customer'));
    }
    public function booking(Request $request){
        $services = Service::all(); 

        // Get the currently logged-in customer (using 'customer' guard)
        $customer = Auth::guard('customer')->user(); 
        return view('frontend.booking.index', compact('services', 'customer'));
    }
    public function service(Request $request){
        $services = Service::all(); 

        // Get the currently logged-in customer (using 'customer' guard)
        $customer = Auth::guard('customer')->user(); 
        return view('frontend.service.index', compact('services', 'customer'));
    }
    public function P404(Request $request){
        $services = Service::all(); 

        // Get the currently logged-in customer (using 'customer' guard)
        $customer = Auth::guard('customer')->user(); 
        return view('frontend.404.index', compact('services', 'customer'));
    }
    public function contact(Request $request){
        $services = Service::all(); 

        // Get the currently logged-in customer (using 'customer' guard)
        $customer = Auth::guard('customer')->user(); 
        return view('frontend.contact.index', compact('services', 'customer'));
    }
    public function team(Request $request){
        $services = Service::all(); 

        // Get the currently logged-in customer (using 'customer' guard)
        $customer = Auth::guard('customer')->user(); 
        return view('frontend.team.index', compact('services', 'customer'));
    }
    public function index(Request $request){
        $services = Service::all(); 

        // Get the currently logged-in customer (using 'customer' guard)
        $customer = Auth::guard('customer')->user(); 
        return view('frontend.home.index', compact('services', 'customer'));
    }
    public function testimonial(Request $request){
        $services = Service::all(); 

        // Get the currently logged-in customer (using 'customer' guard)
        $customer = Auth::guard('customer')->user(); 
        return view('frontend.testimonial.index', compact('services', 'customer'));
    }
    public function login(Request $request){
        $services = Service::all(); 

        // Get the currently logged-in customer (using 'customer' guard)
        $customer = Auth::guard('customer')->user(); 
        return view('login', compact('services', 'customer'));
    }
    public function signup(Request $request){
        $services = Service::all(); 

        // Get the currently logged-in customer (using 'customer' guard)
        $customer = Auth::guard('customer')->user(); 
        return view('signup', compact('services', 'customer'));
    }
    public function shop(Request $request){
        $services = Service::all(); 
        $products = Product::all();

        // Get the currently logged-in customer (using 'customer' guard)
        $customer = Auth::guard('customer')->user(); 
        return view('frontend.shop.index', compact('services', 'customer','products'));
    }

}