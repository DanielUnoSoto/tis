<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Petition;

class PetitionState extends Model
{
    public function petitions(){
    	return $this->hasMany(Petition::class);
    }
}
