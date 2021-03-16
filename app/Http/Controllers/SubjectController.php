<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Organization;
use App\Subject;


class SubjectController extends Controller

{
	
    public function createTwo(Organization $organization){
	   return view('subject.createTwo',compact('organization'));
   }
    public function storeTwo(Organization $organization){
	   $data = request()->validate([
	 
	   'title'=>'required',
	   'description'=>'required',
	   ]);
	   $subject = $organization->subjects()->create($data);
	   return redirect('/organizations/'.$organization->id);
	   
	}
    public function index(){
	   $subjects = Subject::latest()->paginate(10);
	   return view('subject.index', compact('subjects'));
   }
   public function edit($id){
	   $subject = Subject::find($id);
	   return view('subject.edit')->with('subjects',$subject)->with('organizations',Organization::all());
   }
   public function update(Request $request,$id){
	    $subject = Subject::find($id);
	    $this->validate($request,[
	        "title"=>"required",
			"description"=>"required",
			"organization_id"=>"required",
			]);
	    $subject->title = $request->title;
		$subject->description = $request->description;
		$subject->organization_id = $request->organization_id;
		$subject->save();
		return redirect()->route('subject.index');
			
   }
   public function destroy($id){
	   $subject= \App\Subject::find($id);
	   $subject->delete();
	   return redirect()->route('subject.index');
   }
   public function show(\App\Subject $subject){
	   $subject->load('dimensions.subdimensions');
	   //dd($subject);
	   return view('subject.show', compact('subject'));
   }
   
}
