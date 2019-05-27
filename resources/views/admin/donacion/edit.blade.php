@extends('layouts.principal')

@section('content')
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Donación
        <small>Gestión</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Donación</a></li>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Editar</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <a href="{{ url('admin/donacion') }}" class="btn btn-box-tool" data-toggle="tooltip" title="Atras"><i class="fa fa-arrow-left"></i></a>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            
          </div>
        </div>
        <div class="box-body">
    

          <form action="{{url("/admin/donacion/$solicitud->id")}}" method="POST" class="form-horizontal form-bordered"
              autocomplete="off" id="formulario_nuevo_solicitud">
                 
                {{ csrf_field() }}

                <input type="hidden" name="_method" value="PUT">

                <div class="container-fluid">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="fecha_solicitud">Fecha de Solicitud:</label>

                                <div class="col-md-9">
                                    <input id="fecha_solicitud" name="fecha_solicitud" class="form-control" type="date"
                                           value='{{$solicitud->fecha_solicitud}}'>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="solicitud">Solicitud:</label>
                                <div class="col-md-9">
                                    <input id="solicitud" name="solicitud" class="form-control" type="text"
                                           value='{{$solicitud->solicitud}}'>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="estado">Estado:</label>
                                <div class="col-md-9">
                                    <select id="estado_id" name="estado_id" class="form-control select2" >
                                        <option value="">Seleccionar</option>
                                        @foreach($estados as $estado)
                                            <option value="{{$estado->id}}" <?=($estado->id == $solicitud->estado_id)?'selected':''?>>{{$estado->estado}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="remitido">Remitido:</label>
                                <div class="col-md-9">
                                    <select id="remitido" name="remitido" class="form-control select2" >
                                        <option value="">Seleccionar</option>
                                        @foreach($remitidos as $remitido)
                                            <option value="{{$remitido->id}}" <?=($remitido->id == $solicitud->remitido)?'selected':''?>>{{$remitido->remitido}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="requerimiento">Requerimiento:</label>
                                <div class="col-md-9">
                                    <input id="requerimiento" name="requerimiento" class="form-control" type="text"
                                           value='{{$solicitud->requerimiento}}'>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="otro">Otro:</label>
                                <div class="col-md-9">
                                    <input id="otro" name="otro" class="form-control" type="text"
                                           value='{{$solicitud->otro}}'>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="tipo_identificacion">Tipo Identificacion:</label>
                                <div class="col-md-9">
                                    <input id="tipo_identificacion" name="tipo_identificacion" class="form-control" type="text" value='{{$solicitud->ciudadano->tipo_identificacion}}'>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="numero_identificacion">Numero Identificacion:</label>
                                <div class="col-md-9">
                                    <input id="numero_identificacion" name="numero_identificacion" class="form-control" type="number" value='{{$solicitud->ciudadano->numero_identificacion}}'>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="primer_nombre">Primer Nombres:</label>
                                <div class="col-md-9">
                                    <input id="primer_nombre" name="primer_nombre" class="form-control" type="text" value='{{$solicitud->ciudadano->primer_nombre}}'>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="segundo_nombre">Segundo Nombres:</label>
                                <div class="col-md-9">
                                    <input id="segundo_nombre" name="segundo_nombre" class="form-control" type="text" value='{{$solicitud->ciudadano->segundo_nombre}}'>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="primer_apellido">Primer Apellido:</label>
                                <div class="col-md-9">
                                    <input id="primer_apellido" name="primer_apellido" class="form-control" type="text" value='{{$solicitud->ciudadano->primer_apellido}}'>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="segundo_apellido">Segundo Apellido:</label>
                                <div class="col-md-9">
                                    <input id="segundo_apellido" name="segundo_apellido" class="form-control" type="text" value='{{$solicitud->ciudadano->segundo_apellido}}'>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="telefono">Telefono:</label>
                                <div class="col-md-9">
                                    <input id="telefono" name="telefono" class="form-control" type="number" value='{{$solicitud->ciudadano->telefono}}'>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="sector">Sector:</label>
                                <div class="col-md-9">
                                    <select id="sector" name="sector" class="form-control select2" >
                                        <option value="">Seleccionar</option>
                                        @foreach($sectores as $sector)
                                            <option value="{{$sector->id}}" <?=($sector->id == $solicitud->ciudadano->sector_id)?'selected':''?>>{{$sector->sector}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="direccion">Direccion:</label>
                                <div class="col-md-9">
                                    <input id="direccion" name="direccion" class="form-control" type="text" value='{{$solicitud->ciudadano->direccion}}'>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 text-right">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-effect-ripple" id="cambioCliente">Editar</button>
                            </div>
                        </div>
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
@endsection

@include('plugins.toastr')

@include('plugins.select2')

@push('js')
    <script type="text/javascript">
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

    function data() {
      if (!showToastrs) {
        toastr.success('Datos cargados', 'Informacion!');
      } else {
        toastr.error('no se puede!\'t.', 'Otro error crítico');
      }
    }

    function save() {
      if (!showToastrs) {
        toastr.success('Solicitud Actualizada', 'Informacion!');
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

    $('#numero_identificacion').blur(function () {
        var numero_identificacion =  $(this).val();
        //alert('te tengo ' + identificacion);
        if(numero_identificacion){
            $.ajax({
                url: "{{ URL::to('admin/donacion/ciudadano') }}/" + numero_identificacion,
                type: "GET",
                enctype: 'multipart/form-data',
                data: { 
                    numero_identificacion: numero_identificacion
                },
                processData: false,
                contentType: false,
                success: function (respuesta) {
                    
                    if (respuesta.data) {
                        //alert('listo '+respuesta.success);
                        console.log(respuesta.ciudadano);

                        $('#primer_nombre').val(respuesta.ciudadano.primer_nombre);
                        $('#segundo_nombre').val(respuesta.ciudadano.segundo_nombre);
                        $('#primer_apellido').val(respuesta.ciudadano.primer_apellido);
                        $('#segundo_apellido').val(respuesta.ciudadano.segundo_apellido);
                        $('#telefono').val(respuesta.ciudadano.telefono);
                        $('#direccion').val(respuesta.ciudadano.direccion);

                        data();

                    }else{
                        toastrs();
                    }
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

    $(function () {
      
      var formulario_nuevo_solicitud = $("#formulario_nuevo_solicitud");

        formulario_nuevo_solicitud.on('submit', function (e) {
            e.preventDefault();
                var form = $('#formulario_nuevo_solicitud')[0];
                var formData = new FormData(form);
                $.ajax({
                    url: formulario_nuevo_solicitud.attr('action'),
                    type: formulario_nuevo_solicitud.attr('method'),
                    enctype: 'multipart/form-data',
                    data: formData,
                    processData: false,
                    contentType: false,
                success: function (respuesta) {
                    if (respuesta.success) {
                        
                        save();

                        setTimeout(function() {
                          window.location.href = "{{url('admin/donacion')}}";
                        }, 2000);

                        
                    }
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
        });
    });
    </script>
@endpush