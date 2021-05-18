<?php

use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol = new App\Unit;
	    $rol->name = 'dep de info-sis'; //1
	    $rol->type_id = 1;//unidad de gastos
	    $rol->school_id = 1;
	    $rol->save();

        $rol = new App\Unit;
        $rol->name = 'decanato';//2
        $rol->type_id = 2;//uniad administrativa
        $rol->school_id = 1;//fcyt
        $rol->save();

        $rol = new App\Unit;
        $rol->name = 'soporte tecnico';//3
        $rol->type_id = 3;//admin del sitio
        $rol->school_id = 1;//fcyt
        $rol->save();
    }
}
