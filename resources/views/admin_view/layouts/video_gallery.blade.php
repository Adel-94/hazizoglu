              @extends('admin_view.layouts.master')
              @section('content1')
              <div class="row">
                 <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <a href="{{ url('/admin/add_video_gallery') }}">Add Video</a>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content table-responsive">
                    <table id="datatable-fixed-header" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Youtube Link</th>
                          <th>Update</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                         @foreach($video as $v)
                           <td>{{ $v->id  }}</td>
                           <td>
                             <iframe width="100" height="100"
                            src="https://www.youtube.com/embed/{{ $v->youtube_path }}">
                          </iframe>
                           </td>
                            <td>
                           <a href="{{ route('edit_video_gallery', $v->id) }}"> <button type="button" class="btn btn-info">Edit</button> </a>
                         </td>
                         <td>
                          <a href="{{ route('delete_video_gallery', $v->id) }}">   <button type="button" class="btn btn-danger delete">Delete</button> </a>
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