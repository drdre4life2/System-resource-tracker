<?php

namespace App\Services;
use App\Models\User;

class UserService{

    public function createUser($userData)
    {
        $user = User::create($userData);

        return $user;

    }
    public function getUser()
    {

    }

}

