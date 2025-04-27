<?php

namespace App\Http\Controllers\Dashboard;
use Illuminate\Support\Facades\DB;
use App\Models\Customer;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function customerDashboard()
    {
        return view('dashboard.customer.index');
    }
    

    public function fetchCustomerRecord(Request $request)
    {
        $data = DB::table('customers')
            ->select(
                'customers.id',
                'customers.name',
                'customers.email',
                'customers.status',
                'customers.language'
            )
            ->orderBy('customers.id', 'asc')
            ->get();

        return response()->json($data);
    }

   

    public function fetchCustomerStatus()
    {
        $status = [
            ['id' => 'active', 'name' => 'Active'],
            ['id' => 'inactive', 'name' => 'Inactive'],
        ];
        return response()->json($status);
    }

    public function fetchCustomerLanguage()
    {
        $languages = [
            ['id' => 'kh', 'name' => 'Khmer'],
            ['id' => 'en', 'name' => 'English'],
        ];
        return response()->json($languages);
    }

    public function createCustomerRecord(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:191',
            'email' => 'required|email|unique:customers|max:191',
            'password' => 'required|string|min:8|max:191',
            'status' => 'required|in:active,inactive',
            'language' => 'required|in:kh,en',
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
            $customer =DB::table('customers')->insert([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'language' => $request->language,
                'status' => $request->status,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Customer created successfully',
                'data' => $customer, // Return the created record
            ], 201);

        } catch (\Exception $e) {
            // Handle errors and exceptions
            return response()->json([
                'success' => false,
                'message' => 'Error creating Customer: ' . $e->getMessage(),
            ], 500);
        }

    }
    public function updateCustomerRecord(Request $request){
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'id' => 'required|exists:customers,id',
            'name' => 'required|string|max:191',
            'email' => 'required|email|max:191|unique:customers,email,'.$request->id,
            'password' => 'nullable|string|min:8|max:191',
            'status' => 'required|in:active,inactive',
            'language' => 'required|in:kh,en',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }


        try {

            $updateData = [
                'name' => $request->name,
                'email' => $request->email,
                'language' => $request->language,
                'status' => $request->status,
                'updated_at' => now(),
            ];

            $updated = DB::table('customers')
            ->where('id', $request->id)
            ->update($updateData);

            if ($updated) {
                // Get the updated user data with role name
                $user = DB::table('customers')
                    ->where('customers.id', $request->id)
                    ->select('customers.*')
                    ->first();

                return response()->json([
                    'success' => true,
                    'message' => 'customers updated successfully',
                    'data' => $user
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
                'message' => 'Error updating course: ' . $e->getMessage(),
            ], 500);
        }
    }
    public function deleteCustomerRecord($id)
    {
        try {
            $customer = DB::table('customers')
                ->where('id', $id)
                ->first();

            if (!$customer) {
                return response()->json([
                    'success' => false,
                    'message' => 'customers not found'
                ], 404);
            }

            // Prevent deletion of admin users
          

            $deleted = DB::table('customers')
                ->where('id', $id)
                ->delete();

            if ($deleted) {
                return response()->json([
                    'success' => true,
                    'message' => 'User deleted successfully',
                    'data' => ['id' => $id]
                ]);
            }

            return response()->json([
                'success' => false,
                'message' => 'User could not be deleted'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error deleting user: ' . $e->getMessage()
            ], 500);
        }
    }
}
