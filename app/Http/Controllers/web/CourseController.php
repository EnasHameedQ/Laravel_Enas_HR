<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoriesController extends Controller
{
  //

  public function index()
  {
    $courses = Course::orderBy('id', 'desc')->get();
    return view('admin.courses.list')
      ->with('courses', $courses);
  }
  public function create()
  {
    return view('admin.courses.create');
  }
  public function edit($cour_id)
  {
    $category = Course::find($cour_id);
    return view('admin.courses.edit')
      ->with('category', $category);
  }
  public function toggle($cour_id)
  {

    $cour = Course::find($cour_id);
    $cour->is_active *= -1;
    /*if($cour->is_active==0)
        $cour->is_active=1;
        else 
        $cour->is_active=0;*/
    if ($cour->save())
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

    $new_cat = new Course();
    $new_cat->name_ar = $request->name_ar;
    $new_cat->name_en = $request->name_en;
    $new_cat->is_active = $request->is_active;
    $new_cat->image = $request->hasFile('image') ? $this->uploadFile($request->file('image')) : "default_category.png";
    if ($new_cat->save())
      return redirect()->route('list_categories')->with(['success' => 'data inserted successful']);
    return redirect()->back()->with(['error' => 'can not add data ']);
  }
  public function update(Request $request, $cour_id)
  {
    $cour = Course::find($cour_id);
    $cour->name_ar = $request->name_ar;
    $cour->name_en = $request->name_en;
    $cour->is_active = $request->is_active;
    if ($request->hasFile('image'))
      $cour->image = $this->uploadFile($request->file('image'));
    if ($cour->save())
      return redirect()->route('list_categories')->with(['success' => 'data updated successful']);
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
