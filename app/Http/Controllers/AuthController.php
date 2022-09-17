<?php

namespace App\Http\Controllers;

use JWTAuth;
use JWTFactory;
use App\Models\User;
use Illuminate\Http\Request;

use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Validator;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{

    /**
     * Get a View Login Client Portal
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        return view('pages/auth/login');
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function authenticate(Request $request)
    {
        $credentials    =   $request->only(['username', 'password']);
       
        $validator      =   Validator::make($request->all(), [
            'username' => 'required|string|min:5',
            'password' => 'required|string|min:5',
        ]);
        
        if ($validator->fails()) 
        {
            return response()->json([                	
                'success' => false,
                'message' => 'Login credentials are invalid.'
            ], Response::HTTP_UNAUTHORIZED);
        }

        $user   =   User::GetUserLogin($request);
        
        $info   =   ($user == 1) ? ['time' => env('JWT_TTL'), 'url' => 'client'] : ['time' => env('JWT_TTL_OPE'), 'url' => 'dashboard'] ;
       
        try {
            if (! $token = JWTAuth::attempt($credentials, ['exp' => auth()->factory()->getTTL() * $info['time']])) {
                return response()->json([
                	'success' => false,
                	'message' => 'Login credentials are invalid.',
                ], Response::HTTP_UNAUTHORIZED);
            }
        
        } catch (JWTException $e) {

            return response()->json([
                'success' => false,
                'message' => 'Could not create token.',
            ], Response::HTTP_UNAUTHORIZED);

        }

        return response()->json([
            'success'   =>  true,
            'token'     =>  $token,
            'url'       =>  url($info['url'])
        ],  Response::HTTP_OK);
    }

    public function getuser(Request $request)
    {
        $this->validate($request, [
            'token' =>  'required'
        ]);
 
        $user   =   JWTAuth::authenticate($request->token);
 
        return response()->json(['user' => $user]);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        
        return response()->json(auth()->user());

    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken(string $token)
    {
        return response()->json([
            'access_token'  =>  $token,
            // 'token_type'    => 'bearer',
            // 'expires_in'    => auth()->factory()->getTTL() * 60
        ]);
    }
}
