<?php

namespace App\Http\Controllers\Activity_3;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FasaPembangunan extends Controller
{
  public function index()
  {
    return view('content.activity_3.fasapembangunan');
  }
}