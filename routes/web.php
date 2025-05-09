<?php

use App\Http\Controllers\Dashboard\CustomerController;
use App\Http\Controllers\Dashboard\productController;
use App\Http\Controllers\Dashboard\supplierController;
use App\Http\Controllers\Frontend\HomeFrontendController;
use App\Http\Controllers\Frontend\LinkController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Dashboard\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Dashboard\BranchController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\PurchaseController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(HomeFrontendController::class)->group(function () {
    Route::get('/', 'homeFrontend');
});
//product-------
Route::prefix('dashboard/product')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('products.index');
    Route::get('/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/store', [ProductController::class, 'store'])->name('products.store');
    Route::get('/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/{product}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');  // This is where you define destroy
    Route::post('/complete-purchase', [ProductController::class, 'completePurchase']);
});
//end-------

 // Routes for managing stock----
   
 // Routes end----


Route::get('/layout', [HomeFrontendController::class, 'customername']);
Route::get('/home', [LinkController::class, 'index']);
Route::get('/contact', [LinkController::class, 'contact']);
Route::get('/aboutus', [LinkController::class, 'aboutus']);
Route::get('/service', [LinkController::class, 'service']);
Route::get('/booking', [LinkController::class, 'booking']);
Route::get('/team', [LinkController::class, 'team']);
Route::get('/testimonial', [LinkController::class, 'testimonial']);
Route::get('/404', [LinkController::class, 'P404']);
Route::get('/shop', [LinkController::class, 'shop']);

Route::middleware(['auth', 'verified'])->group(function () {

    Route::controller(HomeController::class)->group(function () {
        Route::get('/dashboard', 'homeDashboard')->name('dashboard');
    });

    include __DIR__ . '/admin/user.php';
    include __DIR__ . '/admin/profile.php';
    include __DIR__ . '/admin/customer.php';
    include __DIR__ . '/admin/booking.php';


    Route::get('dashboard/branch', [BranchController::class, 'branchDashboard']);
    // Route::get('dashboard/customer', [CustomerController::class, 'customerDashboard']);
    
    Route::get('dashboard/stock', [productController::class, 'stock']);
    Route::get('dashboard/product_type_3', [productController::class, 'productType3']);
    Route::get('dashboard/supplier', [supplierController::class, 'supplier']);
    Route::get('/create_user', [UserController::class, 'createUserDashboard']);
});

    //Booking
    Route::middleware('auth:customer')->group(function () {
        // Display booking creation form
        Route::get('/booking/create', [BookingController::class, 'create'])->name('booking.create');


        // Store a new booking
        Route::post('/booking/store', [BookingController::class, 'store'])->name('booking.store');

        // Show the list of bookings
        Route::get('/booking/list', [BookingController::class, 'list'])->name('booking.list');

        // Show the details of a specific booking
        Route::get('/booking/{id}', [BookingController::class, 'show'])->name('booking.show');
    });


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




require __DIR__ . '/auth.php';
