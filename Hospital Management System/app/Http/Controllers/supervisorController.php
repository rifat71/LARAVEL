<?php

namespace App\Http\Controllers;
use App\Supervisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class supervisorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
         if(session()->has('usname')){
        return view('supervisor.home.index');}
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
        //
    public function show(Request $request,$id)
    {
        $v=$request->session()->get('usname');
        $supervisor=DB::table('supervisors')
                ->where('supervisors.susername','=',$v)
                ->get();
                 if(session()->has('usname')){
            return view('supervisor.profile.index')->with('supervisors',$supervisor);}
             else{
            return redirect()->route('login.index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $supervisor=Supervisor::find($id);
         if(session()->has('usname')){
        return view('supervisor.edit.index')->with('supervisor',$supervisor);}
         else{
            return redirect()->route('login.index');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request,$id)
    {
        $supervisor=Supervisor::find($id);
        $supervisor->saddress=$request->address;
        $supervisor->spassword=$request->password;
        $supervisor->sphone=$request->phone;
        $supervisor->save();

          if(session()->has('usname')){
        return redirect()->route('supervisor.show',[$supervisor->id]);}
         else{
            return redirect()->route('login.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
