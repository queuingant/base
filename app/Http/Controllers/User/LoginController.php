<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('user.login');
    }

    public function userLogin(Request $request)
    {
        $data = $this->validate($request,[
            'email' => 'required|email|max:255',
            'password' => 'required|min:6'
        ],[],[

        ]);

        if (Auth::attempt($data)) {
            // 登录成功后的相关操作
            session()->flash('green','登录成功，欢迎回来。');
            return redirect()->route('detail');
        } else {
            // 登录失败后的相关操作
            session()->flash('red','登录失败，请核对账号和密码。');
            return redirect()->route('login');
        }
    }

    public function logout()
    {
        Auth::logout();
        session()->flash('red', '您已成功退出！');
        return redirect()->route('login');
    }
}
