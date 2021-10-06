<?php

namespace Database\Seeders;

use App\Models\marcas;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\categoria;



class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $categorias = [

            [
                'nombre' => 'celulares y tablets',
                'slug' => Str::slug('celulares y tablets'),
                'iconos' => '<i class="fas fa-mobile"></i>'
            ],

             [
                'nombre' => 'Tv, audio y video',
                'slug' => Str::slug('Tv, audio y video'),
                'iconos' => '<i class="fas fa-tv"></i>'
            ],

             [
                'nombre' => 'Consolas y videojuegos',
                'slug' => Str::slug('Consolas y videojuegos'),
                'iconos' => '<i class="fas fa-gamepad"></i>'
            ],

             [
                'nombre' => 'Computacion',
                'slug' => Str::slug('Computacion'),
                'iconos' => '<i class="fas fa-laptop-code"></i>'
            ],

             [
                'nombre' => 'Moda',
                'slug' => Str::slug('Moda'),
                'iconos' => '<i class="fas fa-tshirt"></i>'
            ],

        ];

        foreach ($categorias as $categoria) {

           $categoria = categoria::factory(1)->create($categoria)->first();


            $marcas = marcas::factory(4)->create();

            foreach ($marcas as $marca){

                $marca->categorias()->attach($categoria->id);
            }
        }

    }
}

 
 