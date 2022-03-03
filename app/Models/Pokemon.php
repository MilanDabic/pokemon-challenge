<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;

    protected $table = 'pokemon';
    protected $fillable = ['identifier', 'species_id', 'height', 'weight', 'base_experience', 'order','is_default'];
    //getting data for single pokemon by id
    public function get_data($id) {
        return Pokemon::where('id', (int) $id)->first();
    }
}
