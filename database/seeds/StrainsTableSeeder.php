<?php

use Illuminate\Database\Seeder;

class StrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Strain::class, 30)->create();
    }
}
