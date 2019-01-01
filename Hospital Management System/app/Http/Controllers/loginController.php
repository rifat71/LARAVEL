<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//to use the User Model Class
//use App\User;
//for Query Builder
use Illuminate\Support\Facades\DB;


class loginController extends Controller
{
    public function index(Request $request)
    {
    	return view('login.index');
    }
    public function verify(Request $request)
    {
    	$un=$request->username;
    	//$pw=$request->input('password');
    	$pw=$request->password;

    	//Eloquent
    	//$user=User::all();//to select all the records

    	//$user=User::find(1);//to select a specific record against primary key

    	// $user=User::where('username','thor')
    	// 			->where('password','123')
    	// 			->take(10)
    	// 			->get();
    				//->first();
    				//->orWhere('password','123');

    	// $user=User::where('username',$un)
    	// 			->where('password',$pw)
    	// 			->first();		
        $user=null;
        $type="";
        if($un[0]=='1'){
    	//Query Builder
            $type="receptionist";
    	$user=DB::table('receptionists')
				->where('rusername',$un)
				->where('rpassword',$pw)
				->first();
		}
        else if($un[0]=='5'){
        //Query Builder
            $type="doctor";
        $user=DB::table('doctors')
                ->where('dusername',$un)
                ->where('dpassword',$pw)
                ->first();
        }	
        else if($un[0]=='6'){
        //Query Builder
            $type="supervisor";
        $user=DB::table('supervisors')
                ->where('susername',$un)
                ->where('spassword',$pw)
                ->first();
        }
        else if($un[0]=='7'){
        //Query Builder
            $type="admin";
        $user=DB::table('admin')
                ->where('ausername',$un)
                ->where('apassword',$pw)
                ->first();
        }


    	if($user!=null)
    	{
            if($type=="doctor")
            {
                $request->session()->put('usname',$user->dusername);
                return redirect()->route('dhome.index');
            }
            else if($type=="receptionist")
            {
                $request->session()->put('usname',$user->rusername);
                return redirect()->route('rhome.index');
            }
            else if($type=="supervisor")
            {
                $request->session()->put('usname',$user->susername);
                return redirect()->route('shome.index');
            } 
            else if($type=="admin")
            {
                $request->session()->put('usname',$user->ausername);
                return redirect()->route('ahome.index');
            } 
    	}
    	else
    	{
    		$request->session()->flash('message','Invalid username or password');
    		return redirect()->route('login.index');
    	}
    }
}
