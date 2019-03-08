@extends('layouts.app')
@section('content')



<div class="matrix">
  <div class="row">
    <div class="col-sm-6 text-center">
      <h2> Matrix</h2>
    <p> Pamačiau patiko pasidariau</p>
    <img class="img-responsive" src="{{ asset('img/programer.jpg')}}">
    </div>
  <div class="col-sm-6">  
  <iframe width="100%" height="350" src="https://www.youtube.com/embed/WZxIGmxRGXU" frameborder="0" allowfullscreen></iframe>
</div>
  </div>
  <table id=matrix class="table"></table>
  </div>




<script  src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="crossorigin="anonymous"></script>
<script src="{{ asset('js/matrix.js')}}"></script>
@endsection