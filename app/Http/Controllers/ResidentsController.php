<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResidentsController extends Controller
{

    public function index()
    {
      return view('residents.index');
    }

    public function show()
    {
      return redirect()->route('residents.stories');
    }

    public function stories()
    {
      return view('residents.stories');
    }

    public function preferences()
    {
      return view('residents.preferences');
    }

    public function family()
    {
      return view('residents.family');
    }

    public function invite()
    {
      return view('residents.familyinvite');
    }

    public function edit()
    {
      return view('residents.profile');
    }
      
}
