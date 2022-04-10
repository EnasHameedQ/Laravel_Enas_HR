<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\user_profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{
    //

    public function index()
    {
        $dashboards = Dashboard::orderBy('id', 'desc')->get();
        return view('admin.dashboards.list')
            ->with('dashboards', $dashboards);
    }
   
    public function edit($dash_id)
    {
        $dashboard = Dashboard::find($dash_id);
        return view('admin.dashboards.edit')
            ->with('dashboard', $dashboard);
    }
    public function toggle($dash_id)
    {

        $dash = Dashboard::find($dash_id);
        $dash->is_active *= -1;
        /*if($dash->is_active==0)
        $dash->is_active=1;
        else 
        $dash->is_active=0;*/
        if ($dash->save())
            return back()->with(['success' => 'data updated successful']);
        return back()->with(['error' => 'can not update data']);
    }
  
    public function update(Request $request, $dash_id)
    {
        $dash = Dashboard::find($dash_id);
        $dash->name_ar = $request->name_ar;
        $dash->name_en = $request->name_en;
        $dash->is_active = $request->is_active;
        if ($request->hasFile('image'))
            $dash->image = $this->uploadFile($request->file('image'));
        if ($dash->save())
            return redirect()->route('list_dashboards')->with(['success' => 'data updated successful']);
        return redirect()->back()->with(['error' => 'can not update data ']);
    }



}
