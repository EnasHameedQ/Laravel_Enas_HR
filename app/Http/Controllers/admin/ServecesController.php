<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\servece;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ServecesController extends Controller
{
    //

    public function index()
    {
        $serveces = Servece::orderBy('id', 'desc')->get();
        return view('admin.serveces.list')
            ->with('serveces', $serveces);
    }
    public function create()
    {
        return view('admin.serveces.create');
    }
    public function edit($serv_id)
    {
        $Servece = Servece::find($serv_id);
        return view('admin.serveces.edit')
            ->with('Servece', $Servece);
    }
    public function toggle($serv_id)
    {

        $serv = Servece::find($serv_id);
        $serv->is_active *= -1;
        /*if($serv->is_active==0)
        $serv->is_active=1;
        else 
        $serv->is_active=0;*/
        if ($serv->save())
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

        $new_serv = new Servece();
        $new_serv->name_ar = $request->name_ar;
        $new_serv->name_en = $request->name_en;
        $new_serv->is_active = $request->is_active;
        $new_serv->image = $request->hasFile('image') ? $this->uploadFile($request->file('image')) : "default_Servece.png";
        if ($new_serv->save())
            return redirect()->route('list_serveces')->with(['success' => 'data inserted successful']);
        return redirect()->back()->with(['error' => 'can not add data ']);
    }
    public function update(Request $request, $serv_id)
    {
        $serv = Servece::find($serv_id);
        $serv->name_ar = $request->name_ar;
        $serv->name_en = $request->name_en;
        $serv->is_active = $request->is_active;
        if ($request->hasFile('image'))
            $serv->image = $this->uploadFile($request->file('image'));
        if ($serv->save())
            return redirect()->route('list_serveces')->with(['success' => 'data updated successful']);
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
