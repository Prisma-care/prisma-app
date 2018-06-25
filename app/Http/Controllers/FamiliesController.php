<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FamiliesController extends Controller
{
    public function invite()
    {
      return view('families.invite');
    }
}
