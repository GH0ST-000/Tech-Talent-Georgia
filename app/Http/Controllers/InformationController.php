<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class InformationController extends Controller
{

    public function index()
    {
        $jobs = DB::table('jobs')->where('user_id', '=', \Auth::user()->id)->get();
        $event = DB::table('events')->where('user_id', '=', \Auth::user()->id)->get();
        return view('profile.index',[
            'jobs'=>$jobs,
            'events'=>$event
        ]);
    }
}
