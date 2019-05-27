@extends('layouts.principal')

@section('content')
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Usuarios
        <small>Gestión</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Usuarios</a></li>
        <li><a href="#">Inicio</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <a href="{{ url('/admin/usuarios/create') }}" class="btn btn-box-tool" data-toggle="tooltip" title="Nuevo"><i class="fa fa-plus"></i></a>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            
          </div>
        </div>
        <div class="box-body">
    


            <table id="empresas" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Usuario</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                
                </tbody>
                <tfoot>
                <tr>
                    <th>Nombre</th>
                    <th>Usuario</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
                </tfoot>
            </table>




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

@include('plugins.datatable')

@include('plugins.toastr')

@push('js')
     <script>

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

        function data() {
          if (!showToastrs) {
            toastr.warning('Cargando datos, por favor espere', 'Informacion');
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

        $(document).ready(function () {

        var route = "{{ URL::to('admin/usuarios') }}";
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
                    
                    return json;
                } ,
                beforeSend: function () {
                    data();
                },
            },
            'columns': [
                {
                    render: function (data, type, row) {
                        return row.name;
                    },
                    className:"text-center"
                },
                {
                    render: function (data, type, row) {
                        return row.email;
                    },
                    className:"text-center"
                },
                {
                    render: function (data, type, row) {
                        return row.roles[0].display_name;
                    },
                    className:"text-center"
                },
                {
                    render: function (data, type, row) {
                        var ruta_view = "{{url('/admin/usuarios/')}}/" + row.id;

                        var ruta_edit = "{{url('/admin/usuarios/')}}/" + row.id + "/edit";

                        var ruta_permisos = "{{url('/admin/usuarios/permisos')}}/" + row.id;

                        var botones = '';                

                        botones += '<a  href="'+ruta_edit+'" class="tips " class="tips btn btn-sm btn-warning" > <button type="button" id="buscar" class="btn btn-sm btn-warning" data-toggle="tooltip" title="Editar"> Editar </button></a>';

                        /*botones += '<a  href="'+ruta_view+'" class="tips " class="tips btn btn-sm btn-info" data-toggle="tooltip" title="Ver"> <button type="button" id="buscar" class="btn btn-sm btn-info"> Ver </button></a>';*/

                        /*botones += '<a  href="'+ruta_permisos+'" class="tips " class="tips btn btn-sm btn-success" data-toggle="tooltip" title="Permisos"> <button type="button" id="buscar" class="btn btn-sm btn-success"> Permisos </button></a>';*/

                        return botones;
                    },
                    className:"text-center"
                }

            ]
        });

            
        });    
    </script>
@endpush