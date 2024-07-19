<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;


class UserController extends Controller
{
    //

    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if ($user) {
            return $user;
        } else {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }
    }



    public function register(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if ($user) {
            // return $user;
            return response()->json(['message' => 'User already registed'], 401);

        } else {


            $user = new User();
            $user->name = $request->name;
            $user->surname = $request->surname;
            $user->email = $request->email;
            $user->mobile = $request->mobile;
            // $user->save();
            try {
                $user->save();
            } catch (QueryException $e) {
                // Log::error('Error saving user: ' . $e->getMessage());
                return response()->json(['error' => 'Error saving user'.$e->getMessage()], 500);
            }
            // return response()->json(['message' => 'User registered successfully', 'user' => $user], 201);

        }
    }


}
