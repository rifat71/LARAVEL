<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Admin;
use App\DataAnalysis;
use App\PatientCount;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(session()->has('usname')){
        return view('admin.home.home');}
         else{
            return redirect()->route('login.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
        

      /*  $patientcount=DB::table('patientcount')
                ->where('patientcount.id','=',1)
                ->get(); */

        $maxValue = DataAnalysis::max('nofp');
        $total = PatientCount::max('tpatient');
          
        $doctoranalysis=DB::table('doctoranalysis')
                       ->where('doctoranalysis.nofp','=',$maxValue)
                       ->get();

       // $patientcount=DB::table('patientcount')
                    //   ->get();

            //  $doctoranalysis=DataAnalysis::find($doctoranalysis.id);
            //  $doctoranalysis->parcent=($maxValue*100)/$total;
             // $doctoranalysis->save();
        if(session()->has('usname')){
        return view('admin.show.index')->with('doctoranalysis',$doctoranalysis);}
         else{
            return redirect()->route('login.index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
