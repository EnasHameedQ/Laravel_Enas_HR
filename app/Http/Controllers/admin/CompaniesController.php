<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\comp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CompaniesController extends Controller
{
  //

  public function index()
  {
    $comp = Comp::orderBy('id', 'desc')->get();
    return view('admin.comp.list')
      ->with('comp', $comp);
  }
  public function create()
  {
    return view('admin.comp.create');
  }
  public function edit($job_id)
  {
    $comp = Comp::find($job_id);
    return view('admin.comp.edit')
      ->with('comp', $comp);
  }
  public function toggle($job_id)
  {

    $comp = Comp::find($job_id);
    $comp->is_active *= -1;
    /*if($comp->is_active==0)
        $comp->is_active=1;
        else 
        $comp->is_active=0;*/
    if ($comp->save())
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

    $new_job = new Comp();
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
    $comp = Comp::find($job_id);
    $comp->name_ar = $request->name_ar;
    $comp->name_en = $request->name_en;
    $comp->is_active = $request->is_active;
    if ($request->hasFile('image'))
      $comp->image = $this->uploadFile($request->file('image'));
    if ($comp->save())
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
