<?php

namespace App\Models;

use App\Models\Pokemon;

class DatabaseCreator {
    // just run DatabaseCreator::fill_database() in the artisan tinker after running the migration
    public static function fill_database() {
        $source = file_get_contents('./resources/pokemon.json');
        $data = json_decode($source);
        foreach ($data as $pokemon_data) {
            $pokemon = new Pokemon();
            $pokemon->identifier = $pokemon_data->identifier;
            $pokemon->species_id = $pokemon_data->species_id;
            $pokemon->height = $pokemon_data->height;
            $pokemon->weight = $pokemon_data->weight;
            $pokemon->base_experience = $pokemon_data->base_experience;
            $pokemon->order = $pokemon_data->order;
            $pokemon->is_default = $pokemon_data->is_default;
            $pokemon->save();
        }
    }

}