<?php

namespace App\Http\Controllers;


use App\Models\jobs;

class WelcomeController extends Controller
{

    public function index()
    {
        $jobs=jobs::all()->take(4);
            return view('welcome',['jobs'=>$jobs]);

    }

}
