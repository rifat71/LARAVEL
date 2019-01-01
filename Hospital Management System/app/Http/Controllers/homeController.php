<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class homeController extends Controller
{
    public function index(Request $request)
    {
    	$users=User::all();
    	//return view('admin.home.homeadmin')->with('users',$users);
    	return view('admin.home.homeadmin');
    }
}
