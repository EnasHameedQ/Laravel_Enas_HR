<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;



class Web extends Controller
{
    public function index()
    {
        return view('web.index');
    }

    public function profile()
    {
        return view('dashboard.main-dashboard');
    }

    public function about()
    {
        return view('web.about_us');
    }

    public function companies()
    {
        return view('web.our_parteners');
    }

    public function contactUs()
    {
        return view('web.contuct-us');
    }

    public function job()
    {
        return view('web.jobs');
    }
    public function job_det()
    {
        return view('web.jobs_detaiels');
    }
    public function services()
    {
        return view('web.our_serveces');
    }

    public function login()
    {
        return view('web.login');
    }

    public function signup()
    {
        return view('web.register');
    }
}
