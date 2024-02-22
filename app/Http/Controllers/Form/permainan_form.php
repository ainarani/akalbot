<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class permainan_form extends Controller
{
  public function index()
  {
    return view('content.Form.permainan_form');
  }
}
