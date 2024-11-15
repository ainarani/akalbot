<?php

namespace App\Http\Controllers\Akalblok;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class akalblok extends Controller
{
  public function index()
  {
    return view('content.akalblok.akalblok');
  }
}
