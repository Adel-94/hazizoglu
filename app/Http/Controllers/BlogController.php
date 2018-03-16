<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Blog;
use File;

class BlogController extends Controller
{
        public function index(){
        $blog = Blog::all();
        return view('admin_view.layouts.blog',compact('blog'));
    }

    public function add_blog(){
        return view ('admin_view.layouts.add_blog');
    }
    public function save_blog(Request $r){
	$this->validate($r,array(
	'blog_photo'=> 'mimes:png,jpeg',
	'blog_text'=> 'required|min:20'
	));
	if($r->hasFile('blog_photo')) {
	$blog_photo = str_random(8).'.'.$r->file('blog_photo')->getClientOriginalExtension();
	$r->file('blog_photo')->move(public_path('/assets/upload/blog_upload'), $blog_photo);
    $blog = new Blog();          
    $blog ->blog_text = $r->blog_text;
    $blog ->blog_photo = $blog_photo;
	$blog->save();  
      }
     return  redirect()->route('blog')->with('success','Blog created successfully!'); 
    }


    public function delete_blog($id) {
        $blog = Blog::findOrFail($id);
        $blog->delete();
        File::delete(public_path() . '/assets/upload/blog_upload/' . $blog->blog_photo);
        return back()->with('success','Blog deleted successfully!');
    }

    public function edit_blog($id){
        $blog_id = Blog::find($id);
        return view('admin_view.layouts.edit_blog',compact('blog_id'));
    }

    public function update_blog(Request $r,$id){
        $this->validate($r,array(
            'blog_photo' => 'mimes:png,jpeg',
            'blog_text' => 'required|min:20'
        ));
        $blog_id = Blog::find($id);
        $blog_id->blog_text = $r->blog_text;
        if($r->hasFile('blog_photo')){
            $photoname = str_random(8).'.'.$r->file('blog_photo')->getClientOriginalExtension();
            $r->file('blog_photo')->move(public_path('/assets/upload/blog_upload'), $photoname);
            $oldphotoname=$blog_id->blog_photo;
            $blog_id->blog_photo=$photoname;
            File::delete(public_path() . '/assets/upload/blog_upload/' . $oldphotoname);
        }
        $blog_id->save();
        return  redirect()->route('blog')->with('success','Blog updated successfully!');
    }
}
