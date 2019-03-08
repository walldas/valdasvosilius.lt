@extends('layouts.app')

@section('content')
  @if(isset($leisure))
  <h2> Laisvalaiki redagavimo forma: </h2>
  {!! Form::model($leisure,['route'=>['leisure.update',$leisure->id],'method'=>'put'])!!}
  @else
  <h2> Laisvalaikio sukurimas</h2>
  {!! Form::open(['route'=>['leisure.store'],'method'=>'POST'])!!}
  @endif

<div class="col-sm-4 col-sm-push-4">  <div class="form-group">
  Laisvalaikio pavadinimas{!! Form::text('title',null,['class'=>"form-control",'placeholder'=>'Kurti tinklapalius','required']) !!}
  </div>
</div>
<div class="col-sm-12">
  <div class="form-group">
  Trumpa informaciaja:{!! Form::text('moreInfo',null,['class'=>"form-control",'placeholder'=>'trumpai arba nieko']) !!}
  </div>
</div>
  {!! Form::submit('Išsaugoti',['class'=>'btn btn-primary pull-right']) !!}
  {!! Form::close() !!}
  @if (count($errors) > 0)
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif

  @endsection
