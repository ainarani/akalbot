<?php

namespace App\Http\Controllers\aktiviti_1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class kenalAkalBot extends Controller
{
  public function index()
  {
    return view('content.aktiviti_1.kenal-akalbot');
  }
}
