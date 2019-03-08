@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="">
              @if(isset($user))
                <div class="panel-heading "><h3>Atnaujinti Profilį</h3></div>
              @else
                <div class="panel-heading "><h3>Registracija</h3></div>
              @endif


                <div class="panel-body">

@if(isset($user))
                       {!! Form::model($user, [
                       'route' => ['profile.update'],
                       'method' => 'PUT',
                        'class' => 'form-horizontal'
                       ]) !!}

                   @else

                       {!! Form::open(['route' => ['auth.register'], 'method' => 'post', 'class' => 'form-horizontal']) !!}

                   @endif





                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Vardas</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{isset($user) ? $user->name : old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('surename') ? ' has-error' : '' }}">
                            <label for="surename" class="col-md-4 control-label">Pavardė</label>

                            <div class="col-md-6">
                                <input id="surename" type="text" class="form-control" name="surename" value="{{isset($user) ? $user->surename : old('surename') }}" required autofocus>

                                @if ($errors->has('surename'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('surename') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}">
                            <label for="company" class="col-md-4 control-label">Imonė</label>

                            <div class="col-md-6">
                                <input id="company" type="text" class="form-control" name="company" value="{{isset($user) ? $user->company : old('company') }}" required autofocus>

                                @if ($errors->has('company'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('company') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label">Tel.</label>

                            <div class="col-md-6">
                                <input id="phone" type="number" class="form-control" name="phone" value="{{isset($user) ? $user->phone : old('phone') }}" required autofocus>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-4 control-label">Adresas</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="{{isset($user) ? $user->address : old('address') }}" required autofocus>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                            <label for="city" class="col-md-4 control-label">Miestas</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control" name="city" value="{{isset($user) ? $user->city :  old('city') }}" required autofocus>

                                @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Pašto atresas</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Slaptažodis</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
        @if (Auth::guest())
                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Pakartoti slaptažodį</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
 @endif
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                              @if(isset($user))
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-check" aria-hidden="true"></i> Atnaujinti Profilį
                                </button>
                              @else

                                <button type="submit" class="btn btn-primary">
                                  <i class="fa fa-check" aria-hidden="true"></i> Registracija
                                </button>
                              @endif
                            </div>
                        </div>
                    </form>
                     {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
