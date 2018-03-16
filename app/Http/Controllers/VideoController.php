<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
        public function index(){
      $video = Video::all();
      return view('admin_view.layouts.video_gallery',compact('video'));
    }

        public function save_video_gallery(Request $request){
           $request->validate([
            'youtube_path' => 'required'
        ]);
        Video::insert([
            'youtube_path' => substr($request->youtube_path, -11)
        ]);
        return  redirect()->route('video_gallery')->with('success','Video Gallery created successfully!');
    }
       public function add_video_gallery(){
      
      return view ('admin_view.layouts.add_video_gallery');
    }
       public function delete_video_gallery($id)
  {
     $video = Video::findOrFail($id);
     $video->delete();
     return back()->with('success','Video Gallery deleted successfully!');
 }
     public function edit_video_gallery($id){
     $video_id = Video::find($id);
     return view ('admin_view.layouts.edit_video_gallery',compact('video_id'));
 }
   public function update_video_gallery(Request $r,$id){
    $video_id = Video::find($id);
    $video_id->youtube_path = substr($r->youtube_path, -11);
    $video_id->save();
    return  redirect()->route('video_gallery')->with('success','Video Gallery updated successfully!');
 }
}
