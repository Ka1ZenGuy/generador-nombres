<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class NombreAleatorio extends Model
{
   
    
}
Schema::create('nombre_aleatorios', function ($table) {
    $table->id();
    $table->string('nombre');
    $table->timestamps();
});
