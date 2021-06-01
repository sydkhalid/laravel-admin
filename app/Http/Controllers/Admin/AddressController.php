<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class AddressController extends Controller
{
    //get countries
    public function getAllCountries()
    {
        $allCountries = DB::table('countries')->get();
        return ($allCountries);
    }
}
