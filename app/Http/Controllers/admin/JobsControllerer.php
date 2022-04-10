<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class JobSController extends Controller
{
  //

  public function index()
  {
    $job = Job::orderBy('id', 'desc')->get();
    return view('admin.job.list')
      ->with('job', $job);
  }
  public function create()
  {
    return view('admin.job.create');
  }
  public function edit($job_id)
  {
    $job = Job::find($job_id);
    return view('admin.job.edit')
      ->with('job', $job);
  }
  public function toggle($job_id)
  {

    $job = Job::find($job_id);
    $job->is_active *= -1;
    /*if($job->is_active==0)
        $job->is_active=1;
        else 
        $job->is_active=0;*/
    if ($job->save())
      return back()->with(['success' => 'data updated successful']);
    return back()->with(['error' => 'can not update data']);
  }
  public function store(Request $request)
  {
    Validator::validate($request->all(), [
      'name_ar' => ['required', 'min:5', 'max:20'],
      'name_en' => ['required', 'min:5', 'max:20']


    ], [
      'name_ar.required' => 'this field is required',
      'name_ar.min' => 'can not be less than 5 letters',
      'name_ar.max' => 'can not be greater than 20 letters',
      'name_en.required' => 'this field is required',
      'name_en.min' => 'can not be less than 5 letters',
      'name_en.max' => 'can not be greater than 20 letters',


    ]);

    $new_job = new Job();
    $new_job->name_ar = $request->name_ar;
    $new_job->name_en = $request->name_en;
    $new_job->is_active = $request->is_active;
    $new_job->image = $request->hasFile('image') ? $this->uploadFile($request->file('image')) : "default_job.png";
    if ($new_job->save())
      return redirect()->route('list_job')->with(['success' => 'data inserted successful']);
    return redirect()->back()->with(['error' => 'can not add data ']);
  }
  public function update(Request $request, $job_id)
  {
    $job = Job::find($job_id);
    $job->name_ar = $request->name_ar;
    $job->name_en = $request->name_en;
    $job->is_active = $request->is_active;
    if ($request->hasFile('image'))
      $job->image = $this->uploadFile($request->file('image'));
    if ($job->save())
      return redirect()->route('list_job')->with(['success' => 'data updated successful']);
    return redirect()->back()->with(['error' => 'can not update data ']);
  }




  public function uploadFile($file)
  {
    $dest = public_path() . "/images/";

    //$file = $request->file('image');
    $filename = time() . "_" . $file->getClientOriginalName();
    $file->move($dest, $filename);
    return $filename;
  }
}
