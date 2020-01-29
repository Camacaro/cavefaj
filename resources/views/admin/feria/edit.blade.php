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
    


            <form action="{{url("/admin/feria/$empresa->id")}}" method="POST" class="form-horizontal form-bordered"
              autocomplete="off" id="formulario_nuevo_feria">
                 
                {{ csrf_field() }}

                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="idContacto" value="{{$empresa->idContacto}}">

                <div class="container-fluid">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">

                                <label class="col-md-3 control-label" for="solicitud">Fecha de Registro:</label>
                                <div class="col-md-9">
                                    <input type="date" name="fecha_registro" id="fecha_registro" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" value='{{$empresa->fecha}}' required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="edicion_feria">Edición de la Feria:</label>
                                <div class="col-md-9">

                                    <input type="text" name="edicion_feria" id="edicion_feria" value="{{$empresa->edicion_feria}}" class="form-control">
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="sede">Sede de la Feria:</label>
                                <div class="col-md-9">
                                    <input type="text" name="sede" id="sede" value="{{$empresa->sede}}" class="form-control">
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
                                    <select name="tipo_de_identificacion" id="tipo_de_identificacion" class="form-control select2" >
                                        <option value="Rif" <?= ($empresa->tipo_de_identificacion == 'Rif') ? 'selected' : '' ; ?>  id='Rif'>Rif</option>
                                        <option value="CI"  <?= ($empresa->tipo_de_identificacion == 'CI') ? 'selected' : '' ; ?> id='CI'>CI</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="identificacion">Identificacion:</label>
                                <div class="col-md-9">
                                    <input id="identificacion" name="identificacion" class="form-control" type="number" value='{{$empresa->identificacion}}' required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="nombre">Nombre de la Empresa:</label>
                                <div class="col-md-9">
                                    <input id="nombre" name="nombre" class="form-control" type="text" placeholder="Introduzca Nombre de la Empresa" value='{{$empresa->nombre}}' required onblur="Mayusculas(this.value,this.id)"> 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="tipo_empresa">Tipo de Empresa:</label>
                                <div class="col-md-9">

                                    <select name="tipo_empresa" id="tipo_empresa" class="form-control select2" required>
                                        <option value="">Seleccionar</option>
                                        <option value="Comprador" id="Comprador" <?= ($empresa->tipo_empresa == 'Comprador') ? 'selected' : '' ; ?>>Comprador</option>
                                        <option value="Expositor" id="Expositor" <?= ($empresa->tipo_empresa == 'Expositor') ? 'selected' : '' ; ?>>Expositor</option>
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
                                        <option value="Jurídico" id="Jurídico" <?= ($empresa->tipo_persona == 'Jurídico') ? 'selected' : '' ; ?>>Jurídico</option>
                                        <option value="Natural" id="Natural" <?= ($empresa->tipo_persona == 'Natural') ? 'selected' : '' ; ?>>Natural</option>
                                        <option value="Gubernamental" id="Gubernamental" <?= ($empresa->tipo_persona == 'Gubernamental') ? 'selected' : '' ; ?>>Gubernamental</option>
                                        <option value="Extranjero" id="Extranjero" <?= ($empresa->tipo_persona == 'Extranjero') ? 'selected' : '' ; ?>>Extranjero</option>
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
                                                
                                                @foreach($ramosEmpresa as $ramoEmpresa)

                                                    <option value="{{$ramo->id}}" id="{{$ramo->id}}" 
                                                        <?= ($ramo->id == $ramoEmpresa->id) ? 'selected' : '' ; ?> > 

                                                        {{$ramo->nombre}}

                                                    </option>

                                                @endforeach
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
                                    <input id="ubicacion" name="ubicacion" class="form-control" type="text" value='{{$empresa->ubicacion}}'  placeholder="Introduzca Ubicación de la Empresa" required onblur="Mayusculas(this.value,this.id)">
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="ciudad">Ciudad:</label>
                                <div class="col-md-9">

                                    <select name="ciudad" id="ciudad" class="form-control select2" required>
                                        @foreach($ciudades as $ciudad)
                                            <option value="{{$ciudad->ciudad}}" id="{{$ciudad->ciudad}}"
                                                <?= ($empresa->ciudad == $ciudad->ciudad) ? 'selected' : '' ; ?>
                                                >
                                                {{$ciudad->ciudad}}
                                            </option>
                                        @endforeach
                                    </select>
                                    <!--
                                    <select name="ciudad" id="ciudad" class="form-control select2" required>
                                        <option value=" ">Seleccionar</option>
                                        <option value="Anaco" id="Anaco" <?= ($empresa->ciudad == 'Anaco') ? 'selected' : '' ; ?>>Anaco</option>
                                        <option value="Barcelona" id="Barcelona"  <?= ($empresa->ciudad == 'Barcelona') ? 'selected' : '' ; ?>>Barcelona</option>
                                        <option value="Barinas" id="Barinas"  <?= ($empresa->ciudad == 'Barinas') ? 'selected' : '' ; ?>>Barinas</option>
                                        <option value="Barquisimeto" id="Barquisimeto" <?= ($empresa->ciudad == 'Anaco') ? 'selected' : '' ; ?>>Barquisimeto</option>
                                        <option value="Bochinche" id="Bochinche" <?= ($empresa->ciudad == 'Bochinche') ? 'selected' : '' ; ?>>Bochinche</option>
                                        <option value="Cabimas" id="Cabimas" <?= ($empresa->ciudad == 'Cabimas') ? 'selected' : '' ; ?>>Cabimas</option>
                                        <option value="Cabruta" id="Cabruta" <?= ($empresa->ciudad == 'Cabruta') ? 'selected' : '' ; ?>>Cabruta</option>
                                        <option value="Caicara" id="Caicara" <?= ($empresa->ciudad == 'Caicara') ? 'selected' : '' ; ?>>Caicara</option>
                                        <option value="Canaima" id="Canaima" <?= ($empresa->ciudad == 'Canaima') ? 'selected' : '' ; ?>>Canaima</option>
                                        <option value="Caracas" id="Caracas" <?= ($empresa->ciudad == 'Caracas') ? 'selected' : '' ; ?>>Caracas</option>
                                        <option value="Ciudad Bolivar" id="Ciudad Bolivar" <?= ($empresa->ciudad == 'Bolivar') ? 'selected' : '' ; ?>>Ciudad Bolivar</option>
                                        <option value="Ciudad Guayana" id="Ciudad Guayana" <?= ($empresa->ciudad == 'Ciudad Guayana') ? 'selected' : '' ; ?>>Ciudad Guayana</option>
                                        <option value="Ciudad Piar" id="Ciudad Piar" <?= ($empresa->ciudad == 'Ciudad Piar') ? 'selected' : '' ; ?>>Ciudad Piar</option>
                                        <option value="Coro" id="Coro" <?= ($empresa->ciudad == 'Coro') ? 'selected' : '' ; ?>>Coro</option>
                                        <option value="Cumaná" id="Cumaná" <?= ($empresa->ciudad == 'Cumaná') ? 'selected' : '' ; ?>>Cumaná</option>
                                        <option value="El Amparo" id="El Amparo" <?= ($empresa->ciudad == 'El Amparo') ? 'selected' : '' ; ?>>El Amparo</option>
                                        <option value="El dorado" id="El dorado" <?= ($empresa->ciudad == 'El dorado') ? 'selected' : '' ; ?>>El dorado</option>
                                        <option value="El Jobal" id="El Jobal" <?= ($empresa->ciudad == 'El Jobal') ? 'selected' : '' ; ?>>El Jobal</option>
                                        <option value="Esmeralda" id="Esmeralda" <?= ($empresa->ciudad == 'Esmeralda') ? 'selected' : '' ; ?>>Esmeralda</option>
                                        <option value="Guanare" id="Guanare" <?= ($empresa->ciudad == 'Guanare') ? 'selected' : '' ; ?>>Guanare</option>
                                        <option value="Guarenas" id="Guarenas" <?= ($empresa->ciudad == 'Guarenas') ? 'selected' : '' ; ?>>Guarenas</option>
                                        <option value="Guasipat" id="Guasipat" <?= ($empresa->ciudad == 'Guasipat') ? 'selected' : '' ; ?>>Guasipat</option>
                                        <option value="Guatire" id="Guatire" <?= ($empresa->ciudad == 'Guatire') ? 'selected' : '' ; ?>>Guatire</option>
                                        <option value="Güiria" id="Güiria" <?= ($empresa->ciudad == 'Güiria') ? 'selected' : '' ; ?>>Güiria</option>
                                        <option value="La Asunción" id="La Asunción" <?= ($empresa->ciudad == 'La Asunción') ? 'selected' : '' ; ?>>La Asunción</option>
                                        <option value="La Guaira" id="La Guaira" <?= ($empresa->ciudad == 'La Guaira') ? 'selected' : '' ; ?>>La Guaira</option>
                                        <option value="La Paragua" id="La Paragua" <?= ($empresa->ciudad == 'La Paragua') ? 'selected' : '' ; ?>>La Paragua</option>
                                        <option value="Los Teques" id="Los Teques" <?= ($empresa->ciudad == 'Los Teques') ? 'selected' : '' ; ?>>Los Teques</option>
                                        <option value="Maracaibo" id="Maracaibo" <?= ($empresa->ciudad == 'Maracaibo') ? 'selected' : '' ; ?>>Maracaibo</option>
                                        <option value="Maracay" id="Maracay" <?= ($empresa->ciudad == 'Maracay') ? 'selected' : '' ; ?>>Maracay</option>
                                        <option value="Maturin" id="Maturin" <?= ($empresa->ciudad == 'Maturin') ? 'selected' : '' ; ?>>Maturin</option>
                                         <option value="Mérida" id="Mérida" <?= ($empresa->ciudad == 'Mérida') ? 'selected' : '' ; ?>>Mérida</option>
                                        <option value="Puerto Ayacucho" id="Puerto Ayacucho" <?= ($empresa->ciudad == 'Puerto Ayacucho') ? 'selected' : '' ; ?>>Puerto Ayacucho</option>
                                        <option value="Puerto Cabello" id="Puerto Cabello" <?= ($empresa->ciudad == 'Puerto Cabello') ? 'selected' : '' ; ?>>Puerto Cabello</option>
                                        <option value="Punto Fijo" id="Punto Fijo" <?= ($empresa->ciudad == 'Punto Fijo') ? 'selected' : '' ; ?>>Punto Fijo</option>
                                        <option value="Riecito" id="Riecito" <?= ($empresa->ciudad == 'Riecito') ? 'selected' : '' ; ?>>Riecito</option>
                                        <option value="San Carlos" id="San Carlos" <?= ($empresa->ciudad == 'San Carlos') ? 'selected' : '' ; ?>>San Carlos</option>
                                        <option value="San Cristóbal" id="San Cristóbal" <?= ($empresa->ciudad == 'San Cristóbal') ? 'selected' : '' ; ?>>San Cristóbal</option>
                                        <option value="San Felipe" id="San Felipe" <?= ($empresa->ciudad == 'San Felipe') ? 'selected' : '' ; ?>>San Felipe</option>
                                        <option value="San Fernando de Apure" id="San Fernando de Apure" <?= ($empresa->ciudad == 'San Fernando de Apure') ? 'selected' : '' ; ?>>San Fernando de Apure</option>
                                        <option value="San Fernando de Atabato" id="San Fernando de Atabato" <?= ($empresa->ciudad == 'San Fernando de Atabato') ? 'selected' : '' ; ?>>San Fernando de Atabato</option>
                                        <option value="San Juan de los Morros" id="San Juan de los Morros" <?= ($empresa->ciudad == 'San Juan de los Morros') ? 'selected' : '' ; ?>>San Juan de los Morros</option>
                                        <option value="San Juan de Manapiare" id="San Juan de Manapiare" <?= ($empresa->ciudad == 'San Juan de Manapiare') ? 'selected' : '' ; ?>>San Juan de Manapiare</option>
                                        <option value="Santa Elena de Uirén" id="Santa Elena de Uirén" <?= ($empresa->ciudad == 'Santa Elena de Uirén') ? 'selected' : '' ; ?>>Santa Elena de Uirén</option>
                                        <option value="Tucupita" id="Tucupita" <?= ($empresa->ciudad == 'Tucupita') ? 'selected' : '' ; ?>>Tucupita</option>
                                        <option value="Tumeremo" id="Tumeremo" <?= ($empresa->ciudad == 'Tumeremo') ? 'selected' : '' ; ?>>Tumeremo</option>
                                        <option value="Valencia" id="Valencia" <?= ($empresa->ciudad == 'Valencia') ? 'selected' : '' ; ?>>Valencia</option>
                                        <option value="Valera" id="Valera" <?= ($empresa->ciudad == 'Valera') ? 'selected' : '' ; ?>>Valera</option>
                                        <option value="Valle de la Pascua" id="Valle de la Pascua" <?= ($empresa->ciudad == 'Valle de la Pascua') ? 'selected' : '' ; ?>>Valle de la Pascua</option>
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
                                        @foreach($estados as $estado)
                                            <option value="{{$estado->estado}}" id="{{$estado->estado}}"
                                                <?= ($empresa->estado == $estado->estado) ? 'selected' : '' ; ?>
                                                >
                                                {{$estado->estado}}
                                            </option>
                                        @endforeach
                                  </select>
<!--
                                    <select name="estado" id="estado" class="form-control select2" required>
                                        <option value="">Seleccionar</option>
        
                                        <option value="Amazonas" id="Amazonas"<?= ($empresa->estado == 'Amazonas') ? 'selected' : '' ; ?>>Amazonas</option>
                                        <option value="Anzoategui" id="Anzoategui"<?= ($empresa->estado == 'Anzoategui') ? 'selected' : '' ; ?>>Anzoategui</option>
                                        <option value="Apure" id="Apure"<?= ($empresa->estado == 'Apure') ? 'selected' : '' ; ?>>Apure</option>
                                        <option value="Aragua" id="Aragua"<?= ($empresa->estado == 'Aragua') ? 'selected' : '' ; ?>>Aragua</option>
                                        <option value="Barquisimeto" id="Barquisimeto"<?= ($empresa->estado == 'Barquisimeto') ? 'selected' : '' ; ?>>Barquisimeto</option>
                                        <option value="Carabobo" id="Carabobo"<?= ($empresa->estado == 'Carabobo') ? 'selected' : '' ; ?>>Carabobo</option>
                                        <option value="Cojedes" id="Cojedes"<?= ($empresa->estado == 'Cojedes') ? 'selected' : '' ; ?>>Cojedes</option>
                                        <option value="Delta Amacuro" id="Delta Amacuro"<?= ($empresa->estado == 'Delta Amacuro') ? 'selected' : '' ; ?>>Delta Amacuro</option>
                                        <option value="Distrito Federal" id="Distrito Federal"<?= ($empresa->estado == 'Distrito Federal') ? 'selected' : '' ; ?>>Distrito Federal</option>
                                        <option value="Falcon" id="Falcon"<?= ($empresa->estado == 'Falcon') ? 'selected' : '' ; ?>>Falcon</option>
                                        <option value="Guanare" id="Guanare"<?= ($empresa->estado == 'Guanare') ? 'selected' : '' ; ?>>Guanare</option>
                                        <option value="Guarico" id="Guarico"<?= ($empresa->estado == 'Guarico') ? 'selected' : '' ; ?>>Guarico</option>
                                        <option value="Lara" id="Lara"<?= ($empresa->estado == 'Lara') ? 'selected' : '' ; ?>>Lara</option>
                                        <option value="Merida" id="Merida"<?= ($empresa->estado == 'Merida') ? 'selected' : '' ; ?>>Merida</option>
                                        <option value="Miranda" id="Miranda"<?= ($empresa->estado == 'Miranda') ? 'selected' : '' ; ?>>Miranda</option>
                                        <option value="Nueva Esparta" id="Nueva Esparta"<?= ($empresa->estado == 'Nueva Esparta') ? 'selected' : '' ; ?>>Nueva Esparta</option>
                                        <option value="Portuguesa" id="Portuguesa"<?= ($empresa->estado == 'Portuguesa') ? 'selected' : '' ; ?>>Portuguesa</option>
                                        <option value="Sucre" id="Sucre"<?= ($empresa->estado == 'Sucre') ? 'selected' : '' ; ?>>Sucre</option>
                                        <option value="Tachira" id="Tachira"<?= ($empresa->estado == 'Tachira') ? 'selected' : '' ; ?>>Tachira</option>
                                        <option value="Trujillo" id="Trujillo"<?= ($empresa->estado == 'Trujillo') ? 'selected' : '' ; ?>>Trujillo</option>
                                        <option value="Yaracuy" id="Yaracuy"<?= ($empresa->estado == 'Yaracuy') ? 'selected' : '' ; ?>>Yaracuy</option>
                                        <option value="Zulia" id="Zulia"<?= ($empresa->estado == 'Zulia') ? 'selected' : '' ; ?>>Zulia</option>


                            </select>-->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="observacion_select">Como se enteró:</label>
                                <div class="col-md-9">

                                    <select id="observacion_select" name="observacion_select" class="form-control select2" required>

                                        <option value="Seleccionar">Seleccionar</option>     
                                        @foreach($observaciones as $observacion)
                                            <option value="{{$observacion}}" id="{{$observacion}}"
                                                <?= ($empresa->observacion == $observacion) ? 'selected' : '' ; ?>>
                                                {{$observacion}}
                                            </option>    

                                        <option value="">Seleccionar</option>     
                                        <option value="Email" id="Email" <?= ($empresa->observacion == 'Email') ? 'selected' : '' ; ?>>Email</option>

                                        <option value="Invitación Telefónica" id="Invitación Telefónica" <?= ($empresa->observacion == 'Invitación Telefónica') ? 'selected' : '' ; ?>>Invitación Telefónica</option>

                                        <option value="Por Cavefaj" id="Por Cavefaj" <?= ($empresa->observacion == 'Por Cavefaj') ? 'selected' : '' ; ?>>Por Cavefaj</option>

                                        <option value="Redes Sociales" id="Redes Sociales" <?= ($empresa->observacion == 'Redes Sociales') ? 'selected' : '' ; ?>>Redes Sociales</option>

                                        <option value="Publicidad de Prensa" id="Publicidad de Prensa" <?= ($empresa->observacion == 'Publicidad de Prensa') ? 'selected' : '' ; ?>>Publicidad de Prensa</option>

                                        <option value="Tarjeta de invitación" id="Tarjeta de invitación" <?= ($empresa->observacion == 'Tarjeta de invitación') ? 'selected' : '' ; ?>>Tarjeta de invitación</option>

                                        <option value="Carta de expositores" id="Carta de expositores" <?= ($empresa->observacion == 'Carta de expositores') ? 'selected' : '' ; ?>>Carta de expositores</option>

                                        <option value="whatsapp" id="whatsapp" <?= ($empresa->observacion == 'whatsapp') ? 'selected' : '' ; ?>>whatsapp</option>


                                        <option value="Otros" id="Otros" <?= ($empresa->observacion == 'Otros') ? 'selected' : '' ; ?>>Otros</option>

                                        @endforeach
                                        <option value="Otros" id="Otros" >Otros</option>    


    
                                    </select>  
                                </div>
                            </div>
                        </div>

                        <?php 
                            $otro = true;
                            foreach ($observaciones as $observacion) {
                                if ($empresa->observacion == $observacion) {
                                    $otro = false;
                                }
                            }
                        ?>

                        <div id="div-otros" <?= ($otro) ? '' : 'style="display: none"' ; ?>>
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

                        <div id="div-facebook" <?= ($empresa->facebook != "") ? '' : 'style="display: none"' ; ?>>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="facebook">Facebook:</label>
                                    <div class="col-md-9">
                                        <input id="facebook" name="facebook" class="form-control" type="text" value='{{$empresa->facebook}}' onblur="Mayusculas(this.value,this.id)">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="div-twitter" <?= ($empresa->twitter != "") ? '' : 'style="display: none"' ; ?>>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="twitter">Twitter:</label>
                                    <div class="col-md-9">
                                        <input id="twitter" name="twitter" class="form-control" type="text" value='{{$empresa->twitter}}' onblur="Mayusculas(this.value,this.id)">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="div-instagram" <?= ($empresa->instagram != "") ? '' : 'style="display: none"' ; ?>>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="instagram">Instagram:</label>
                                    <div class="col-md-9">
                                        <input id="instagram" name="instagram" class="form-control" type="text" value='{{$empresa->instagram}}' onblur="Mayusculas(this.value,this.id)">
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
                                <label class="col-md-3 control-label" for="tipo_de_identificacion_persona">Cedula:</label>
                                <div class="col-md-9">
                                    <select name="tipo_de_identificacion_persona" id="tipo_de_identificacion_persona" class="form-control select2" required>
                                        <option value="V" id="V" <?= ($empresa->tipo_de_identificacion_persona == 'V') ? 'selected' : '' ; ?>>V</option>
                                        <option value="E" id='E' <?= ($empresa->tipo_de_identificacion_persona == 'E') ? 'selected' : '' ; ?>>E</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="identificacion_persona">Identificacion:</label>
                                <div class="col-md-9">
                                    <input id="identificacion_persona" name="identificacion_persona" class="form-control" type="number" value='{{$empresa->identificacion_persona}}' required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="contacto">Nombre / Apellido:</label>
                                <div class="col-md-9">
                                    <input type="text" name="contacto" id="contacto" class="form-control" placeholder="Introduzca Nombre / Apellido de contacto" value="{{$empresa->contacto}}" required onblur="Mayusculas(this.value,this.id)">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="cargo">Cargo:</label>
                                <div class="col-md-9">
                                    <input type="text" name="cargo" id="cargo" class="form-control" placeholder="Introduzca cargo" value="{{$empresa->cargo}}" required onblur="Mayusculas(this.value,this.id)">
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
                                        <option value="" id=''>Seleccionar</option>
                                        <option value="0424" id='0424' <?= ($empresa->prefijo == '0424') ? 'selected' : '' ; ?> >0424</option>
                                        <option value="0414" id='0414'<?= ($empresa->prefijo == '0414') ? 'selected' : '' ; ?>>0414</option>
                                        <option value="0426" id='0426'<?= ($empresa->prefijo == '0426') ? 'selected' : '' ; ?>>0426</option>
                                        <option value="0416" id='0416'<?= ($empresa->prefijo == '0416') ? 'selected' : '' ; ?>>0416</option>
                                        <option value="0412" id='0412'<?= ($empresa->prefijo == '0412') ? 'selected' : '' ; ?>>0412</option>
                                    </select>
                                    <input type="number" name="celular" id="celular" class="col-md-8 form-control" placeholder="Introduzca Celular" value="{{$empresa->celular}}" required style="width: 69%;">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="telefono">Número de Oficina:</label>
                                <div class="col-md-9">
                                    <input type="number" name="telefono" id="telefono" class="form-control" placeholder="Introduzca oficina" value="{{$empresa->telefono}}" required>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="email"> Email:</label>
                                <div class="col-md-9">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Introduzca Email" value="{{$empresa->email}}" required onblur="Mayusculas(this.value,this.id)">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="visitante">Número de Visitantes:</label>
                                <div class="col-md-9">
                                    <input type="number" name="visitante" id="visitante" class="form-control" placeholder="Introduzca Número de visitantes" value="{{$empresa->visitante}}" required>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12 text-right">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-effect-ripple" id="cambioCliente">Actualizar</button>
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

@endsection

@include('plugins.toastr')

@include('plugins.select2')

@push('js')

    <script>

    function Mayusculas(obj,id){
        obj = obj.toUpperCase();
        document.getElementById(id).value = obj;
    }


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
                        $('#primer_nombre').val('');
                        $('#segundo_nombre').val('');
                        $('#primer_apellido').val('');
                        $('#segundo_apellido').val('');
                        $('#telefono').val('');
                        $('#direccion').val('');
                        $('#solicitud').val(1);

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