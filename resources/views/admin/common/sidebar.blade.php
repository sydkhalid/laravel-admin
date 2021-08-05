<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              <li class="nav-item">
                <div class="pull-right">
                  </div>
                  <a href="{{ URL::to('admin/dashboard')}}" class="nav-link {{ Request::is('admin/dashboard') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    {{ trans('labels.dashboard') }}
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <div class="pull-right">
                  </div>
                <a href="{{ URL::to('admin/admins')}}" class="nav-link {{ Request::is('admin/admins') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    {{ trans('labels.manage_admin') }}
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <div class="pull-right">
                  </div>
                <a href="{{ URL::to('admin/menus')}}" class="nav-link {{ Request::is('admin/menus') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-brain"></i>
                  <p>
                    {{ trans('labels.menu') }}
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <div class="pull-right">
                  </div>
                <a href="{{ URL::to('admin/logout')}}" class="nav-link">
                  <i class="nav-icon fas fa-power-off"></i>
                  <p>
                    {{ trans('labels.logout') }}
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
              </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
