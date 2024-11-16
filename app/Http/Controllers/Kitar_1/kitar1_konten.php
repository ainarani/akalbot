<?php

namespace App\Http\Controllers\Kitar_1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class kitar1_konten extends Controller
{
  public function index()
  {
    return view('content.Kitar_1.kitar1_konten');
  }
}
