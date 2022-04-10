<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\experiance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ExperianceController extends Controller
{
  //

  public function index()
  {
    $experiances = Experiance::orderBy('id', 'desc')->get();
    return view('admin.experiances.list')
      ->with('experiances', $experiances);
  }
  public function create()
  {
    return view('admin.experiances.create');
  }
  public function edit($exp_id)
  {
    $experiance = Experiance::find($exp_id);
    return view('admin.experiances.edit')
      ->with('experiance', $experiance);
  }
  public function toggle($exp_id)
  {

    $exp = Experiance::find($exp_id);
    $exp->is_active *= -1;
    /*if($exp->is_active==0)
        $exp->is_active=1;
        else 
        $exp->is_active=0;*/
    if ($exp->save())
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

    $new_exp = new Experiance();
    $new_exp->name_ar = $request->name_ar;
    $new_exp->name_en = $request->name_en;
    $new_exp->is_active = $request->is_active;
    $new_exp->image = $request->hasFile('image') ? $this->uploadFile($request->file('image')) : "default_experiance.png";
    if ($new_exp->save())
      return redirect()->route('list_experiances')->with(['success' => 'data inserted successful']);
    return redirect()->back()->with(['error' => 'can not add data ']);
  }
  public function update(Request $request, $exp_id)
  {
    $exp = Experiance::find($exp_id);
    $exp->name_ar = $request->name_ar;
    $exp->name_en = $request->name_en;
    $exp->is_active = $request->is_active;
    if ($request->hasFile('image'))
      $exp->image = $this->uploadFile($request->file('image'));
    if ($exp->save())
      return redirect()->route('list_experiances')->with(['success' => 'data updated successful']);
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
