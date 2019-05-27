@extends('layouts.principal')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edicion de Feria
        <small>Gestión</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Edicion de Feria </a></li>
        <li><a href="#">Inicio</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Actualizar Edicion de Feria </h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">

            

            <form action="{{route('edicion-feria.store')}}" method="POST" class="form-horizontal form-bordered"
              autocomplete="off" id="formulario_nuevo_solicitud">

                {{ csrf_field() }}

                <div class="container-fluid">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="sector">Feria:</label>

                                <div class="col-md-9">

                                    <select class="form-control select2" style="width: 100%;" name="feria" id="feria">
                                        <option value="">seleccionar</option>
                                        <option value="Edicion 1">Edicion 1</option>
                                        <option value="Edicion 2">Edicion 2</option>
                                        <option value="Edicion 3">Edicion 3</option>
                                    </select>
                                    <span > <strong>Edicion Actual:</strong> <span id="spanFeria">
                                        <?= ($edicionActual->feria) ? $edicionActual->feria : '' ; ?></span> </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="sede">Año:</label>

                                <div class="col-md-9">
                                    <input type="number" name="year" id="year" class="form-control" value="">
                                    <span> <strong>Año Actual:</strong> <span id="spanYear"><?= ($edicionActual->year) ? $edicionActual->year : '' ; ?></span> </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="sede">Sede:</label>

                                <div class="col-md-9">
                                       <input type="text" name="sede" id="sede" class="form-control" value="">
                                       <span> <strong>Sede Actual:</strong> <span id="spanSede">
                                        <?= ($edicionActual->sede) ? $edicionActual->sede : '' ; ?></span> </span>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="col-md-3">
                                    <button type="button" class="btn btn-primary btn-effect-ripple" id="actualizar">Actualizar</button>
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



      <!-- Default box --
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Registro de Ediciones</h3>

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

                <table id="empresas" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Feria</th>
                        <th>Año</th>
                        <th>Sede</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Feria</th>
                        <th>Año</th>
                        <th>Sede</th>
                    </tr>
                    </tfoot>
                </table>

                

                <!--<button type="submit" class="btn btn-success btn-effect-ripple" id="buttonImprimir" disabled>Descargar</button>--
            </form>

        </div>
        <!-- /.box-body --
        <div class="box-footer">
          
        </div>
        <!-- /.box-footer--
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
        

        $('button#actualizar').click(function () {
            

            var feria = $('#feria').val();
            var year = $('#year').val();
            var sede = $('#sede').val();
            var token = $('[name=_token]').val();

            if(feria == "" & year == "" & sede == "" ){
                
                invalido();
            
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
                             $('#empresas').dataTable().fnDestroy();

                            $('#spanFeria').html(respuesta.data.feria);
                            $('#spanYear').html(respuesta.data.year);
                            $('#spanSede').html(respuesta.data.sede);
                            //dataFeria();
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

        function dataFeria() {
                
            var route = "{{ URL::to('admin/edicion-feria') }}";
            $("#empresas").DataTable({
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
                },
                'ajax': {
                    "url": route,
                    "type": "GET",
                    dataSrc: function ( json ) {
                        
                        $('#spanFeria').html(json[0].feria);
                        $('#spanYear').html(json[0].year);
                        $('#spanSede').html(json[0].sede);

                        $('#feria').val('');
                        $('#year').val('');
                        $('#sede').val('');
                        
                        return json;
                    } ,
                    beforeSend: function () {
                        data();
                    },
                },
                'columns': [
                    {data: 'id', className:"text-center"},
                    {data: 'feria', className:"text-center"},
                    {data: 'year', className:"text-center"},
                    {data: 'sede', className:"text-center"}
                ]
            });
        }

        $('document').ready(function() {
            dataFeria();
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
    </script>
@endpush