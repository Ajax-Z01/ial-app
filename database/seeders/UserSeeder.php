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
            'profile_image' => '/img/default-profile.webp',
            'mobile' => '08994530875',
            'location' => 'Sleman, Yogyakarta',
            'bio' => 'Hello everyone Im Azhar Abdul, a final-year student at Politeknik Teknologi Nuklir Indonesia.',
        ]);
        \App\Models\User::insert([
            'username' => 'Admin',
            'name' => 'Admin Official',
            'email' => 'admin@gmail.com',
            'type' => 'admin',
            'status' => 'approved',
            'password' => ('$2y$10$WCVI32GnFcYOOaIasofpiOxLnZ1TEgfWU80ZNRKGXAsXxtLiTCDim'),
            'profile_image' => '/img/default-profile.webp',
            'mobile' => '08991231234',
            'location' => 'Sleman, Yogyakarta',
            'bio' => 'Welcome to our website, where innovation and creativity converge in elegant design. We hope you enjoy your visit and find it informative and useful.',
        ]);
        \App\Models\User::insert([
            'username' => 'tiasayu',
            'name' => 'Ayuningtias Ntuiyo',
            'email' => 'tiasntuiyo9@gmail.com',
            'type' => 'admin',
            'status' => 'approved',
            'password' => ('$2y$10$8vPsMMeaCKeoF/6FyNn7o.6VuSB8AKLbCSfCgjExpMXnJV/YZzuym'),
            'profile_image' => '/img/default-profile.webp',
            'mobile' => '',
            'location' => '',
            'bio' => '',
        ]);
        \App\Models\User::factory(17)->create();
    }
}
