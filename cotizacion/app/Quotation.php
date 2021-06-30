<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Petition;
use App\Company;
use App\Item;


class Quotation extends Model
{
	public function petition() {
		return $this->BelongsTo(Petition::class, 'petition_id');
	}

	public function company() {
		return $this->BelongsTo(Company::class, 'company_id');
	}

	public function items() {
		return $this->hasMany(Item::class);
	}


	protected $fillable = [
     
		'petition_id', 'company_id', 'petitioner', 'company_name',
    	'company_nit', 'safeguard', 'company_phone', 'total'
   	];
}
