<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class CreateController extends Controller
{
    public function register()
    {
        return view('user.register');
    }

    public function createUser(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed|min:6',
            'level' => 'required',
            'country' => 'required',
            'avator' => 'required',
        ],[],[
            'level' => '人生阶段',
            'country' => '国家',
            'avator' => '头像',
        ]);
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = bcrypt($request->password);
        //大致阶段---国家---头像
        $data['level'] = $request->level;
        $data['country'] = $request->country;
        $data['avator'] = 'f/system_avator/'.$request->avator.'.jpg';
        //创建新用户
        $user = User::create($data);
        session()->flash('green','您的账户注册成功，请登录');
        return redirect()->route('login');
    }
}
