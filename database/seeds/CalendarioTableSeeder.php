<?php

use Illuminate\Database\Seeder;

class CalendarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        factory(App\Calendar::class)->times(8)->create();
    }
}
