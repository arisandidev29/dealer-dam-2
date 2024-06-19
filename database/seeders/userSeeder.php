<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void

    {


        for ($i=0; $i < 5; $i++) { 
            $user = User::create([
                'name' => fake()->name(),
                'email' => fake()->unique()->safeEmail(),
                'email_verified_at' => now(),
                 'password' =>  Hash::make('password'),
            ]);

            $user->assignRole('customer');
        }
        $admin = User::create([
            'name' => 'arisandi',
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' =>  Hash::make('password'),
        ]
        );

        $admin->assignRole("admin");

   


    }
}
