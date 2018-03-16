              @extends('admin_view.layouts.master')
              @section('content1')
              <div class="x_panel">
                   <div class="x_content">
                  <form action="{{ url ('/admin/save_banners')  }}" method="POST" id="demo-form2" class="form-horizontal form-label-left" enctype="multipart/form-data">
                       {{ csrf_field()  }}
                      <div class="form-group">
                      <label class="control-label col-md-3">Left_Banner_Image <span class="required">*</span>
                          </label>
                           <div class="col-md-7" style="margin-top:13px;">
                            <input type="file"  name="left_banner_path" required="required" 
                             accept="image/*">
                          </div>
                        </div>
                          <div class="form-group">
                          <label class="control-label col-md-3">Left_Banner_link <span class="required">*</span>
                          </label>
                          <div class="col-md-7">
                            <input type="text" id="left_banner_link" name="left_banner_link" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>

                      <div class="form-group">
                      <label class="control-label col-md-3">Right_Banner_Image <span class="required">*</span>
                          </label>
                           <div class="col-md-7" style="margin-top:13px;">
                            <input type="file"  name="right_banner_path" required="required" 
                             accept="image/*">
                          </div>
                        </div>
                          <div class="form-group">
                          <label class="control-label col-md-3">Right_Banner_link <span class="required">*</span>
                          </label>
                          <div class="col-md-7">
                            <input type="text" id="right_banner_link" name="right_banner_link" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                       <div class="form-group">
                      <label class="control-label col-md-3">Top_Banner_Image <span class="required">*</span>
                          </label>
                           <div class="col-md-7" style="margin-top:13px;">
                            <input type="file"  name="top_banner_path" required="required" 
                             accept="image/*">
                          </div>
                        </div>
                          <div class="form-group">
                          <label class="control-label col-md-3">Top_Banner_link <span class="required">*</span>
                          </label>
                          <div class="col-md-7">
                            <input type="text" id="top_banner_link" name="top_banner_link" required="required" class="form-control col-md-7 col-xs-12">
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