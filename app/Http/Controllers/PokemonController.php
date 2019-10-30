<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index(Request $request){ //va a listar todos los pokemones registrados
        if ( $request->ajax() ){
            return response()->json([
                ['id' => 1 , 'name' => 'Pikachu'],
                ['id' => 2 , 'name' => 'charmander'],
                ['id' => 3 , 'name' => 'squirtle'],
            ]);
        }
        return view('pokemons.index');
    }
}
