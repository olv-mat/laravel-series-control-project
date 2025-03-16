<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\{
    Hash,
    Auth
};

class EloquentUserRepository implements UserRepository
{
    public function add(array $request): User
    {
        $request["password"] = Hash::make($request["password"]);
        $user = User::create($request);
        return $user;
    }
}
