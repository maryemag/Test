<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $guarded =[];
	public function subdimension(){
		
		return $this->belongsTo(Subdimension::class);
	}
	public function responses(){
		return $this->hasMany(SurveyResponses::class);
	}
}
