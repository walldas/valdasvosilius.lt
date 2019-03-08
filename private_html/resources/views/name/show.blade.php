@extends('layouts.app')

@section('content')

<div class="row">

	<div class="col-sm-6">
		{{-- {!!$name!!} --}}


<h2>Profesija: {{$name->title}}</h2>

<ul>

	@foreach ($users as $user)
		@if ($user->id==$name->user_id)
			<li>Istaiga:{{$user->company}}</li>
			<li>Miestas:{{$user->city}}</li>
			<li>Tel.: {{$user->phone}}</li>
			<li>Pareigos: {{$name->status}}</li>
			<li>Pradinė kaina: {{$name->priceMin}} €/mėn</li>
			<li>Maksimali kaina: {{$name->priceMax}} €/mėn</li>
		@endif
	@endforeach
</ul>
</div>

<div class="col-sm-6">
	<h2>Aprašymas</h2>
<p> {{$name->description}} </p>


</div>



@endsection
