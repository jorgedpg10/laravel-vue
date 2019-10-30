<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index(){ //va a listar todos los pokemones registrados
        return view('pokemons.index');
    }
}
