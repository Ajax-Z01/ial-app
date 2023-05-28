<?php

namespace Database\Seeders;

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
        \App\Models\User::insert([
            'username' => 'Azura',
            'name' => 'Azhar Abdul Ala',
            'email' => 'azura@gmail.com',
            'type' => 'admin',
            'status' => 'approved',
            'password' => ('$2y$10$WCVI32GnFcYOOaIasofpiOxLnZ1TEgfWU80ZNRKGXAsXxtLiTCDim'),
            'profile_image' => '/img/default-profile.png',
            'mobile' => '08994530875',
            'location' => 'Sleman, Yogyakarta',
            'bio' => 'I am a web developer',
        ]);
        \App\Models\User::insert([
            'username' => 'Admin',
            'name' => 'Admin Official',
            'email' => 'admin@gmail.com',
            'type' => 'admin',
            'status' => 'approved',
            'password' => ('$2y$10$WCVI32GnFcYOOaIasofpiOxLnZ1TEgfWU80ZNRKGXAsXxtLiTCDim'),
            'profile_image' => '/img/default-profile.png',
            'mobile' => '08991231234',
            'location' => 'Sleman, Yogyakarta',
            'bio' => 'I am an Admin',
        ]);
        \App\Models\User::factory(12)->create();
    }
}
