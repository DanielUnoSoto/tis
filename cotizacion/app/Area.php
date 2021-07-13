<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Company;


class Area extends Model
{
    public function companies(){
    	return $this->hasMany(Company::class);
    }

    protected $fillable = [
        'description',
	];
}
