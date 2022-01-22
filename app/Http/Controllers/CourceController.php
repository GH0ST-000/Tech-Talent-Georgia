<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CourceController extends Controller
{

    public function index()
    {
        return view('profile.cource');
    }

    public  function  store(Request $request){
        $newImageName=time().'-'.$request->file('image')->getClientOriginalName();
        $request->image->move(public_path('images'),$newImageName);
        $cources=DB::table('cources')->insert([
            'user_id' => Auth::user()->id,
            'company_logo' => $newImageName,
            'short_description'=>$request->short_description,
            'company_name'=>$request->company_name,
            'tags'=>$request->tags,
            'price'=>$request->price,
            'long_description'=>$request->long_description,
            'field'=>$request->fields,
            'session'=>$request->sessions,
            'week'=>$request->week,
            'category'=>$request->category,
            'duration'=>$request->duration,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        if ($cources){
            return redirect(route('information'))->with('message','New Cources Successfully Added !');
        }
    }

}
