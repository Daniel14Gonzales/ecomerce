<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //sobre escribe las imagenes al migrar
        Storage::deleteDirectory('Categorias');
        Storage::deleteDirectory('Subcategoria');
      
        //crea carpeta Subcategoria

        Storage::makeDirectory('Categorias');
        Storage::makeDirectory('Subcategoria');        
        

        $this->call(UsuarioSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(SubcategoriaSeeder::class);

        $this->call(ProductosSeeder::class);


    }
}
