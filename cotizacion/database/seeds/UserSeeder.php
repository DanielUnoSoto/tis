<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

	    $user = new App\User;
	    $user->name = 'admin';//1
	    $user->last_name = 'admin';
	    $user->role_id = 1; //admin
	    $user->unit_id = 3; //adminstracion
	    $user->phone = 123456;
	    $user->email = 'admin@gmail.com';
	    $user->password = bcrypt('123456');
	    $user->save();

	    $user2 = new App\User;
	    $user2->name = 'pedro';//1
	    $user2->last_name = 'perez';
	    $user2->role_id = 2; //jefe
	    $user2->unit_id = 1; //dep de info-sis
	    $user2->phone = 123456;
	    $user2->email = 'pedro@gmail.com';
	    $user2->password = bcrypt('123456');
	    $user2->save();

        $user = new App\User;
	    $user->name = 'juan';//2
	    $user->last_name = 'perez';
	    $user->role_id = 3;//personal
	    $user->unit_id = 1;//dep de info-sis
	    $user->phone = 123456;
	    $user->email = 'juan@gmail.com';
	    $user->password = bcrypt('123456');
	    $user->save();

	    $user = new App\User;
	    $user->name = 'lucas';//2
	    $user->last_name = 'flores';
	    $user->role_id = 2;//jefe
	    $user->unit_id = 2;//decanato
	    $user->phone = 123456;
	    $user->email = 'lucas@gmail.com';
	    $user->password = bcrypt('123456');
	    $user->save();
    }
}
