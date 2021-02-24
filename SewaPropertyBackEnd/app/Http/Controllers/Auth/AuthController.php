<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Controllers\Controller;
use Tymon\JWTAuth\Contracts\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;

class AuthController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->only('name', 'password');

        try {
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 400);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        return response()->json(compact('token'));
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'password' => 'required|string|max:30',
            'tenant' => 'required|string|max:30',
            'gender' => 'required|string|max:30',
            'no_phone' => 'required|number|max:30',
            'address' => 'required|string|max:255',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors()->toJson(),422);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'tenant' => $request->tenant,
            'gender' => $request->gender,
            'no_phone' => $request->no_phone,
            'address' => $request->address,
            'role' => $request->get('customer')
        ]);

        $token = JWTAuth::fromUser($user);

        return response()->json(compact('token'),201);
    }

    public function getAuthenticatedUser()
    {
        try{
            if(!$user = JWTAuth::parseToken()->authenticate()){
                return response()->json(['user_not_found'], 404);
            }
        }catch(TokenExpiredException $e){
            return response()->json(['token_expired'], $e->getStatusCode());
        }catch(TokenInvalidException $e){
            return response()->json(['token_invalid'], $e->getStatusCode());
        }catch(JWTException $e){
            return response()->json(['token_absent'], $e->getStatusCode());
        }
        return response()->json(compact('user'));
    }
}
