              @extends('admin_view.layouts.master')
              @section('content1')
              <div class="row">
                 <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <a href="{{ url('/admin/add_social_networks') }}">Add Social Networks</a>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content table-responsive">
                    <table id="datatable-fixed-header" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Facebook link</th>
                          <th>Instagram link</th>
                          <th>Twitter link</th>
                          <th>Youtube link</th>
                          <th>Update</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                         @foreach($socialnetworks as $social)
                           <td>{{ $social->id  }}</td>
                            <td>{{ $social->facebook_link  }}</td>
                            <td>{{ $social->instagram_link  }}</td>
                            <td>{{ $social->twitter_link  }}</td>
                            <td>{{ $social->youtube_link  }}</td>
                            <td>
                           <a href="{{ route('edit_social_networks', $social->id) }}"> <button type="button" class="btn btn-info">Edit</button> </a>
                         </td>
                         <td>
                          <a href="{{ route('delete_social_networks', $social->id) }}">   <button type="button" class="btn btn-danger delete">Delete</button> </a>
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