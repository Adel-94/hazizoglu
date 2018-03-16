              @extends('admin_view.layouts.master')
              @section('content1')
              <div class="x_panel">
                   <div class="x_content">
                <form action="{{ route('update_adminSettings', $admin_id->id)  }}" method="POST" id="demo-form2" class="form-horizontal form-label-left" enctype="multipart/form-data">
                       {{ csrf_field()  }}
                          <div class="form-group">
                          <label class="control-label col-md-3">Name <span class="required">*</span>
                          </label>
                          <div class="col-md-7">
                            <input type="text" id="name" name="name" value="{{ $admin_id->name}}" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                         <div class="form-group">
                        <label class="control-label col-md-3">Email <span class="required">*</span>
                          </label>
                          <div class="col-md-7">
                      <input type="text" id="email" name="email" value="{{ $admin_id->email}}" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                          <div class="form-group">
                        <label class="control-label col-md-3"> Password <span class="required">*</span>
                          </label>
                          <div class="col-md-7">
                      <input type="password" id="password" name="password"  class="form-control col-md-7 col-xs-12" placeholder="New Password">
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