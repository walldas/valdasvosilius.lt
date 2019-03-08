@extends('layouts.app')
@section('content')


  <h2>
        <a href="#" class=" btn-default" id="toggleAutobusuUzduotis" title="Užduotis">
          Važiuoju namo, su kuriuo autobusu važiuoti į stotį ?</a>
        </h2>
        <div class="autobusuUzduotis hidden" id='autobusuUzduotis'>
          <h2></h2>
          <p>Parašyti programėlę, kuri pasakytų į kurią stotelę eiti norint nuvažiuoti į stoti. </p>
          Duotos trys stotelės:
          <ul>
            <li>Rugių st. 34 </li>
            <li>Kalvarijos st. 1G</li>
            <li>Ateities st. 2G </li>
          </ul>
      </div>
  <div class="row">
    <div class="col-sm-6 text-center bus">
      <h3>Vaziuok su <span id="vaziuoti"></span></h3>

      <span id="stotele"></span>

    </div>
  <div class="col-sm-6 text-center busPo panel-body">

    <b><span id="dabarYra"> </span></b>
  <p class="panel"><b>34 </b>bus po <b><span id="34"></span> min.</b></p>
  <p class="panel"><b>1G </b>bus po <b><span id="1G"></span> min.</b></p>
  <p class="panel"><b>2G </b>bus po <b><span id="2G"></span> min.</b></p>

  </div>
  </div>
  <div class="row">
    <div class="col-sm-12 panel-body busPo">
      <p> 50-tas </p>
      <div class="col-sm-6 text-center ">
        <div class="panel">
        Iš Ateities st.
        <b><span id="iDarba"></span> min.</b>
      </div>
      </div>
      <div class="col-sm-6 text-center ">
        <div class="panel">
        Iš Šilo tiltas st.
        <b><span id="isDarbo" ></span> min.</b>
      </div>
      </div>
    </div>
  </div>




  </div>
  <script  src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="crossorigin="anonymous"></script>
      <script src="{{asset('js/namoData.js')}}"></script>
      <script src="{{asset('js/namo.js')}}"></script>





  @endsection
