@extends('layouts.app')
@section('content')
  <div class="staciakampis magicdiv">
      <h2>Magiškasis kvadratas</h2>
      <img src="{{ asset('img/programavimo_uzduotis.png') }}" alt="" class="img-responsive">

      <form>
        stulpeliai:<input type="number" name="eil" id="eil" min="2" value="20" max="50">
        eilutes:<input type="number" name="stulp" id="stulp" min="2" value="14" max="50">
        generuoti skaičius iki:<input type="number" name="iki" id="iki" min="1" value="9" max="50">
        <a href="javascript:return false;" id="btn1" class="magicbtn"><i class="fa fa-check" aria-hidden="true"></i>Random</a>
        <a href="javascript:return false;" id="btn2" class="magicbtn"><i class="fa fa-check" aria-hidden="true"></i>Jūsų</a>
      </form>
  		<p>
  			<span id="kartota"></span>
  			<span id="rasta"></span>
  		</p>
  		<table class="magictable"></table>
      <img id="kkimg">
    </div>

@endsection
