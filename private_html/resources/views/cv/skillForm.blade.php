@extends('layouts.app')

@section('content')


@if(isset($skill))
<h2> Darbo kompiuteriu skilties redagavimo forma: </h2>
{!! Form::model($skill,['route'=>['skill.update',$skill->id],'method'=>'put'])!!}
@else
<h2> Darbo igudžių sukurimo FORMA</h2>
{!! Form::open(['route'=>['skill.store'],'method'=>'POST'])!!}
@endif



<div class="form-group">
Įvaldyta technologija{!! Form::text('name',null,['class'=>"form-control",'placeholder'=>'technologijos pavadinimas pvz: CSS','required']) !!}
</div>
<div class="form-group">
technologijos įvertinimas {!! Form::number('point',null,['class'=>"form-control",'placeholder'=>'įvertinimo balas (1-10)','min'=>'1','max'=>'10','required']) !!}
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
