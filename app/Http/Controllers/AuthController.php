<?php

namespace App\Http\Controllers;

use App\Traits\HttpResponse;
use App\Services\AuthService;
use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRegisterRequest;

class AuthController extends Controller
{
    use HttpResponse;

    /**
     * user login method
     *
     * @param   UserLoginRequest  $request      [validated request body]
     * @param   AuthService       $authService  [authentication service class file]
     *
     * @return  json
     */
    public function login(UserLoginRequest $request, AuthService $authService)
    {
        if ($token = $authService->login($request)) {
            return $this->sendSuccessResponse(
                'Login successful',
                [
                    'auth_token' => $token,
                    'type' => 'Bearer'
                ],
                200
            );
        }
        return $this->sendErrorResponse('Login failed', ['Invalid email or password'], 403);
    }

    /**
     * user registration method
     *
     * @param   UserRegisterRequest  $request      [validated request body]
     * @param   AuthService       $authService  [authentication service class file]
     *
     * @return  json
     */
    public function register(UserRegisterRequest $request, AuthService $authService)
    {
        if ($token = $authService->register($request)) {
            return $this->sendSuccessResponse(
                'Registration successful',
                [
                    'auth_token' => $token,
                    'type' => 'Bearer'
                ],
                201
            );
        }
        return $this->sendErrorResponse('Registration failed', ['Please try again'], 403);
    }
}
