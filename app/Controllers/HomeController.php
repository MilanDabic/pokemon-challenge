<?php

namespace App\Controllers;

use App\Models\Pokemon;

class HomeController {
    //method for getting data for all pokemons
    protected function get_pokemons() {
        return Pokemon::paginate(50);
    }
    public function index() {
        $pokemons = $this->get_pokemons();
        return view('home', ['pokemons' => $pokemons]);
    }
}