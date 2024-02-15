<?php

namespace App\Http\Controllers\Kuiz;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SoalanKuiz extends Controller
{
  public function index()
  {
    return view('content.Kuiz.SoalanKuiz');
  }
}
