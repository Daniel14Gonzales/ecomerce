<?php

namespace Database\Factories;

use App\Models\productos;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = productos::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $nombre = $this->faker->sentence(2);

        $subcategoria = subcategoria::all()->random();

        $categoria = $subcategoria->categoria;

        $marcas = $categoria->marcas->random();

        if($subcategoria->color){
            $cantidad = null;
            } else{
               $cantidad = 15; 
            }

        return [
            'nombre' => $nombre,
            'slug' => Str::slug($nombre),
            'descripcion' => $this->faker->text(),
            'precio' => $this->faker->randomElement([19.99, 49.99, 99.99]),
            'subcategoria_id' => $subcategoria->id,
            'marcas_id' => $marcas->id,
            'cantidad'=> $cantidad,
            'estado' => 2
        ];
    }
}
