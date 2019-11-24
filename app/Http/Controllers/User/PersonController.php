<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class PersonController extends Controller
{
    public function detail()
    {
        $user = Auth::user();
        return view('user.detail');
    }

    public function personalCenter()
    {
        return view('user.person');
    }
}
