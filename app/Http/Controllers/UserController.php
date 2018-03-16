<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
use File;

class UserController extends Controller
{
          public function index(){

      $admins = User::where('role_id',1)->get();
      return view('admin_view.layouts.adminSettings',compact('admins'));
    }

     public function edit_adminSettings($id){
     $admin_id = User::where('role_id',1)->find($id);
      
     return view ('admin_view.layouts.edit_adminSettings',compact('admin_id'));
 }


    public function update_adminSettings(Request $r,$id){
    	$data = $r->all();
    	$rules = array(
          'name' => 'required|string|max:30',
          'email' => 'required|string|email|max:255',
          'password' => 'required|string|min:6',
    	);
 
       $validator = Validator::make($data,$rules); 
       if($validator->fails()){
        return back()->withErrors($validator)->withInput(); 
       }else {
        $admin_id = User::where('role_id',1)->find($id);
		    $admin_id->name = $r->name;
		    $admin_id->email = $r->email;
		    $admin_id->password = bcrypt($r->password);
		    $admin_id->save();
		        return  redirect()->route('adminSettings')->with('success','Changes updated successfully!');
       }


 }
}
