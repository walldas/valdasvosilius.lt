@extends('layouts.app')
@section('content')

@if(isset($job))
<h2> Darbo patirties skilties redagavimo forma: </h2>
{!! Form::model($job,['route'=>['job.update',$job->id],'method'=>'put'])!!}
@else
<h2> Darbo patirties sukurimo forma</h2>
{!! Form::open(['route'=>['job.store'],'method'=>'POST'])!!}
@endif


<div class="row">
<div class="col-sm-6">
<div class="form-group">
Pavadinimas, kas buvau {!! Form::text('title',null,['class'=>"form-control",'placeholder'=>'title','required']) !!}
</div>
<div class="form-group">
Buvusios pareigos{!! Form::text('status',null,['class'=>"form-control",'placeholder'=>'status','required']) !!}
</div>
<div class="form-group">
  Buvusios darbovietės logotipo linkas {!! Form::text('imgLink',null,['class'=>"form-control",'placeholder'=>'imgLink','required']) !!}
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
  Pradėjau ten dirbti {!! Form::date('start',null,['class'=>"form-control",'placeholder'=>'start','required']) !!}
</div>
<div class="form-group">
  Pabaigiau ten dirbti {!! Form::date('end',null,['class'=>"form-control",'placeholder'=>'end','required']) !!}
</div>
<div class="form-group">
  Buvusios darbovietės svetainės linkas {!! Form::text('webLink',null,['class'=>"form-control",'placeholder'=>'webLink','required']) !!}
</div>
</div>
</div>
<div class="form-group">
Su kuo dirbau ir pasiekimai (WYSIWYG) {!! Form::textarea('workWith',null,['class'=>"form-control",'placeholder'=>'workWith','required']) !!}
</div>
<div class="form-group">
Ką išmokau (WYSIWYG) {!! Form::textarea('moreInfo',null,['class'=>"form-control",'placeholder'=>'moreInfo','required']) !!}
</div>


{!! Form::submit('išsaugoti',['class'=>'btn btn-primary pull-right']) !!}
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
