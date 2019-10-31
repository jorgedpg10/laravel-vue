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
            ], 200);
        }
        return view('pokemons.index');
    }

    public function store(Request $request){
        if ( $request->ajax() ){
            $pokemon = new Pokemon(); // nueva instancia de nuestro pokemon
            $pokemon->name = $request->input('name');
            $pokemon->picture = $request->input('picture');
            $pokemon->save();

            return response()->json([
                "message" => "Pokemon creado correctamente"
            ], 200);
        }
    }


}
