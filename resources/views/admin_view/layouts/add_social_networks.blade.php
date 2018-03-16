              @extends('admin_view.layouts.master')
              @section('content1')
              <div class="x_panel">
                   <div class="x_content">
                  <form action="{{ url ('/admin/save_social_networks')  }}" method="POST" id="demo-form2" class="form-horizontal form-label-left">
                       {{ csrf_field()  }}
                   
                         <div class="form-group">
                          <label class="control-label col-md-3">Facebook Link <span class="required">*</span>
                          </label>
                          <div class="col-md-7">
                            <input type="text" id="facebook_link" name="facebook_link" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                           <div class="form-group">
                          <label class="control-label col-md-3">Instagram Link <span class="required">*</span>
                          </label>
                          <div class="col-md-7">
                            <input type="text" id="instagram_link" name="instagram_link" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                         <div class="form-group">
                          <label class="control-label col-md-3">Twitter Link <span class="required">*</span>
                          </label>
                          <div class="col-md-7">
                            <input type="text" id="twitter_link" name="twitter_link" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                           <div class="form-group">
                          <label class="control-label col-md-3">Youtube Link <span class="required">*</span>
                          </label>
                          <div class="col-md-7">
                            <input type="text" id="youtube_link" name="youtube_link" required="required" class="form-control col-md-7 col-xs-12">
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