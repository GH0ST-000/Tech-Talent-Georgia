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
        if (empty(Auth::user()->id)){
            return  redirect('/');
        }else
        return view('profile.create_jobs');
    }
    public function ShowAddedJobs(){
        $jobs = DB::table('jobs')->where('user_id', '=', Auth::user()->id)->get();

        if (sizeof($jobs)==0){
            return redirect(route('information'))->with('message','You Dont Have An Any Jobs Yet');
        }else
        return view('profile.ViewJobs',['jobs'=>$jobs]);
    }

    public function LatestUpload(){
        $jobs = DB::table('jobs')
            ->where('user_id', '=', Auth::user()->id)
            ->orderBy('created_at','desc')
            ->latest()
            ->first();
        if (empty($jobs)){
            return redirect(route('information'))->with('message','You Dont Have An Any Jobs Yet');
        }else
        return view('profile.LatestUpload',['jobs'=>$jobs]);
    }

    public  function Statistic(){

        return view('profile.staistic');
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

    public function UserJobEdit($id){
        $jobs=jobs::find($id);
       return view('profile.edit',['jobs'=>$jobs]);
    }

    public function UserJobUpdate(Request $request)
    {
        $newImageName=time().'-'.$request->file('image')->getClientOriginalName();
        $updated_job = DB::table('jobs')
            ->where('id', $request->id)
            ->update([
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
        if ($updated_job){
            return redirect(route('latest'))->with('message','Jobs Successfully Updated !');
        }
    }

    public function UserJobDelete($id){
            $deleted_job=jobs::find($id);
            $deleted_job->delete();
            return redirect(route('information'))->with('message','Jobs Successfully Updated !');
    }
}
