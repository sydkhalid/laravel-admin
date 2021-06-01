<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Validator;
use Lang;
use DB;
class LoginController extends Controller
{
    //check login
	public function login(){
		if (Auth::check()) {
		  return redirect('/admin/dashboard');
		}else{
			$title = "Login Page";
			return view("admin.login");
		}
	}
    //verify login
    public function verifyLogin(Request $request){
        $validator = Validator::make(
			array(
					'email'    => $request->email,
					'password' => $request->password
				),
			array(
					'email'    => 'required | email',
					'password' => 'required',
				)
		);
		//check validation
		if($validator->fails()){
			return redirect('admin/login')->withErrors($validator)->withInput();
		}else{
            //check authentication of email and password
			$adminDetails = array("email" => $request->email, "password" => $request->password ,"role_id" => 1);
			if(auth()->attempt($adminDetails)) {
				$user_admin = auth()->user();
				return redirect('/admin/dashboard');
			}else{
				return redirect('admin/login')->with('loginError',Lang::get("labels.IncorrectEmailPassword"));
			}
        }
    }
    // dashboard
    public function dashboard(Request $request){
        $title = array('Title' => Lang::get("labels.dashboard"));
        return view("admin.dashboard",$title);
    }
    //logout
	public function logout(){
		$logout = Auth::guard('admin')->logout();
		return redirect()->intended('admin/login');
	}
}
