<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Http\Requests\userRequest;
use Illuminate\Support\Facades\DB;

class roomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
         if(session()->has('usname')){
        return view('room.create.index');}
         else{
            return redirect()->route('login.index');
        }
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
        $room=new Room();
        $room->pid=0;
        $room->save();
         if(session()->has('usname')){
        return redirect()->route('room.show');}
         else{
            return redirect()->route('login.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show(Request $request)
    {
        $room=DB::table('room')
                ->get();
                 if(session()->has('usname')){
            return view('room.show.index')->with('room',$room);}
             else{
            return redirect()->route('login.index');
        }
    }

    public function showEmpty(Request $request)
    {
        $room=DB::table('room')
                ->where('room.pid','=',0)
                ->get();
                 if(session()->has('usname')){
            return view('room.show.emptyroom')->with('room',$room);}
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $room=DB::table('room')
                ->where('room.rid','=',$id)
                ->delete();
         if(session()->has('usname')){
        return redirect()->route('room.show');}
         else{
            return redirect()->route('login.index');
        }
    }

     public function searchById(Request $request, $id)
    {
        if($id){
        $room=DB::table('room')
               -> where('rid','like','%'.$id.'%')
               ->get();
                if(session()->has('usname')){
            return response()->json($room); }
        }
    }

}
