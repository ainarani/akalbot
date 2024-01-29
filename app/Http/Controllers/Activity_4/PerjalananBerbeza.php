<?php

namespace App\Http\Controllers\Activity_4;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PerjalananBerbeza extends Controller
{
  public function index()
  {
    return view('content.activity_4.perjalananberbeza');
  }
}
