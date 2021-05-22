<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Stock;


class Article extends Model
{
	public function stock(){
   return $this->BelongsTo(Stock::class);
   }
}
