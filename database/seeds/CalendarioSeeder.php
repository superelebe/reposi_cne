<?php

use Illuminate\Database\Seeder;

class CalendarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Calendar::class)->times(10)->create();
    }
}
