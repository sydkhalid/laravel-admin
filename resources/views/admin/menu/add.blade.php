@include('admin.layout.app')
@section('content')
    <div class="content-wrapper">
        @include('admin.common.breadcrumb')
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-12">
                                        @if (count($errors) > 0)
                                            @if ($errors->any())
                                                <div class="alert alert-danger alert-dismissible">
                                                    <button type="button" class="close" data-dismiss="alert"
                                                        aria-hidden="true">&times;</button>
                                                    Danger alert preview. This alert is dismissable.
                                                </div>
                                            @endif
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form class="form-horizontal" action="{{ route('menus.store') }}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="row {{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label class="col-md-3 col-form-label">Name</label>
                                        <div class="col-md-9">
                                            <div class="form-group has-default bmd-form-group">
                                                <input type="text" placeholder="name" class="form-control" name="name"
                                                    value="{{ old('name') }}" id="name" tabindex="1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row {{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label class="col-md-3 col-form-label">Menu URL</label>
                                        <div class="col-md-9">
                                            <div class="form-group has-default bmd-form-group">
                                                <input type="text" id="url" name="url" class="form-control"
                                                    placeholder="url" tabindex="2" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3 col-form-label"></label>
                                        <div class="col-md-9">
                                            <button type="submit" tabindex="7" class="btn btn-success btn-round"><i
                                                    class="fa fa-save"></i>&nbsp;&nbsp;Save</button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
