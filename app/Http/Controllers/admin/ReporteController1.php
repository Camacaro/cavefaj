<?php

namespace App\Http\Controllers\admin;

use App\Ramo;
use App\Empresa;
use App\EmpresaRamo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReporteController extends Controller
{
    public function __construct()
    {
        $this->middleware("permission:user");
        $this->middleware("permission:admin");
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresas = Empresa::groupBy('nombre')->get();
        $ramos = Ramo::all();

        return view('admin.reporte.index', compact('empresas','ramos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // Este funcion es del sistema de donacion
    public function storeDonacion(Request $request)
    {   
       // return response()->json( $request->all() );  

       /*
        12345

        1234 1235 
        2345

        123 124 125
        134 135
        145 

        12 13 14 15
        23  24  25
        34  35
        45

        1 2 3 4 5
       */  

        $a = ($request->fecha_solicitud_desde != "" & $request->fecha_solicitud_hasta != "") ? true : false ;
        $b = ($request->sector_id != "")     ? $request->sector_id : '' ;
        $c = ($request->estado_id != "")     ? $request->estado_id : '' ;
        $d = ($request->remitido_id != "")   ? $request->remitido_id : '' ;
        $e = ($request->ciudadano_id)        ? $request->ciudadano_id : '' ;

        $select = ['solicitudes.id', 'solicitudes.requerimiento', 'solicitudes.fecha_solicitud', 'ciudadano_id', 'estado_id'];

        if ($a != false & $b != "" & $c != "" & $d != "" & $e != "") {#12345    
            
            $Solicitudes = Solicitudes::with('ciudadano')->with('estado')
                            ->select($select)
                            ->join('ciudadanos', 'solicitudes.ciudadano_id', '=', 'ciudadanos.id')
                            ->where('sector_id', $b)
                            ->where('estado_id', $c)
                            ->where('remitido', $d)
                            ->where('ciudadano_id', $e)
                            ->whereBetween('fecha_solicitud',array($request->fecha_solicitud_desde, $request->fecha_solicitud_hasta))
                            ->get();

            return $this->validarSolicitud( $Solicitudes );

        } elseif ($a != false & $b != "" & $c != "" & $d != "") { #1234  

            $Solicitudes = Solicitudes::with('ciudadano')->with('estado')
                            ->select($select)
                            ->join('ciudadanos', 'solicitudes.ciudadano_id', '=', 'ciudadanos.id')
                            ->where('sector_id', $b)
                            ->where('estado_id', $c)
                            ->where('remitido', $d)
                            
                            ->whereBetween('fecha_solicitud',array($request->fecha_solicitud_desde, $request->fecha_solicitud_hasta))
                            ->get();

            return $this->validarSolicitud( $Solicitudes );

        } elseif ($a != false & $b != "" & $c != "" & $e != "") { #1235

            $Solicitudes = Solicitudes::with('ciudadano')->with('estado')
                            ->select($select)
                            ->join('ciudadanos', 'solicitudes.ciudadano_id', '=', 'ciudadanos.id')
                            ->where('sector_id', $b)
                            ->where('estado_id', $c)
                            
                            ->where('ciudadano_id', $e)
                            ->whereBetween('fecha_solicitud',array($request->fecha_solicitud_desde, $request->fecha_solicitud_hasta))
                            ->get();

            return $this->validarSolicitud( $Solicitudes );
            
        } elseif ($b != "" & $c != "" & $d != "" & $e != "") { #2345

            $Solicitudes = Solicitudes::with('ciudadano')->with('estado')
                            ->select($select)
                            ->join('ciudadanos', 'solicitudes.ciudadano_id', '=', 'ciudadanos.id')
                            ->where('sector_id', $b)
                            ->where('estado_id', $c)
                            ->where('remitido', $d)
                            ->where('ciudadano_id', $e)
                            
                            ->get();

            return $this->validarSolicitud( $Solicitudes );
            
        } elseif ($a != false & $b != "" & $c != "") {#123

            $Solicitudes = Solicitudes::with('ciudadano')->with('estado')
                            ->select($select)
                            ->join('ciudadanos', 'solicitudes.ciudadano_id', '=', 'ciudadanos.id')
                            ->where('sector_id', $b)
                            ->where('estado_id', $c)
                            
                            
                            ->whereBetween('fecha_solicitud',array($request->fecha_solicitud_desde, $request->fecha_solicitud_hasta))
                            ->get();

            return $this->validarSolicitud( $Solicitudes ); 

        } elseif ($a != false & $b != "" &  $d != "" ) {#124

            $Solicitudes = Solicitudes::with('ciudadano')->with('estado')
                            ->select($select)
                            ->join('ciudadanos', 'solicitudes.ciudadano_id', '=', 'ciudadanos.id')
                            ->where('sector_id', $b)
                            
                            ->where('remitido', $d)
                            
                            ->whereBetween('fecha_solicitud',array($request->fecha_solicitud_desde, $request->fecha_solicitud_hasta))
                            ->get();

            return $this->validarSolicitud( $Solicitudes );

        } elseif ($a != false & $b != "" & $e != "") {#125
            
            $Solicitudes = Solicitudes::with('ciudadano')->with('estado')
                            ->select($select)
                            ->join('ciudadanos', 'solicitudes.ciudadano_id', '=', 'ciudadanos.id')
                            ->where('sector_id', $b)
                            
                            
                            ->where('ciudadano_id', $e)
                            ->whereBetween('fecha_solicitud',array($request->fecha_solicitud_desde, $request->fecha_solicitud_hasta))
                            ->get();

            return $this->validarSolicitud( $Solicitudes );

        } elseif ($a != false &  $c != "" & $d != "") {#134
            
            $Solicitudes = Solicitudes::with('ciudadano')->with('estado')
                            ->select($select)
                            ->join('ciudadanos', 'solicitudes.ciudadano_id', '=', 'ciudadanos.id')
                            
                            ->where('estado_id', $c)
                            ->where('remitido', $d)
                            
                            ->whereBetween('fecha_solicitud',array($request->fecha_solicitud_desde, $request->fecha_solicitud_hasta))
                            ->get();

            return $this->validarSolicitud( $Solicitudes );

        } elseif ($a != false & $c != "" & $e != "") {#135
            
            $Solicitudes = Solicitudes::with('ciudadano')->with('estado')
                            ->select($select)
                            ->join('ciudadanos', 'solicitudes.ciudadano_id', '=', 'ciudadanos.id')
                            
                            ->where('estado_id', $c)
                            
                            ->where('ciudadano_id', $e)
                            ->whereBetween('fecha_solicitud',array($request->fecha_solicitud_desde, $request->fecha_solicitud_hasta))
                            ->get();

            return $this->validarSolicitud( $Solicitudes );

        } elseif ($a != false & $d != "" & $e != "") {#145
            
            $Solicitudes = Solicitudes::with('ciudadano')->with('estado')
                            ->select($select)
                            ->join('ciudadanos', 'solicitudes.ciudadano_id', '=', 'ciudadanos.id')
                            
                            
                            ->where('remitido', $d)
                            ->where('ciudadano_id', $e)
                            ->whereBetween('fecha_solicitud',array($request->fecha_solicitud_desde, $request->fecha_solicitud_hasta))
                            ->get();

            return $this->validarSolicitud( $Solicitudes );

        } elseif ($a != false & $b != "") {#12

            $Solicitudes = Solicitudes::with('ciudadano')->with('estado')
                            ->select($select)
                            ->join('ciudadanos', 'solicitudes.ciudadano_id', '=', 'ciudadanos.id')
                            ->where('sector_id', $b)
                            ->whereBetween('fecha_solicitud',array($request->fecha_solicitud_desde, $request->fecha_solicitud_hasta))
                            ->get();

            return $this->validarSolicitud( $Solicitudes );

        } elseif ($a != false & $c != "") {#13

            $Solicitudes = Solicitudes::with('ciudadano')->with('estado')
                            ->select($select)
                            ->join('ciudadanos', 'solicitudes.ciudadano_id', '=', 'ciudadanos.id')
                            
                            ->where('estado_id', $c)
                            
                            
                            ->whereBetween('fecha_solicitud',array($request->fecha_solicitud_desde, $request->fecha_solicitud_hasta))
                            ->get();

            return $this->validarSolicitud( $Solicitudes );

        } elseif ($a != false & $d != "") {#14

            $Solicitudes = Solicitudes::with('ciudadano')->with('estado')
                            ->select($select)
                            ->join('ciudadanos', 'solicitudes.ciudadano_id', '=', 'ciudadanos.id')
                            
                            
                            ->where('remitido', $d)
                            
                            ->whereBetween('fecha_solicitud',array($request->fecha_solicitud_desde, $request->fecha_solicitud_hasta))
                            ->get();

            return $this->validarSolicitud( $Solicitudes );

        } elseif ($a != false & $e != "") {#15

            $Solicitudes = Solicitudes::with('ciudadano')->with('estado')
                            ->select($select)
                            ->join('ciudadanos', 'solicitudes.ciudadano_id', '=', 'ciudadanos.id')
                            
                            
                            
                            ->where('ciudadano_id', $e)
                            ->whereBetween('fecha_solicitud',array($request->fecha_solicitud_desde, $request->fecha_solicitud_hasta))
                            ->get();

            return $this->validarSolicitud( $Solicitudes );

        } elseif ($b != "" & $c != "") {#23
            
            $Solicitudes = Solicitudes::with('ciudadano')->with('estado')
                            ->select($select)
                            ->join('ciudadanos', 'solicitudes.ciudadano_id', '=', 'ciudadanos.id')
                            ->where('sector_id', $b)
                            ->where('estado_id', $c)
                            
                            
                            
                            ->get();

            return $this->validarSolicitud( $Solicitudes );

        } elseif ($b != "" & $d != "") {#24

            $Solicitudes = Solicitudes::with('ciudadano')->with('estado')
                            ->select($select)
                            ->join('ciudadanos', 'solicitudes.ciudadano_id', '=', 'ciudadanos.id')
                            ->where('sector_id', $b)
                            
                            ->where('remitido', $d)
                            
                            
                            ->get();

            return $this->validarSolicitud( $Solicitudes );
            
        } elseif ($b != "" & $e != "" ) {#25

            $Solicitudes = Solicitudes::with('ciudadano')->with('estado')
                            ->select($select)
                            ->join('ciudadanos', 'solicitudes.ciudadano_id', '=', 'ciudadanos.id')
                            ->where('sector_id', $b)
                            
                            
                            ->where('ciudadano_id', $e)
                            
                            ->get();

            return $this->validarSolicitud( $Solicitudes );
            
        } elseif ($c != "" & $d != "") {#34

            $Solicitudes = Solicitudes::with('ciudadano')->with('estado')
                            ->select($select)
                            ->join('ciudadanos', 'solicitudes.ciudadano_id', '=', 'ciudadanos.id')
                            
                            ->where('estado_id', $c)
                            ->where('remitido', $d)
                            
                            
                            ->get();

            return $this->validarSolicitud( $Solicitudes );

        } elseif ($c != "" & $e != "") {#35
            
            $Solicitudes = Solicitudes::with('ciudadano')->with('estado')
                            ->select($select)
                            ->join('ciudadanos', 'solicitudes.ciudadano_id', '=', 'ciudadanos.id')
                            
                            ->where('estado_id', $c)
                            
                            ->where('ciudadano_id', $e)
                            
                            ->get();

            return $this->validarSolicitud( $Solicitudes );

        } elseif ($d != "" & $e != "") {#45

            $Solicitudes = Solicitudes::with('ciudadano')->with('estado')
                            ->select($select)
                            ->join('ciudadanos', 'solicitudes.ciudadano_id', '=', 'ciudadanos.id')
                            
                            
                            
                            ->where('ciudadano_id', $e)
                            ->whereBetween('fecha_solicitud',array($request->fecha_solicitud_desde, $request->fecha_solicitud_hasta))
                            ->get();

            return $this->validarSolicitud( $Solicitudes );

        } elseif ($a != false) {

            $Solicitudes = Solicitudes::with('ciudadano')->with('estado')
                            ->select($select)
                            ->join('ciudadanos', 'solicitudes.ciudadano_id', '=', 'ciudadanos.id')
                            ->whereBetween('fecha_solicitud',array($request->fecha_solicitud_desde, $request->fecha_solicitud_hasta))
                            ->get();

            return $this->validarSolicitud( $Solicitudes );
            
        } elseif ($b != "") {
            
            $Solicitudes = Solicitudes::with('ciudadano')->with('estado')
                            ->select($select)
                            ->join('ciudadanos', 'solicitudes.ciudadano_id', '=', 'ciudadanos.id')
                            ->where('sector_id', $b)
                            ->get();

            return $this->validarSolicitud( $Solicitudes );

        } elseif ($c != "") {
            
            $Solicitudes = Solicitudes::with('ciudadano')->with('estado')
                            ->select($select)
                            ->join('ciudadanos', 'solicitudes.ciudadano_id', '=', 'ciudadanos.id')
                            ->where('estado_id', $c)
                            ->get();

            return $this->validarSolicitud( $Solicitudes );

        } elseif ($d != "") {
            
            $Solicitudes = Solicitudes::with('ciudadano')->with('estado')
                            ->select($select)
                            ->join('ciudadanos', 'solicitudes.ciudadano_id', '=', 'ciudadanos.id')
                            ->where('remitido', $d)
                            ->get();

            return $this->validarSolicitud( $Solicitudes );

        } elseif ($e != "") {
            
            $Solicitudes = Solicitudes::with('ciudadano')->with('estado')
                            ->select($select)
                            ->join('ciudadanos', 'solicitudes.ciudadano_id', '=', 'ciudadanos.id')
                            ->where('ciudadano_id', $e)
                            ->get();

            return $this->validarSolicitud( $Solicitudes );

        }


       /*if($request->fecha_solicitud_desde != "" & $request->fecha_solicitud_hasta != ""  & $request->ciudadano_id != "" ){

            $Solicitudes = Solicitudes::with('ciudadano')->with('estado')
                            ->where('ciudadano_id', $request->ciudadano_id)
                            ->whereBetween('fecha_solicitud',array($request->fecha_solicitud_desde, $request->fecha_solicitud_hasta))
                            ->get();

            return $this->validarSolicitud( $Solicitudes );
            

        }elseif($request->fecha_solicitud_desde != "" & $request->fecha_solicitud_hasta != "" ){

            $Solicitudes = Solicitudes::with('ciudadano')->with('estado')
                            ->whereBetween('fecha_solicitud',array($request->fecha_solicitud_desde, $request->fecha_solicitud_hasta))
                            ->get();
            
            return $this->validarSolicitud( $Solicitudes );

        }elseif($request->ciudadano_id){

            $Solicitudes = Solicitudes::with('ciudadano')->with('estado')
                            ->where('ciudadano_id', $request->ciudadano_id)
                            ->get();
            
            return $this->validarSolicitud( $Solicitudes );
        }*/
    }

    public function storeAnterior(Request $request)
    {
        $a = ($request->fecha_solicitud_desde != "" & $request->fecha_solicitud_hasta != "") ? true : false ;
        $b = ($request->empresa_id != "")     ? $request->empresa_id : '' ;

        $hoy = ($request->fecha_solicitud_desde == $request->fecha_solicitud_hasta) ? true : false ;

        $select = ['empresas.*', 'contactos.id as idContacto', 'contactos.contacto', 'contactos.identificacion_persona','contactos.tipo_de_identificacion_persona', 'contactos.cargo','contactos.celular','contactos.telefono','contactos.email','contactos.visitante'];

        if ($a != false & $b != "") {

            if ($hoy) {
                $empresas = Empresa::
                    select($select)
                    ->join('empresas_contactos', 'empresas.id', '=', 'empresas_contactos.empresa_id')
                    ->join('contactos', 'empresas_contactos.contacto_id', '=', 'contactos.id')
                    ->where('empresas.nombre',$b)
                    ->where('empresas.updated_at',$request->fecha_solicitud_desde)
                    ->get();
            }else{
                $empresas = Empresa::
                    select($select)
                    ->join('empresas_contactos', 'empresas.id', '=', 'empresas_contactos.empresa_id')
                    ->join('contactos', 'empresas_contactos.contacto_id', '=', 'contactos.id')
                    ->where('empresas.nombre',$b)
                    ->whereBetween('empresas.updated_at',array($request->fecha_solicitud_desde, $request->fecha_solicitud_hasta))
                    ->get();
            }

            

        }elseif($a != false){

            if ($hoy) {
                $empresas = Empresa::
                select($select)
                ->join('empresas_contactos', 'empresas.id', '=', 'empresas_contactos.empresa_id')
                ->join('contactos', 'empresas_contactos.contacto_id', '=', 'contactos.id')
                ->where('empresas.updated_at',$request->fecha_solicitud_desde)
                ->get();
            }else{
                $empresas = Empresa::
                    select($select)
                    ->join('empresas_contactos', 'empresas.id', '=', 'empresas_contactos.empresa_id')
                    ->join('contactos', 'empresas_contactos.contacto_id', '=', 'contactos.id')
                    ->whereBetween('empresas.updated_at',array($request->fecha_solicitud_desde, $request->fecha_solicitud_hasta))
                    ->get();
            }
            

        }elseif($b != ""){

            $empresas = Empresa::
                select($select)
                ->join('empresas_contactos', 'empresas.id', '=', 'empresas_contactos.empresa_id')
                ->join('contactos', 'empresas_contactos.contacto_id', '=', 'contactos.id')
                ->where('empresas.nombre',$b)
                ->get();

        }   

        return response()->json([
                'success' => true,
                'empresas' => $empresas
            ]);

    }

    public function store(Request $request)
    {
        $a = ($request->fecha_solicitud_desde != "" & $request->fecha_solicitud_hasta != "") ? true : false ;
        $b = ($request->empresa_id != "")     ? $request->empresa_id : '' ;

        $select = ['empresas.*', 'contactos.id as idContacto', 'contactos.contacto', 'contactos.identificacion_persona','contactos.tipo_de_identificacion_persona', 'contactos.cargo','contactos.celular','contactos.telefono','contactos.email','contactos.visitante'];

        if ($a != false & $b != "") {

            $empresas = Empresa::select($select)
                    ->join('empresas_contactos', 'empresas.id', '=', 'empresas_contactos.empresa_id')
                    ->join('contactos', 'empresas_contactos.contacto_id', '=', 'contactos.id')
                    ->where('empresas.nombre',$b)
                    ->whereBetween('empresas.created_at',array($request->fecha_solicitud_desde." 00:00:00", $request->fecha_solicitud_hasta." 23:59:59"))
                    ->get();

        }elseif($a != false){

            $empresas = Empresa::select($select)
                    ->join('empresas_contactos', 'empresas.id', '=', 'empresas_contactos.empresa_id')
                    ->join('contactos', 'empresas_contactos.contacto_id', '=', 'contactos.id')
                    ->whereBetween('empresas.created_at',array($request->fecha_solicitud_desde." 00:00:00", $request->fecha_solicitud_hasta." 23:59:59"))
                    ->get();
            

        }elseif($b != ""){

            $empresas = Empresa::
                select($select)
                ->join('empresas_contactos', 'empresas.id', '=', 'empresas_contactos.empresa_id')
                ->join('contactos', 'empresas_contactos.contacto_id', '=', 'contactos.id')
                ->where('empresas.nombre',$b)
                ->get();

        }   

        return response()->json([
                'success' => true,
                'empresas' => $empresas
            ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function validarSolicitud($Solicitudes)
    {
        if( sizeof($Solicitudes) >= 1 ){
            return response()->json([
                'success' => true,
                'solicitudes' => $Solicitudes
            ]);  
        }else{
            return response()->json([
                'success' => false,
            ]);  
        }
    }

    public function imprimirDonacion($id_solicitud)
    {
        $solicitud =  Solicitudes::with('ciudadano')->with('estado')->where('id', $id_solicitud)-> first();

        $sector   = Sectores::where('id', $solicitud->ciudadano->sector_id)->first();
        $estado    = Estado::where('id', $solicitud->estado)->first();
        $remitido  = Remitidos::where('id', $solicitud->remitido)->first();

        $border = 0;

        $Fpdf = new \Codedge\Fpdf\Fpdf\Fpdf();

        $Fpdf->AddPage();
        $Fpdf->SetFont('Arial', '', 12);

        $Fpdf->Cell(64, 5, ''.utf8_decode('Fecha Solicitud: ').''.$solicitud->fecha_solicitud.'', $border,1); 
        $Fpdf->Cell(5, 5, ' ', $border,1); 

        $Fpdf->Cell(64, 5, ''.utf8_decode('Estado: ').''.$solicitud->estado->estado.'', $border,1);
        $Fpdf->Cell(5, 5, ' ', $border,1); 

        $Fpdf->Cell(64, 5, ''.utf8_decode('Remitido: ').''.$remitido->remitido.'', $border,1);
        $Fpdf->Cell(5, 5, ' ', $border,1); 

        $Fpdf->Cell(64, 5, ''.utf8_decode('Remitidoequerimiento: ').''.$solicitud->requerimiento.'', $border,1);
        $Fpdf->Cell(5, 5, ' ', $border,1); 

        $Fpdf->Cell(64, 5, ''.utf8_decode('Ciudadano: ').''.$solicitud->ciudadano->primer_nombre.' '.' '.$solicitud->ciudadano->segundo_nombre.' '.' '.$solicitud->ciudadano->primer_apellido.' '.' '.$solicitud->ciudadano->segundo_apellido.'', $border,1);        
        $Fpdf->Cell(5, 5, ' ', $border,1); 

        $Fpdf->Cell(64, 5, ''.utf8_decode('Identificación: ').''.$solicitud->ciudadano->tipo_identificacion.' '.$solicitud->ciudadano->numero_identificacion.'', $border,1);
        $Fpdf->Cell(5, 5, ' ', $border,1); 

        $Fpdf->Cell(64, 5, ''.utf8_decode('Teléfono: ').''.$solicitud->ciudadano->telefono.'', $border,1);
        $Fpdf->Cell(5, 5, ' ', $border,1); 

        $Fpdf->Cell(64, 5, ''.utf8_decode('Direccion: ').''.$sector->sector.'', $border,1);
        $Fpdf->Cell(5, 5, ' ', $border,1); 
        

        $nombrePDF = 'solicitud '.$solicitud->ciudadano->primer_nombre.' '.$solicitud->ciudadano->primer_apellido.'.pdf';
        #Imprimir PDF
        $Fpdf->Output('I','',TRUE); 
        exit;

        #Guardar sin hacer nada
        #$rutaPDF = storage_path('app/pdf/PDF'.$data['encabezado']->ID.'.pdf');
        #$Fpdf->Output($rutaPDF,'F');
        #Forzar descarga
        #$Fpdf->Output($rutaPDF,'D');
        #return $rutaPDF;
        #Imprimir PDF
        #$Fpdf->Output('I','',TRUE);        
        #exit;
    }

    public function imprimirAllDonacion(Request $request)
    {
        //return response()->json( $request->all() );

        $Fpdf = new \Codedge\Fpdf\Fpdf\Fpdf();

        $Fpdf->AddPage();
        $Fpdf->SetFont('Arial', '', 12);

        $border = 0;

        $impresas = 0;

        foreach ($request->solicitudes as $key => $solicitud) {

            if($impresas == 2){
                $impresas = 0;
                $Fpdf->AddPage();

            }

            $solicitud =  Solicitudes::with('ciudadano')->with('estado')->where('id', $solicitud)-> first();

            $sector   = Sectores::where('id', $solicitud->ciudadano->direccion)->first();
            $estado    = Estado::where('id', $solicitud->estado)->first();
            $remitido  = Remitidos::where('id', $solicitud->remitido)->first();
            
            $Fpdf->Cell(64, 5, ''.utf8_decode('Fecha Solicitud: ').''.$solicitud->fecha_solicitud.'', $border,1); 
            $Fpdf->Cell(5, 5, ' ', $border,1); 

            $Fpdf->Cell(64, 5, ''.utf8_decode('Estado: ').''.$solicitud->estado->estado.'', $border,1);
            $Fpdf->Cell(5, 5, ' ', $border,1); 

            $Fpdf->Cell(64, 5, ''.utf8_decode('Remitido: ').''.$remitido->remitido.'', $border,1);
            $Fpdf->Cell(5, 5, ' ', $border,1); 

            $Fpdf->Cell(64, 5, ''.utf8_decode('Remitidoequerimiento: ').''.$solicitud->requerimiento.'', $border,1);
            $Fpdf->Cell(5, 5, ' ', $border,1); 

            $Fpdf->Cell(64, 5, ''.utf8_decode('Ciudadano: ').''.$solicitud->ciudadano->primer_nombre.' '.' '.$solicitud->ciudadano->segundo_nombre.' '.' '.$solicitud->ciudadano->primer_apellido.' '.' '.$solicitud->ciudadano->segundo_apellido.'', $border,1);        
            $Fpdf->Cell(5, 5, ' ', $border,1); 

            $Fpdf->Cell(64, 5, ''.utf8_decode('Identificación: ').''.$solicitud->ciudadano->tipo_identificacion.' '.$solicitud->ciudadano->numero_identificacion.'', $border,1);
            $Fpdf->Cell(5, 5, ' ', $border,1); 

            $Fpdf->Cell(64, 5, ''.utf8_decode('Teléfono: ').''.$solicitud->ciudadano->telefono.'', $border,1);
            $Fpdf->Cell(5, 5, ' ', $border,1); 

            $Fpdf->Cell(64, 5, ''.utf8_decode('Direccion: ').''.$sector->sector.'', $border,1);
            $Fpdf->Cell(5, 5, ' ', $border,1); 

            $Fpdf->Cell(64, 5, ''.utf8_decode('________________________________________________________________________________').'', $border,1);

            $impresas++;
        }

        
        $nombrePDF = 'solicitudes.pdf';

        $Fpdf->Output($nombrePDF,'D');
        exit;
        


        //
    }


    public function imprimir($id_empresa){
        $empresas = Empresa::
                join('empresas_contactos', 'empresas.id', '=', 'empresas_contactos.empresa_id')
                ->join('contactos', 'empresas_contactos.contacto_id', '=', 'contactos.id')
                ->where('empresas.id',$id_empresa)
                ->first();

        $ramos = EmpresaRamo::join('ramos', 'ramo_id', '=', 'ramos.id')->where('empresa_id', $id_empresa)->get();

        $content  = '<div align= "center"> <strong> Reporte </strong></div><div align= "center"><strong> Del '.$empresas->created_at.' al '.$empresas->updated_at.' </strong></div>';

        $content .= '<table border="1">';


        $content .= '<tr>';
        $content .= '<td aling="center" colspan="17"> <strong> Datos de la Empresa</strong> </td>
                    <td aling="center" colspan="8"> <strong> Datos de Contacto </strong> </td>';
        $content .= '</tr>';

        
        $content .= '<tr>';
        $content .= '<td><strong>Codigo</strong></td>
                    <td><strong>Fecha de Registro</strong></td>
                    <td><strong>Edición de la Feria</strong></td>
                    <td><strong>Sede de la Feria</strong></td>
                    <td><strong>Rif/Cedula</strong></td>
                    <td><strong>Identificacion</strong></td>
                    <td><strong>Nombre de la Empresa</strong></td>
                    <td><strong>Tipo de Empresa</strong></td>
                    <td><strong>Tipo de persona</strong></td>
                    <td><strong>Ramos</strong></td>
                    <td><strong>Ubicación de la Empresa</strong></td>
                    <td><strong>Ciudad</strong></td>
                    <td><strong>Estado</strong></td>
                    <td><strong>Como se enteró</strong></td>
                    <td><strong>Facebook</strong></td>
                    <td><strong>Twitter</strong></td>
                    <td><strong>Instagram</strong></td>

                    <td><strong>Rif/Cedula</strong></td>
                    <td><strong>Identificacion</strong></td>
                    <td><strong>Nombre / Apellido</strong></td>
                    <td><strong>Cargo</strong></td>
                    <td><strong>Número de Celular</strong></td>
                    <td><strong>Número de Oficina</strong></td>
                    <td><strong>Email</strong></td>
                    <td><strong>Número de Visitantes</strong></td>
                    ';
        $content .= '</tr>';

        $ramos_de_empres = '';
        foreach ($ramos as $key => $ramo) {
            $ramos_de_empres .= $ramo->nombre.', ';
        }

        $content .= '</tr>';
        $content .= 
                '<td>'.$empresas->id.'</td>
                <td>'.$empresas->created_at.'</td>
                <td>'.$empresas->edicion_feria.'</td>
                <td>'.$empresas->sede.'</td>
                <td>'.$empresas->tipo_de_identificacion.'</td>
                <td>'.$empresas->identificacion.'</td>
                <td>'.$empresas->nombre.'</td>
                <td>'.$empresas->tipo_empresa.'</td>
                <td>'.$empresas->tipo_persona.'</td>
                <td>'. $ramos_de_empres. '</td>
                <td>'.$empresas->ubicacion.'</td>
                <td>'.$empresas->ciudad.'</td>
                <td>'.$empresas->estado.'</td>
                <td>'.$empresas->observacion.'</td>
                <td>'.$empresas->facebook.'</td>
                <td>'.$empresas->twitter.'</td>
                <td>'.$empresas->instagram.'</td>';

        $content .= 
            '<td>'.$empresas->tipo_de_identificacion_persona.'</td>
            <td>'.$empresas->identificacion_persona.'</td>
            <td>'.$empresas->contacto.'</td>
            <td>'.$empresas->cargo.'</td>
            <td>'.$empresas->celular.'</td>
            <td>'.$empresas->telefono.'</td>
            <td>'.$empresas->email.'</td>
            <td>'.$empresas->visitante.'</td>';


        $content .= '</tr>';        

        $content .= '</table>';

        echo pack("CCC", 0xef, 0xbb, 0xbf);
        @header('Content-Type: application/vnd.ms-excel; charset=UTF-8');
        @header('Content-Length: ' . strlen($content));
        @header('Content-disposition: inline; filename="' . $title . ' ' . date("d/m/Y") . '.xls"');

        echo $content;
        exit;
    }

    public function imprimirAll(Request $request){
            
        $content  = '<div align= "center"> <strong> Reporte General </strong></div>';
        $content .= '<table border="1">';

        $content .= '<tr>';
        $content .= '<td aling="center" colspan="17"> <strong> Datos de la Empresa</strong> </td>
                    <td aling="center" colspan="8"> <strong> Datos de Contacto </strong> </td>';
        $content .= '</tr>';

        
        $content .= '<tr>';
        $content .= '<td><strong>#</strong></td>
                    
                    <td><strong>Fecha de Registro</strong></td>
                    <td><strong>Edición de la Feria</strong></td>
                    <td><strong>Sede de la Feria</strong></td>
                    <td><strong>Rif/Cedula</strong></td>
                    <td><strong>Identificacion</strong></td>
                    <td><strong>Nombre de la Empresa</strong></td>
                    <td><strong>Tipo de Empresa</strong></td>
                    <td><strong>Tipo de persona</strong></td>
                    <td><strong>Ramos</strong></td>
                    <td><strong>Ubicación de la Empresa</strong></td>
                    <td><strong>Ciudad</strong></td>
                    <td><strong>Estado</strong></td>
                    <td><strong>Como se enteró</strong></td>
                    <td><strong>Facebook</strong></td>
                    <td><strong>Twitter</strong></td>
                    <td><strong>Instagram</strong></td>

                    <td><strong>Rif/Cedula</strong></td>
                    <td><strong>Identificacion</strong></td>
                    <td><strong>Nombre / Apellido</strong></td>
                    <td><strong>Cargo</strong></td>
                    <td><strong>Número de Celular</strong></td>
                    <td><strong>Número de Oficina</strong></td>
                    <td><strong>Email</strong></td>
                    <td><strong>Número de Visitantes</strong></td>
                    ';
        $content .= '</tr>';
        
        $count = 1;

        foreach ($request->empresas as $id_empresa) {
            
            $empresas = Empresa::
                join('empresas_contactos', 'empresas.id', '=', 'empresas_contactos.empresa_id')
                ->join('contactos', 'empresas_contactos.contacto_id', '=', 'contactos.id')
                ->where('empresas.id',$id_empresa)
                ->first(); 

            $ramos = EmpresaRamo::join('ramos', 'ramo_id', '=', 'ramos.id')->where('empresa_id', $id_empresa)->get();


            $ramos_de_empres = '';
            foreach ($ramos as $key => $ramo) {
                $ramos_de_empres .= $ramo->nombre.', ';
            }

            $content .= '</tr>';
            $content .= 
                    '<td>'.$count.'</td>
                    
                    <td>'.$empresas->created_at.'</td>
                    <td>'.$empresas->edicion_feria.'</td>
                    <td>'.$empresas->sede.'</td>
                    <td>'.$empresas->tipo_de_identificacion.'</td>
                    <td>'.$empresas->identificacion.'</td>
                    <td>'.$empresas->nombre.'</td>
                    <td>'.$empresas->tipo_empresa.'</td>
                    <td>'.$empresas->tipo_persona.'</td>
                    <td>'.$ramos_de_empres.'</td>
                    <td>'.$empresas->ubicacion.'</td>
                    <td>'.$empresas->ciudad.'</td>
                    <td>'.$empresas->estado.'</td>
                    <td>'.$empresas->observacion.'</td>
                    <td>'.$empresas->facebook.'</td>
                    <td>'.$empresas->twitter.'</td>
                    <td>'.$empresas->instagram.'</td>';

            $content .= 
                '<td>'.$empresas->tipo_de_identificacion_persona.'</td>
                <td>'.$empresas->identificacion_persona.'</td>
                <td>'.$empresas->contacto.'</td>
                <td>'.$empresas->cargo.'</td>
                <td>'.$empresas->celular.'</td>
                <td>'.$empresas->telefono.'</td>
                <td>'.$empresas->email.'</td>
                <td>'.$empresas->visitante.'</td>';


            $content .= '</tr>';      
            $count++;
        }

        $content .= '</table>';

        echo pack("CCC", 0xef, 0xbb, 0xbf);
        @header('Content-Type: application/vnd.ms-excel; charset=UTF-8');
        @header('Content-Length: ' . strlen($content));
        @header('Content-disposition: inline; filename="' . $title . ' ' . date("d/m/Y") . '.xls"');

        echo $content;
        exit;

         
    }

    public function imprimirTodos(Request $request)
    {

        return response()->json($request->all());

        $a = ($request->fecha_solicitud_desde_form != "" & $request->fecha_solicitud_hasta_form != "") ? true : false ;
        $b = ($request->empresa_id_form != "")     ? $request->empresa_id_form : '' ;

        $hoy = ($request->fecha_solicitud_desde_form == $request->fecha_solicitud_hasta_form) ? true : false ;

        $select = ['empresas.*', 'contactos.id as idContacto', 'contactos.contacto', 'contactos.identificacion_persona','contactos.tipo_de_identificacion_persona', 'contactos.cargo','contactos.celular','contactos.telefono','contactos.email','contactos.visitante'];

        if ($a != false & $b != "") {

            if ($hoy) {
                $empresas = Empresa::
                    select($select)
                    ->join('empresas_contactos', 'empresas.id', '=', 'empresas_contactos.empresa_id')
                    ->join('contactos', 'empresas_contactos.contacto_id', '=', 'contactos.id')
                    ->where('empresas.nombre',$b)
                    ->where('empresas.updated_at',$request->fecha_solicitud_desde_form)
                    ->get();
            }else{
                $empresas = Empresa::
                    select($select)
                    ->join('empresas_contactos', 'empresas.id', '=', 'empresas_contactos.empresa_id')
                    ->join('contactos', 'empresas_contactos.contacto_id', '=', 'contactos.id')
                    ->where('empresas.nombre',$b)
                    ->whereBetween('empresas.updated_at',array($request->fecha_solicitud_desde_form, $request->fecha_solicitud_hasta_form))
                    ->get();
            }

            

        }elseif($a != false){

            if ($hoy) {
                $empresas = Empresa::
                select($select)
                ->join('empresas_contactos', 'empresas.id', '=', 'empresas_contactos.empresa_id')
                ->join('contactos', 'empresas_contactos.contacto_id', '=', 'contactos.id')
                ->where('empresas.updated_at',$request->fecha_solicitud_desde_form)
                ->get();
            }else{
                $empresas = Empresa::
                    select($select)
                    ->join('empresas_contactos', 'empresas.id', '=', 'empresas_contactos.empresa_id')
                    ->join('contactos', 'empresas_contactos.contacto_id', '=', 'contactos.id')
                    ->whereBetween('empresas.updated_at',array($request->fecha_solicitud_desde_form, $request->fecha_solicitud_hasta_form))
                    ->get();
            }
            

        }elseif($b != ""){

            $empresas = Empresa::
                select($select)
                ->join('empresas_contactos', 'empresas.id', '=', 'empresas_contactos.empresa_id')
                ->join('contactos', 'empresas_contactos.contacto_id', '=', 'contactos.id')
                ->where('empresas.nombre',$b)
                ->get();

        } else{
            $empresas = '';
        }

        /*return response()->json([
            'success' => true,
            'empresas' => $empresas
        ]); */

        $content  = '<div align= "center"> <strong> Reporte General </strong></div>';
        $content .= '<table border="1">';

        $content .= '<tr>';
        $content .= '<td aling="center" colspan="17"> <strong> Datos de la Empresa</strong> </td>
                    <td aling="center" colspan="8"> <strong> Datos de Contacto </strong> </td>';
        $content .= '</tr>';

        
        $content .= '<tr>';
        $content .= '<td><strong>#</strong></td>
                    
                    <td><strong>Fecha de Registro</strong></td>
                    <td><strong>Edición de la Feria</strong></td>
                    <td><strong>Sede de la Feria</strong></td>
                    <td><strong>Rif/Cedula</strong></td>
                    <td><strong>Identificacion</strong></td>
                    <td><strong>Nombre de la Empresa</strong></td>
                    <td><strong>Tipo de Empresa</strong></td>
                    <td><strong>Tipo de persona</strong></td>
                    <td><strong>Ramos</strong></td>
                    <td><strong>Ubicación de la Empresa</strong></td>
                    <td><strong>Ciudad</strong></td>
                    <td><strong>Estado</strong></td>
                    <td><strong>Como se enteró</strong></td>
                    <td><strong>Facebook</strong></td>
                    <td><strong>Twitter</strong></td>
                    <td><strong>Instagram</strong></td>

                    <td><strong>Rif/Cedula</strong></td>
                    <td><strong>Identificacion</strong></td>
                    <td><strong>Nombre / Apellido</strong></td>
                    <td><strong>Cargo</strong></td>
                    <td><strong>Número de Celular</strong></td>
                    <td><strong>Número de Oficina</strong></td>
                    <td><strong>Email</strong></td>
                    <td><strong>Número de Visitantes</strong></td>
                    ';
        $content .= '</tr>';
        
        $count = 1;

        foreach ($empresas as $id_empresa) {
            
            $empresas = Empresa::
                join('empresas_contactos', 'empresas.id', '=', 'empresas_contactos.empresa_id')
                ->join('contactos', 'empresas_contactos.contacto_id', '=', 'contactos.id')
                ->where('empresas.id',$id_empresa->id)
                ->first(); 

            $ramos = EmpresaRamo::join('ramos', 'ramo_id', '=', 'ramos.id')->where('empresa_id', $id_empresa->id)->get();


            $ramos_de_empres = '';
            foreach ($ramos as $key => $ramo) {
                $ramos_de_empres .= $ramo->nombre.', ';
            }

            $content .= '</tr>';
            $content .= 
                    '<td>'.$count.'</td>
                    
                    <td>'.$empresas->created_at.'</td>
                    <td>'.$empresas->edicion_feria.'</td>
                    <td>'.$empresas->sede.'</td>
                    <td>'.$empresas->tipo_de_identificacion.'</td>
                    <td>'.$empresas->identificacion.'</td>
                    <td>'.$empresas->nombre.'</td>
                    <td>'.$empresas->tipo_empresa.'</td>
                    <td>'.$empresas->tipo_persona.'</td>
                    <td>'.$ramos_de_empres.'</td>
                    <td>'.$empresas->ubicacion.'</td>
                    <td>'.$empresas->ciudad.'</td>
                    <td>'.$empresas->estado.'</td>
                    <td>'.$empresas->observacion.'</td>
                    <td>'.$empresas->facebook.'</td>
                    <td>'.$empresas->twitter.'</td>
                    <td>'.$empresas->instagram.'</td>';

            $content .= 
                '<td>'.$empresas->tipo_de_identificacion_persona.'</td>
                <td>'.$empresas->identificacion_persona.'</td>
                <td>'.$empresas->contacto.'</td>
                <td>'.$empresas->cargo.'</td>
                <td>'.$empresas->celular.'</td>
                <td>'.$empresas->telefono.'</td>
                <td>'.$empresas->email.'</td>
                <td>'.$empresas->visitante.'</td>';


            $content .= '</tr>';      
            $count++;
        }

        $content .= '</table>';

        echo pack("CCC", 0xef, 0xbb, 0xbf);
        @header('Content-Type: application/vnd.ms-excel; charset=UTF-8');
        @header('Content-Length: ' . strlen($content));
        @header('Content-disposition: inline; filename="' . $title . ' ' . date("d/m/Y") . '.xls"');

        echo $content;
        exit;


    }


}
