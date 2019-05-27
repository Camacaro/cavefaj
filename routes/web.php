<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'namespace' => 'admin', 'middleware' => ['auth']], function () {
    
	Route::get('/', function () {
    	return view('admin.inicio');
	});	

	Route::get('/plantilla', function () {
    	return view('layouts.principal');
	});

	Route::resource('/reporte', 'ReporteController');
    Route::get('/reporte/imprimir/{id_solicitud}', 'ReporteController@imprimir');
    Route::post('/reporte/imprimirAll', 'ReporteController@imprimirAll');
    Route::post('/reporte/imprimirTodos', 'ReporteController@imprimirTodos');

    

	/*Route::resource('/donacion', 'DonacionController');
	Route::get('/donacion/ciudadano/{numero_identificacion}', 'DonacionController@numeroIdentificacion');
    Route::post('/donacion/remitente', 'DonacionController@remitente');*/



    Route::resource('/feria', 'FeriaController');
    Route::get('/feria/contacto/{numero_identificacion}', 'FeriaController@searchContacto');
    Route::get('/feria/empresa/{numero_identificacion}', 'FeriaController@searchEmpresa');


    Route::resource('/edicion-feria', 'EdicionFeria');


    Route::resource('/usuarios', 'UsuarioController');



});

Route::get('/test', function () {
    	#return response()->json(App\Solicitudes::with('ciudadano')->get());
		#return response()->json(App\Ciudadanos::where('numero_identificacion','123')->first());
		
		/*$Solicitud =  App\Solicitudes::with('ciudadano')->first();

		$fecha_solicitud = strtotime ( $Solicitud->fecha_solicitud ) ;
		$format_fecha_solicitud = date ( 'd-m-Y' , $fecha_solicitud );

		return response()->json($format_fecha_solicitud);*/

		/*$Fpdf = new \Codedge\Fpdf\Fpdf\Fpdf();

		$Fpdf->AddPage();
        $Fpdf->SetFont('Arial', '', 8);

        $Fpdf->Cell(64, 5, ''.utf8_decode('Hola Mundo').'', 0,0); 

        #$rutaPDF = storage_path('app/pdf/PDF'.$data['encabezado']->ID.'.pdf');
        #$Fpdf->Output($rutaPDF,'F');
        #return $rutaPDF;
        $Fpdf->Output('I','',TRUE);        
        exit;*/

        /*$Solicitudes = App\Solicitudes::whereBetween('fecha_solicitud',array('2019-01-16', '2019-01-25'))->get();
        return response()->json($Solicitudes);*/

        /*$Solicitudes = App\Solicitudes::with('ciudadano')
                                ->where('ciudadano_id', 3)
                                ->get();*/

       /* $sectores = App\Sectores::all();

        return response()->json($sectores);  */    

         /*$estados = App\Estado::all();

        return response()->json($estados);          */

        /*$solicitudes =  App\Sectores::with('ciudadanos')->has('ciudadanos')->get();

        return response()->json( $solicitudes );*/

        /*$ciudadano = App\Sectores::with('ciudadanos')->has('ciudadanos')->get();

        return response()->json( $ciudadano );*/

        /*$empresas =   App\Empresa::select('empresas.id', 'empresas.nombre', 'contactos.contacto', 'empresas.created_at')
                ->join('empresas_contactos', 'empresas.id', '=', 'empresas_contactos.empresa_id')
                ->join('contactos', 'empresas_contactos.contacto_id', '=', 'contactos.id')
                ->get();

        return response()->json( $empresas );    */

       /* $empresa =  App\Empresa::where('identificacion', 123)
            ->first();

        $ramos =  App\EmpresaRamo::where('empresa_id', $empresa->id)
            ->get();       

        return response()->json([$empresa, $ramos]  );   */

        /*$empresas = App\Empresa::
                join('empresas_contactos', 'empresas.id', '=', 'empresas_contactos.empresa_id')
                ->join('contactos', 'empresas_contactos.contacto_id', '=', 'contactos.id')
                ->where('empresas.id', 5)
                ->first();

        $empresa = App\Empresa::groupBy('nombre')->get();

        return response()->json($empresa );  */



        /*$empresa = App\Empresa::
                join('empresas_contactos', 'empresas.id', '=', 'empresas_contactos.empresa_id')
                ->join('contactos', 'empresas_contactos.contacto_id', '=', 'contactos.id')
                ->where('empresas.id', 1)
                ->first();

         $ramos =  App\EmpresaRamo::where('empresa_id', $empresa->id)
            ->join('ramos', 'empresas_ramos.ramo_id', '=', 'ramos.id')
            ->get();


        return response()->json(['empresa'=>$empresa, 'ramos'=>$ramos]);*/


        
        //return response()->json(Request::path());

        

        $usuarios = App\User::with('roles')->get();

        return response()->json($usuarios);



        /*$empresas = App\Empresa::
                join('empresas_contactos', 'empresas.id', '=', 'empresas_contactos.empresa_id')
                ->join('contactos', 'empresas_contactos.contacto_id', '=', 'contactos.id')
                ->where('empresas.id', 4)
                ->first();

        $content  = '<div align= "center"> <strong> Reporte </strong></div><div align= "center"><strong> Del '.$empresas->created_at.' al '.$empresas->updated_at.' </strong></div>';

        $content .= '<table border="1">';
        
        $content .= '<tr>';
        $content .= '<td aling="center"> <strong> Empresa </strong> </td>
                    <td><strong>Tipo de Empresa</strong></td>
                    <td><strong>Contacto</strong></td>
                    <td><strong>Celular</strong></td>';
        $content .= '</tr>';

        $content .= '</tr>';
        $content .= 
                '<td>'.$empresas->nombre.'</td>
                <td>'.$empresas->tipo_empresa.'</td>
                <td>'.$empresas->contacto.'</td>
                <td>'.$empresas->celular.'</td>';
        $content .= '</tr>';        

        $content .= '</table>';

        echo pack("CCC", 0xef, 0xbb, 0xbf);
        @header('Content-Type: application/vnd.ms-excel; charset=UTF-8');
        @header('Content-Length: ' . strlen($content));
        @header('Content-disposition: inline; filename="' . $title . ' ' . date("d/m/Y") . '.xls"');

        echo $content;
        exit;*/

	});	