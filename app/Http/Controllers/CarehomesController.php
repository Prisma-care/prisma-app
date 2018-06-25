<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarehomesController extends Controller
{
    public function index()
    {
      return view('carehomes.index');
    }

    public function create()
    {
      return view('carehomes.create');
    }

    public function airtable()
    {
      return view('carehomes.airtable');
    }

}
