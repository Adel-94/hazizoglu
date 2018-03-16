              @extends('admin_view.layouts.master')
              @section('content1')
              <div class="x_panel">
                   <div class="x_content">
                  <form action="{{ url ('/admin/save_interview')  }}" method="POST" id="demo-form2" class="form-horizontal form-label-left">
                       {{ csrf_field()  }}
                   
                         <div class="form-group">
                          <label class="control-label col-md-3">Interview Text <span class="required">*</span>
                          </label>
                          <div class="col-md-7">
                               <textarea  required="required" class="form-control" rows="10" cols="80" name="interview_text" data-parsley-trigger="keyup" data-parsley-minlength="50" data-parsley-maxlength="50" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                            data-parsley-validation-threshold="10"></textarea>
                          </div>
                        </div>
                           <div class="form-group">
                          <label class="control-label col-md-3">Youtube link <span class="required">*</span>
                          </label>
                          <div class="col-md-7">
                            <input type="text"  name="youtube_path" required="required" class="form-control col-md-7 col-xs-12">
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