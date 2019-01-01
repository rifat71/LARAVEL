<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use App\Http\Requests\userRequest;

class userController extends Controller
{
    public function create(Request $request)
    {
    	return view('admin.create.admin');
    }
    public function store(userRequest $request)
    {

        // Validator::make($request->all(),
        //     [

        //         'username'=>'required|min:6',
        //         'password'=>'required',
        //         'type'=>'required'
        //     ])->validate();

        //$validator->validate();

        // if($validator->fails())
        // {
        //     return redirect()->back()
        //                     ->with('errors',$validator->errors());
        // }

    	$user=new User();
    	$user->username=$request->username;
    	$user->password=$request->password;
		$user->type=$request->type;
    	$user->save();

    	return redirect()->route('admin.admin_list.list');
    }

    public function show(Request $request,$id)
    {
    	$user=User::find($id);
    	return view('user.show')->with('user',$user);
    }
	

    public function edit(Request $request,$id)
    {
    	$user=User::find($id);
    	return view('user.edit')->with('user',$user);
    }
    public function update(Request $request,$id)
    {
    	$user=User::find($id);
    	$user->username=$request->username;
    	$user->password=$request->password;
		$user->type=$request->type;
    	$user->save();

    	return redirect()->route('home.index');
    }

    public function delete(Request $request,$id)
    {
    	$user=User::find($id);
    	return view('user.delete')->with('user',$user);
    }
    public function destroy(Request $request)
    {
    	User::destroy($request->uid);

    	return redirect()->route('home.index');
    }
}
