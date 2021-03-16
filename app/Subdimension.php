<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subdimension extends Model

{
    protected $guarded =[];
	
	
	public function dimension(){
		return $this->belongsTo(Dimension::class);
	}
	public function criterions(){
		return $this->hasMany(Criterion::class);
	}
	public function surveys(){
		return $this->hasMany(Survey::class);
	}
	
}
