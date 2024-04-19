<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class DashboradController extends Controller
{
    public function index()
    {
        if(auth()->check())
        {
            return redirect()->route('tweets.index');
        }
        return view('welcome', [
            'tweets' => Tweet::orderBy('created_at', 'DESC')->get(),
        ]);
    }
}
