@extends('layouts.app')
@section('content')


  @if(isset($cvtitle))
    <h2>Cv title redagavimas</h2>
 	 {!! Form::model($cvtitle,['route' => ['cvtitle.update',$cvtitle->id],'method' =>'put']) !!}
  @else
    {!! Form::open(['route' => 'cvtitle.store','method' =>'POST']) !!}
      <h2>Cv title sukurimas</h2>
 @endif




<div class="row">

<div class="col-sm-4">
  <div class="form-group">
  Mano vardas ir pavarde {!! Form::text('myname',null,['class'=>"form-control",'placeholder'=>'Vardenis Pavardenis','maxlength'=>"100",'required']) !!}
  </div>
</div>
  <div class="col-sm-4">
  <div class="form-group">
  Pareigos{!! Form::text('status',null,['class'=>"form-control",'placeholder'=>'status','maxlength'=>"100",'required']) !!}
  </div>
</div>
    <div class="col-sm-4">
  <div class="form-group">
  Adresas {!! Form::text('address',null,['class'=>"form-control",'placeholder'=>'address','maxlength'=>"100",'required']) !!}
  </div>
  </div>



    <div class="col-sm-4">
  <div class="form-group">
  Epastas {!! Form::email('email',null,['class'=>"form-control",'placeholder'=>'email']) !!}
  </div>
  </div>
    <div class="col-sm-4">
  <div class="form-group">
  Tel. {!! Form::text('phone',null,['class'=>"form-control",'placeholder'=>'phone']) !!}
  </div>
  </div>
    <div class="col-sm-4">
  <div class="form-group">
  Dimimo data {!! Form::date('dob',null,['class'=>"form-control",'placeholder'=>'dob']) !!}
  </div>
  </div>
</div>

  {!!Form::submit('atlikta',['class'=>'btn btn-primary pull-right'])!!}


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
