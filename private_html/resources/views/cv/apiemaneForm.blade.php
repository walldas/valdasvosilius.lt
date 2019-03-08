@extends('layouts.app')

@section('content')


@if(isset($apiemane))
<h2> Apie mane skilties redagavimo forma: </h2>
{!! Form::model($apiemane,['route'=>['apiemane.update',$apiemane->id],'method'=>'put'])!!}
@else
<h2> Create FORMA</h2>
{!! Form::open(['route'=>['apiemane.store'],'method'=>'POST'])!!}
@endif

<div class="form-group">
{!! Form::textarea('about',null,['class'=>"form-control",'placeholder'=>'pasakojimas apie save','row'=>'5','required']) !!}
</div>

{!! Form::submit('save',['class'=>'btn btn-primary']) !!}
{!! Form::close() !!}
@endsection
