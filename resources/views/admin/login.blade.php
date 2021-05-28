<!DOCTYPE html>
<html lang="en">
<!-- meta contains meta taga, css and fontawesome icons etc -->
@include('admin.common.style')
<!-- ./end of meta -->
<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            @if( count($errors) > 0)
            @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                        <span class="sr-only">{{ trans('labels.Error') }}:</span>
                        {{ $error }}
                </div>
                @endforeach
            @endif

            @if(Session::has('loginError'))
            <div class="alert alert-danger" role="alert">
                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                    <span class="sr-only">{{ trans('labels.Error') }}:</span>
                    {!! session('loginError') !!}
            </div>
            @endif
          <div class="card-header text-center">
            <a href="#" class="h1"><b>Admin</a>
          </div>
          <div class="card-body">
            <form action="{{ url('admin/verifylogin') }}" method="post" class="form-validate">
                @csrf
              <div class="input-group mb-3">
                <input type="email" name="email" id ="email" value="sydkhalid7@gmail.com" class="form-control" placeholder="Email">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" name="password" id="password" value="123456" class="form-control" placeholder="Password">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <!-- /.col -->
                <div class="col-4">
                  </div>
                <div class="col-4">
                  <button type="submit" class="btn btn-primary btn-block">Login</button>
                </div>
                <!-- /.col -->
              </div>
            </form>
            {{-- <p class="mb-1">
              <a href="#">I forgot my password</a>
            </p> --}}
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
<!-- /.login-box -->

<!-- footer contains script  etc -->
@include('admin.common.script')
<!-- ./end of footer -->
</body>
</html>
