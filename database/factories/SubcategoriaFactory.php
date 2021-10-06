<?php

namespace Database\Factories;

use App\Models\subcategoria;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubcategoriaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = subcategoria::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'imagen' =>  'Subcategoria/' . $this->faker->image('public/storage/Subcategoria', 640, 480, null, false)
        ];
    }
}
