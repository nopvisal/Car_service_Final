<?php

namespace App\Http\Controllers\Dashboard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Customer;
use App\Models\Service;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    public function bookingDashboard()
    {
        $services = Service::all();
        $customers = Customer::all();
        return view('dashboard.booking.index', compact('customers', 'services'));
    }
    public function fetchBookingRecord(Request $request)
    {
        $data = Booking::select('bookings.*', 'customers.name as customer_name','services.name as service_name')
        ->leftJoin('customers', 'bookings.customer_id', '=', 'customers.id')
        ->leftJoin('services', 'bookings.service_id', '=', 'services.id')
        ->get();
    return response()->json($data);
    }

    public function createBookingRecord(Request $request){
        $validator = Validator::make($request->all(), [
            'customer_id'     => 'required|integer',
            'service_id'      => 'required|integer',
            'phone'           => ['required', 'regex:/^0[1-9][0-9]{7,8}$/'], // Cambodian phone format
            'email'           => 'required|email|unique:customers,email|max:191',
            'service_date'    => 'required|date',
            'special_request' => 'required|string|max:1000', // optional max length
        ]);

        // If validation fails, return error response
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            // Insert data using Query Builder
            $booking =DB::table('bookings')->insert([
                'customer_id' => $request->customer_id,
                'service_id' => $request->service_id,
                'phone' => $request->phone,
                'email' => $request->email,
                'service_date' => $request->service_date,
                'special_request' => $request->special_request,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Booking created successfully',
                'data' => $booking, // Return the created record
            ], 201);

        } catch (\Exception $e) {
            // Handle errors and exceptions
            return response()->json([
                'success' => false,
                'message' => 'Error creating Booking: ' . $e->getMessage(),
            ], 500);
        }

    }
    public function updateBookingRecord(Request $request){
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'customer_id'     => 'required|integer',
            'service_id'      => 'required|integer',
            'phone'           => ['required', 'regex:/^0[1-9][0-9]{7,8}$/'], // Cambodian phone format
            'email'           => 'required|email|unique:customers,email|max:191',
            'service_date'    => 'required|date',
            'special_request' => 'required|string|max:1000', // optional max length
        ]);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }
        try {

            $updateData = [
                'customer_id' => $request->customer_id,
                'service_id' => $request->service_id,
                'phone' => $request->phone,
                'email' => $request->email,
                'service_date' => $request->service_date,
                'special_request' => $request->special_request,
                'updated_at' => now(),
            ];

            $updated = DB::table('bookings')
            ->where('id', $request->id)
            ->update($updateData);

            if ($updated) {
                // Get the updated user data with role name
                $booking = DB::table('bookings')
                    ->where('bookings.id', $request->id)
                    ->select('bookings.*')
                    ->first();

                return response()->json([
                    'success' => true,
                    'message' => 'Booking updated successfully',
                    'data' => $booking
                ]);
            }

            return response()->json([
                'success' => false,
                'message' => 'No changes were made',
            ]);

        } catch (\Exception $e) {
            // Return error response
            return response()->json([
                'success' => false,
                'message' => 'Error updating booking: ' . $e->getMessage(),
            ], 500);
        }
    }
    public function deleteBookingRecord($id)
    {
        try {
            $booking = DB::table('bookings')
                ->where('id', $id)
                ->first();

            if (!$booking) {
                return response()->json([
                    'success' => false,
                    'message' => 'Booking not found'
                ], 404);
            }

            // Prevent deletion of admin users
          

            $deleted = DB::table('bookings')
                ->where('id', $id)
                ->delete();

            if ($deleted) {
                return response()->json([
                    'success' => true,
                    'message' => 'Booking deleted successfully',
                    'data' => ['id' => $id]
                ]);
            }

            return response()->json([
                'success' => false,
                'message' => 'Booking could not be deleted'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error deleting booking: ' . $e->getMessage()
            ], 500);
        }
    }
}
