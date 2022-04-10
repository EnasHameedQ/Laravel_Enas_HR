<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SkillsController extends Controller
{
  //

  public function index()
  {
    $skills = Skills::orderBy('id', 'desc')->get();
    return view('admin.skills.list')
      ->with('skills', $skills);
  }
  public function create()
  {
    return view('admin.skills.create');
  }
  public function edit($skill_id)
  {
    $skill = Skills::find($skill_id);
    return view('admin.skills.edit')
      ->with('skill', $skill);
  }
  public function toggle($skill_id)
  {

    $skill = Skills::find($skill_id);
    $skill->is_active *= -1;
    /*if($skill->is_active==0)
        $skill->is_active=1;
        else 
        $skill->is_active=0;*/
    if ($skill->save())
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

    $new_skill = new Skills();
    $new_skill->name_ar = $request->name_ar;
    $new_skill->name_en = $request->name_en;
    $new_skill->is_active = $request->is_active;
    $new_skill->image = $request->hasFile('image') ? $this->uploadFile($request->file('image')) : "default_skill.png";
    if ($new_skill->save())
      return redirect()->route('list_skills')->with(['success' => 'data inserted successful']);
    return redirect()->back()->with(['error' => 'can not add data ']);
  }
  public function update(Request $request, $skill_id)
  {
    $skill = Skills::find($skill_id);
    $skill->name_ar = $request->name_ar;
    $skill->name_en = $request->name_en;
    $skill->is_active = $request->is_active;
    if ($request->hasFile('image'))
      $skill->image = $this->uploadFile($request->file('image'));
    if ($skill->save())
      return redirect()->route('list_skills')->with(['success' => 'data updated successful']);
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
