<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SurveyResponses extends Model
{
    protected $guarded =[];
	public function survey(){
		
		return $this->belongsTo(Survey::class);
	}
	
	
}
