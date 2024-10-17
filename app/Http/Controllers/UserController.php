<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    
    public function LoginFrom()
    {
        return view('auth.login');
    }
    public function registration()
    {
        return view('registration');
    }




    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:3',
            'password_confirmation' => 'required|same:password',
        ]);

        $validator->setCustomMessages([
            'name.required' => 'Name is required.',
            'email.required' => 'Email is required.',
            'email.email' => 'Email must be a valid email address.',
            'email.unique' => 'This email has already been taken.',
            'password.required' => 'Password is required.',
            'password_confirmation.required' => 'Confirm Password is required.',
            'password_confirmation.same' => 'The confirmation password must match.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'data' => $validator->errors(),
            ]);
        }

        // Create new user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        // Return a success response
        return response()->json([
            'code' => '200',
            'status' => 'Success',
            'msg' => 'Registration completed successfully',
            'routeUrl' => url('login'), 
        ]);

       
    }








    public function authenticate(Request $request)
    {
        
    
        try {
            // Validate the incoming request data
            $request->validate([
                'email' => 'required|string',
                'password' => 'required|string',
            ]);
    
            $credentials = $request->only('email', 'password');
    
            // Attempt to authenticate the user
            if (Auth::attempt($credentials)) {
                // Authentication passed, get the authenticated user
                $user = Auth::user();
    
                // Optionally return user data
                return response()->json([
                    'statusCode' => 200,
                    'route' => '/dashboard', 
                    'message' => 'Login successful!',
                    'user' => $user, 
                ]);
            } else {
                // Invalid credentials
                return response()->json([
                    'statusCode' => 401,
                    'message' => 'Login failed. Invalid credentials.',
                ]);
            }
        } catch (\Exception $e) {
            // Handle exceptions
            return response()->json([
                'statusCode' => 500, // Internal Server Error
                'message' => 'An error occurred: ' . $e->getMessage(),
            ]);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }


}
