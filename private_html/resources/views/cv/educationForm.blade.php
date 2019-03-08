@extends('layouts.app')

@section('content')


@if(isset($education))
<h2> Išsilavinimo redagavimo forma: </h2>
{!! Form::model($education,['route'=>['education.update',$education->id],'method'=>'put'])!!}
@else
<h2> Išsilavinimo sukurimas</h2>
{!! Form::open(['route'=>['education.store'],'method'=>'POST'])!!}
@endif
<div class="row">
  <div class="col-sm-4">
<div class="form-group">
Mokymo istaigos pavadinimas{!! Form::text('institution',null,['class'=>"form-control",'placeholder'=>'Vilniaus Universitetas','required']) !!}
</div>
<div class="form-group">
Įgyta profesija ir laipsnis{!! Form::text('profesion',null,['class'=>"form-control",'placeholder'=>'Molekulinės biologijos Magistras','required']) !!}
</div>
</div>
<div class="col-sm-4">
<div class="form-group">
Mokymo istaigos logotipo adresas/linkas/url {!! Form::text('imgLink',null,['class'=>"form-control",'placeholder'=>'http://www.vu.lt/site_images/vu-logo.jpg','required']) !!}
</div>
<div class="form-group">
Mokymo istaigos tinklapio adresas {!! Form::text('webLink',null,['class'=>"form-control",'placeholder'=>'http://www.vu.lt/','required']) !!}
</div>
</div>
<div class="col-sm-4">
<div class="form-group">
Mokslų pradžia{!! Form::date('start',null,['class'=>"form-control",'placeholder'=>'YYYY-mm-dd','required']) !!}
</div>
<div class="form-group">
Mokslų pabaiga{!! Form::date('end',null,['class'=>"form-control",'placeholder'=>'YYYY-mm-dd','required']) !!}
</div>
</div>
</div>
<div class="form-group">
Baigiamojo darbo tema{!! Form::text('finalTitle',null,['class'=>"form-control",'required']) !!}
</div>
<div class="form-group">
Baigiamojo darbo vieta{!! Form::text('finalLocation',null,['class'=>"form-control",'required']) !!}
</div>
<div class="form-group">
Ten įgyjau patirties:  (WYSIWYG){!! Form::textarea('skills',null,['class'=>"form-control",'placeholder'=>'pvz:...<p>išmokau dirbti su Origin programa...</p>','required']) !!}
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
