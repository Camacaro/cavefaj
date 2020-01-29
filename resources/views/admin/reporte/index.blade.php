@extends('layouts.principal')

@section('content')
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Reporte
        <small>Gestión</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Reporte</a></li>
        <li><a href="#">Inicio</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Buscar Reporte</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">

            

            <form action="{{route('reporte.store')}}" method="POST" class="form-horizontal form-bordered"
              autocomplete="off" id="formulario_nuevo_solicitud">

                {{ csrf_field() }}

                <div class="container-fluid">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="fecha_solicitud_desde">Fecha de feria (Desde):</label>

                                <div class="col-md-9">
                                    <input id="fecha_solicitud_desde" name="fecha_solicitud_desde" class="form-control" type="date"
                                           value=''>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="fecha_solicitud_hasta">Fecha de feria (Hasta):</label>

                                <div class="col-md-9">
                                    <input id="fecha_solicitud_hasta" name="fecha_solicitud_hasta" class="form-control" type="date"
                                           value=''>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="sector">Empresa:</label>

                                <div class="col-md-9">
                                    <select class="form-control select2" style="width: 100%;" name="empresa_id" id="empresa_id">
                                        <option value="">seleccionar</option>
                                        @foreach($empresas as $empresa)
                                            <option value="{{$empresa->nombre}}">{{$empresa->nombre}}</option>
                                        @endforeach
                                       
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="sede">Sede:</label>

                                <div class="col-md-9">
                                    <select class="form-control select2" style="width: 100%;" name="sede" id="sede">
                                        <option value="">Seleccionar</option>
                                         @foreach($sedes as $sede)
                                            <option value="{{$sede->sede}}">{{$sede->sede}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="etapa">Etapa:</label>

                                <div class="col-md-9">
                                    <select class="form-control select2" style="width: 100%;" name="etapa" id="etapa">
                                        <option value="">Seleccionar</option>
                                        <option value="Edicion 1 - 2018">Edicion 1 - 2018</option> 
                                        <option value="Edicion 2 - 2018">Edicion 2 - 2018</option> 
                                        <option value="Edicion 3 - 2018">Edicion 3 - 2018</option> 
                                        <option value="Edicion 1 - 2019">Edicion 1 - 2019</option> 
                                        <option value="Edicion 2 - 2019">Edicion 2 - 2019</option> 
                                        <option value="Edicion 3 - 2019">Edicion 3 - 2019</option> 
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="ramo_id">Ramo:</label>

                                <div class="col-md-9">
                                    <select class="form-control select2" style="width: 100%;" name="ramo_id" id="ramo_id">
                                        <option value="">Seleccionar</option>
                                        @foreach($ramos as $ramo)
                                            <option value="{{$ramo->id}}">{{$ramo->nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="col-md-3">
                                    <button type="button" class="btn btn-primary btn-effect-ripple" id="buscar">Buscar</button>
                                </div>
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



      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Reportes</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
    
            <form action="{{url('/admin/reporte/imprimirAll')}}" method="POST" class="form-horizontal form-bordered"
              autocomplete="off" id="impirmir_all">

                {{ csrf_field() }}

                <table id="solicitudes" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Código</th>
                        <th>Empresa</th>
                        <th>Contacto</th>
                        <th>Fecha</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody id="datos">
                        
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Código</th>
                        <th>Empresa</th>
                        <th>Contacto</th>
                        <th>Fecha</th>
                        <th>Acciones</th>
                    </tr>
                    </tfoot>
                </table>

                 <button type="submit" class="btn btn-success btn-effect-ripple" id="buttonImprimir" disabled>Descargar</button>
            
            </form>

            <br>
            
            <!--<form action="{{ URL::to('admin/reporte/imprimirTodos') }}" id="fomulario-descargar-excel" name="fomulario-descargar-excel" method="post">

                <input type="hidden" name="fecha_solicitud_desde_form" id="fecha_solicitud_desde_form">
                <input type="hidden" name="fecha_solicitud_hasta_form" id="fecha_solicitud_hasta_form">
                <input type="hidden" name="empresa_id_form" id="empresa_id_form">

                {{ csrf_field() }}

                <button type="button" class="btn btn-success btn-effect-ripple" id="descargarAll" >Descargar</button>

            </form>-->
            

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

@include('plugins.select2')
@include('plugins.toastr')
@include('plugins.datatable')


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

        function invalido() {
          if (!showToastrs) {
            toastr.warning('Debe seleccionar alguno para la busqueda', 'Informacion!');
          } else {
            toastr.error('no se puede!\'t.', 'Otro error crítico');
          }
        }

        function invalidoFecha() {
          if (!showToastrs) {
            toastr.warning('Debe seleccionar Un rango de fecha', 'Informacion!');
          } else {
            toastr.error('no se puede!\'t.', 'Otro error crítico');
          }
        }

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

        function sinDatos() {
          if (!showToastrs) {
            toastr.error('No hay datos para su Solicitud', 'Informacion!');
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

        $('button#buscar').click(function () {
           
            var fecha_solicitud_desde = $('#fecha_solicitud_desde').val();
            var fecha_solicitud_hasta = $('#fecha_solicitud_hasta').val();

            var empresa_id = $('#empresa_id').val();
            var token = $('[name=_token]').val();

            var sede = $('#sede').val();

            var ramo_id = $('#ramo_id').val();

            var etapa = $('#etapa').val();

            if(fecha_solicitud_desde == "" & fecha_solicitud_hasta == "" & empresa_id == "" & sede == ""  & ramo_id == "" & etapa == ""){
                
                invalido();
            
            }else if(fecha_solicitud_desde == "" & fecha_solicitud_hasta != "" | 
                fecha_solicitud_desde != "" & fecha_solicitud_hasta == ""){

                invalidoFecha();

            }else{

                var formulario_nuevo_solicitud = $("#formulario_nuevo_solicitud");
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
                        console.log(respuesta);
                        if (respuesta.success) {
                            $('tbody#datos').html('');
                            $('#solicitudes').dataTable().fnDestroy();

                            var renglon = '';
                            for (var i = 0; i < respuesta.empresas.length; i++) {
                                renglon += '<tr>';

                                    renglon += '<input type="hidden" name="empresas[]" value="'+respuesta.empresas[i].id+'">';
                                    
                                    renglon += '<td>';
                                        renglon += respuesta.empresas[i].id;
                                    renglon += '</td>';

                                    renglon += '<td>';
                                        renglon += respuesta.empresas[i].nombre;
                                    renglon += '</td>';

                                    renglon += '<td>';
                                        renglon += respuesta.empresas[i].contacto;
                                    renglon += '</td>';

                                    renglon += '<td>';
                                        renglon += respuesta.empresas[i].created_at;
                                    renglon += '</td>';

                                    renglon += '<td>';
                                        var botones = ''
                                        ;
                                        var ruta_view = "{{url('/admin/feria/')}}/" + respuesta.empresas[i].id;
                                        var ruta_imprimir = "{{url('/admin/reporte/imprimir')}}/" + respuesta.empresas[i].id;

                                        botones += '<a  href="'+ruta_view+'" class="tips " class="tips btn btn-sm btn-primary" data-toggle="tooltip" title="Ver"> <button type="button" id="buscar" class="btn btn-sm btn-primary"> Ver </button></a>';

                                        botones += '<a href="'+ruta_imprimir+'" class="tips " class="tips btn btn-sm btn-success" data-toggle="tooltip" title="EXCEL"> <button type="button" id="buscar" class="btn btn-sm btn-success"> EXCEL </button></a>';

                                        renglon += botones;

                                    renglon += '</td>';

                                renglon += '</tr>';
                                
                            }

                            $('tbody#datos').html(renglon);

                            $("#solicitudes").DataTable({
                                "lengthMenu": [ [10, 25, 50, 100, -1], [10, 25, 50, 100, "Todos"] ],
                                "language": {
                                    "paginate": {
                                        "previous":   "Anterior",
                                        "next":       "Siguiente"
                                    },
                                    "search": "Buscar",
                                    "lengthMenu": "Mostrar _MENU_ registros por pagina",
                                    "zeroRecords": "Informacion no encontrada - Lo sentimos",
                                    "info": "Muestra de pagina _PAGE_ de _PAGES_",
                                    "infoEmpty": "Registros no disponibles",
                                    "infoFiltered": "(filtered from _MAX_ total records)"
                                }
                            });

                            $('#buttonImprimir').removeAttr('disabled');

                            
                        }else{
                            sinDatos();
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


        $('#descargarAll').click(function () {

            var fecha_solicitud_desde = $('#fecha_solicitud_desde').val();
            var fecha_solicitud_hasta = $('#fecha_solicitud_hasta').val();

            var empresa_id = $('#empresa_id').val();
            var token = $('[name=_token]').val();

            if(fecha_solicitud_desde == "" & fecha_solicitud_hasta == "" & empresa_id == ""){
                invalido();
            }else if(fecha_solicitud_desde == "" & fecha_solicitud_hasta != "" | 
                fecha_solicitud_desde != "" & fecha_solicitud_hasta == ""){
                invalidoFecha();
            }else{

                datos = {_token: token, fecha_solicitud_desde: fecha_solicitud_desde, fecha_solicitud_hasta: fecha_solicitud_hasta, empresa_id: empresa_id}


                $('#fecha_solicitud_desde_form').val(fecha_solicitud_desde);
                $('#fecha_solicitud_hasta_form').val(fecha_solicitud_hasta);
                $('#empresa_id_form').val(empresa_id);

                $("#fomulario-descargar-excel").submit();

                /*$.ajax({
                    type: "POST",
                    url: "{{ URL::to('admin/reporte/imprimirTodos') }}",
                    data: datos,
                    cache: false,
                    beforeSend: function(){
                        /*$('#erroresProducto').html('<div class="text-center"><i class="fa fa-circle-o-notch fa-spin"></i></div>');*
                    },
                    success: function(data){
                        data
                        /*console.log('paso');
                        console.log(data);*/
                       /* $('#erroresProducto').html('');

                        $("#modalOkagregar").modal();
                        window.setTimeout(cerrarModalAgregar, 2400);*

                    },
                    error: function(){
                        console.log(data);
                        /*$("#modalKoAgregar").modal();
                        window.setTimeout(cerrarModalAgregarKo, 2400);*
                    }
                });*/
            }
            
             

        })
    </script>
@endpush