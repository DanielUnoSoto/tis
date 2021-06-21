<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Petition;
use App\Company;


class Quotation extends Model
{
	public function petition() {
		return $this->BelongsTo(Petition::class, 'petition_id');
	}

	public function company() {
		return $this->BelongsTo(Company::class, 'company_id');
	}

	protected $fillable = [
     'petition_id', 'company_id', 'quantity', 'type_unit', 'details', 'unit_value', 'total_value'
   	];
}
