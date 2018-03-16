              @extends('admin_view.layouts.master')
              @section('content1')
              <div class="x_panel">
                   <div class="x_content">
                  <form action="{{ url ('/admin/save_video_gallery')  }}" method="POST" id="demo-form2" class="form-horizontal form-label-left">
                       {{ csrf_field()  }}
                   
                         <div class="form-group">
                          <label class="control-label col-md-3">Youtube Link<span class="required">*</span>
                          </label>
                          <div class="col-md-7">
                            <input type="text" name="youtube_path" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                          <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success">Insert</button>
                        </div>
                        </form>
                          @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        </div>
                      </div>
                    
                    @stop