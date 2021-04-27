<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Unit;


class Type extends Model
{
    public function units(){
    	return $this->hasMany(Unit::class);
    }
}
