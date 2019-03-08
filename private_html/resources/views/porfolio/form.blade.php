@extends('layouts.app')
@section('content')

  @if(isset($porfolio))
    <div class="col-sm-12">
      <h2>Paveiksliuko redagavimas</h2>
    </div>
  {!! Form::model($porfolio,['route' => ['porfolios.update',$porfolio->id],'method' =>'put','files' => true]) !!}
@else
  <div class="col-sm-12">
    <h2>Paveiksliuko sukūrimas</h2>
  </div>
{!! Form::open(['route' => 'porfolios.store','method' =>'POST','files' => true]) !!}
@endif

<div class="form-group col-sm-6">
  Pavadinimas{!!Form::text('title',null,['class'=>"form-control",'placeholder'=>'Grean Tea','required'])!!}
</div>
<div class="form-group col-sm-6">
  Teksto spalva (eng) arba spalvos kodas{!!Form::text('textColor',null,['class'=>"form-control",'placeholder'=>'red arba #112233','required'])!!}
</div>
<div class="form-group col-sm-12">
  Paveiksliukas{!!Form::file('img',null,['class'=>"form-control",'placeholder'=>'Paveiksliukas','required'])!!}
</div>

<div class="form-group col-sm-12">
  Aprašymas{!!Form::textarea('description',null,['class'=>"form-control",'placeholder'=>'Aprašymas','required'])!!}
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
  @endsection
