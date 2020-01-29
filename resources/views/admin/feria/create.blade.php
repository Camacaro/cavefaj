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
        <li><a href="#">Crear</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
           <a href="{{ url('admin/feria') }}" class="btn btn-box-tool" data-toggle="tooltip" title="Atras"><i class="fa fa-arrow-left"></i></a>

           <h3 class="box-title">Ingreso</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            
          </div>
        </div>
        <div class="box-body">
    


            <form action="{{route('feria.store')}}" method="POST" class="form-horizontal form-bordered"
              autocomplete="off" id="formulario_nuevo_feria">
                 
                {{ csrf_field() }}

                <div class="container-fluid">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">

                                <label class="col-md-3 control-label" for="solicitud">Fecha de Registro:</label>
                                <div class="col-md-9">
                                    <input type="date" name="fecha_registro" id="fecha_registro" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="edicion_feria">Edición de la Feria:</label>
                                <div class="col-md-9">

                                    <input type="text" name="edicion_feria" id="edicion_feria" value="{{$edicion->feria}} - {{$edicion->year}}" class="form-control" readonly="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="sede">Sede de la Feria:</label>
                                <div class="col-md-9">

                                    <input type="text" name="sede" id="sede" value="{{$edicion->sede}}" class="form-control" readonly="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box-header">
                        <h3>Datos Generales de la Empresa</h3>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="tipo_de_identificacion">Rif/Cedula:</label>
                                <div class="col-md-9">
                                    <select name="tipo_de_identificacion" id="tipo_de_identificacion" class="form-control select2">
                                        <option value="Rif" id='Rif'>Rif</option>
                                        <option value="CI" id='CI'>CI</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="identificacion">Identificación:</label>
                                <div class="col-md-9">
                                    <input id="identificacion" name="identificacion" class="form-control" type="text" value='' required onblur="Mayusculas(this.value,this.id)"onblur="Mayusculas(this.value,this.id)">
                                </div>
                            </div> 
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="nombre">Nombre de la Empresa:</label>
                                <div class="col-md-9">
                                    <input id="nombre" name="nombre" class="form-control" type="text" value='' placeholder="Introduzca Nombre de la Empresa" required onblur="Mayusculas(this.value,this.id)"> 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="tipo_empresa">Tipo de Empresa:</label>
                                <div class="col-md-9">

                                    <select name="tipo_empresa" id="tipo_empresa" class="form-control select2" required>
                                        <option value="">Seleccionar</option>
                                        <option value="Comprador" id="Comprador">Comprador</option>
                                        <option value="Expositor" id="Expositor">Expositor</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="tipo_persona">Tipo de persona</label>
                                <div class="col-md-9">
                                    <select name="tipo_persona" id="tipo_persona" class="form-control select2" required>
                                        <option value="">Seleccionar</option>
                                        <option value="Jurídico" id="Jurídico">Jurídico</option>
                                        <option value="Natural" id="Natural">Natural</option>
                                        <option value="Gubernamental" id="Gubernamental">Gubernamental</option>
                                        <option value="Extranjero" id="Extranjero">Extranjero</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="ramo_empresa">Ramo de la Empresa:</label>
                                <div class="col-md-9">
                                    <div class="sector-select">
                                        <select multiple="multiple" rows='5' name="ramo_empresa[]" id="ramo_empresa" class='select2 form-control' required >
                                            @foreach($ramos as $ramo)
                                                <option value="{{$ramo->id}}" id="{{$ramo->id}}"> {{$ramo->nombre}}</option>
                                            @endforeach
                                        </select>

                                       
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="ubicacion">Ubicación de la Empresa:</label>
                                <div class="col-md-9">
                                    <input id="ubicacion" name="ubicacion" class="form-control" type="text" value=''  placeholder="Introduzca Ubicación de la Empresa" required onblur="Mayusculas(this.value,this.id)">
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="ciudad">Ciudad:</label>
                                <div class="col-md-9">

                                    <select name="ciudad" id="ciudad" class="form-control select2" required>
                                        <option value="">Seleccionar</option>
                                        @foreach($ciudades as $ciudad)
                                            <option value="{{$ciudad->ciudad}}" id="{{$ciudad->ciudad}}">{{$ciudad->ciudad}}</option>
                                        @endforeach
                                    </select>

                                    <!--<select name="ciudad" id="ciudad" class="form-control select2" required>
                                        <option value="">Seleccionar</option>
                                        <option value="Anaco" id="Anaco">Anaco</option>
                                        <option value="Barcelona" id="Barcelona">Barcelona</option>
                                        <option value="Barinas" id="Barinas">Barinas</option>
                                        <option value="Barquisimeto" id="Barquisimeto">Barquisimeto</option>
                                        <option value="Bochinche" id="Bochinche">Bochinche</option>
                                        <option value="Barquisimeto" id="Barquisimeto">Barquisimeto</option>
                                        <option value="Cabimas" id="Cabimas">Cabimas</option>
                                        <option value="Cabruta" id="Cabruta">Cabruta</option>
                                        <option value="Caicara" id="Caicara">Caicara</option>
                                        <option value="Canaima" id="Canaima">Canaima</option>
                                        <option value="Caracas" id="Caracas">Caracas</option>
                                        <option value="Ciudad Bolivar" id="Ciudad Bolivar">Ciudad Bolivar</option>
                                        <option value="Ciudad Guayana" id="Ciudad Guayana">Ciudad Guayana</option>
                                        <option value="Ciudad Piar" id="Ciudad Piar">Ciudad Piar</option>
                                        <option value="Coro" id="Coro">Coro</option>
                                        <option value="Cumaná" id="Cumaná">Cumaná</option>
                                        <option value="El Amparo" id="El Amparo">El Amparo</option>
                                        <option value="El dorado" id="El dorado">El dorado</option>
                                        <option value="El Jobal" id="El Jobal">El Jobal</option>
                                        <option value="Esmeralda" id="Esmeralda">Esmeralda</option>
                                        <option value="Guanare" id="Guanare">Guanare</option>
                                        <option value="Guarenas" id="Guarenas">Guarenas</option>
                                        <option value="Guasipat" id="Guasipat">Guasipat</option>
                                        <option value="Guatire" id="Guatire">Guatire</option>
                                        <option value="Güiria" id="Güiria">Güiria</option>
                                        <option value="La Asunción" id="La Asunción">La Asunción</option>
                                        <option value="La Guaira" id="La Guaira">La Guaira</option>
                                        <option value="La Paragua" id="La Paragua">La Paragua</option>
                                        <option value="Los Teques" id="Los Teques">Los Teques</option>
                                        <option value="Maracaibo" id="Maracaibo">Maracaibo</option>
                                        <option value="Maracay" id="Maracay">Maracay</option>
                                        <option value="Maturin" id="Maturin">Maturin</option>
                                        <option value="Mérida" id="Mérida">Mérida</option>
                                        <option value="Puerto Ayacucho" id="Puerto Ayacucho">Puerto Ayacucho</option>
                                        <option value="Puerto Cabello" id="Puerto Cabello">Puerto Cabello</option>
                                        <option value="Punto Fijo" id="Punto Fijo">Punto Fijo</option>
                                        <option value="Riecito" id="Riecito">Riecito</option>
                                        <option value="San Carlos" id="San Carlos">San Carlos</option>
                                        <option value="San Cristóbal" id="San Cristóbal">San Cristóbal</option>
                                        <option value="San Felipe" id="San Felipe">San Felipe</option>
                                        <option value="San Fernando de Apure" id="San Fernando de Apure">San Fernando de Apure</option>
                                        <option value="San Fernando de Atabato" id="San Fernando de Atabato">San Fernando de Atabato</option>
                                        <option value="San Juan de los Morros" id="San Juan de los Morros">San Juan de los Morros</option>
                                        <option value="San Juan de Manapiare" id="San Juan de Manapiare">San Juan de Manapiare</option>
                                        <option value="Santa Elena de Uirén" id="Santa Elena de Uirén">Santa Elena de Uirén</option>
                                        <option value="Tucupita" id="Tucupita">Tucupita</option>
                                        <option value="Tumeremo" id="Tumeremo">Tumeremo</option>
                                        <option value="Valencia" id="Valencia">Valencia</option>
                                        <option value="Valera" id="Valera">Valera</option>
                                        <option value="Valle de la Pascua" id="Valle de la Pascua">Valle de la Pascua</option>
                                    </select>-->
                                </div>                                
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="estado">Estado:</label>
                                <div class="col-md-9">

                                    <select name="estado" id="estado" class="form-control select2" required>
                                        <option value="">Seleccionar</option>
                                        @foreach($estados as $estado)
                                            <option value="{{$estado->estado}}" id="{{$estado->estado}}">{{$estado->estado}}</option>
                                        @endforeach
                                    </select>

                                    <!--<select name="estado" id="estado" class="form-control select2" required>
                                        <option value="">Seleccionar</option>
                                        <option value="Amazonas" id="Amazonas">Amazonas</option>
                                        <option value="Anzoategui" id="Anzoategui">Anzoategui</option>
                                        <option value="Apure" id="Apure">Apure</option>
                                        <option value="Aragua" id="Aragua">Aragua</option>
                                        <option value="Barquisimeto" id="Barquisimeto">Barquisimeto</option>
                                        <option value="Carabobo" id="Carabobo">Carabobo</option>
                                        <option value="Cojedes" id="Cojedes">Cojedes</option>
                                        <option value="Delta Amacuro" id="Delta Amacuro">Delta Amacuro</option>
                                        <option value="Distrito Federal" id="Distrito Federal">Distrito Federal</option>
                                        <option value="Falcon" id="Falcon">Falcon</option>
                                        <option value="Guanare" id="Guanare">Guanare</option>
                                        <option value="Guarico" id="Guarico">Guarico</option>
                                        <option value="Lara" id="Lara">Lara</option>
                                        <option value="Merida" id="Merida">Merida</option>
                                        <option value="Miranda" id="Miranda">Miranda</option>
                                        <option value="Nueva Esparta" id="Nueva Esparta">Nueva Esparta</option>
                                        <option value="Portuguesa" id="Portuguesa">Portuguesa</option>
                                        <option value="Sucre" id="Sucre">Sucre</option>
                                        <option value="Tachira" id="Tachira">Tachira</option>
                                        <option value="Trujillo" id="Trujillo">Trujillo</option>
                                        <option value="Yaracuy" id="Yaracuy">Yaracuy</option>
                                        <option value="Zulia" id="Zulia">Zulia</option>
                                </select>-->                                
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="observacion_select">Cómo se enteró:</label>
                                <div class="col-md-9">
                                    <select id="observacion_select" name="observacion_select" class="form-control select2" required>
                                        <option value="">Seleccionar</option>     
                                        <option value="Email" id="Email">Email</option>     
                                        <option value="Invitación Telefónica" id="Invitación Telefónica">Invitación telefónica</option>     
                                        <option value="Por Cavefaj" id="Por Cavefaj">Por Cavefaj</option>     
                                        <option value="Redes Sociales" id="Redes sociales">Redes sociales</option>     
                                        <option value="Publicidad de Prensa" id="Publicidad de prensa">Publicidad de prensa</option>     
                                        <option value="Tarjeta de invitación" id="Tarjeta de invitación">Tarjeta de invitación</option>     
                                        <option value="Carta de expositores" id="Carta de expositores">Carta de expositores</option>     
                                        <option value="whatsapp" id="whatsapp">whatsapp</option>     
                                        <option value="Otros" id="Otros">Otros</option>     
                                    </select>  
                                </div>
                            </div>
                        </div>

                        <div id="div-otros" style="display: none">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="observacion">Otra Observacion:</label>
                                    <div class="col-md-9">
                                        <input id="observacion" name="observacion" class="form-control" type="text" value='' onblur="Mayusculas(this.value,this.id)">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="redes_sociales">Redes Sociales:</label>
                                <div class="col-md-9">
                                    <select multiple="multiple" rows='5' name="redes_sociales" id="redes_sociales" class='select2 form-control' >
                                            <option value="facebook"> Facebook</option>
                                            <option value="twitter"> Twitter</option>
                                            <option value="instagram"> Instagram</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div id="div-facebook" style="display: none">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="facebook">Facebook:</label>
                                    <div class="col-md-9">
                                        <input id="facebook" name="facebook" class="form-control" type="text" value='@' onblur="Mayusculas(this.value,this.id)">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="div-twitter" style="display: none">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="twitter">Twitter:</label>
                                    <div class="col-md-9">
                                        <input id="twitter" name="twitter" class="form-control" type="text" value='@' onblur="Mayusculas(this.value,this.id)">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="div-instagram" style="display: none">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="instagram">Instagram:</label>
                                    <div class="col-md-9">
                                        <input id="instagram" name="instagram" class="form-control" type="text" value='@' onblur="Mayusculas(this.value,this.id)">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="box-header">
                        <h3>Datos de Contacto</h3>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="tipo_de_identificacion_persona">Rif/Cedula:</label>
                                <div class="col-md-9">
                                    <select name="tipo_de_identificacion_persona" id="tipo_de_identificacion_persona" class="form-control select2" required>
                                        <option value="V" id="V">V</option>
                                        <option value="E" id='E'>E</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="identificacion_persona">Identificación:</label>
                                <div class="col-md-9">
                                    <input id="identificacion_persona" name="identificacion_persona" class="form-control" type="number" value='' required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="contacto">Nombre / Apellido:</label>
                                <div class="col-md-9">
                                    <input type="text" name="contacto" id="contacto" class="form-control" placeholder="Introduzca Nombre / Apellido de contacto" required onblur="Mayusculas(this.value,this.id)">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="cargo">Cargo:</label>
                                <div class="col-md-9">
                                    <input type="text" name="cargo" id="cargo" class="form-control" placeholder="Introduzca cargo" required onblur="Mayusculas(this.value,this.id)">
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="celular"> Número de Celular:</label>
                                <div class="col-md-9">
                                    <select name="prefijo" id="prefijo" class="col-md-4 form-control select"  style="width: 31%;">
                                        <option value="0424" id='0424'>0424</option>
                                        <option value="0414" id='0414'>0414</option>
                                        <option value="0426" id='0426'>0426</option>
                                        <option value="0416" id='0416'>0416</option>
                                        <option value="0412" id='0412'>0412</option>
                                    </select>
                                    <input type="number" name="celular" id="celular" class="col-md-8 form-control" placeholder="Introduzca Celular" required style="width: 69%;">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="telefono">Número de Oficina:</label>
                                <div class="col-md-9">
                                    <input type="number" name="telefono" id="telefono" class="form-control" placeholder="Introduzca oficina" required>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="email"> Email:</label>
                                <div class="col-md-9">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Introduzca Email" required onblur="Mayusculas(this.value,this.id)">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="visitante">Número de Visitantes:</label>
                                <div class="col-md-9">
                                    <input type="number" name="visitante" id="visitante" class="form-control" placeholder="Introduzca Número de visitantes" required>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12 text-right">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-effect-ripple" id="cambioCliente">Crear</button>
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
    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Nuevo Remitente</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
            <div class="modal-body">
                
                <form action="{{ URL::to('admin/donacion/remitente') }}" method="POST" class="form-horizontal form-bordered" autocomplete="off" id="formulario_nuevo_remitente">
                 
                    {{ csrf_field() }}

                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="remitido_new">Remitido:</label>
                                    <div class="col-md-9">
                                        <input id="remitido_new" name="remitido_new" class="form-control" type="text" value=''>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 text-right">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-effect-ripple">Crear</button>
                                </div>
                            </div>
                        </div>

                    </div>

                    
                </form>

            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
@endsection

@include('plugins.toastr')

@include('plugins.select2')

@push('js')

    
    
    <script>

    function Mayusculas(obj,id){
        obj = obj.toUpperCase();
        document.getElementById(id).value = obj;
    };


        $('#redes_sociales').change(function() {

            if(this.value == 'facebook'){
                $('#div-facebook').css('display', 'block');
            }else if(this.value == 'twitter'){
                $('#div-twitter').css('display', 'block');
            }else if(this.value == 'instagram'){
                $('#div-instagram').css('display', 'block');
            }

            this.value = '';

        });

        $('#observacion_select').change(function() {

            if(this.value == 'Otros'){
                $('#div-otros').css('display', 'block');
            }else{
                $('#div-otros').css('display', 'none');
            }

            //this.value = '';

        });

        

        /*var newRemitido = $('#remitido').val();

        $('#remitido').change(function() {
            /* Act on the event *

            if(this.value == 'new'){
                $('#exampleModal').modal({
                    show: 'true'
                });

                $(function () {
      
                  var formulario_nuevo_remitente = $("#formulario_nuevo_remitente");

                    formulario_nuevo_remitente.on('submit', function (e) {
                        e.preventDefault();
                            var form = $('#formulario_nuevo_remitente')[0];
                            var formData = new FormData(form);
                            $.ajax({
                                url: formulario_nuevo_remitente.attr('action'),
                                type: formulario_nuevo_remitente.attr('method'),
                                enctype: 'multipart/form-data',
                                data: formData,
                                processData: false,
                                contentType: false,
                            success: function (respuesta) {
                                if (respuesta.success) {
                                    
                                    saveRemitente();

                                    setTimeout(function() {
                                      location.reload();
                                    }, 3000);
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
            }

        });*/


    $('#identificacion_persona').blur(function () {
        var numero_identificacion =  $(this).val();
        //alert('te tengo ' + identificacion);
        if(numero_identificacion){
            $.ajax({
                url: "{{ URL::to('admin/feria/contacto') }}/" + numero_identificacion,
                type: "GET",
                enctype: 'multipart/form-data',
                data: { 
                    numero_identificacion: numero_identificacion
                },
                processData: false,
                contentType: false,
                success: function (respuesta) {
                    
                    if (respuesta.data) {

                        
                        $('#contacto').val(respuesta.contacto.contacto);
                        $('#cargo').val(respuesta.contacto.cargo);
                        $('#celular').val(respuesta.contacto.celular);
                        $('#telefono').val(respuesta.contacto.telefono);
                        $('#email').val(respuesta.contacto.email);
                        $('#visitante').val(respuesta.contacto.visitante);


                        if(respuesta.contacto.tipo_de_identificacion_persona != ""){

                            $('#tipo_de_identificacion_persona').select2("destroy");
                            $('#tipo_de_identificacion_persona option#'+respuesta.contacto.tipo_de_identificacion_persona).attr('selected','');
                            $('#tipo_de_identificacion_persona').select2();
                        }
                        dataContacto();

                    }
                    else {
                        $('#contacto').val('');
                        $('#cargo').val('');
                        $('#celular').val('');
                        $('#telefono').val('');
                        $('#email').val('');
                        $('#visitante').val('');

                        $('#tipo_de_identificacion_persona').select2("destroy");
                        $('#tipo_de_identificacion_persona').select2();

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

    $('#identificacion').blur(function () {
        var identificacion =  $(this).val();
        //alert('te tengo ' + identificacion);
        if(identificacion){
            $.ajax({
                url: "{{ URL::to('admin/feria/empresa') }}/" + identificacion,
                type: "GET",
                enctype: 'multipart/form-data',
                data: { 
                    numero_identificacion: identificacion
                },
                processData: false,
                contentType: false,
                success: function (respuesta) {

                    console.log(respuesta);
                    
                    if (respuesta.data) {

                        $('#nombre').val(respuesta.empresa.nombre);
                        
                        $('#ubicacion').val(respuesta.empresa.ubicacion);
                        
                        if(respuesta.empresa.tipo_empresa != ""){
                            $('#tipo_empresa').select2("destroy");
                            $('#tipo_empresa option#'+respuesta.empresa.tipo_empresa).attr('selected','');
                            $('#tipo_empresa').select2();
                        }

                        if(respuesta.empresa.tipo_persona != ""){
                            $('#tipo_persona').select2("destroy");
                            $('#tipo_persona option#'+respuesta.empresa.tipo_persona).attr('selected','');
                            $('#tipo_persona').select2();
                        }

                        if(respuesta.empresa.ciudad != ""){
                            $('#ciudad').select2("destroy");
                            $('#ciudad option#'+respuesta.empresa.ciudad).attr('selected','');
                            $('#ciudad').select2();
                        }

                        if(respuesta.empresa.estado != ""){
                            $('#estado').select2("destroy");
                            $('#estado option#'+respuesta.empresa.estado).attr('selected','');
                            $('#estado').select2();
                        }

                        if(respuesta.ramos != ""){
                            $('#ramo_empresa').select2("destroy");

                            for (var i = 0; i < respuesta.ramos.length; i++) {
                                $('#ramo_empresa option#'+respuesta.ramos[i].ramo_id).attr('selected','');
                            }
                            $('#ramo_empresa').select2();
                        }

                        if(respuesta.empresa.twitter){
                            $('#div-twitter').css('display', 'block');
                            $('input#twitter').val(respuesta.empresa.twitter);
                        }

                        if(respuesta.empresa.facebook){
                            $('#div-facebook').css('display', 'block');
                            $('input#facebook').val(respuesta.empresa.facebook);
                        }

                        if(respuesta.empresa.instagram){
                            $('#div-instagram').css('display', 'block');
                            $('input#instagram').val(respuesta.empresa.instagram);
                        }



                        dataEmpresa();

                    }
                    else {
                        console.log('nada');
                        
                        $('#nombre').val('');
                        
                        $('#ubicacion').val('');

                        $('#tipo_empresa').select2("destroy");
                        $('#tipo_empresa').select2();

                        $('#tipo_persona').select2("destroy");
                        $('#tipo_persona').select2();

                        $('#estado').select2("destroy");
                        $('#estado').select2();

                        $('#ciudad').select2("destroy");
                        $('#ciudad').select2();

                        $('#estado').select2("destroy");
                        $('#estado').select2();

                        $('#ramo_empresa').select2("destroy");
                        $('#ramo_empresa').select2();

                        $('input#twitter').val('');
                        $('#div-twitter').css('display', 'none');

                        $('input#instagram').val('');
                        $('#div-instagram').css('display', 'none');

                        $('input#facebook').val('');
                        $('#div-facebook').css('display', 'none');
                        
                            


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
      
      var formulario_nuevo_feria = $("#formulario_nuevo_feria");

        formulario_nuevo_feria.on('submit', function (e) {
            e.preventDefault();
                var form = $('#formulario_nuevo_feria')[0];
                var formData = new FormData(form);
                $.ajax({
                    url: formulario_nuevo_feria.attr('action'),
                    type: formulario_nuevo_feria.attr('method'),
                    enctype: 'multipart/form-data',
                    data: formData,
                    processData: false,
                    contentType: false,
                success: function (respuesta) {
                    if (respuesta.success) {
                        console.log(respuesta);
                        save(respuesta.mensaje);

                        setTimeout(function() {
                          window.location.href = "{{url('admin/feria')}}";
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

    function dataContacto() {
      if (!showToastrs) {
        toastr.success('Datos cargados de Contacto', 'Informacion!');
      } else {
        toastr.error('no se puede!\'t.', 'Otro error crítico');
      }
    }

    function dataEmpresa() {
      if (!showToastrs) {
        toastr.success('Datos cargados de Empresa', 'Informacion!');
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

    function saveRemitente() {
      if (!showToastrs) {
        toastr.success('Remitente Guardado', 'Informacion!');
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