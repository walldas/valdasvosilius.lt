@extends('layouts.app')
@section('content')

  <div class="col-sm-12">
    <h2 class="">Kontaktai</h2>
  </div>


<div class="row">
<div class="col-sm-12">
  <div class="col-sm-5 contactInfo ">
    <div class="row">
    <div class="col-sm-12 demo">
      <div class="show-off"></div>
    <div class=" col-sm-push-3 col-sm-12">
    <h3 >{{$cvtitles[0]->myname}}
      @if (Auth::user() && Auth::user()->isAdmin())
      <a href="{{route('cvtitle.edit',['id' => $cvtitles[0]->id])}}" class="btn btn-success">
         <i class="fa fa-pencil" aria-hidden="true"></i></a>
      @endif
    </h3>
    <ul class="list-unstyled">
      <li class=""><i class="fa fa-phone" aria-hidden="true"></i> &nbsp&nbsp {{$cvtitles[0]->phone}}</li>
      <li class=""><i class="fa fa-envelope-o" aria-hidden="true"></i>  &nbsp&nbsp  {{$cvtitles[0]->email}}</li>
      <li class=""><i class="fa fa-home" aria-hidden="true"></i> &nbsp&nbsp {{$cvtitles[0]->address}} </li>
    </ul>
  </div>
  </div>
</div>
</div>


<div class="contactImg">
<div class="row ">
<img class="img-responsive " src="{{asset('img/ValdasInNature.jpg')}}">
</div>
</div>
@if(Auth::user())
  @foreach($users as $user)
    @if(Auth::user()->id==$user->id)
      <?php $count=0 ;?>
      <?php $totalsms=3 ;?>
      @foreach ($contacts as $sms)
        @if ($sms->userId==$user->id)
          <?php $count++ ;?>
        @endif
      @endforeach
    @endif
  @endforeach
@endif
@if(count($contacts)>0 && Auth::user() && $count>0)

  @if (Auth::user() && Auth::user()->isAdmin())

  @else
<div class="col-sm-5 contactsms hidden-md hidden-sm hidden-xs">
  <div class="col-sm-9 col-sm-push-3 ">

    @foreach ($contacts as $sms)
      @if (Auth::user() && Auth::user()->id== $sms->userId)
      <p class="text-center">
      <div class="btn-group">
        {!! Form::open(['route'=>['contacts.destroy',$sms->id],'method'=>'DELETE'])!!}
        {!! Form::submit('X',['class'=>"btn btn-danger"]) !!}
        {!!Form::close()!!}
      </div>
      {{$sms->userName}} <span class="sms">{{$sms->comentar}}</span></p>
    @endif
    @endforeach
</div>
</div>
@endif
@endif

</div>
</div>

@if (Auth::user() && Auth::user()->isAdmin())
  <div class="col-sm-12">
    <div class="col-sm-8 col-sm-push-2">
@else
<div class="col-sm-12  hidden-lg hidden-xl">
  <div class="col-sm-8 col-sm-push-2">
@endif

  @if(isset($contacts))

    @foreach ($contacts as $sms)
      @if (Auth::user() && Auth::user()->isAdmin() || Auth::user() && Auth::user()->id== $sms->userId)

      <p>
      <div class="btn-group">
        {!! Form::open(['route'=>['contacts.destroy',$sms->id],'method'=>'DELETE'])!!}
        {!! Form::submit('X',['class'=>"btn btn-danger"]) !!}
        {!!Form::close()!!}
      </div>
      {{$sms->userName}} <span class="sms">{{$sms->comentar}}</span></p>
    @endif
    @endforeach
  @endif
</div>
</div>



  @if (Auth::user() && !Auth::user()->isAdmin() && $count !==3)

{!! Form::open(['route' => 'contacts.store','method' =>'POST']) !!}
<div class='col-sm-6 col-sm-push-3'>
<div class="form-group">
  <h4><i class="fa fa-comment" aria-hidden="true"></i> Žinutė man:</h4>
  {!!Form::textarea('comentar',null,['class'=>"form-control",'placeholder'=>'Žinutės tekstas','row'=>'3','required'])!!}
</div>
@if(($totalsms-$count)==1)
<span class='text-center'>Jums liko {{$totalsms-$count}} žinutė</span>
@else
  <span class='text-center'>Jums liko {{$totalsms-$count}} žinutės</span>
@endif

{!!Form::submit('Siųsti',['class'=>'btn btn-primary pull-right'])!!}
{!! Form::close() !!}
</div>

</div>
@endif


<div class="col-sm-12">
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>





@endsection
