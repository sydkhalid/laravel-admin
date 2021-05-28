  <!DOCTYPE html>
  <html lang="en">
  <!-- meta contains meta taga, css and fontawesome icons etc -->
  @include('admin.common.style')
  <!-- ./end of meta -->
  <body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Preloader -->
    @include('admin.common.loader')

    <!-- Navbar -->
    @include('admin.common.navbar')
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    @include('admin.common.sidebar')


      <!-- Main content -->
        @yield('content')
      <!-- /.content -->

    <!-- /.content-wrapper -->
   @include('admin.common.footer')

  </div>
  <!-- ./wrapper -->
  @include('admin.common.script')
  </body>
  </html>
