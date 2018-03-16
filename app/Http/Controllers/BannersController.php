<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Banners;
use File;



class BannersController extends Controller
{
    public function index(){
	$banners = Banners::all();
	return view('admin_view.layouts.banners',compact('banners'));
	}

	public function add_banners(){
	return view ('admin_view.layouts.add_banners');
	}

	public function save_banners(Request $r){
	$this->validate($r,array(
	'left_banner_path'=> 'mimes:png,jpeg',
	'right_banner_path'=> 'mimes:png,jpeg',
	'top_banner_path' => 'mimes:png,jpeg',
	'left_banner_link'=>'required|min:6',
	'top_banner_link' =>'required|min:6',
	'right_banner_link' =>'required|min:6'
	));
	if(($r->hasFile('left_banner_path')) && ($r->hasFile('right_banner_path')) && ($r->hasFile('top_banner_path'))) {
	$left_banner_path = str_random(8).'.'.$r->file('left_banner_path')->getClientOriginalExtension();
	$right_banner_path = str_random(8).'.'.$r->file('right_banner_path')->getClientOriginalExtension(); 
	$top_banner_path = str_random(8).'.'.$r->file('top_banner_path')->getClientOriginalExtension();   
	$r->file('left_banner_path')->move(public_path('/assets/upload/banner_upload'), $left_banner_path);
	$r->file('top_banner_path')->move(public_path('/assets/upload/banner_upload'), $top_banner_path);
	$r->file('right_banner_path')->move(public_path('/assets/upload/banner_upload'), $right_banner_path); 
    $banner = new Banners();          
    $banner ->left_banner_path = $left_banner_path;
    $banner ->top_banner_path = $top_banner_path; 
    $banner ->right_banner_path = $right_banner_path;   
    $banner ->left_banner_link = $r->left_banner_link;
    $banner ->right_banner_link = $r->right_banner_link;
    $banner ->top_banner_link = $r->top_banner_link;      
	$banner->save();  
      }
     return  redirect()->route('banners')->with('success','Banner created successfully!'); 
  
	}
	public function delete_banners($id)
	{
	$banners = Banners::findOrFail($id);
	$banners->delete();
	File::delete(public_path() . '/assets/upload/banner_upload/' . $banners->left_banner_path);
	File::delete(public_path() . '/assets/upload/banner_upload/' . $banners->right_banner_path);
	File::delete(public_path() . '/assets/upload/banner_upload/' . $banners->top_banner_path);
	return back()->with('success','Banner deleted successfully!');
	}
	public function edit_banners($id){
	$banner_id = Banners::find($id);
	return view ('admin_view.layouts.edit_banners',compact('banner_id'));
	}

	public function update_banners(Request $r,$id){
     $this->validate($r,array(
	'left_banner_path'=> 'mimes:png,jpeg',
	'right_banner_path'=> 'mimes:png,jpeg',
	'top_banner_path' => 'mimes:png,jpeg',
	'left_banner_link'=>'required|min:6',
	'top_banner_link' =>'required|min:6',
	'right_banner_link' =>'required|min:6'
     ));
     $banner_id = Banners::find($id);
     $banner_id->left_banner_link = $r->left_banner_link;
     $banner_id->right_banner_link = $r->right_banner_link;
     $banner_id->top_banner_link = $r->top_banner_link;
   
    if(($r->hasFile('left_banner_path')) && ($r->hasFile('right_banner_path')) && ($r->hasFile('top_banner_path'))) {
	$left_image_path = str_random(8).'.'.$r->file('left_banner_path')->getClientOriginalExtension();
	$right_image_path = str_random(8).'.'.$r->file('right_banner_path')->getClientOriginalExtension(); 
	$top_image_path = str_random(8).'.'.$r->file('top_banner_path')->getClientOriginalExtension(); 
	$r->file('left_banner_path')->move(public_path('/assets/upload/banner_upload'), $left_image_path);
	$r->file('right_banner_path')->move(public_path('/assets/upload/banner_upload'), $right_image_path);
	$r->file('top_banner_path')->move(public_path('/assets/upload/banner_upload'), $top_image_path);
        $oldleftBanner=$banner_id->left_banner_path;
        $oldrightBanner=$banner_id->right_banner_path;
        $oldupBanner=$banner_id->top_banner_path;
		$banner_id->left_banner_path=$left_image_path;
		$banner_id->right_banner_path=$right_image_path; 
		$banner_id->top_banner_path=$top_image_path;  
		File::delete(public_path() . '/assets/upload/banner_upload/' . $oldleftBanner);
		File::delete(public_path() . '/assets/upload/banner_upload/' . $oldrightBanner); 
		File::delete(public_path() . '/assets/upload/banner_upload/' . $oldupBanner);  
    }
    $banner_id->save();
    
     return  redirect()->route('banners')->with('success','Banner updated successfully!');
 }

}
