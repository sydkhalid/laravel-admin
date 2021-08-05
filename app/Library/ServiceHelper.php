<?php
namespace app\Library;
class ServiceHelper
{
    static function CreateController($data){
$r = '$request';
$id = '$id';
$title = '$title';
$language_id = '$language_id ';
$message = '$message';
$result = '$result';
$errorMessage = '$errorMessage';
$val = "<?php\n";
$val .= "/**
* Created by Syed Khalid Ahamed
* Date: ".date("Y-m-d H:i:s")."
*/\n";
$val .="namespace App\Http\Controllers\Admin;\n";
$val .="use Illuminate\Http\Request;\n";
$val .="use App\Http\Controllers\Controller;\n";
$val .="use Lang;\n";
$val .="class ".ucfirst($data['name'])."Controller extends Controller
            {
            /**
             * Display a listing of the resource.
             *
             * @return \Illuminate\Http\Response
             */
            public function index()
            {
                $title = [
                    'Title' => Lang::get('labels.".$data['name']."')
                ];
                $language_id =  '1';
                $result = [];
                $message = [];
                $errorMessage = [];

                $result = [
                    'Title' => 'Menu',
                    'message' => $message,
                    'errorMessage' => $errorMessage
                ];
                return view('admin.".$data['name'].".index',$title)->with('result', $result);
            }

            /**
             * Show the form for creating a new resource.
             *
             * @return \Illuminate\Http\Response
             */
            public function create()
            {
            //
            }

            /**
             * Store a newly created resource in storage.
             *
             * @param  \Illuminate\Http\Request  ". $r ."
             * @return \Illuminate\Http\Response
             */
            public function store(Request ". $r .")
            {
            //
            }

            /**
             * Display the specified resource.
             *
             * @param  int  ". $id ."
             * @return \Illuminate\Http\Response
             */
            public function show(". $id .")
            {
            //
            }

            /**
             * Show the form for editing the specified resource.
             *
             * @param  int  ". $id ."
             * @return \Illuminate\Http\Response
             */
            public function edit(". $id .")
            {
            //
            }

            /**
             * Update the specified resource in storage.
             *
             * @param  \Illuminate\Http\Request  ". $r ."
             * @param  int  ". $id ."
             * @return \Illuminate\Http\Response
             */
            public function update(Request ". $r .", ". $id .")
            {
            //
            }

            /**
             * Remove the specified resource from storage.
             *
             * @param  int  ". $id ."
             * @return \Illuminate\Http\Response
             */
            public function destroy(". $id .")
            {
            //
            }

        ";
$val .=" }";
        $filename = base_path() . '/controller.php';
        $fp = fopen($filename,"w+");
        fwrite($fp, $val);
        fclose($fp);
    }
    static function CreateView($data){
        $val = '
        @include("admin.layout.app")
@section("content")
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include("admin.common.breadcrumb")
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
                                <a href="" type="button" class="btn btn-sm btn-primary">
                                    <i class="fas fa-user"></i>  {{ trans("labels.addmenu") }}
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
                        <th>{{ trans("labels.id") }}</th>
                        <th>{{ trans("labels.name") }}</th>
                        <th>{{ trans("labels.url") }}</th>
                        <th>{{ trans("labels.action") }}</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($result["menu_details"] as $key=>$menu)
                        <tr>
                            <td>{{$loop->iteration }}</td>
                            <td>{{ $menu->name }} </td>
                            <td>{{ $menu->url }} </td>
                            <td>
                                @if($menu->status==1)
                                  <strong class="badge bg-green">{{trans("labels.active")}} </strong>
                                   @else
                                  <strong class="badge bg-light-grey">{{trans("labels.inactive")}} </strong>
                                @endif

                              </td>
                            <td>
                                <a href="editadmin/{{ $menu->id }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                <a href="#" class="btn btn-danger" title="{{ trans("labels.delete") }}" id="deleteCustomerFrom" customers_id="{{ $menu->id }}"> <i class="fas fa-trash"></i></a>
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

        ';
        $filename = base_path() . '/view.php';
        $fp = fopen($filename,"w+");
        fwrite($fp, $val);
        fclose($fp);
    }
}
