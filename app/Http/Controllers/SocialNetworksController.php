<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Socialnetworks;

class SocialNetworksController extends Controller
{
            public function index(){
      $socialnetworks = Socialnetworks::all();
      return view('admin_view.layouts.social_networks',compact('socialnetworks'));
    }

        public function save_social_networks(Request $request){
           $request->validate([
            'facebook_link' => 'required',
            'instagram_link' => 'required',
            'twitter_link' => 'required',
            'youtube_link' => 'required'
        ]);
        Socialnetworks::insert([
            'facebook_link' => $request->facebook_link,
            'instagram_link' => $request->instagram_link,
            'twitter_link' => $request->twitter_link,
            'youtube_link' => $request->youtube_link,
        ]);
        return  redirect()->route('social_networks')->with('success','Social Networks created successfully!');
    }
          public function add_social_networks(){
      
      return view ('admin_view.layouts.add_social_networks');
    }
           public function delete_social_networks($id)
  {
     $socialnetworks = Socialnetworks::findOrFail($id);
     $socialnetworks->delete();
     return back()->with('success','Social Networks deleted successfully!');
 }
  public function edit_social_networks($id){
    $social_id = Socialnetworks::find($id);
    return view ('admin_view.layouts.edit_social_networks',compact('social_id'));
 }
   public function update_social_networks(Request $r,$id){
    $social_id = Socialnetworks::find($id);
    $social_id->facebook_link = $r->facebook_link;
    $social_id->instagram_link = $r->instagram_link;
    $social_id->twitter_link = $r->twitter_link;
    $social_id->youtube_link = $r->youtube_link;
    $social_id->save();
    return  redirect()->route('social_networks')->with('success','Social networks updated successfully!');
 }
}
