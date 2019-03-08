@extends('layouts.app')

@section('content')
  <div class="row">
    <div class=" col-sm-12">

      <h2>
        Aukcionas, perduodu savo darbo laiką
      @if(Auth::check())
      <a class="btn btn-warning pull-right" href="{{route('names.create')}}">
        <strong>
          <i class="fa fa-plus" aria-hidden="true"></i>
          Sukurti darbo pasiūlymą
        </strong></a>
    @endif
    @if (Auth::guest())
    <a href="{{ url('auth/register') }}" class="btn btn-default pull-right">
      <i class="fa fa-user-plus " aria-hidden="true"></i>
      Registruokis ir sukurk savo darbo pasiūlymą
    </a>
  @endif
</h2>
<h3> Darbdavių sąrašas</h3>
    </div>
      <table class='table text-center' id="namesTable">
        <tr class="text-center">
          <th class="text-center">Vardas</th>
          <th class="text-center">Imonė</th>
          <th class="text-center">Siūloma profesija</th>
          <th class="text-center">Siūlomos pareigos</th>
          <th class="text-center">Sukurta</th>
          @if (Auth::user() && Auth::user()->isAdmin())
          <th>Pradžios kaina &euro;/mėn</th>
          <th>Didžiausia kaina &euro;/mėn</th>
          @endif
          @if (Auth::user())
          <th class="text-center">Migtukai</th>
        @endif
        </tr>
        @foreach ($names as $name)
          <tr>



                @foreach ($users as $user)
                  @if ($user->id==$name->user_id)
                    <td>{{$user->name}}</td>
                    <td>{{$user->company}}</td>
                  @endif
                @endforeach



            <td>{{ $name->title }}</td>
            <td>{{ $name->status }}</td>
            <td>{{ $name->created_at}}</td>
            @if (Auth::user() && Auth::user()->isAdmin())
            <td>{{ $name->priceMin }} &euro; </td>
            <td>{{ $name->priceMax }} &euro; </td>
            @endif

          <td>
              @if (Auth::user() && Auth::user()->isAdmin() || Auth::user() && Auth::user()->id== $name->user_id)
              <a class="btn btn-primary " href="{{ route('names.show', ['id' => $name->id]) }}">
                <i class="fa fa-eye" aria-hidden="true"></i>
              </a>
              <a href="{{route('names.edit',$name->id)}}" class="btn btn-success">
                <i class="fa fa-pencil" aria-hidden="true"></i>
              </a>
              <div class="btn-group">
                {!! Form::open(['route'=>['names.destroy',$name->id],'method'=>'DELETE'])!!}
                {!! Form::submit('X',['class'=>"btn btn-danger"]) !!}
                {!!Form::close()!!}
              </div>
            @else
              @if(Auth::user())
              konfidenciali informacija
            @endif
          @endif
        </td>
          </tr>
        @endforeach
      </table>

@if (Auth::guest())
      <script src="{{ asset('js/small.js') }}"></script>
@endif
@endsection
