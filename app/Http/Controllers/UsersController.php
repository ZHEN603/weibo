<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class UsersController extends Controller
{
    public function create()
    {
        return view('users/create');
    }

    public function show(User $user)
    {
        return view('users/show',compact('user'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|unique:users|max:50',
            'email'=>'required|email|unique:users|max:255',
            'password'=>'required|confirmed|min:6'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        Auth::login($user);
        $msg="欢迎您的加入，".$user->name;
        session()->flash('success', $msg);
        return redirect()->route('users.show',[$user]);
    }

    public function edit(User $user)
    {
        return view('users.edit',compact('user'));
    }

    public function update(Request $request,User $user)
    {
        $this->validate($request,[
            'name'=>'required|max:50',
            'password'=>'required|confirmed|min:6'
        ]);

        $user->update([
            'name'=>$request->name,
            'password'=>bcrypt($request->password)
        ]);

        session()->flash('success','个人资料更新成功！');

        return redirect()->route('users.show',$user->id);
    }

}
