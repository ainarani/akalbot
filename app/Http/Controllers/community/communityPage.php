<?php

namespace App\Http\Controllers\community;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class communityPage extends Controller
{
  public function index()
  {
    return view('content.community.page');
  }
}
