<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\School;
use App\Type;

class Unit extends Model
{
    public function users(){
    	return $this->hasMany(User::class);
    }

    public function school(){
    	return $this->BelongsTo(School::class);
    }

    public function type(){
    	return $this->BelongsTo(Type::class);
    }

    protected $fillable = [
        'name','type_id', 'school_id'
    ];
}
