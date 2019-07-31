<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use App\admin;

class loginController extends Controller
{
	
	public function userApi()
     {
        $result = DB::table('users')
                    ->get();
        return response()->json($result);
    }

    public function adminApi()
     {
        $result = DB::table('admins')
                    ->get();
      }
}
