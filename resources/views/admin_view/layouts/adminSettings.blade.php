              @extends('admin_view.layouts.master')
              @section('content1')
              
              <div class="row">
                 <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                  <div class="x_content">
               
                    <table id="datatable-fixed-header" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Name</th>
                           <th>Email</th>
                           <th>Password</th>
                          <th>Update</th>
                      
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                         @foreach($admins as $a)
                           <td>{{ $a->id  }}</td>
                            <td>{{ $a->name  }}</td>
                            <td>{{ $a->email }}</td>
                             <td>{{ $a->password }}</td>
                            <td>
                           <a href="{{ route('edit_adminSettings', $a->id) }}"> <button type="button" class="btn btn-info">Edit</button> </a>
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