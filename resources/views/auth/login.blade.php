@extends('layouts.app')

@section('content')
<div class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b> <img src="dist/img/cavefaj.png" style="width: 55px;">CAVEFAJ</b>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Entrar para comenzar sesión</p>

    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group has-feedback">
                                <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Usuario" required autofocus>
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>


                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Usuario o contraseña incorrectos</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group has-feedback">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Contraseña" required>
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>


                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Usuario o contraseña incorrectos</strong>
                                    </span>
                                @endif
                        </div>

                        <!--<div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>-->
                        <div class="col-xs-4" style="margin-left:35%;">
                                <button type="submit" class="btn btn-primary">
                                    Ingresar
                                </button>
                         </div>

                        <div class="form-group row mb-0">
                        </div> 
                    </form>

    <!-- <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div>
    /.social-auth-links

    <a href="#">I forgot my password</a><br>
    <a href="register.html" class="text-center">Register a new membership</a> -->

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

</div>

@endsection
