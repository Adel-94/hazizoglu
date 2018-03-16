<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Interview;

class InterviewController extends Controller
{
     public function index(){
     $interview = Interview::all();
    return view('admin_view.layouts.interview',compact('interview'));
    }

        public function save_interview(Request $request){
           $request->validate([
            'interview_text' => 'required',
            'youtube_path' => 'required'
        ]);
        Interview::insert([
            'interview_text' => $request->interview_text,
            'youtube_path' => substr($request->youtube_path, -11),
        ]);
        return  redirect()->route('interview')->with('success','Interview created successfully!');
    }
          public function add_interview(){
      
      return view ('admin_view.layouts.add_interview');
    }
           public function delete_interview($id)
  {
     $interview = Interview::findOrFail($id);
     $interview->delete();
     return back()->with('success','Interview deleted successfully!');
 }
  public function edit_interview($id){
    $interview_id = Interview::find($id);
    return view ('admin_view.layouts.edit_interview',compact('interview_id'));
 }
   public function update_interview(Request $r,$id){
    $interview_id = Interview::find($id);
    $interview_id->interview_text = $r->interview_text;
    $interview_id->youtube_path = substr($r->youtube_path, -11);
    $interview_id->save();
    return  redirect()->route('interview')->with('success','Interview updated successfully!');
 }
}
