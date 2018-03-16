          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
               @if(!empty(Auth::user()->name))
              <a href="{{ url('/admin')}}" class="site_title"><i class="fa fa-paw"></i> <span>Welcome,
             
                {{ Auth::user()->name }}
         
             

              </span></a>
                   @endif
            </div>
            <div class="clearfix"></div>
            <!-- menu profile quick info -->
            <div class="profile clearfix">
       
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="{{ url('/admin') }}"><i class="fa fa-home"></i> Profil </a>
                  </li>
                  <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('/admin/blog')   }}">Blogs</a></li>
                      <li><a href="{{ url('/admin/about')   }}">About</a></li>
                      <li><a href="{{ url('/admin/social_networks')   }}">Social Networks</a></li>
                      <li><a href="{{ url('/admin/photo_gallery')   }}">Photo Gallery</a></li>
                      <li><a href="{{ url('/admin/video_gallery')   }}">Video Gallery</a></li>
                      <li><a href="{{ url('/admin/interview')   }}">Interview</a></li>
                      <li><a href="{{ url('/admin/banners')   }}">Banners</a></li>
                    </ul>
                  </li>
         
                </ul>
              </div>
     

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings" href="{{url('/admin/adminSettings')  }}">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                   </a>
              <a href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
              </form>
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>         </a>
           
            </div>
            <!-- /menu footer buttons -->
          </div>
 

  