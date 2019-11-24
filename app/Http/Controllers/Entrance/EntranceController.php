<?php

namespace App\Http\Controllers\Entrance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EntranceController extends Controller
{
    public function index()
    {
        return view("entrance.entrance");
    }
}
