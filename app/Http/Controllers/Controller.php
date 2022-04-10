<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;






    public function show_home()
    {
        return view('web.index');
    }
    public function show_about()
    {
        return view('web.about_us');
    }

    public function show_contact()
    {
        return view('web.contuct_us');
    }
    public function show_jobs()
    {
        return view('web.jops');
    }
    public function show_details()
    {
        return view('web.jops_detaiels');
    }
    public function show_our_parteners()
    {
        return view('web.our_parteners');
    }

    public function show_our_serveces()
    {
        return view('web.our_serveces');
    }
    public function show_login()
    {
        return view('web.login');
    }
    public function show_register()
    {
        return view('web.register');
    }

  
    

}
