<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    protected $guarded =[];
	public function criterion(){
		return $this->belongsTo(Criterion::class);
	}
}
