              @extends('admin_view.layouts.master')
              @section('content1')
              <div class="x_panel">
                  <div class="x_content">
                  <form action="{{ url ('/admin/save_photo_gallery')  }}" method="POST" id="demo-form2" class="form-horizontal form-label-left" enctype="multipart/form-data">
                       {{ csrf_field()  }}
    
                      <div class="form-group">
                      <label class="control-label col-md-3">Image<span class="required">*</span>
                          </label>
                           <div class="col-md-7" style="margin-top:13px;">
                            <input type="file" required="required" name="image_path" accept="image/*">
                          </div>
                        </div>
                          <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success">Insert</button>
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