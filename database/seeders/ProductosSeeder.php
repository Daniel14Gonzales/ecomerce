<?php

namespace Database\Seeders;

use App\Models\productos;

use Illuminate\Database\Seeder;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        productos::factory(250)->create();
    }
}
