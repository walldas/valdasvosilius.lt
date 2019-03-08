@extends('layouts.app')
@section('content')
<div class="row">
<div class="col-sm-12">
<div class="text-center">
  <h2>Kinų kalendorius - mano pirmasis algoritmas</h2>
  <div class="kkats">

    <form class="inputArea">
      <label class="inputArea">Metai:</label><input type="number" name="chineseCalendar" id="chineseCalendar" value="2017">
      <a href="javascript:return false;" id="kkbtn" class="kkbtn"><i class="fa fa-check" aria-hidden="true"></i></a>
    </form>
    <p > 0-9 arba
      <i class="fa fa-arrow-down" aria-hidden="true"></i>
      <i class="fa fa-arrow-up" aria-hidden="true"></i>
    </p>


    <h4 class="inputDown"></h4>
    <img id="kkimg">

  </div>
  <img class="img-responsive" src="{{asset('img/zenArt.jpg')}}">
</div>
</div>
</div>
  <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
  <script src="{{ asset('js/chineseCalendar.js') }}"></script>

  @endsection
