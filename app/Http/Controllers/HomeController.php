<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tweet;

class HomeController extends Controller
{
    public function index(){

        $twt = Tweet::all();

        return view('home', [
            'tweet' => $twt
        ]);
    }
}
