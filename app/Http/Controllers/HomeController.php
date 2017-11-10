<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Project;
use App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class HomeController extends Controller
{
  public function index()
	{
    $projects  = Project::latest('updated_at')->take(3)->get();;
		return view('/welcome', compact('projects','projectsWithTag'));
	}



}


