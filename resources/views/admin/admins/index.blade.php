@include('admin.layout.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('admin.common.breadcrumb')
        <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
        <div class="container-fluid">
            <div class="row">
            <div class="col-12">
                <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="left-text">{{ $Title }}</div>
                            <div class="text-right">
                                <a href="{{ URL::to('admin/addadmins')}}" type="button" class="btn btn-sm btn-primary">
                                    <i class="fas fa-user"></i>  {{ trans('labels.addadmins') }}
                                    </a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            @if (count($errors) > 0)
                                @if($errors->any())
                                    <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        Danger alert preview. This alert is dismissable.
                                    </div>
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>{{ trans('labels.id') }}</th>
                        <th>{{ trans('labels.name') }}</th>
                        <th>{{ trans('labels.email') }}</th>
                        <th>{{ trans('labels.type') }}</th>
                        <th>{{ trans('labels.status') }}</th>
                        <th>{{ trans('labels.action') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($result['admins'] as $key=>$admin)
                        <tr>
                            <td>{{$loop->iteration }}</td>
                            <td>{{ $admin->first_name }} {{ $admin->last_name }} </td>
                            <td>{{ $admin->email }} </td>
                            <td>
                                @if($admin->user_types_id==1)
                                	<strong class="badge bg-green">
                                @else
                                	<strong class="badge bg-light-blue">
                                @endif
                                	{{$admin->user_types_name}}</strong>
                            </td>
                            <td>
                                @if($admin->isActive==1)
                                  <strong class="badge bg-green">{{trans('labels.active')}} </strong>
                                   @else
                                  <strong class="badge bg-light-grey">{{trans('labels.inactive')}} </strong>
                                @endif

                              </td>
                            <td>
                                <a href="editadmin/{{ $admin->id }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                <a href="#" class="btn btn-danger" title="{{ trans('labels.delete') }}" id="deleteCustomerFrom" customers_id="{{ $admin->id }}"> <i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach


                    </tbody>
                    </table>
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
