<?php

namespace App\Http\Controllers\Kitar_2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class kitar2_konten extends Controller
{
  public function index()
  {
    return view('content.kitar_2.kitar2_konten');
  }
}
