@extends('layouts.principal')

@section('content')
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Usuario
        <small>Gestión</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Usuario</a></li>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Crear</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
           <a href="{{ url('admin/usuarios') }}" class="btn btn-box-tool" data-toggle="tooltip" title="Atras"><i class="fa fa-arrow-left"></i></a>

           <h3 class="box-title">Ingreso</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            
          </div>
        </div>
        <div class="box-body">
    


            <form method="POST" action="{{ route('usuarios.store') }}" class="form-horizontal form-bordered"
              autocomplete="off" id="formulario_nuevo_usuario">
                @csrf

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">Usuario</label>

                    <div class="col-md-6">
                        <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="rol" class="col-md-4 col-form-label text-md-right">Rol</label>

                    <div class="col-md-6">
                        <select class="form-control select2" name="rol" id="rol" required="">
                            <option value="">Seleccionar</option>

                            @foreach($roles as $rol)
                                <option value="{{$rol->id}}"> {{$rol->display_name}} </option>
                            @endforeach
                            
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Contraseña') }}</label>

                    <div class="col-md-6">
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" required>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            Registrar
                        </button>
                    </div>
                </div>
            </form>




        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
    <!-- Button trigger modal -->

@endsection

@include('plugins.toastr')

@include('plugins.select2')

@push('js')

    <script>

    $(function () {
      
      var formulario_nuevo_usuario = $("#formulario_nuevo_usuario");

        formulario_nuevo_usuario.on('submit', function (e) {
            e.preventDefault();

            var password = $('#password').val();
            var password_confirmation = $('#password_confirmation').val();

            console.log(password, password_confirmation);

            if(password !== password_confirmation){
                alertPassword();
            }else{
                var form = $('#formulario_nuevo_usuario')[0];
                var formData = new FormData(form);
                $.ajax({
                    url: formulario_nuevo_usuario.attr('action'),
                    type: formulario_nuevo_usuario.attr('method'),
                    enctype: 'multipart/form-data',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (respuesta) {
                        if (respuesta.success) {
                            console.log(respuesta);
                            save(respuesta.mensaje);

                            setTimeout(function() {
                              window.location.href = "{{url('admin/usuarios')}}";
                            }, 3000);

                            
                        }
                        //console.log(respuesta);
                    },
                    error: function (e) {
                        console.log(e);
                        $.each(e.responseJSON.errors, function (index, element) {
                            if ($.isArray(element)) {
                                toastr.error(element[0]);
                            }
                        });
                    }
                });
            }
        });
    });

    toastr.options = {
          "debug": false,
          "positionClass": "toast-bottom-right",
          "onclick": null,
          "fadeIn": 300,
          "fadeOut": 100,
          "timeOut": 5000,
          "extendedTimeOut": 1000
        }

    var showToastrs = false;

    function toastrs() {
      if (!showToastrs) {
        toastr.warning('No se encontro datos para ese numero de identificacion', 'Informacion!');
      } else {
        toastr.error('no se puede!\'t.', 'Otro error crítico');
      }
    }

    function alertPassword() {
        if (!showToastrs) {
            toastr.warning('Las contraseña deben de ser iguales', 'Informacion!');
        } else {
            toastr.error('no se puede!\'t.', 'Otro error crítico');
        } 
    }

    function save(mensaje) {
        if (!showToastrs) {
            toastr.success(mensaje, 'Informacion!');
        } else {
            toastr.error('no se puede!\'t.', 'Otro error crítico');
        }
    }


    toastr.options.onFadeIn = function() {
      showToastrs = true;
    };

    toastr.options.onFadeOut = function() {
      showToastrs = false;
    };
</script>
@endpush