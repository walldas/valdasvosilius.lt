@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-sm-4 ">
		@if(count($cvtitles)>0)

				<div class="text-center">
					<h2>
						{{$cvtitles[0]->myname}}
						@if (Auth::user() && Auth::user()->isAdmin())
						<a href="{{route('cvtitle.edit',['id' => $cvtitles[0]->id])}}" class="btn btn-success">
							 <i class="fa fa-pencil" aria-hidden="true"></i></a>
						@endif
					 </h2>
					<h4>{{$cvtitles[0]->status}}</h4>
				</div>

				<div class="col-sm-12 col-sm-push-2">
					<ul class="list-unstyled">
						<li ><i class="fa fa-phone" aria-hidden="true"></i> &nbsp&nbsp {{$cvtitles[0]->phone}}</li>
						<li ><i class="fa fa-envelope-o" aria-hidden="true"></i>  &nbsp&nbsp  {{$cvtitles[0]->email}}</li>
						<li ><i class="fa fa-home" aria-hidden="true"></i> &nbsp&nbsp {{$cvtitles[0]->address}} </li>
						<li >
							<i class="fa fa-birthday-cake" aria-hidden="true"></i>&nbsp
							<i class="fa fa-mars" aria-hidden="true"></i> &nbsp {{$cvtitles[0]->dob}}
						</li>
					</ul>
				</div>

			@else
				<div class="col-sm-12 col-sm-push-2">
						sukurti varda
						@if (Auth::user() && Auth::user()->isAdmin())
					<a href="{{route('cvtitle.btn')}}" class="btn btn-warning"> <i class="fa fa-plus" aria-hidden="true"></i></a>
						@endif
				</div>

			@endif

		</div>




					@if(isset($apiemanes[0]))
					<div class="col-sm-8">
						<h3>Apie mane
							@if (Auth::user() && Auth::user()->isAdmin())
								<a href="{{route('apiemane.edit',['id' =>$apiemanes[0]->id])}}" class="btn btn-success"> <i class="fa fa-pencil" aria-hidden="true"></i></a>
							@endif
						</h3>
					{!!$apiemanes[0]->about!!}
				</div>
					@else
						<div class="col-sm-8">
							Sukurti aprasyma Apie save
							@if (Auth::user() && Auth::user()->isAdmin())
						<a href="{{route('apiemane.create')}}" class="btn btn-warning"> <i class="fa fa-plus" aria-hidden="true"></i></a>
							@endif
					</div>

			@endif
</div>

<div class="row invers">

	<div class="col-md-4">
		<img src="{{ asset('img/autoportretas.jpg')}}"
		class=" center-block img-responsive molologas"></img>
		<ul>
			<li><p class="molologas ">Šiuo metu keičiu profesija į tinklapių programuotoją. </p></li>
			<li><p>Kodėl keičiu?</p></li>
			<li><p> Nes programuoti kurkas idomiau !</p></li>
		</ul>
	</div>

	<div class="col-md-8">
		<div class="row">
			<div class="col-md-12">
					<h3>Darbas kompiuteriu
						@if (Auth::user() && Auth::user()->isAdmin())
							<a href="{{route('skill.create')}}" class="btn btn-warning"> <i class="fa fa-plus" aria-hidden="true"></i></a>
						@endif
					</h3>
					<ul  class="list-unstyled">
						@foreach ($skills as $skill)
							<li>
								@if (Auth::user() && Auth::user()->isAdmin())
								<a href="{{route('skill.edit',$skill->id)}}" class="btn btn-success"> <i class="fa fa-pencil" aria-hidden="true"></i></a>
								@endif
								{{$skill->name}}
								<div class="btn-group pull-right">
										@if (Auth::user() && Auth::user()->isAdmin())
											{!! Form::open(['route'=>['skill.destroy',$skill->id],'method'=>'DELETE'])!!}
											{!! Form::submit('x',['class'=>"btn btn-danger pull-right"]) !!}
											{!!Form::close()!!}
										@endif
								</div>
								<div class="hbar">
									<div class="hbar{{$skill->point}}"></div>
								</div>
							</li>
						@endforeach
					</ul>
			</div>

			<div class="col-md-12 ">
					<h3>Kalbos</h3>
					<table class="table-bordered table">
						<tr>
							<th>Kalba</th>
							<th>Kalbėjimas</th>
							<th>Supratimas</th>
							<th>Rašymas</th>
						</tr>
						<tr>
							<td>Lietuvių</td>
							<td>Puikiai</td>
							<td>Puikiai</td>
							<td>Puikiai</td>
						</tr>
						<tr>
							<td>Anglų</td>
							<td>Gerai</td>
							<td>Puikiai</td>
							<td>Gerai</td>
						</tr>
					</table>
			</div>
		</div>
	</div>

</div>

<div class="row">
	<div class="col-sm-4">
		<div class="col-sm-12 ">
			<h3 class="cvborderB">Pabaigti kursai:
				 @if (Auth::user() && Auth::user()->isAdmin())
					<a href="{{route('course.create')}}" class="btn btn-warning"> <i class="fa fa-plus" aria-hidden="true"></i></a>
				@endif
			</h3>

			@if (isset($courses))
				@foreach ($courses->reverse() as $course)
						@if (Auth::user() && Auth::user()->isAdmin())
							<a href="{{route('course.edit',$course->id)}}" class="btn btn-success"> <i class="fa fa-pencil" aria-hidden="true"></i></a>
						@endif

						<a href="{{$course->webLink}}"><strong>{{$course->title}}</strong></a>
						@if (Auth::user() && Auth::user()->isAdmin())
							<div class="btn-group pull-right">
								{!! Form::open(['route'=>['course.destroy',$course->id],'method'=>'DELETE'])!!}
								{!! Form::submit('x',['class'=>"btn btn-danger "]) !!}
								{!!Form::close()!!}
							</div>
						@endif

						<ul>
							{!! $course->info!!}
						</ul>
				@endforeach
			@else
				Pabaigtų kursų nėra, juos gali sukurti administratorius Valdas :)
			@endif

			<h3 class="cvborderB">Laisvalaikio pomėgiai
				@if (Auth::user() && Auth::user()->isAdmin())
					<a href="{{route('leisure.create')}}" class="btn btn-warning"> <i class="fa fa-plus" aria-hidden="true"></i></a>
				@endif
			</h3>

			@if (isset($leisures))
				<ul>
					@foreach ($leisures as $leisure)
					<li>
						@if (Auth::user() && Auth::user()->isAdmin())
						<a href="{{route('leisure.edit',$leisure->id)}}" class="btn btn-success"> <i class="fa fa-pencil" aria-hidden="true"></i></a>
						<div class="btn-group ">
							{!! Form::open(['route'=>['leisure.destroy',$leisure->id],'method'=>'DELETE'])!!}
							{!! Form::submit('x',['class'=>"btn btn-danger "]) !!}
							{!!Form::close()!!}
						</div>
						@endif
						{{$leisure->title}}
					</li>

						@if(isset($leisure->moreInfo))
							<ul>
								<li>{{$leisure->moreInfo}}</li>
							</ul>
						@endif

					@endforeach
				</ul>
			@else
				Laisvalaikio pomegius gali sukurti tik administratorius Valdas :)
			@endif

		</div>
	</div>

		<div class="col-sm-8">
			<h3 class="cvborderB"><i class="fa fa-suitcase" aria-hidden="true"></i>
				Darbo patirtis
				@if (Auth::user() && Auth::user()->isAdmin())
					<a href="{{route('job.create')}}" class="btn btn-warning"> <i class="fa fa-plus" aria-hidden="true"></i></a>
				@endif
			</h3>
			@if (isset($jobs))
				@foreach ($jobs->reverse() as $job)
					<div class="row">
						<div class="col-sm-3 text-center">
							<p class=cvborderB> {{$job->end}}</p><p>{{$job->start}}</p>
							<a href="{{$job->webLink}}">
								<img width="350px" class="img-responsive" src="{{$job->imgLink}}" ></a>
						</div>
						<div class="col-sm-9">
							<strong><p>{{$job->status}}</p></strong>
							<h4>{{$job->title}}
								@if (Auth::user() && Auth::user()->isAdmin())
									<a href="{{route('job.edit',$job->id)}}" class="btn btn-success "> <i class="fa fa-pencil" aria-hidden="true"></i></a>
									<div class="btn-group pull-right">
										{!! Form::open(['route'=>['job.destroy',$job->id],'method'=>'DELETE'])!!}
										{!! Form::submit('x',['class'=>"btn btn-danger "]) !!}
										{!!Form::close()!!}
									</div>
								@endif
							</h4>
							{!! $job->workWith !!}
							{!! $job->moreInfo !!}
						</div>
					</div>
				@endforeach
			@else
				<div class="row">
						<div class="col-sm-12"> <p> nera darbo patirties, ja gali sukurti tik administratorius Valdas :) </p></div>
				</div>
			@endif

			<h3 class="cvborderB"><i class="fa fa-graduation-cap" aria-hidden="true"></i>
				Išsilavinimas
				@if (Auth::user() && Auth::user()->isAdmin())
				 	<a href="{{route('education.create')}}" class="btn btn-warning"> <i class="fa fa-plus" aria-hidden="true"></i></a>
				@endif
			</h3>

			@if (isset($educations))
				@foreach ($educations->reverse() as $education)
					<div class="row">
						<div class="col-sm-3 text-center">
							<p class="cvborderB">{{$education->end}}</p> <p>{{$education->start}}</p>
							<a href="{{$education->webLink}}"><img width="250px" class="img-responsive" src="{{$education->imgLink}}"></a>
						</div>
						<div class="col-sm-9">
							<strong><p>{{$education->profesion}}</p></strong>
							<h4><a href="{{$education->webLink}}">{{$education->institution}}</a>
								@if (Auth::user() && Auth::user()->isAdmin())
							<a href="{{route('education.edit',$education->id)}}" class="btn btn-success"> <i class="fa fa-pencil" aria-hidden="true"></i></a>
							<div class="btn-group pull-right">
								{!! Form::open(['route'=>['education.destroy',$education->id],'method'=>'DELETE'])!!}
								{!! Form::submit('x',['class'=>"btn btn-danger "]) !!}
								{!!Form::close()!!}
							</div>
								@endif
							</h4>

							<p>Baigiamojo darbo tema buvo:</p>
							<p>{{$education->finalTitle}}</p>
							<p>Savo darbą atlikau:</p>
							<p>{{$education->finalLocation}}</p>
							<p>{!! $education->skills!!}</p>
						</div>
					</div>
				@endforeach
			@else
				<div class="row">
						<div class="col-sm-12"> <p>nėra išsilavinimo, ja gali sukurti tik administratorius Valdas :) </p></div>
				</div>
			@endif
		</div>
</div>
								</div>
	@endsection
