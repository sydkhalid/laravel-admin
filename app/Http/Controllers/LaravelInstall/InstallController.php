<?php

namespace App\Http\Controllers\LaravelInstall;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
class InstallController extends Controller
{

    /**
     * Display the install page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $val = Session::get('erorrr');
        session(['erorrr'=>$val]);

        return view('vendor.installer.welcome',['error' => 0,'msg' => '']);
    }
    public function requirements()
    {
        dd("ad");
    }



}
