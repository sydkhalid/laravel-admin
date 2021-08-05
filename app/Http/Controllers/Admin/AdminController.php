<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Lang;
use DB;
use App\Http\Controllers\Admin\AddressController as AdminAddressController;

class AdminController extends Controller
{
    function __construct()
    {
        $this->address = new AdminAddressController;
    }
    //admins
	public function index(Request $request){

		$title = [
            'Title' => Lang::get("labels.manage_admin")
        ];
		$language_id =   '1';
		$result = [];
		$message = [];
		$errorMessage = [];
		$admins = DB::table('users')
			->leftJoin('user_types','user_types.user_types_id','=','users.role_id')
			->select('users.*','user_types.*')
			->paginate(50);
		$result['message'] = $message;
		$result['errorMessage'] = $errorMessage;
		$result['admins'] = $admins;
		// $result['commonContent'] = $this->Setting->commonContent();
		return view("admin.admins.index",$title)->with('result', $result);
	}
    //add admin
    public function addAdmin(Request $request){
		$title = [
            'Title' => Lang::get("labels.add_admin")
        ];
		$language_id =   '1';
		$result = [];
		$message = [];
		$errorMessage = [];
		$result['countries'] = $this->address->getAllCountries();
		$adminTypes = DB::table('user_types')->where('isActive', 1)->where('user_types_id','>','10')->get();
		$result['adminTypes'] = $adminTypes;
		return view("admin.admins.add",$title)->with('result', $result);

    }
}
