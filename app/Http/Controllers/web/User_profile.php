<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;



class User_profile extends Controller
{
   public function index()
  {
    return view('dashboard.main-dashboard');
  }


  public function courses()
  {
    return view('dashboard.courses');
  }


 

  public function experience()
  {
    return view('dashboard.experience');
  }


  public function skills()
  {
    return view('dashboard.skills');
  }

  
}
