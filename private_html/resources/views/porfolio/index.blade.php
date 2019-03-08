@extends('layouts.app')
@section('content')

  <div class="">
      <h3> Mano kurtų svetainių pavizdžiai
        @if (Auth::user() && Auth::user()->isAdmin())
      <a href="{{route('porfolios.create')}}" class="btn btn-success pull-right">
        <i class="fa fa-upload" aria-hidden="true"></i>
         įkelti darbą
      </a>
    @endif
      </h3>
    <div class="row">
    <div class="">
  <div id="myCarousel" class="carousel slide" data-ride="carousel" >


    <!-- Wrapper for slides -->
    <div class="carousel-inner " role="listbox">
      <?php $count=0 ;?>
      @foreach ($porfolios as $porfolio)
        @if ($count==0)
          <div class="item active">
        @else
        <div class="item">
        @endif
          <?php $count++ ;?>
        <div class="porfolioInfo text-left col-xs-3 hidden-sm hidden-xs demo">
          <div class="show-off"></div>
          
          
          <h3 style="color:{{$porfolio->textColor}}; border-bottom:solid 2px {{$porfolio->textColor}};">{{$porfolio->title}}</h3>
          @if (Auth::user() && Auth::user()->isAdmin())
          <div class="btn-group pull-right">
            {!! Form::open(['route'=>['porfolios.destroy',$porfolio->id],'method'=>'DELETE'])!!}
            {!! Form::submit('X',['class'=>"btn btn-danger"]) !!}
            {!!Form::close()!!}
          </div>
          <a href="{{route('porfolios.edit',$porfolio->id)}}" class="btn btn-success pull-right">
            <i class="fa fa-pencil" aria-hidden="true"></i>
          </a>
        @endif
          <p style="color:{{$porfolio->textColor}};">{{$porfolio->description}}</p>
        </div>
            <img class="img-responsive"  src="{{asset('storage/' .$porfolio->img)}}" alt="{{$porfolio->title}}">
        </div>
      @endforeach
    </div>
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      @for ($i=1; $i <$count ; $i++)
        <li data-target="#myCarousel" data-slide-to="{!!$i!!}"></li>
      @endfor
    </ol>
    <!-- Left and right controls -->

    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="sr-only">Previous</span>
    </a>

    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>
  </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>

  <script type="text/javascript">
  $(document).ready(function(){
       $("#myCarousel").carousel({
           interval : 15000,
           pause: false
       });
  });
  </script>
@endsection
