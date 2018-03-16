<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\About;
use File;

class AboutController extends Controller
    {
     public function index(){
   // dd(bcrypt('ulker123'));
    $about = About::all();
    return view('admin_view.layouts.about',compact('about'));
    }

    public function add_about(){
        return view ('admin_view.layouts.add_about');
    }
    public function save_about(Request $r){
	$this->validate($r,array(
	'about_picture'=> 'mimes:png,jpeg',
	'about_text'=> 'required|min:20'
	));
	if($r->hasFile('about_picture')) {
	$about_picture = str_random(8).'.'.$r->file('about_picture')->getClientOriginalExtension();
	$r->file('about_picture')->move(public_path('/assets/upload/about_upload'), $about_picture);
    $about = new About();          
    $about ->about_text = $r->about_text;
    $about ->about_picture = $about_picture;
	$about->save();  
      }
     return  redirect()->route('about')->with('success','About created successfully!'); 
    }


    public function delete_about($id) {
        $about = About::findOrFail($id);
        $about->delete();
        File::delete(public_path() . '/assets/upload/about_upload/' . $about->about_picture);
        return back()->with('success','About deleted successfully!');
    }

    public function edit_about($id){
        $about_id = About::find($id);
        return view('admin_view.layouts.edit_about',compact('about_id'));
    }

    public function update_about(Request $r,$id){
        $this->validate($r,array(
            'about_picture' => 'mimes:png,jpeg',
            'about_text' => 'required|min:20'
        ));
        $about_id = About::find($id);
        $about_id->about_text = $r->about_text;
        if($r->hasFile('about_picture')){
            $photoname = str_random(8).'.'.$r->file('about_picture')->getClientOriginalExtension();
            $r->file('about_picture')->move(public_path('/assets/upload/about_upload'), $photoname);
            $oldphotoname=$about_id->blog_photo;
            $about_id->about_picture=$photoname;
            File::delete(public_path() . '/assets/upload/about_upload/' . $oldphotoname);
        }
        $about_id->save();
        return  redirect()->route('about')->with('success','About updated successfully!');
    }
}
