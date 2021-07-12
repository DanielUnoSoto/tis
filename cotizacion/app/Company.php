<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Product;
use App\Quotation;
use App\Area;

class Company extends Authenticatable
{
	public function products() {
		return $this->hasMany(Product::class);

	}   

	public function quotations(){
		return $this->hasMany(Quotation::class);		
	}

	public function area(){
		return $this->BelongsTo(Area::class, 'area_id');		
	}

	protected $fillable = [
        'name','area_id','description','direction', 'nit','city', 'phone', 'email', 'password',
	];

}
