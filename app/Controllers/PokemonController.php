<?php

namespace App\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController {
    private $pokemon;
    public function __construct(Pokemon $pokemon)
    {
        $this->pokemon = $pokemon;
    }
    
    public function index(Request $request) {
        $id = $request->query('id', '1');
        $data = $this->pokemon->get_data($id);
        return view('pokemon.index', ['pokemon' => $data]);
    }
    public function edit(Request $request) {
        $id = $request->query('id', '1');
        $data = $this->pokemon->get_data($id);
        // $token = $request->session()->token();
        // $token = csrf_token();
        return view('pokemon.edit', ['pokemon' => $data]);
    }
    public function pokemon_save(Request $request) {
        $form_data = $request->all();
        $fields = ['identifier', 'species_id', 'height', 'weight', 'base_experience', 'order', 'is_default'];
        $pokemon = Pokemon::find((int) $form_data['id']);
        foreach ($fields as $item) {
            if ($item == 'is_default') {
                isset($form_data[$item])
                ? $pokemon->is_default= 1
                : $pokemon->is_default = 0;
            } else {
                $pokemon->$item = $form_data[$item];
            }
        }
        $pokemon->save();
        return redirect('home');
    }
}