<?php

namespace App\Http\Controllers;
use App\Tweet;

use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function create(Request $request){

        $twt = new Tweet();

        $twt->username = $request->username;
        $twt->tweet = $request->tweet;

        $twt->save();

        return redirect('/');

    }
}
