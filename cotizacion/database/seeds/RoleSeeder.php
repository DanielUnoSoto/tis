<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol = new App\Role;
	    $rol->name = 'admin'; //1
	    $rol->display_name = 'administrador del sitio';
	    $rol->save();

	    $rol2 = new App\Role;
	    $rol2->name = 'jefe';//2
	    $rol2->display_name = 'jefe de la unidad';
	    $rol2->save();

	    $rol3 = new App\Role;
	    $rol3->name = 'personal';//3
	    $rol3->display_name = 'personal de la unidad';
	    $rol3->save();
    }
}
