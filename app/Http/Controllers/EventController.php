<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Models\Event;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{

    public function index()
    {
        return view('profile.event');
    }

    public function store(Request $request)
    {
        $newImageName=time().'-'.$request->file('image')->getClientOriginalName();
        $request->image->move(public_path('images'),$newImageName);
        $data=[
            'user_id'=>Auth::user()->id,
            'company_name'=>$request->company_name,
            'company_logo'=>$newImageName,
            'event_link'=>$request->event_link,
            'short_description'=>$request->short_description,
            'long_description'=>$request->long_description,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ];
        $event=Event::create($data);
        if ($event){
            return redirect(route('information'))->with('message','New Event Successfully Added');
        }

    }

    public function show(Event $event)
    {
        //
    }

    public function edit(Event $event)
    {
        //
    }

    public function update(Request $request, Event $event)
    {
        //
    }

    public function destroy(Event $event)
    {
        //
    }
}
