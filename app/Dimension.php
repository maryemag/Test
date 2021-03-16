<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dimension extends Model
{
    protected $guarded =[];
	public function subject(){
		return $this->belongsTo(Subject::class);
	}
	public function subdimensions(){
		return $this->hasMany(Subdimension::class);
	}
}
