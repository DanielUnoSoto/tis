<?php

use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol = new App\School;
	    $rol->name = 'Facultad de Ciencias y tecno';//1
	    $rol->save();
    }
}
