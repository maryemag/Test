<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class OrganizationController extends Controller
{
   
   public function create(){
	   return view('organization.create');
   }
   public function store(){
	   $data = request()->validate([
	   'name'=>'required',
	   'domain'=>'required',
	   'speciality'=>'required',
	   'address'=>'required',
	   ]);
	   //$data['user_id'] = auth()->user()->id;
	  $organization = \App\Organization::create($data);
	  return redirect('/organizations/'.$organization->id);
   }
   public function edit($id){
	   
	   $organization = \App\Organization::find($id);
	   return view('organization.edit')->with('organization',$organization);
   }
	   
   public function index(){
	   $organizations = \App\Organization::latest()->paginate(10);
	   return view('organization.index', compact('organizations'));
   }
   public function show(\App\Organization $organization){
	   
	   $organization->load('subjects.dimensions.subdimensions.criterions.proposals');
	   //dd($organization);
	   return view('organization.show', compact('organization'));
   }
	   
	   
   public function destroy($id){
	   $organization= \App\Organization::find($id);
	   $organization->delete();
	   return redirect()->route('organization.index');
   }
   public function update(Request $request, $id){
	   $organization= \App\Organization::find($id);
	   $organization->name = $request->name;
	   $organization->domain = $request->domain;
	   $organization->speciality = $request->speciality;
	   $organization->address = $request->address;
	   $organization->save();
	   return redirect()->route('organization.index');
   }
   
   
	   
	   
}
