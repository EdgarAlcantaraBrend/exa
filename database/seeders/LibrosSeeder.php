<?php

namespace Database\Seeders;
use App\Models\Libros;
use Illuminate\Database\Seeder;

class LibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $libros = new Libros();

        $libros->titulo="Corazon de pollo";
        $libros->autor="Javier A,";
        $libros->editorial="Nubes";
        $libros->fecha_publicacion="2019-03-10";
        $libros->numero_pagina="250";
        
        $libros->save();

        $libros2= new Libros();
        
        $libros2->titulo="Letras amargas";
        $libros2->autor="Josh M.";
        $libros2->editorial="Triangulo";
        $libros2->fecha_publicacion="2002-06-21";
        $libros2->numero_pagina="412";

        $libros2->save();
    }
}
