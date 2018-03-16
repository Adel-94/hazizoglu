              @extends('admin_view.layouts.master')
              @section('content1')
              
              <div class="row">
                 <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <a href="{{ url('/admin/add_banners') }}">Add Banners</a>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content table-responsive">
                    <table id="datatable-fixed-header" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                           <th>Id</th>
                           <th>Left_image</th>
                           <th>Left_link</th>
                           <th>Right_Image</th>
                           <th>Right_link</th>
                           <th>Top_Image</th>
                           <th>Top_link</th>
                           <th>Update</th>
                           <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                         @foreach($banners as $b)
                           <td>{{ $b->id  }}</td>
                             <td>
                              <img src="{{('/assets/upload/banner_upload/'.$b->left_banner_path)}}" style="width: 50; height: 50px;"> 
                            </td>
                           <td>{{ $b->left_banner_link  }}</td>
                           <td>
                              <img src="{{('/assets/upload/banner_upload/'.$b->right_banner_path)}}" style="width: 50; height: 50px;"> 
                            </td>
                           <td>{{ $b->right_banner_link  }}</td>
                           <td>
                              <img src="{{('/assets/upload/banner_upload/'.$b->top_banner_path)}}" style="width: 50; height: 50px;"> 
                            </td>
                           <td>{{ $b->top_banner_link  }}</td>
                            <td>
                          <a href="{{ route('edit_banners', $b->id) }}"> <button type="button" class="btn btn-info">Edit</button> </a>
                         </td>
                         <td>
                           <a href="{{ route('delete_banners', $b->id) }}">   <button type="button" class="btn btn-danger delete">Delete</button> </a>
                            </td>
                             </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
                      
                  </div>
                </div>
              </div>
              </div>
                @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                               {{ $message }}
                            </div>
                  @endif
              <script type="text/javascript">
              $(".delete").on("click", function(){
                  return confirm("Do you want to delete this item?");
              });
            </script>          
             @stop