<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboradController extends Controller
{
    public function index()
    {
        if(auth()->check())
        {
            return redirect()->route('tweets.index');
        }
        return view('welcome');
    }
}
