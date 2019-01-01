<?php

namespace App\Http\Controllers;

use App\Receptionist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class receptionistController extends Controller
{
    //
     public function index(Request $request)
    {
        if(session()->has('usname')){
    	return view('receptionist.home.home');}
        else{
            return redirect()->route('login.index');
        }
    }

     public function create(Request $request)
    {
        if(session()->has('usname')){
    	return view('receptionist.create.index');}
        else{
            return redirect()->route('login.index');
        }
    }

    public function store(Request $request)
    {

    	$receptionist=new Receptionist();
    	$receptionist->rusername=$request->username;
    	$receptionist->rpassword=$request->password;
		$receptionist->raddress=$request->address;
		$receptionist->rphone=$request->phone;
    	$receptionist->save();

        if(session()->has('usname')){
    	return redirect()->route('receptionist.showalltoSupervisor');}
        else{
            return redirect()->route('login.index');
        }
    }

     public function showalltoSupervisor(Request $request)
    {
        $receptionist=DB::table('receptionists')
                ->get();
                if(session()->has('usname')){
            return view('receptionist.list.index')->with('receptionists',$receptionist);}
            else{
            return redirect()->route('login.index');
        }
    }

    public function searchByName(Request $request, $name)
    {
        if($name){
        $receptionist=DB::table('receptionists')
               -> where('rusername','like','%'.$name.'%')
               ->get();
            return response()->json($receptionist); 
        }
    }

    public function destroy(Request $request,$id)
    {
        $receptionist=DB::table('receptionists')
                ->where('receptionists.id','=',$id)
                ->delete();
         if(session()->has('usname')){
        return redirect()->route('receptionist.showalltoSupervisor');}
        else{
            return redirect()->route('login.index');
        }
    }
}
