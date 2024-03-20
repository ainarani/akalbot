<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class permainan_form extends Controller
{
  public function index()
  {
    return view('content.Form.permainan_form');
  }

  function creategame(Request $request){

    $request->validate([
      'id' => 'required',
      'tajuk' => 'required',
      'permasalahan' => 'required',
      'gambar' => 'required',
      'hasilkod' => 'required',
      'ujiminda' => 'required',
      'pautanvideo' => 'required'

    ]);

    $query = DB::table('permainan')->insert([
      'id_permainan' => $request->input('id'),
      'tajuk_permainan' => $request->input('tajuk'),
      'permasalahan' => $request->input('permasalahan'),
      'gambar_akalbot' => $request->input('gambar'),
      'gambar_hasilkod' => $request->input('hasilkod'),
      'uji_minda' => $request->input('ujiminda'),
      'pautan_video' => $request->input('pautanvideo')
    ]);

    if($query){
      return back()->with('success', 'Data successfully inserted.');
    } else {
      return back()->with('fail', 'something wrong');
    }

}
}
