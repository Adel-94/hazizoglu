<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hüseyn Əzizoğlu</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
</head>

<body>
    <div class="burger hidden-sm hidden-md hidden-lg">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div class="container">
        <div class="mainContainer">
            <header>
                <div class="row">
                    <div class="col-md-12">
                        <ul>
                            <li><a href="#slider">əsas səhifə</a></li>
                            <li><a href="javascript:;">müsahibə</a></li>
                            <li><a href="#blogs">blog</a></li>
                            <li><a href="#videos">video</a></li>
                            <li><a href="#gallery">qalereya</a></li>
                            <li><a href="javascript:;">oyunlar</a></li>
                            <li><a href="#footer">əlaqə</a></li>
                        </ul>
                    </div>
                </div>
            </header>
            <main>
                <section id="slider">
                    <div class="row">
                        <div class="col-md-9 col-md-offset-3">
                            <div class="yellowBoard">
                                <img src="assets/images/font.png" alt="">
                                <img class="hidden-xs" src="assets/images/huseynArt.png" alt="">
                                <p>{{str_limit("$last_about->about_text",100)}}</p>
                                <img class="img-responsive" src="{{('/assets/upload/about_upload/'.$last_about->about_picture)}}" alt="">
                            </div>
                        </div>
                    </div>
                </section>
                <section id="sliderContent">
                    <div class="row">
                        <div class="col-md-8" id="load-interview">
                          
                            <div class="mainContent">
                                <iframe class="mainVideo" width="560" height="315" src="https://www.youtube.com/embed/{{ $last_interview->youtube_path }}"  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                <p>{{ $last_interview->interview_text}}</p>
                            </div>
                        
                     
                            <div class="liner"></div>
                        </div>
                        <div class="col-md-4">
                            <ul class="flexUl">
                              @foreach($social_networks as $social)
                                <li><a href="{{ $social->facebook_link }}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="{{ $social->instagram_link }}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="{{ $social->twitter_link }}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                @endforeach
                            </ul>
                            <h2>instagram</h2>
                            <div class="lineH">
                                <div class="lineVR hidden-xs"></div>
                            </div>
                            <div class="col-md-12 iCol instaContent" style="padding-right: 55px;"></div>
                        </div>
                    </div>
                </section>
                <section id="gallery">
                    <div class="row">
                        <div class="col-md-8">
                            <h2 style="text-align: left;padding-right: 0;padding-left: 145px;">qalereya</h2>
                            <div class="boldLineH">
                                <div class="boldLineVL hidden-xs"></div>
                            </div>
                            <img src="{{('/assets/upload/gallery_upload/'.$first_photo->image_path)}}" alt="">
                        </div>
                        <div class="col-md-4 additionalImage">
                            @foreach($photo_gallery as $photo)
                            <img src="{{('/assets/upload/gallery_upload/'.$photo->image_path)}}" alt="">
                            @endforeach
                        </div>
                    </div>
                </section>
                <section id="videos">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 style="padding-right: 140px;">videolar</h2>
                            <div class="boldLineH fromRight">
                                <div class="boldLineVR hidden-xs"></div>
                            </div>
                            <iframe class="bigVideo" width="560" height="315" src="https://www.youtube.com/embed/{{ $first_video->youtube_path }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                    </div>
                </section>
                <div id="videosContent">
                    <div class="row">
                        <div class="col-md-12 iCol">
                            <div class="boldLineH noImage hidden-xs">
                                <div class="boldLineVL hidden-xs"></div>
                            </div>
                            @foreach($video_gallery as $v)
                            <div class="col-md-3 videoCont">
                                <iframe class="miniVideo" width="560" height="315" src="https://www.youtube.com/embed/{{ $v->youtube_path }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            </div>
                            @endforeach
               
                        </div>
                    </div>
                </div>
                <section id="blogs">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 style="padding-right: 140px;">bloqlar</h2>
                            <div class="boldLineH fromRight">
                                <div class="boldLineVR hidden-xs"></div>
                            </div>
                        </div>
                        <div class="col-md-12 iCol blogger" id="load-data">

                            @foreach($blogs as $blog)
                                @if($loop->iteration % 2 == 1)
                                    <div class="col-md-6 blog">
                                        <p>{{ $blog->blog_text}}</p>
                                    </div>
                                    <div class="col-md-6 blog">
                                        <img src="{{ asset('/assets/upload/blog_upload/'.$blog->blog_photo) }}" alt="">
                                    </div>
                                @else
                                    <div class="col-md-6 col-md-push-6 blog">
                                        <p>{{ $blog->blog_text }}</p>
                                    </div>
                                    <div class="col-md-6 col-md-pull-6 blog">
                                        <img src="{{ asset('/assets/upload/blog_upload/'.$blog->blog_photo) }}" alt="">
                                    </div>
                                @endif
                            @endforeach
                <div id="remove-row" class="col-md-12">
                <button type="button" id="btn-more" data-id="{{ $blog->id }}"> Digər </button>
            </div>
                        </div>
                    </div>
                </section>
                <section id="ads"></section>
            </main>
            <footer id="footer">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('assets/images/withCar.png') }}" alt="">
                    </div>
                    <div class="col-md-6">
                        <ul>
                            @foreach($social_networks as $social)
                            <li><a href="{{ $social->facebook_link }}"><i class="fa fa-facebook" aria-hidden="true"></i> <span class="hidden-xs">Facebook</span></a></li>
                            @endforeach
                             @foreach($social_networks as $social)
                            <li><a href="{{ $social->instagram_link }}"><i class="fa fa-instagram" aria-hidden="true"></i> <span class="hidden-xs">Instagram</span></a></li>
                            @endforeach
                             @foreach($social_networks as $social)
                            <li><a href="{{ $social->twitter_link }}"><i class="fa fa-twitter" aria-hidden="true"></i> <span class="hidden-xs">Twitter</span></a></li>
                            @endforeach
                             @foreach($social_networks as $social)
                            <li><a href="{{ $social->youtube_link }}"><i class="fa fa-youtube" aria-hidden="true"></i> <span class="hidden-xs">Youtube</span></a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src='{{ asset('assets/scripts/jquery.js') }}'></script>
    <script src='{{ asset('assets/scripts/bootstrap.min.js') }}'></script>
    <script src='{{ asset('assets/scripts/main.js') }}'></script>
    <script>
    $(document).ready(function(){
  

       $(document).on('click','#btn-more',function(){
       var id = $(this).data('id');
       $("#btn-more").html("Loading....");
       $.ajax({
           url : '{{ url("/") }}',
           method : "POST",
           data : {id:id, _token:"{{csrf_token()}}"},
           dataType : "text",
           success : function (data)
           {
              if(data != '') 
              {
                  $('#remove-row').remove();
                  $('#load-data').append(data);
              }
              else
              {
                  $('#btn-more').html("Blog yoxdur");
              }
           }
       });
   });
}); 
</script>
</body>

</html>
