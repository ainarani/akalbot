<?php

namespace App\Http\Controllers\splashscreen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Splashscreen extends Controller
{
  public function index()
  {
    return view('content.splashscreen.splashscreen');
  }
}
