<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App;

class AdminController extends Controller
{   
    
    public function login()
    {
        return view('admin.login');
    }
	public function index()
    {
        return view('admin.account');
    }
	public function create(Request $r){
		$name=$r->name;
		$email=$r->email;
		$password=$r->password;
		$check_email=App\Admin::where('email',$email)->get();
		if(count($check_email)>0){
			return redirect('/admin/login')->with('msg','Account Exists');
		}else{	
		$admin = new App\Admin;
		$admin->name=$name;
		$admin->email=$email;
		$admin->password=$password;
		$created=$admin->save();
		if($created){
			return redirect('/admin/login')->with('msg','Account created successfully');
		}
		}
	}
	public function check_user(Request $r){
		$email=$r->email;
		$password=$r->password;
		$session=  App\Admin::where('email',$email)->where('password',$password)->get();
		if(count($session)>0){
			$r->session()->put('user_id',$session[0]->id);
			$r->session()->put('user_name',$session[0]->name);
			return redirect('/admin/welcome');
		}else{
			return redirect('/admin/login')->with('msg','Username or Password does not match');
		}
	}
	public function protect(Request $r){
		if($r->session()->get('user_id')==""){
			return redirect('/admin/login');
		}else{
			$username=$r->session()->get('user_name');
			$capsule=array('username'=>$username);
			return view('admin.protect')->with($capsule);
		}
	}
	public function logout(Request $r){
		$r->session()->forget('user_id');
		$r->session()->forget('user_name');
		return redirect('/admin/login');
	}
		
	
	
	
			
	
	
	
	
	 
		
		
}

