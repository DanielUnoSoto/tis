<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Quotation;

class Item extends Model
{
    public function quotation() {
		return $this->BelongsTo(Quotation::class, 'quotation_id');
	}

	protected $fillable = [
    	'quotation_id','quantity', 'type_unit', 'details', 'unit_value', 'total_value'
   	];
}