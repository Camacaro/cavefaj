<!DOCTYPE html>
<html>
<head>
	<title>Reporte General</title>
	 
	 {!!Html::style('css/excel.css')!!}
</head>
<body>

	<table border="1">

		<thead>

			<tr>
		    	<td colspan="26"> 
		    		<img src="{{$rutaImg}}" width="150" /> 
		    	</td>
		  	</tr>

			<tr>
		    	<th id="titulo" colspan="8" height="20" align="center">Reporte General</th>
		  	</tr>	

		  	<tr> 
				<td colspan="26"  height="20">Fecha de Elaboración:  <?= date('Y-m-d') ?> </td>
			</tr>

			<tr> 
				<td colspan="26"  height="20"> Etapa de feria:  {{$edicion->feria}} - {{$edicion->year}}  </td>
			</tr>

			<tr> 
				<td colspan="26"  height="20">  Sede:  {{$edicion->sede}} </td>
			</tr>
			<tr></tr>
			<tr></tr>

			<tr height="30"> 
				<th ><div  id="best" aling="center" colspan="17"><strong> <h3> Datos de la Empresa</h3></strong></div></th>
				<th ><div  id="best" aling="center" colspan="9" rowspan="1"><strong> <h3> Datos de Contacto </h3></strong></div>
			</tr>
			<tr >
		    	<th id="bordeh">#</th>
	            <th id="bordeh" width="25" >Fecha de Registro</th>
	            <th id="bordeh" width="25" >Edición de la Feria</th>
	            <th id="bordeh" width="25" >Sede de la Feria</th>
	            <th id="bordeh" width="25" >Rif/Cédula</th>
	            <th id="bordeh" width="25" >Identificacion</th>
	            <th id="bordeh" width="25" >Nombre de la Empresa</th>
	            <th id="bordeh" width="25" >Tipo de Empresa</th>
	            <th id="bordeh" width="25" >Tipo de persona</th>
	            <th id="bordeh" width="25" >Ramos</th>
	            <th id="bordeh" width="25" >Ubicación de la Empresa</th>
	            <th id="bordeh" width="25" >Ciudad</th>
	            <th id="bordeh" width="25" >Estado</th>
	            <th id="bordeh" width="25" >Como se enteró</th>
	            <th id="bordeh" width="25" >Facebook</th>
	            <th id="bordeh" width="25" >Twitter</th>
	            <th id="bordeh" width="25" >Instagram</th>

	            <th id="bordeh" width="25" >Rif/Cédula</th>
	            <th id="bordeh" width="25" >Identificación</th>
	            <th id="bordeh" width="25" >Nombre / Apellido</th>
	            <th id="bordeh" width="25" >Cargo</th>
	            <th id="bordeh" width="25" >Prefijo</th>
	            <th id="bordeh" width="25" >Número de Celular</th>
	            <th id="bordeh" width="25" >Número de Oficina</th>
	            <th id="bordeh" width="25" >Email</th>
	            <th id="bordeh" width="25" >Número de Visitantes</th>
			</tr>

		
		</thead>

		<tbody>
			<?php $count = 1; ?> 
			@foreach($collection as $row)
				<tr>
					<td id="bordeb"> {{ $count }} </td>

					<td id="bordeb"> {{ $row->created_at }} </td>
                    <td id="bordeb"> {{ $row->edicion_feria }} </td>
                    <td id="bordeb"> {{ $row->sede }} </td>
                    <td id="bordeb"> {{ $row->tipo_de_identificacion }} </td>
                    <td id="bordeb"> {{ $row->identificacion }} </td>
                    <td id="bordeb"> {{ $row->nombre }} </td>
                    <td id="bordeb"> {{ $row->tipo_empresa }} </td>
                    <td id="bordeb"> {{ $row->tipo_persona }} </td>
                    <td id="bordeb"> {{ $row->ramos }} </td>
                    <td id="bordeb"> {{ $row->ubicacion }} </td>
                    <td id="bordeb"> {{ $row->ciudad }} </td>
                    <td id="bordeb"> {{ $row->estado }} </td>
                    <td id="bordeb"> {{ $row->observacion }} </td>
                    <td id="bordeb"> {{ $row->facebook }} </td>
                    <td id="bordeb"> {{ $row->twitter }} </td>
                    <td id="bordeb"> {{ $row->instagram }} </td>


                    <td id="bordeb"> {{ $row->tipo_de_identificacion_persona }} </td>
	                <td id="bordeb"> {{ $row->identificacion_persona }} </td>
	                <td id="bordeb"> {{ $row->contacto }} </td>
	                <td id="bordeb"> {{ $row->cargo }} </td>
	                <td id="bordeb"> {{ $row->prefijo }} </td>
	                <td id="bordeb"> {{ $row->celular }} </td>
	                <td id="bordeb"> {{ $row->telefono }} </td>
	                <td id="bordeb"> {{ $row->email }} </td>
	                <td id="bordeb"> {{ $row->visitante }} </td>

				</tr>
			<?php $count++ ?> 
			@endforeach
		</tbody>
	</table>

</body>
</html>