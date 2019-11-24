<?php

namespace App\Http\Controllers\Entrance;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class EntranceController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);
        return view("entrance.entrance",compact('users'));
    }
}
