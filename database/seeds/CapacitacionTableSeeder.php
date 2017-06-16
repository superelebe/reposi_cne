<?php

use Illuminate\Database\Seeder;

class CapacitacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Capacitacion::class)->times(8)->create();
    }
}
