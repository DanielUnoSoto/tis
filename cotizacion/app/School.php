<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Unit;


class School extends Model
{
    public function untis(){
    	return $this->hasMany(Unit::class);
    }
}
