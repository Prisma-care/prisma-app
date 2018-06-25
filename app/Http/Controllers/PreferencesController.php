<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreferencesController extends Controller
{

  public function edit()
  {
    return view('preferences.edit');
  }

}
