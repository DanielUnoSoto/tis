<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Unit;
use App\Article;

class Stock extends Model
{
	public function unit(){
		return $this->BelongsTo(Unit::class);
	}

	public function articles(){
		return $this->hasMany(Article::class);
	}



	protected $fillable = [
        'title','description','year','unit_id'
    ];
}
