<?php

namespace App\Http\Controllers;
use App\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class doctorController extends Controller
{
    //
     public function index(Request $request)
    {
         if(session()->has('usname')){
    	return view('doctor.home.home');}
         else{
            return redirect()->route('login.index');
        }
    }

     public function showall(Request $request)
    {
        $doctor=DB::table('doctors')
                ->get();
                 if(session()->has('usname')){
                return view('doctor.r_doctorlist.doctorlist')->with('doctors',$doctor);}
                 else{
            return redirect()->route('login.index');
        }
    }

     public function showalltoSupervisor(Request $request)
    {
        $doctor=DB::table('doctors')
                ->get();
                 if(session()->has('usname')){
            return view('doctor.r_doctorlist.sdoctorlist')->with('doctors',$doctor);}
             else{
            return redirect()->route('login.index');
        }
    }

     public function searchByName(Request $request, $name)
    {
    	//$msg = "This is a simple message.";
        //return response()->json(array('search'=> $msg), 200);
        if($name){
        $doctor=DB::table('doctors')
               -> where('dname','like','%'.$name.'%')
               ->get();
            return response()->json($doctor); 

            //return response()->json(array('search'=> $doctor), 200); 
              //  return Content("success");
           // return view('doctor.r_doctorlist.doctorlist')->with('doctors',$doctor);
        }
    }

     public function profile(Request $request)
    {
        $doctor=DB::table('doctors')
                ->where('doctors.dusername','=',$request->session()->get('usname'))
                ->get();
                 if(session()->has('usname')){
            return view('doctor.profile.index')->with('doctors',$doctor);}
             else{
            return redirect()->route('login.index');
        }
    }

     public function edit(Request $request,$did)
    {
    	$doctor=Doctor::find($did);
         if(session()->has('usname')){
    	return view('doctor.edit.index')->with('doctor',$doctor);}
         else{
            return redirect()->route('login.index');
        }
    }

    public function update(Request $request,$did)
    {
    	$doctor=Doctor::find($did);
    	$doctor->dphone=$request->phone;
    	$doctor->dpassword=$request->password;
		$doctor->daddress=$request->address;
    	$doctor->save();
         if(session()->has('usname')){
    	return redirect()->route('doctor.profile');}
         else{
            return redirect()->route('login.index');
        }
    }

     public function create(Request $request)
    {
         if(session()->has('usname')){
    	return view('doctor.create.index');}
         else{
            return redirect()->route('login.index');
        }
    }
    public function store(Request $request)
    {

    	$doctor=new Doctor();
    	$doctor->dusername=$request->username;
    	$doctor->dpassword=$request->password;
		$doctor->dname=$request->name;
		$doctor->daddress=$request->address;
		$doctor->dphone=$request->phone;
		$doctor->dtype=$request->type;
    	$doctor->save();
          if(session()->has('usname')){
    	return redirect()->route('doctor.showalltoSupervisor');}
         else{
            return redirect()->route('login.index');
        }
    }

    public function destroy(Request $request,$id)
    {
        $doctor=DB::table('doctors')
                ->where('doctors.did','=',$id)
                ->delete();
        
        if(session()->has('usname')){
        return redirect()->route('doctor.showalltoSupervisor');}
         else{
            return redirect()->route('login.index');
        }
    }
}
