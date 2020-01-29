@extends('layouts.principal')

@section('content')
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Feria
        <small>Gestión</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Feria</a></li>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Ver</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <a href="{{ url('admin/feria') }}" class="btn btn-box-tool" data-toggle="tooltip" title="Atras"><i class="fa fa-arrow-left"></i></a>

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
                        <label class="control-label" for="descripcion">Fecha de Registro:</label>
                        <p class="form-control-static"> {{ $empresa->created_at }} </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="cliente_id">Edición de la Feria:</label>
                        <p class="form-control-static"> {{ $empresa->edicion_feria }} </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="descripcion">Sede de la Feria:</label>
                        <p class="form-control-static"> {{ $empresa->sede }} </p>
                    </div>
                </div>
            </div>

             <div class="box-header">
                <h3>Datos Generales de la Empresa</h3>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="descripcion">Rif/Cedula:</label>
                        <p class="form-control-static"> {{ $empresa->tipo_de_identificacion }} </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="cliente_id">Identificacion::</label>
                        <p class="form-control-static"> {{ $empresa->identificacion }} </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="descripcion">Nombre de la Empresa:</label>
                        <p class="form-control-static"> {{ $empresa->nombre }} </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="cliente_id">Tipo de Empresa:</label>
                        <p class="form-control-static"> {{ $empresa->tipo_empresa }} </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="descripcion">Tipo de persona:</label>
                        <p class="form-control-static"> {{ $empresa->tipo_persona }} </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="descripcion">Ramos:</label>
                        <p class="form-control-static">

                             @foreach($ramos as $ramo)
                                <?= $ramo->nombre.', ' ?>
                            @endforeach

                        </p>
                    </div>
                </div>
                
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="descripcion">Ubicación de la Empresa:</label>
                        <p class="form-control-static"> {{ $empresa->nombre }} </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="cliente_id">Tipo de Empresa:</label>
                        <p class="form-control-static"> {{ $empresa->tipo_empresa }} </p>
                    </div>
                </div>
            </div>

              <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label" for="descripcion">Tipo de Persona:</label>
                            <p class="form-control-static"> {{ $empresa->tipo_persona }} </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label" for="cliente_id">Ramos:</label>
                            @foreach($ramos as $ramo)
                                <p class="form-control-static"> {{ $ramo->nombre }} </p>
                            @endforeach                        
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label" for="descripcion">Ubicación:</label>
                            <p class="form-control-static"> {{ $empresa->ubicacion }} </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label" for="cliente_id">Ciudad:</label>
                            @foreach($ciudades as $ciudad)
                                @if($ciudad->ciudad == $empresa->ciudad)
                                    <p class="form-control-static"> {{ $ciudad->ciudad }} </p>  
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label" for="cliente_id">Estado:</label>
                            @foreach($estados as $estado)
                                @if($estado->estado == $empresa->estado)
                                    <p class="form-control-static"> {{ $estado->estado }} </p>  
                                @endif
                            @endforeach
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label" for="cliente_id">Como se enteró:</label>
                            <p class="form-control-static"> {{ $empresa->observacion }} </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @if($empresa->facebook)
                        <div class="col-md-6">
                            <div class="form-group">
                                
                                <label class="control-label" for="cliente_id">Facebook:</label>
                                <p class="form-control-static"> {{ $empresa->facebook }} </p>
                            </div>
                        </div>
                    @endif

                    @if($empresa->twitter)
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="cliente_id">Twitter:</label>
                                <p class="form-control-static"> {{ $empresa->twitter }} </p>
                            </div>
                        </div>
                    @endif

                    @if($empresa->instagram)
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="cliente_id">Instagram:</label>
                                <p class="form-control-static"> {{ $empresa->instagram }} </p>
                            </div>
                        </div>
                    @endif
                </div>

                 <div class="box-header">
                    <h3>Datos de Contacto </h3>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label" for="cliente_id">Tipo de Documento:</label>
                            <p class="form-control-static"> {{ $empresa->tipo_de_identificacion_persona }} </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label" for="cliente_id">Identificacion:</label>
                            <p class="form-control-static"> {{ $empresa->identificacion_persona }} </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label" for="cliente_id">Contacto:</label>
                            <p class="form-control-static"> {{ $empresa->contacto }} </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label" for="cliente_id">Cargo:</label>
                            <p class="form-control-static"> {{ $empresa->cargo }} </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label" for="cliente_id">Celular:</label>
                            <p class="form-control-static"> {{ $empresa->prefijo }} {{ $empresa->celular }} </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label" for="cliente_id">Numero de Oficina:</label>
                            <p class="form-control-static"> {{ $empresa->telefono }} </p>
                        </div>  
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label" for="cliente_id">Email:</label>
                            <p class="form-control-static"> {{ $empresa->email }} </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label" for="cliente_id">Numero de visitante:</label>
                            <p class="form-control-static"> {{ $empresa->visitante }} </p>
                        </div>  
                    </div>
                </div>
            </div>
        </div>

          




        </div>
        <!-- /.box-body -->
        
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection

@push('css')

@endpush


@push('js')
 
@endpush