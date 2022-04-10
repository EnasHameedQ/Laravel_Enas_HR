<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\edueduion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EdueduionController extends Controller
{
  //

  public function index()
  {
    $edueduions =Edueduion::orderBy('id', 'desc')->get();
    return view('admin.edueduions.list')
      ->with('edueduions', $edueduions);
  }
  public function create()
  {
    return view('admin.edueduions.create');
  }
  public function edit($edu_id)
  {
    $edueduion =Edueduion::find($edu_id);
    return view('admin.edueduions.edit')
      ->with('edueduion', $edueduion);
  }
  public function toggle($edu_id)
  {

    $edu =Edueduion::find($edu_id);
    $edu->is_active *= -1;
    /*if($edu->is_active==0)
        $edu->is_active=1;
        else 
        $edu->is_active=0;*/
    if ($edu->save())
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

    $new_edu = newEdueduion();
    $new_edu->name_ar = $request->name_ar;
    $new_edu->name_en = $request->name_en;
    $new_edu->is_active = $request->is_active;
    $new_edu->image = $request->hasFile('image') ? $this->uploadFile($request->file('image')) : "default_edueduion.png";
    if ($new_edu->save())
      return redirect()->route('list_edueduions')->with(['success' => 'data inserted successful']);
    return redirect()->back()->with(['error' => 'can not add data ']);
  }
  public function update(Request $request, $edu_id)
  {
    $edu =Edueduion::find($edu_id);
    $edu->name_ar = $request->name_ar;
    $edu->name_en = $request->name_en;
    $edu->is_active = $request->is_active;
    if ($request->hasFile('image'))
      $edu->image = $this->uploadFile($request->file('image'));
    if ($edu->save())
      return redirect()->route('list_edueduions')->with(['success' => 'data updated successful']);
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
