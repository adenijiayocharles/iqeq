<?php

namespace App\Http\Middleware;

use Closure;
use JWTAuth;
use Exception;
use App\Traits\HttpResponse;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;

class JWTMiddleware extends BaseMiddleware
{
    use HttpResponse;

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        try {
            JWTAuth::parseToken()->authenticate();
        } catch (Exception $e) {
            if ($e instanceof TokenInvalidException) {
                return $this->sendErrorResponse("Token is invalid", [], 401);
            } else if ($e instanceof TokenExpiredException) {
                return $this->sendErrorResponse("Token has expired", [], 401);
            } else {
                return $this->sendErrorResponse("Authorization token not found", [], 401);
            }
        }
        return $next($request);
    }
}
