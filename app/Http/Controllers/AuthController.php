<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        try {
            // Validate the incoming login request
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }

            if (User::where('email', $request->email)->exists()) {
                return response()->json(['message' => 'Email sudah ada'], 409);
            }

            // create new user
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                // 'nim' => $request->nim,
                'password' => bcrypt($request->password),

                // 'phone_number' => $request->phone_number,
                // 'avatar' => 'avatar_default.png' 

                // 'avatar' => $request->avatar,
                // 'phone_number' => $request->phone_number,

            ]);

            // create token by : email user 
            // duration daily() : 24 hours
            $token = $user->createToken($request->email)->plainTextToken;

            return response()->json([
                'message' => 'User berhasil terdaftar',
                'token' => $token
            ], 201);

        } catch (\Exception $e) {
            return response()->json(['message' => 'Gagal mendaftarkan User', 'error' => $e->getMessage()], 500);
        }
    }

    public function login(Request $request)
    {
        try {
            // Validate the incoming login request
            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
                'password' => 'required',
            ]);
    
            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 400);
            }
    
            // Check if the user exists in the database // role in
            $user = User::where('email', $request->email)->first();
    
            if (!$user) {
                return response()->json(['message' => 'Akun pengguna tidak ditemukan!'], 404);
            }
    
            // Verify the password
            if (!Hash::check($request->password, $user->password)) {
                return response()->json(['message' => 'Konfirmasi Password Tidak Valid!'], 401);
            }
    
            // If the credentials are valid, create a token for the user (you can use JWT or Laravel Sanctum)
            $token = $user->createToken($request->email)->plainTextToken;
    
            return response()->json([
                'message' => 'User logged in successfully', 
                'token' => $token,
                'user_id' => $user->id
            ], 200);
            
        } catch (\Exception $e) {
            return response()->json(['message' => 'Gagal Autentifikasi Masuk', 'error' => $e->getMessage()], 500);
        }
    }

    public function logout(Request $request)
    {
        try {
            // Revoke the token for the authenticated user
            $request->user()->tokens()->delete();
            // Auth::user()->tokens()->delete();

            return response()->json(['message' => 'Berhasil Keluar, Sampai Jumpa!'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Gagal ', 'error' => $e->getMessage()], 500);
        }
    }
}
