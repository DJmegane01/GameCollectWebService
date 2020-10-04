<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //
    public function index(){
        $users = User::all();
        return view('user/index',compact('users'));
    }

    public function edit($id){
        $user = User::findOrFail($id);
        return view('user/edit',compact('user'));
    }

    public function update(Request $request,$id){
        $user = User::findOrFail($id);
        $user->user_name = $request->user_name;
        $user->password = $request->password;
        $user->save();

        return redirect("/user");
    }

    public function destroy($id){
        $user = User::findOrFail($id);
        $user->delete();

        return redirect("/user");
    }

    public function create(){
        $user = new User();
        return view('user/create',compact('user'));
    }

    public function userCreate(Request $request){
        $user = new User();
        $user->id = $request->id;
        $user->user_name = $request->user_name;
        $user->password = $request->password;
        $user->save();
        return redirect("/user");
    }
}
