<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SurveyController extends Controller
{
	  
   public function show(\App\Subdimension $subdimension,$slug)
    {
		
		
       return view('survey.show', compact('subdimension'));
	   
    }
	public function store(\App\Subdimension $subdimension){
		$data = request()->validate([
		'responses.*.proposal_id'=>'required',
		'responses.*.criterion_id'=>'required',
		'survey.name'=>'required',
		'survey.email'=>'required',
		]);
		
		$survey = $subdimension->surveys()->create($data['survey']);
		$survey->responses()->createMany($data['rsponses']);
		return 'Thank u';
	
		
	}
   
}
