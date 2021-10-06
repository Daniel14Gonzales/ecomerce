<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\subcategoria;




class SubcategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategorias = [
                //Sub celulares y tablets
                [
                    'categorias_id' => 1,
                    'nombre' => 'celulares y tablets',
                    'slug' => Str::slug('celulares y tablets'),
                    'colores' => true
                ],

                 [
                    'categorias_id' => 1,
                    'nombre' => 'Accesorios para celulares',
                    'slug' => Str::slug('Accesorios para celulares'),
                    
                ],

                [
                    'categorias_id' => 1,
                    'nombre' => 'Smartwatches',
                    'slug' => Str::slug('Smartwatches'),
                ],

                //Sub Tv, audio y video 

                [
                    'categorias_id' => 2,
                    'nombre' => 'Tv y audio',
                    'slug' => Str::slug('Tv y audio'),
                ],

                [
                    'categorias_id' => 2,
                    'nombre' => 'Audios',
                    'slug' => Str::slug('Audios'),
                ],

                [
                    'categorias_id' => 2,
                    'nombre' => 'Audios para autos',
                    'slug' => Str::slug('Audios para autos'),
                ],
                // Sub Consolas y videojuegos

                [
                    'categorias_id' => 3,
                    'nombre' => 'xbox',
                    'slug' => Str::slug('xbox'),
                ],

                [
                    'categorias_id' => 3,
                    'nombre' => 'Playstation',
                    'slug' => Str::slug('Playstation'),
                ],

                [
                    'categorias_id' => 3,
                    'nombre' => 'videojuegos para pc',
                    'slug' => Str::slug('videojuegos para pc'),
                ],

                [
                    'categorias_id' => 3,
                    'nombre' => 'nintendo',
                    'slug' => Str::slug('nintendo'),
                ],
                //Sub Computacion

                [
                    'categorias_id' => 4,
                    'nombre' => 'Portatiles',
                    'slug' => Str::slug('Portatiles'),
                ],

                 [
                    'categorias_id' => 4,
                    'nombre' => 'Pc escritorio',
                    'slug' => Str::slug('Pc escritorio'),
                ],

                [
                    'categorias_id' => 4,
                    'nombre' => 'Almacenamiento',
                    'slug' => Str::slug('Almacenamiento'),
                ],

                [
                    'categorias_id' => 4,
                    'nombre' => 'Accesorios computadoras',
                    'slug' => Str::slug('Accesorios computadoras'),
                ],
                //sub Moda

                 [
                    'categorias_id' => 5,
                    'nombre' => 'Mujeres',
                    'slug' => Str::slug('Mujeres'),
                ],

                 [
                    'categorias_id' => 5,
                    'nombre' => 'Hombres',
                    'slug' => Str::slug('Hombres'),
                ],

                 [
                    'categorias_id' => 5,
                    'nombre' => 'Lentes',
                    'slug' => Str::slug('Lentes'),
                ],

                 [
                    'categorias_id' => 5,
                    'nombre' => 'Relojes',
                    'slug' => Str::slug('Relojes'),
                ],

        ];

        foreach ($subcategorias as $subcategoria)
        {
            subcategoria::factory(1)->create($subcategoria);
        }

    }
}
