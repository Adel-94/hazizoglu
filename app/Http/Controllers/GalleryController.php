<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Gallery;
use File;

class GalleryController extends Controller
{
            public function index(){
        $gallery = Gallery::all();
        return view('admin_view.layouts.photo_gallery',compact('gallery'));
    }

    public function add_photo_gallery(){
        return view ('admin_view.layouts.add_photo_gallery');
    }
    public function save_photo_gallery(Request $r){
	$this->validate($r,array(
	'image_path'=> 'mimes:png,jpeg'
	));
	if($r->hasFile('image_path')) {
	$image_path = str_random(8).'.'.$r->file('image_path')->getClientOriginalExtension();
	$r->file('image_path')->move(public_path('/assets/upload/gallery_upload'), $image_path);
    $about = new Gallery();          
    $about ->image_path = $image_path;
	$about->save();  
      }
     return  redirect()->route('photo_gallery')->with('success','Photo Gallery created successfully!'); 
    }


    public function delete_photo_gallery($id) {
        $gallery = Gallery::findOrFail($id);
        $gallery->delete();
        File::delete(public_path() . '/assets/upload/gallery_upload/' . $gallery->image_path);
        return back()->with('success','About deleted successfully!');
    }

    public function edit_photo_gallery($id){
        $gallery_id = Gallery::find($id);
        return view('admin_view.layouts.edit_photo_gallery',compact('gallery_id'));
    }

    public function update_photo_gallery(Request $r,$id){
        $this->validate($r,array(
            'image_path' => 'mimes:png,jpeg',
  
        ));
        $gallery_id = Gallery::find($id);
        if($r->hasFile('image_path')){
            $photoname = str_random(8).'.'.$r->file('image_path')->getClientOriginalExtension();
            $r->file('image_path')->move(public_path('/assets/upload/gallery_upload'), $photoname);
            $oldphotoname=$gallery_id->image_path;
            $gallery_id->image_path=$photoname;
            File::delete(public_path() . '/assets/upload/gallery_upload/' . $oldphotoname);
        }
        $gallery_id->save();
        return  redirect()->route('photo_gallery')->with('success','Photo Gallery updated successfully!');
    }
}
