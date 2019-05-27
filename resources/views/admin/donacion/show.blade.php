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
        <li><a href="#">Ver</a></li>
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
    
          <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="descripcion">Fecha de Solicitud:</label>
                        <p class="form-control-static"> {{ $solicitud->fecha_solicitud }} </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="cliente_id">Solicitud:</label>
                        <p class="form-control-static"> {{ $solicitud->solicitud }} </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="descripcion">Estado:</label>
                        <p class="form-control-static"> 
                            @foreach($estados as $estado)
                                <?=($estado->id == $solicitud->estado_id)?$estado->estado:''?>
                            @endforeach
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="cliente_id">Remitido:</label>
                        <p class="form-control-static"> 
                            @foreach($remitidos as $remitido)
                               <?=($remitido->id == $solicitud->remitido)?$remitido->remitido:''?>
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="descripcion">Requerimiento:</label>
                        <p class="form-control-static"> {{ $solicitud->requerimiento }} </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="cliente_id">Otro:</label>
                        <p class="form-control-static"> {{ $solicitud->otro }} </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="descripcion">Tipo Identificacion:</label>
                        <p class="form-control-static"> {{ $solicitud->ciudadano->tipo_identificacion }} </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="cliente_id">Numero Identificacion:</label>
                        <p class="form-control-static"> {{ $solicitud->ciudadano->numero_identificacion }} </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="descripcion">Nombres:</label>
                        <p class="form-control-static"> {{ $solicitud->ciudadano->primer_nombre }} {{ $solicitud->ciudadano->segundo_nombre }} </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="cliente_id">Apellido:</label>
                        <p class="form-control-static"> {{ $solicitud->ciudadano->primer_apellido }} {{ $solicitud->ciudadano->segundo_apellido }} </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="descripcion">Telefono:</label>
                        <p class="form-control-static"> {{ $solicitud->ciudadano->telefono }} </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="cliente_id">Sector:</label>
                        <p class="form-control-static"> 
                            @foreach($sectores as $sector)
                                <?=($sector->id == $solicitud->ciudadano->sector_id)?$sector->sector:''?> 
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="descripcion">Direccion:</label>
                        <p class="form-control-static"> {{ $solicitud->ciudadano->direccion }} </p>
                    </div>
                </div>
                
            </div

          </div>




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

@push('css')

@endpush


@push('js')
 
@endpush