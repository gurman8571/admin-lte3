<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">

        <div class="info">
          <a href="#" class="d-block text-capitalize"> welcome {{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                <a href="{{route('Admin.Dashboard')}}" class="nav-link">
                 <p>Dashboard</p>
                </a>
              </li>


              <li class="nav-item">
                <a href="{{route('professional.index')}}" class="nav-link">
                 <p>Professional</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                 <p>Calender</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('Event.List')}}" class="nav-link">
                 <p>Calender2</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('Event.index')}}" class="nav-link">
                 <p>Events</p>
                </a>
              </li>


              @if(Auth::check()!=false)
              <li class="nav-item">
               <a href="{{ route('logout') }}"   onclick="event.preventDefault();
              document.getElementById('logout-form').submit();"class="nav-link">
                  <p> Logout
                </p>
                </a>
              </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            @endif



            </ul>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
