<?php

use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $area = new App\Area;
	    $area->description = 'material de escritorio';//1
	    $area->save();

	    $area = new App\Area;
	    $area->description = 'tecnologia';//2
	    $area->save();

	    $area = new App\Area;
	    $area->description = 'muebles';//3
	    $area->save();
    }
}
