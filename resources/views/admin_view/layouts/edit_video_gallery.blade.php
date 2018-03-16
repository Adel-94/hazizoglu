              @extends('admin_view.layouts.master')
              @section('content1')
              <div class="x_panel">
                   <div class="x_content">
                 <form action="{{ route('update_video_gallery', $video_id->id)  }}" method="POST" id="demo-form2" class="form-horizontal form-label-left" enctype="multipart/form-data">
                       {{  csrf_field()  }}
                          <div class="form-group">
                          <label class="control-label col-md-3">Youtube Link<span class="required">*</span>
                          </label>
                          <div class="col-md-7">
                          <iframe width="100" height="100"
                            src="https://www.youtube.com/embed/{{ $video_id->youtube_path }}">
                          </iframe>
                            <input type="text"  name="youtube_path"  required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                          <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success">Update</button>
                        </div>
                        </form>
                        @if ($errors->any())
                           <div class="alert alert-danger">
                               <ul>
                                   @foreach ($errors->all() as $error)
                                       <li>{{ $error }}</li>
                                   @endforeach
                               </ul>
                           </div>
                       @endif
                        </div>
                      </div>
                    
                    @stop