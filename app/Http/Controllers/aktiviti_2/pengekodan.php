<?php

namespace App\Http\Controllers\aktiviti_2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Pengekodan extends Controller
{
  public function index()
  {
    return view('content.aktiviti_2.pengekodan');
  }
}
