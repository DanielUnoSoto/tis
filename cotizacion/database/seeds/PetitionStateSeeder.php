<?php

use Illuminate\Database\Seeder;

class PetitionStateSeeder extends Seeder
{
   /**
     * Run the database seeds.
     *
     * @return void
   */
   public function run()
   {
		$state = new App\PetitionState;
		$state->name = 'espera';//1
		$state->state_description = 'en espera';
		$state->save();

		$state = new App\PetitionState;
		$state->name = 'aprobado';//2
		$state->state_description = 'aprobado por el jefe';
		$state->save();

		$state = new App\PetitionState;
		$state->name = 'rechazo';//3
		$state->state_description = 'reachazado por el jefe';
		$state->save();


   }
}
