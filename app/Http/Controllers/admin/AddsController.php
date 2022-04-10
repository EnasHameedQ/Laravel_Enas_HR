<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\adds;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class adds_usController extends Controller
{
  //

  public function index()
  {
    $adds_us = Adds::orderBy('id', 'desc')->get();
    return view('admin.adds_us.list')
      ->with('adds_us', $adds_us);
  }
  public function create()
  {
    return view('admin.adds_us.create');
  }
  public function edit($adds_id)
  {
    $adds = Adds::find($adds_id);
    return view('admin.adds_us.edit')
      ->with('adds', $adds);
  }
  public function toggle($adds_id)
  {

    $adds = Adds::find($adds_id);
    $adds->is_active *= -1;
    /*if($adds->is_active==0)
        $adds->is_active=1;
        else 
        $adds->is_active=0;*/
    if ($adds->save())
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

    $new_adds = new Adds();
    $new_adds->name_ar = $request->name_ar;
    $new_adds->name_en = $request->name_en;
    $new_adds->is_active = $request->is_active;
    $new_adds->image = $request->hasFile('image') ? $this->uploadFile($request->file('image')) : "default_adds.png";
    if ($new_adds->save())
      return redirect()->route('list_adds_us')->with(['success' => 'data inserted successful']);
    return redirect()->back()->with(['error' => 'can not add data ']);
  }
  public function update(Request $request, $adds_id)
  {
    $adds = Adds::find($adds_id);
    $adds->name_ar = $request->name_ar;
    $adds->name_en = $request->name_en;
    $adds->is_active = $request->is_active;
    if ($request->hasFile('image'))
      $adds->image = $this->uploadFile($request->file('image'));
    if ($adds->save())
      return redirect()->route('list_adds_us')->with(['success' => 'data updated successful']);
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
