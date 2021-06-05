<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\PetitionState;
use App\Unit;
use App\Acquisition;


class Petition extends Model
{
   public function user(){
   	return $this->BelongsTo(User::class);
   }

   public function unit(){
   	return $this->BelongsTo(Unit::class);
   }

   public function state(){
   	return $this->BelongsTo(PetitionState::class, 'petitionstate_id');
   }

   public function acquisitions(){
   	return $this->hasMany(Acquisition::class);
   }

   //relacion con cotizaciones

   protected $fillable = [
     'title', 'user_id', 'unit_id', 'petitionstate_id', 'description', 'price',
   ];


}
