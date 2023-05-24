<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FilamenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Filamen::factory(100)->create();
    }
}
