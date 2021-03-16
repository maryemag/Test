<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Criterion extends Model
{
    protected $guarded =[];
	public function proposals(){
		return $this->hasMany(Proposal::class);
	}
}
