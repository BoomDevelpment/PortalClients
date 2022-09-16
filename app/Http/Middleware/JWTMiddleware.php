<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenBlacklistedException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;

use Symfony\Component\HttpFoundation\Response;

class JWTMiddleware extends Middleware
{
    /**
     * Exclude these routes from authentication check.
     *
     * @var array
     */
    protected $except = [
        'api/logout',
        'api/refresh',
    ];

    /**
     * Ensure the user is authenticated.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        try {
            foreach ($this->except as $excluded_route) {
                if ($request->path() === $excluded_route) {
                    \Log::debug("Skipping $excluded_route from auth check...");
                    return $next($request);
                }
            }

            \Log::debug('Authenticating... '. $request->url());

            JWTAuth::parseToken()->authenticate();

            return $next($request);
        } catch (TokenExpiredException $e) {
            
            \Log::debug('Token Expired');
            
            try {
                
                $customClaims   =   [];
                $refreshedToken =   JWTAuth::claims($customClaims)->refresh(JWTAuth::getToken());

            } catch (TokenExpiredException $e) {
            
                return response()->json([
                    'error'     =>  'Token Expired',
                    'refresh'   =>  false,
                ], Response::HTTP_UNAUTHORIZED);
            }

            return response()->json([
                'error'     =>  'Token Expired and Refresh',
                'token'     =>  $refreshedToken,
            ], Response::HTTP_UNAUTHORIZED);

        } catch (TokenInvalidException $e) {
            
            \Log::debug('Token Invalid');

            return response()->json([
                'error'     =>   'Token Invalid',
            ], Response::HTTP_UNAUTHORIZED);

        } catch (TokenBlacklistedException $e) {
            
            \Log::debug('Token Blacklisted');
            
            return response()->json([
                'error'     =>  'Token Blacklisted',
            ], Response::HTTP_UNAUTHORIZED);

        } catch (JWTException $e) {
            
            \Log::debug('Token Absent');
            
            return response()->json([
                'error'     =>  'Token Absent',
            ], Response::HTTP_UNAUTHORIZED);

        }

    }
}