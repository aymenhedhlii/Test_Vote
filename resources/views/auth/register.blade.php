@extends('layouts.logi')

@section('content')
    <div class="login-box animated fadeInDown">
        
             <div class="login-body">
            <div class="login-title"><center> </div>

<div class="row">

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                          

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control" name="name" placeholder="nom" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                         

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" placeholder="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                         

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" placeholder="mot de passe" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                          

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="confirmation mot de passe" required>
                            </div>
                        </div>

                        <div class="form-group">
                             <div class="col-md-12">
                                <button type="submit" class="col-md-12 btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
