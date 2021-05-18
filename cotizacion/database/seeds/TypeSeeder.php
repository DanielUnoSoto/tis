<?php

use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol = new App\Type;
	    $rol->description = 'unidad de gastos';//1
	    $rol->save();

        $rol = new App\Type;
        $rol->description = 'unidad administrativa';//2
        $rol->save();

        $rol = new App\Type;
        $rol->description = 'admin del sitio';//3
        $rol->save();
    }
}
