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
        ]);
        \App\Models\User::factory(10)->create();
    }
}
