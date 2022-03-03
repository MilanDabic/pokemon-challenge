<?php

namespace App\Controllers;

use App\Models\Pokemon;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Symfony\Component\HttpFoundation\Session\Session as SessionSession;

class ApiController {
    public function get_pokemon($id) {
        $pokemon = new Pokemon();
        $data = $pokemon->get_data($id);
        return response()->json($data);
    }

    public function all_pokemons() {
        $data = Pokemon::get();
        return response()->json($data);
    }

    public function get_token($username, $pass) {
        $user = new User();
        $token = $user->api_token($username, $pass);
        if (!$token) {
            return 'Wrong credentials!';
        }
        return $token;
    }
}