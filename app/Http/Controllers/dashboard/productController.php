<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function product(Request $request)
    {
        return view('dashboard.product.product');
    }

    public function stock(Request $request)
    {
        return view('dashboard.product.stock');
    }

    public function productType3(Request $request)
    {
        return view('dashboard.product.product_type_3');
    }
}
