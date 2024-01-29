<?php

namespace App\Http\Controllers\Lampiran;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Lampiran extends Controller
{
  public function index()
  {
    return view('content.lampiran.lampiran');
  }
}
