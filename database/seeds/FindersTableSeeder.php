<?php

use Illuminate\Database\Seeder;

class FindersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Finder::class, 40)->create();
    }
}
