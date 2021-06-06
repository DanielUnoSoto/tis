<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Petition;

class Acquisition extends Model
{
    public function petition(){
    	return $this->belongsTo(Petition::class, 'petition_id');
    }

   protected $fillable = [
     'petition_id', 'name', 'details', 'quantity'
   ];
}
