<?php

namespace App\Http\Controllers;

use App\Models\jobs;
use Illuminate\Http\Request;

class PageController extends Controller
{
   public function job(){

       $jobs=jobs::all();
       return view('pages.jobs',['jobs'=>$jobs]);

   }
   public function cource(){

       return view('pages.cource');

   }
   public  function content(){

       return view('pages.content');

   }

   public  function events(){

       return view('pages.events');

   }

   public function show_more($id){
       $jobs=jobs::find($id);
       $description=$jobs->long_description;
       $text=explode('.',$description);
       return view('pages.show-job',['jobs'=>$jobs,'text'=>$text]);
    }

    public function applied(){
       return view('pages.Aplied-Form');
    }

}
