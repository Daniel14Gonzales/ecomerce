<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' =>'Daniel Gonzalez Torres',
            'email'=> 'dani.torres@hotmail.com',
            'password' => bcrypt('12345678')

        ]);
    }
}
