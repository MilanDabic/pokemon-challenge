<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserCreator {
    public static function create_user(array $data) {
        $user = new User();
        $user->username = $data['username'];
        $user->password = Hash::make($data['password']);
        $user->api_token = Str::random(60);
        $user->save();
    }
}
