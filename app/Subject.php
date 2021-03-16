<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $guarded =[];
	public function organization(){
		return $this->belongsTo(Organization::class);
	}
	public function dimensions(){
		return $this->hasMany(Dimension::class);
	}
	
}
