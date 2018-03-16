<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Gallery;
use App\Models\Video;
use App\Models\Interview;
use App\Models\Blog;
use App\Models\Socialnetworks;
use Helper;

class MainController extends Controller
{
    public function index(){
  
    $last_about =    About::orderBy('id','desc')->first();
    $photo_gallery = Gallery::take(2)->get();
    $first_photo =   Gallery::first();
    $video_gallery = Video::take(4)->get();
    $first_video =   Video::first();
    $interviews = Interview::orderBy('created_at','desc')->take(1)->get();
    $last_interview =    Interview::orderBy('id','desc')->first();
    $blogs = Blog::orderBy('created_at','desc')->take(2)->get();
    $social_networks = Socialnetworks::all();
    return view('welcome',compact('about','photo_gallery','video_gallery','first_video','first_photo','last_about','last_interview','blogs','social_networks','interviews'));
    } 

        public function loadDataAjax(Request $request)
    {   
        $count = 0;
        $output = '';
        $id = $request->id;
        $blogs = Blog::where('id','<',$id)->orderBy('created_at','desc')->take(2)->get();
        if(!$blogs->isEmpty())
        {  
            foreach($blogs as $blog)
            {
                if($count % 2 == 0 ) {
                $text =$blog->blog_text;
                $photo=$blog->blog_photo;
                $output .= '<div class="col-md-6 blog">
                   <p>'.$text.'</p>
                   </div>
                     <div class="col-md-6 blog">
                    <img   src="/assets/upload/blog_upload/'.$photo.'" alt=""> 
                </div>';

               
                
                } else {
                 $text =$blog->blog_text;
                $photo=$blog->blog_photo;
                $output .= '<div class="col-md-6 col-md-push-6 blog">
                   <p>'.$text.'</p>
                   </div>
                     <div class="col-md-6 col-md-pull-6 blog">
                    <img   src="/assets/upload/blog_upload/'.$photo.'" alt=""> 
                </div>';
                
             
                }
                $count++;
 
             }
              $output .= '<div id="remove-row">
                    <button id="btn-more" data-id="'.$blog->id.'"> Digər </button>
                </div>';
                echo $output; 
  
        }
    }
            public function loadInterviewAjax(Request $request)
    {
        $output = '';
        $id = $request->id;
        $interviews = Interview::orderBy('created_at','desc')->take(1)->get();
        if(!$interviews->isEmpty())
        {
            foreach($interviews as $interview)
            {
                $text =$interview->interview_text;
                $interview_video=$interview->youtube_path;
                $output .= '<div class="mainContent">
                 <iframe class="mainVideo" width="560" height="315" src="https://www.youtube.com/embed/'.$interview_video.'" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen> </iframe>
                  <p>'.$text.'</p>
                  </div>';
                }
                $output .= '<div id="delete-row">
                    <button type="button" id="btn-interview" data-id="'.$interview->id.'"> Digər </button>
                </div>';
                echo $output;
        }
    }
}
