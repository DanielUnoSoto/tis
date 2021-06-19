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
}
