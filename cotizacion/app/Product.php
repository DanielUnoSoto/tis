<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function company() {
		return $this->BelongsTo(Company::class, 'company_id');
	} 
}
