<?php

namespace App\Http\Controllers\Activity_3;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnalisisMasalah extends Controller
{
  public function index()
  {
    return view('content.activity_3.analisismasalah');
  }
}
