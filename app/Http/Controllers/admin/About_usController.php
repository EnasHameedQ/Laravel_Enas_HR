<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\about;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class About_usController extends Controller
{
    //

    public function index()
    {
        $About_us = About::orderBy('id', 'desc')->get();
        return view('admin.About_us.list')
            ->with('About_us', $About_us);
    }
    public function create()
    {
        return view('admin.About_us.create');
    }
    public function edit($About_id)
    {
        $About = About::find($About_id);
        return view('admin.About_us.edit')
            ->with('About', $About);
    }
    public function toggle($About_id)
    {

        $about = About::find($About_id);
        $about->is_active *= -1;
        /*if($about->is_active==0)
        $about->is_active=1;
        else 
        $about->is_active=0;*/
        if ($about->save())
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

        $new_about = new About();
        $new_about->name_ar = $request->name_ar;
        $new_about->name_en = $request->name_en;
        $new_about->is_active = $request->is_active;
        $new_about->image = $request->hasFile('image') ? $this->uploadFile($request->file('image')) : "default_About.png";
        if ($new_about->save())
            return redirect()->route('list_About_us')->with(['success' => 'data inserted successful']);
        return redirect()->back()->with(['error' => 'can not add data ']);
    }
    public function update(Request $request, $About_id)
    {
        $about = About::find($About_id);
        $about->name_ar = $request->name_ar;
        $about->name_en = $request->name_en;
        $about->is_active = $request->is_active;
        if ($request->hasFile('image'))
            $about->image = $this->uploadFile($request->file('image'));
        if ($about->save())
            return redirect()->route('list_About_us')->with(['success' => 'data updated successful']);
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
