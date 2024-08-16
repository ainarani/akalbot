<?php

namespace App\Http\Controllers\Kitar_3;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class kitar3_konten extends Controller
{
  public function index()
  {
    return view('content.kitar_3.kitar3_konten');
  }
}
