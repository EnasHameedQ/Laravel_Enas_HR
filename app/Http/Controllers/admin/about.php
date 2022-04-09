<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class about extends Controller
{

    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function index()
    {
        return view('admin.about');
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show(about $about)
    {
        //
    }


    public function edit(about $about)
    {
        //
    }


    public function update(Request $request, about $about)
    {
        //
    }


    public function destroy(about $about)
    {
        //
    }
}
