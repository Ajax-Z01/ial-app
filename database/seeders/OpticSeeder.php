<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OpticSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Optic::factory(100)->create();
    }
}
