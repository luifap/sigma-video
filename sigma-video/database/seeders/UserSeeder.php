<?php

namespace Database\Seeders;

Use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Luisa Fernanda Arboleda',
            'email' => 'aux1.virtual@amigo.edu.co',
            'password' => bcrypt('12345678')
        ])->assignRole('Admin');

        User::factory(9)->create();
    }
}
