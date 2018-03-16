              @extends('admin_view.layouts.master')
              @section('content1')
              <div class="x_panel">
                   <div class="x_content">
                 <form action="{{ route('update_blog', $blog_id->id)  }}" method="POST" id="demo-form2" class="form-horizontal form-label-left" enctype="multipart/form-data">
                       {{ csrf_field()  }}
                         <div class="form-group">
                          <label class="control-label col-md-3">Blog text <span class="required">*</span>
                          </label>
                          <div class="col-md-7">
                             <textarea  required="required" class="form-control" rows="10" cols="80" name="blog_text" data-parsley-trigger="keyup" data-parsley-minlength="50" data-parsley-maxlength="50" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                          data-parsley-validation-threshold="10">{{ $blog_id->blog_text }}</textarea>
                          </div>
                        </div>
                        .<div class="form-group">
                      <label class="control-label col-md-3">Blog Photo <span class="required">*</span>
                          </label>
                           <div class="col-md-7" style="margin-top:13px;">
                             @if(!empty($blog_id->blog_photo))
                              <img src="{{('/assets/upload/blog_upload/'.$blog_id->blog_photo)}}" style="width: 80px; height: 80px;">
                            <input type="file" name="blog_photo" value="{{ ( asset('/assets/upload/blog_upload/').'/'.$blog_id->blog_photo) }}" accept="image/*">
                            @else
                             <input type="file" name="blog_photo"     accept="image/*">
                             @endif
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