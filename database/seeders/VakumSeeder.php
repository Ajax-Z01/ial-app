<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VakumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Vakum::factory(10)->create();
    }
}
