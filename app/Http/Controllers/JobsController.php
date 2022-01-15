<?php
namespace App\Http\Controllers;
use App\Http\Requests\JobsRequest;
use App\Models\jobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class JobsController extends Controller
{

    public function index()
    {
        return view('profile.create_jobs');
    }
    public function ShowAddedJobs(){
        $jobs = DB::table('jobs')->where('user_id', '=', Auth::user()->id)->get();
        return view('profile.ViewJobs',['jobs'=>$jobs]);
    }

    public function LatestUpload(){
        $jobs = DB::table('jobs')->where('user_id', '=', Auth::user()->id)->latest('created_at')->first();
        return view('profile.LatestUpload',['jobs'=>$jobs]);
    }

    public function store(JobsRequest $request)
    {
        $request->validated();
        $newImageName=time().'-'.$request->file('image')->getClientOriginalName();
        $request->image->move(public_path('images'),$newImageName);
        DB::table('jobs')->insert([
            'user_id' => Auth::user()->id,
            'company_logo' => $newImageName,
            'short_description'=>$request->short_description,
            'company_name'=>$request->company_name,
            'tags'=>$request->tags,
            'salary'=>$request->salary,
            'long_description'=>$request->long_description,
            'fields'=>$request->fields,
            'location'=>$request->location,
            'seniority'=>$request->seniority,
            'category'=>$request->category,
            'commitment'=>$request->commitment
        ]);
        return redirect('/information')->with('message','Jobs Successfully Added !');
    }

    public function show(jobs $jobs)
    {
        //
    }

    public function edit(jobs $jobs)
    {
        //
    }

    public function update(Request $request, jobs $jobs)
    {
        //
    }

    public function destroy(jobs $jobs)
    {
        //
    }
}
