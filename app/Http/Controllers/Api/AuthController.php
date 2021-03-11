<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Http\Request;
use App\Traits\ApiResponser;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

class AuthController extends Controller
{
    use ApiResponser;
    
    public function login(Request $request)
    {
        $rules = [
            'email'   => 'required|string|email',
            'password' => 'required|string'
        ];
        $this->validate($request, $rules);
        $email = $request->email;
        $password = $request->password;
        $user = Users::where('email', $email)->first();

        if ($user && Hash::check($password, $user->password)) {
            $tokenResult = $user->createToken('Personal Access Token');

            return $this->successResponse([
                'access_token'       => $tokenResult->accessToken,
                'token_type'         => 'Bearer',
                'expires_at'         => Carbon::parse(
                    $tokenResult->token->expires_at
                )->toDateTimeString(),
                'user'               => $user,
            ], Response::HTTP_OK);
        }

        return $this->errorResponse(['message' => "User details incorrect"], 404);
    }

    public function logout(Request $request)
    {
        $token = $request->user()->token();
        $token->revoke();
        return $this->successResponse([
            'message' => 'You have been succesfully logged out!',

        ], Response::HTTP_OK);
    }

    public function register(Request $request)
    {
        $request->validate([
            'type' => 'required|string',
            'email' => 'required|unique:users',
            'password' => 'required|string',
        ]);

        $user = new Users([
            'type' => $request->type,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => app('hash')->make($request->password),
        ]);

        $user->save();

        $tokenResult = $user->createToken('Personal Access Token');

        return $this->successResponse([
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse(
                $tokenResult->token->expires_at
            )->toDateTimeString()
        ], Response::HTTP_OK);
    }
}
