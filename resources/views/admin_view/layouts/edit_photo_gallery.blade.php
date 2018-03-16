              @extends('admin_view.layouts.master')
              @section('content1')
              <div class="x_panel">
                   <div class="x_content">
                 <form action="{{ route('update_photo_gallery', $gallery_id->id)  }}" method="POST" id="demo-form2" class="form-horizontal form-label-left" enctype="multipart/form-data">
                      {{ csrf_field()  }}
                      <div class="form-group">
                      <label class="control-label col-md-3">Image<span class="required">*</span>
                          </label>
                           <div class="col-md-7" style="margin-top:13px;">
                             @if(!empty($gallery_id->image_path))
                              <img src="{{('/assets/upload/gallery_upload/'.$gallery_id->image_path)}}" style="width: 80px; height: 80px;">
                            <input type="file" name="image_path" value="{{ ( asset('/assets/upload/gallery_upload/').'/'.$gallery_id->image_path) }}" accept="image/*">
                            @else
                             <input type="file" name="image_path"   accept="image/*">
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