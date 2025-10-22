<?php

namespace App\Services;

use App\Repositories\UserRepository;

class UserService
{
    protected UserRepository $userRepository;

    public function __construct(UserRepository $userRepository) {
        $this->userRepository = $userRepository;
    }

    /**
     * Create a new user
     *
     * @param array $data
     * @return mixed
     */
    public function createUser(array $data)
    {
        $userData = [
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
            'user_flag' => $data['user_flag']
        ];

        return $this->userRepository->save(null, $userData);
    }
}

