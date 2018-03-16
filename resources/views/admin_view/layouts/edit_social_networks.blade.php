              @extends('admin_view.layouts.master')
              @section('content1')
              <div class="x_panel">
                   <div class="x_content">
                 <form action="{{ route('update_social_networks', $social_id->id)  }}" method="POST" id="demo-form2" class="form-horizontal form-label-left" enctype="multipart/form-data">
                       {{ csrf_field()  }}
                          <div class="form-group">
                          <label class="control-label col-md-3">Facebook Link <span class="required">*</span>
                          </label>
                          <div class="col-md-7">
                            <input type="text" id="facebook_link" name="facebook_link" value="{{ $social_id->facebook_link}}" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">Instagram Link <span class="required">*</span>
                          </label>
                          <div class="col-md-7">
                            <input type="text" id="instagram_link" name="instagram_link" value="{{ $social_id->facebook_link}}" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">Twitter Link <span class="required">*</span>
                          </label>
                          <div class="col-md-7">
                            <input type="text" id="twitter_link" name="twitter_link" value="{{ $social_id->twitter_link}}" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                            <div class="form-group">
                          <label class="control-label col-md-3">Youtube Link <span class="required">*</span>
                          </label>
                          <div class="col-md-7">
                            <input type="text" id="youtube_link" name="youtube_link" value="{{ $social_id->youtube_link}}" required="required" class="form-control col-md-7 col-xs-12">
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