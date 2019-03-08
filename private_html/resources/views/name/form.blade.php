
@extends('layouts.app')

@section('content')





    @if(isset($name))
      <div class="col-sm-12">
        <h2>Darbo pasiūlymo redagavimas</h2>
      </div>
    {!! Form::model($name,['route' => ['names.update',$name->id],'method' =>'put']) !!}
  @else
    <div class="col-sm-12">
      <h2>Darbo pasiūlymo sukūrimas</h2>
    </div>
  {!! Form::open(['route' => 'names.store','method' =>'POST']) !!}
@endif
<div class="row">
  <div class="form-group col-sm-3">
    Siuloma profesija{!!Form::text('title',null,['class'=>"form-control",'placeholder'=>'Programuotojas','maxlength'=>"100",'required'])!!}
  </div>
  <div class="form-group col-sm-3">
    Pareigos{!!Form::text('status',null,['class'=>"form-control",'placeholder'=>'Jaunesnysis','maxlength'=>"200",'required'])!!}
  </div>
  <div class="form-group col-sm-3">
    Pradinė kaina &euro;/mėn.{!!Form::number('priceMin',null,['class'=>"form-control",'placeholder'=>'1000',"min"=>"300",'max'=>"5000",'required'])!!}
    *Konfidenciali informacija
  </div>
  <div class="form-group col-sm-3">
    Maximali kaina &euro;/mėn.{!!Form::number('priceMax',null,['class'=>"form-control",'placeholder'=>'2000',"min"=>"1000",'max'=>"10000",'required'])!!}
    *Konfidenciali informacija
  </div>
</div>
<div clas="col-sm-12">
<div class="form-group">
  Aprašymas {!!Form::textarea('description',null,['class'=>"form-control",'placeholder'=>'Sudominkit mane :) ','row'=>'5','required'])!!}
  *Konfidenciali informacija
</div>
</div>
{!!Form::submit('Išsaugoti',['class'=>'btn btn-primary pull-right'])!!}
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
</div>







@endsection
