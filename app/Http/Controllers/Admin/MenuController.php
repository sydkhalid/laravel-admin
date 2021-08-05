<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Lang;
use Illuminate\Support\Facades\Artisan;
use App\Model\Menu;
use ServiceHelper;

class MenuController extends Controller
{
    public function __construct(Menu $menus)
    {
        $this->menu = $menus;
    }
    //get index
    public function index(Request $request)
    {
        $title = [
            'Title' => Lang::get("labels.menu")
        ];
        $language_id =   '1';
        $result = [];
        $message = [];
        $errorMessage = [];

        $result = [
            'Title' => 'Menu',
            'menu_details' => $this->menu->get(),
            'message' => $message,
            'errorMessage' => $errorMessage
        ];
        return view("admin.menu.index",$title)->with('result', $result);
    }
    public function create(Request $request){
        $title = [
            'Title' => Lang::get("labels.menu")
        ];
        $language_id =   '1';
        $result = [];
        $message = [];
        $errorMessage = [];

        $result = [
            'Title' => 'Menu',
            'menu_details' => $this->menu->get(),
            'message' => $message,
            'errorMessage' => $errorMessage
        ];
        // dd($result);
        return view("admin.menu.add",$title)->with('result', $result);
    }
    public function store(Request $request){
        $name = 'Admin/'.ucfirst($request->name);
        // create controller
        $Controller_link = "\Admin\'".ucfirst($request->name)."Controller";
        $Controller_name= str_replace("'", "", $Controller_link);
        $createController = ServiceHelper::CreateController($request->all());
        $file ="app\Http\Controllers".$Controller_name.".php";
        $link= str_replace("'", "", $file);
        \File::copy(base_path('controller.php'),base_path($link));
        //create model
        $createModel = Artisan::call('make:model Model/Admin/'.$name);
        //create route
        $new = "\Route::resource('".$request->name."s', ".ucfirst($request['name'])."Controller::class);";
        $file = base_path('routes\admin.php');
        $route_append = file_put_contents( $file, $new, FILE_APPEND );
        //create view
        $createView = ServiceHelper::CreateView($request->all());
        $path_link = str_replace("'", "", "\'".($request->name)."");
        $path =  base_path('resources\views\admin').$path_link;
        \File::makeDirectory($path, $mode = 0777, true, true);
        $file = $path."\index.blade.php";
        $link= str_replace("'", "", $file);
        \File::copy(base_path('view.php'),$link);
        return redirect()->back()->with('message','created successfully')->with('message_type','warning');

    }
}
