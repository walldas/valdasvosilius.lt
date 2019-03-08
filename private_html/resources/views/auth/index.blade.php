@extends('layouts.app')
@section('content')
  <h3> Vartotojai </h3>
<table class='table'>
  <tr>
    <th>Tipas</th>
<th>Vardas</th>
<th>Pavarde</th>
<th>Kompanyja</th>
<th>tel.</th>
<th>Miestas</th>
<th>Galimybės</th>
  </tr>
@foreach($users as $user)
<tr>
<td>{{$user->type}}</td>
<td>{{$user->name}}</td>
<td>{{$user->surename}}</td>
<td>{{$user->company}}</td>
<td>{{$user->phone}}</td>
<td>{{$user->city}}</td>
<td>
  <?php $count=0 ;?>
  @foreach ($names as $name)
    @if ($name->user_id==$user->id)
      <?php $count++ ;?>
    @endif
  @endforeach
  @if ($count==0 && $user->type!=='admin')
    @if (Auth::user() && Auth::user()->isAdmin())
  <div class="btn-group">
    {!! Form::open(['route'=>['user.destroy',$user->id],'method'=>'DELETE'])!!}
    {!! Form::submit('Ištrinti Vartotoja',['class'=>"btn btn-danger"]) !!}
    {!!Form::close()!!}
  </div>
@else
  ištrinimas negalimas
@endif
@else
  @if ($user->type=='admin' && $count==0)
    negali ištrinti admino
  @else
    yra {{$count}} pasiūlymai
  @endif
@endif


</td>
</tr>
@endforeach
</table>
@endsection
