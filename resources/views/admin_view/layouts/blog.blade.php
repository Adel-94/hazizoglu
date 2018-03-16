              @extends('admin_view.layouts.master')
              @section('content1')
              <div class="row">
                 <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <a href="{{ url('/admin/add_blog') }}">Add Blog</a>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content table-responsive">
                    <table id="datatable-fixed-header" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                           <th>Id</th>
                           <th>Blog Text</th>
                           <th>Blog Photo</th>
                           <th>Update</th>
                           <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                         @foreach($blog as $b)
                           <td>{{ $b->id  }}</td>
                            <td>{{str_limit("$b->blog_text",200)}}</td>
                            @if(!empty($b->blog_photo))
                             <td>
                                   <img src="{{('/assets/upload/blog_upload/'.$b->blog_photo)}}" style="width: 80px; height: 80px;"> 
                             </td>
                                @else
                               <td></td>
                             @endif
                            <td>
                          <a href="{{ route('edit_blog', $b->id) }}"> <button type="button" class="btn btn-info">Edit</button> </a>
                         </td>
                         <td>
                           <a href="{{ route('delete_blog', $b->id) }}">   <button type="button" class="btn btn-danger delete">Delete</button> </a>
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