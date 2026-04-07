<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserRepository extends BaseRepository
{
    public function getModel() {
        return User::class;
    }

    /**
     * Get user login
     *
     * @param array $params
     * @return mixed
     */
    public function getUserLogin(array $params) {
        $query = User::query()
            ->where('email', $params['email'] ?? null)
            ->where('del_flg', $this->validDelFlg);
        $user = $query->get()->first();
        if ($user && Hash::check($params["password"], $user->password)) {
            return $user;
        }

        return null;
    }
}
