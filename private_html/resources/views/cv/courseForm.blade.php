@extends('layouts.app')

@section('content')


@if(isset($course))
<h2> Baigto turso redagavimo forma: </h2>
{!! Form::model($course,['route'=>['course.update',$course->id],'method'=>'put'])!!}
@else
<h2> Baigto kurso sukurimas</h2>
{!! Form::open(['route'=>['course.store'],'method'=>'POST'])!!}
@endif


<div class="form-group">
Baigto kurso pavadinimas{!! Form::text('title',null,['class'=>"form-control",'required']) !!}
</div>
<div class="form-group">
Tinklapio linkas{!! Form::text('webLink',null,['class'=>"form-control",'required']) !!}
</div>

<div class="form-group">
Trumpa informaciaja:  (WYSIWYG){!! Form::textarea('info',null,['class'=>"form-control",'placeholder'=>'<ul> tagas jau atidarytas</ul>','required']) !!}
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
