<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\CreateUserRequest;
use App\Libs\ConfigUtil;
use App\Services\UserService;

class UserController extends Controller
{
    protected UserService $userService;

    public function __construct(UserService $userService) {
        $this->userService = $userService;
    }

    /**
     * Store a newly created user
     *
     * @param CreateUserRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CreateUserRequest $request) {
        $user = $this->userService->createUser($request->validated());

        if ($user) {
            return response()->json(['success' => true, 'message' => 'User has been created successfully', 'data' => $user], 201);
        }

        return response()->json(['success' => false, 'message' => 'Failed to create user. Please try again.'], 500);
    }
}

