<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{

    public function run(): void
    {
        $faker = Faker::create();
        for ($i=0; $i < 5; $i++) { 
            User::create([
                'name' => $faker->name,
                'email' => $faker->unique()->email,
                'password' => 'senha123',
            ]);
        }
    }
}
