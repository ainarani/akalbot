<!-- @extends('layouts/blankLayout') -->

@section('title', 'Blank layout - Layouts')

@section('content')
<style>
  .center-text {
    text-align: center;
  }
</style>

<!-- Apply the custom class to the h4 element -->
<style>
  .bold-text {
    font-weight: bold;
  }
</style>

<h4 class="p-4 center-text bold-text">
LAMPIRAN A <br>
KIT PEMBELAJARAN AKALBOT
</h4> 

<img src="{{asset('assets/img/lampiran/A_a.JPG')}}" alt="Lampiran A (a)"> <br>
<img src="{{asset('assets/img/lampiran/A_b.JPG')}}" alt="Lampiran A (b)"><br>
<img src="{{asset('assets/img/lampiran/A_c.JPG')}}" alt="Lampiran A (c)"> <br>

<h4 class="p-4 center-text bold-text">
LAMPIRAN B <br>
PENGENALAN KEPADA AkalBLOK
</h4> 
<img src="{{asset('assets/img/lampiran/B.JPG')}}" alt="Lampiran B"> <br>


        <!-- <a href="javascript:void(0)" class="btn btn-outline-primary">Go somewhere</a> -->
      </div>
    </div>
  </div>
@endsection
