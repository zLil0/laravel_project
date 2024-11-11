<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Pets;
use App\Models\User;

class PetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $usersCount = User::count();
        
        //Seed the database with pets for every odd user_id
        for ($i=1; $i <= $usersCount; $i++) { 
            if ($i%2==1) {
                Pets::create([
                    'user_id' => $i,
                    'name' => $faker->name,
                    'type' => "dog",
                    'breed' => "stray"
                ]);
            }
        }
        
    }
}
