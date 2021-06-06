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
		$state->name = 'aceptado';//2
		$state->state_description = 'aprobado por el jefe';
		$state->save();

		$state = new App\PetitionState;
		$state->name = 'denegado';//3
		$state->state_description = 'reachazado por el jefe';
		$state->save();

		$state = new App\PetitionState;
		$state->name = 'cotizado';//4
		$state->state_description = 'solicitud con cotizaciones';
		$state->save();

		$state = new App\PetitionState;
		$state->name = 'enviado';//5
		$state->state_description = 'enviado a la uni admin';
		$state->save();

		$state = new App\PetitionState;
		$state->name = 'aprobado';//6
		$state->state_description = 'aprobado por la uni admin';
		$state->save();

		$state = new App\PetitionState;
		$state->name = 'rechazado';//7
		$state->state_description = 'reachazado por el jefe';
		$state->save();
   }
}
