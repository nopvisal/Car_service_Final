<?php

namespace App\Http\Controllers\Dashboard;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function index()
    {
        return view('dashboard.user.index');
    }

    

//\\
    public function fetchUserRecord(Request $request)
    {
        $data = DB::table('users')
            ->join('roles', 'users.role_id', '=', 'roles.id')
            ->select(
                'users.id',
                'users.role_id',
                'roles.name as role_name', // Get role name
                'users.name',
                'users.email',
                'users.status',
                'users.language'
            )
            ->orderBy('users.id', 'asc')
            ->get();

        return response()->json($data);
    }

    public function fetchUserRole()
    {
        $roles = DB::table('roles')->select('id', 'name')->get();
        return response()->json($roles);
    }

    public function fetchUserStatus()
    {
        $status = [
            ['id' => 'active', 'name' => 'Active'],
            ['id' => 'inactive', 'name' => 'Inactive'],
        ];
        return response()->json($status);
    }

    public function fetchUserLanguage()
    {
        $languages = [
            ['id' => 'kh', 'name' => 'Khmer'],
            ['id' => 'en', 'name' => 'English'],
        ];
        return response()->json($languages);
    }

    public function createUserRecord(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:191',
            'email' => 'required|email|unique:users|max:191',
            'password' => 'required|string|min:8|max:191',
            'status' => 'required|in:active,inactive',
            'role_id' => 'required|exists:roles,id',
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
            $user =DB::table('users')->insert([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role_id' => $request->role_id,
                'language' => $request->language,
                'status' => $request->status,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'User created successfully',
                'data' => $user, // Return the created record
            ], 201);

        } catch (\Exception $e) {
            // Handle errors and exceptions
            return response()->json([
                'success' => false,
                'message' => 'Error creating user: ' . $e->getMessage(),
            ], 500);
        }

    }
    public function updateUserRecord(Request $request){
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'id' => 'required|exists:users,id',
            'name' => 'required|string|max:191',
            'email' => 'required|email|max:191|unique:users,email,'.$request->id,
            'password' => 'nullable|string|min:8|max:191',
            'status' => 'required|in:active,inactive',
            'role_id' => 'required|exists:roles,id',
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
                'role_id' => $request->role_id,
                'language' => $request->language,
                'status' => $request->status,
                'updated_at' => now(),
            ];

            $updated = DB::table('users')
            ->where('id', $request->id)
            ->update($updateData);

            if ($updated) {
                // Get the updated user data with role name
                $user = DB::table('users')
                    ->join('roles', 'users.role_id', '=', 'roles.id')
                    ->where('users.id', $request->id)
                    ->select('users.*', 'roles.name as role_name')
                    ->first();

                return response()->json([
                    'success' => true,
                    'message' => 'User updated successfully',
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
    public function deleteUserRecord($id)
    {
        try {
            $user = DB::table('users')
                ->where('id', $id)
                ->first();

            if (!$user) {
                return response()->json([
                    'success' => false,
                    'message' => 'User not found'
                ], 404);
            }

            // Prevent deletion of admin users
            if ($user->role_id === 1) { // Assuming 1 is admin role_id
                return response()->json([
                    'success' => false,
                    'message' => 'Admin users cannot be deleted'
                ], 403);
            }

            $deleted = DB::table('users')
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










    // public function fetchUserRecord(Request $request){

    //     $data = DB::table('users')
    //         ->select('id','role_id', 'name', 'email', 'password', 'status', 'language')
    //         ->orderBy('users.id', 'asc')
    //         ->get();

    //     return response()->json($data);
    // }
