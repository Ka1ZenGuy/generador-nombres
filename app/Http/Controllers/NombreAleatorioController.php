<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NombreAleatorio;
use Faker\Factory as Faker; 

class NombreAleatorioController extends Controller
{

     function generar(Request $request)
    {
        $faker = Faker::create();
        $nombre = $faker->name();
        
        $nombreAleatorio = new NombreAleatorio;
        $nombreAleatorio->nombre = $nombre;
        $nombreAleatorio->save();
        
        return view('nombres-aleatorios.generar', ['nombre' => $nombre]);
    }
}


