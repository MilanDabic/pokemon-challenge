<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class User extends Model {

    use AuthenticableTrait;

    protected $table = 'users';
    protected $fillable = ['username', 'password'];

    //returning token if username and password are valid
    public static function api_token($username, $pass) {
        $user = User::where('username', $username)->first();
        if ($user && Hash::check($pass, $user->password)) {
            return $user->api_token;
        }
        return false;
    }
    //checking if token exists
    public static function check_token($token) {
        $token_exists = User::where('api_token', $token)->first();
        if ($token_exists) {
            return true;
        }
        return false;
    }
}