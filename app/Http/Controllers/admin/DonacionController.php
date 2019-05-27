<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Solicitudes;
use App\Ciudadanos;
use App\Sectores;
use App\Estado;
use App\Remitidos;

class DonacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax())
        {
            $solicitudes =  Solicitudes::with('ciudadano')->with('estado')->get();

            return response()->json( $solicitudes );            

        }else{
            return view('admin.donacion.index');
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sectores   = Sectores::all();
        $estados    = Estado::all();
        $remitidos  = Remitidos::all();

        return view('admin.donacion.create', compact('sectores', 'estados', 'remitidos') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        #'requerimiento' => 'required | unique:Solicitudes',
        $this->validate($request, [
            'requerimiento' => 'required',
            'estado_id' => 'required',
            'fecha_solicitud' => 'required',
            'solicitud' => 'required',
            'remitido' => 'required',

            'tipo_identificacion' => 'required',
            'numero_identificacion' => 'required',
            'primer_nombre' => 'required',
            'segundo_nombre' => 'required',
            'primer_apellido' => 'required',
            'segundo_apellido' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
            'sector' => 'required',
        ]);

        try {

           $ciudadano =  Ciudadanos::where('numero_identificacion', $request->numero_identificacion )->first();
           
           $solicitud = new Solicitudes();

           if($ciudadano){

                $solicitud->ciudadano_id = $ciudadano->id;
                $solicitud->requerimiento = $request->requerimiento;
                $solicitud->estado_id = $request->estado_id;
                $solicitud->fecha_solicitud = $request->fecha_solicitud;
                $solicitud->solicitud = $request->solicitud;
                $solicitud->remitido = $request->remitido;
                $solicitud->otro = $request->otro;

                $solicitud->save();

                //flash("La solicitud <b>$request->requerimiento</b> fue creado con éxito")->success();

                return response()->json([
                    'success' => true,
                    'mensaje' => "El usuario <b>$request->requerimiento</b> fue creado con éxito"
                ]);

           }else{

                $ciudadano = new Ciudadanos();

                $ciudadano->tipo_identificacion = $request->tipo_identificacion;
                $ciudadano->numero_identificacion = $request->numero_identificacion;
                $ciudadano->primer_nombre = $request->primer_nombre;
                $ciudadano->segundo_nombre = $request->segundo_nombre;
                $ciudadano->primer_apellido = $request->primer_apellido;
                $ciudadano->segundo_apellido = $request->segundo_apellido;
                $ciudadano->telefono = $request->telefono;
                $ciudadano->direccion = $request->direccion;
                $ciudadano->sector_id = $request->sector;

                $ciudadano->save();                

                $solicitud->ciudadano_id = $ciudadano->id;
                $solicitud->requerimiento = $request->requerimiento;
                $solicitud->estado_id = $request->estado_id;
                $solicitud->fecha_solicitud = $request->fecha_solicitud;
                $solicitud->solicitud = $request->solicitud;
                $solicitud->remitido = $request->remitido;
                $solicitud->otro = $request->otro;

                $solicitud->save();
           }

           return response()->json([
            'success' => true,
            'mensaje' => "El usuario <b></b> fue creado con éxito"
        ]);
            
        } catch (Exception $e) {

            return response()->json([
                    'error' => $e->getMessage()
                ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $solicitud = Solicitudes::findOrFail($id);

        $sectores   = Sectores::all();
        $estados    = Estado::all();
        $remitidos  = Remitidos::all();

        return view('admin.donacion.show', compact('solicitud', 'sectores', 'estados', 'remitidos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $solicitud = Solicitudes::with('ciudadano')->where('id',$id)->first();

        $fecha_solicitud = strtotime ( $solicitud->fecha_solicitud ) ;

        $solicitud->fecha_solicitud = date ( 'Y-m-d' , $fecha_solicitud );

        $sectores   = Sectores::all();
        $estados    = Estado::all();
        $remitidos  = Remitidos::all();


        return view('admin.donacion.edit', compact('solicitud', 'sectores', 'estados', 'remitidos'));
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

        $this->validate($request, [
            'requerimiento' => 'required',
            'estado_id' => 'required',
            'fecha_solicitud' => 'required',
            'solicitud' => 'required',
            'remitido' => 'required',

            'tipo_identificacion' => 'required',
            'numero_identificacion' => 'required',
            'primer_nombre' => 'required',
            'segundo_nombre' => 'required',
            'primer_apellido' => 'required',
            'segundo_apellido' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
            'sector' => 'required'
        ]);


        try {

            $ciudadano =  Ciudadanos::where('numero_identificacion', $request->numero_identificacion )->first();

            if (!$ciudadano) {
                $ciudadano = new Ciudadanos();
            }

            $ciudadano->tipo_identificacion = $request->tipo_identificacion;
            $ciudadano->numero_identificacion = $request->numero_identificacion;
            $ciudadano->primer_nombre = $request->primer_nombre;
            $ciudadano->segundo_nombre = $request->segundo_nombre;
            $ciudadano->primer_apellido = $request->primer_apellido;
            $ciudadano->segundo_apellido = $request->segundo_apellido;
            $ciudadano->telefono = $request->telefono;
            $ciudadano->direccion = $request->direccion;
            $ciudadano->sector_id = $request->sector;

            $ciudadano->save();     

            $solicitud = Solicitudes::findOrFail($id);

            $solicitud->ciudadano_id = $ciudadano->id;
            $solicitud->requerimiento = $request->requerimiento;
            $solicitud->estado_id = $request->estado_id;
            $solicitud->fecha_solicitud = $request->fecha_solicitud;
            $solicitud->solicitud = $request->solicitud;
            $solicitud->remitido = $request->remitido;
            $solicitud->otro = $request->otro;

            $solicitud->save();

            return response()->json([
                'success' => true,
                'mensaje' => "El usuario <b></b> fue creado con éxito"
            ]);
            
        } catch (Exception $e) {

            return response()->json([
                'error' => $e->getMessage()
            ]);
        }
        
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

    public function numeroIdentificacion($numero_identificacion)
    {
        $ciudadano = Ciudadanos::with('sector')->where('numero_identificacion',$numero_identificacion)->first();

        if($ciudadano){
            $solicitud = solicitudes::where('ciudadano_id', $ciudadano->id)->orderBy('solicitud', 'desc')->limit(1)->first();    

            if ($solicitud) {
                $ciudadano->solicitud = $solicitud->solicitud;
            }else{
                $ciudadano->solicitud = 1;            
            }
            
        }        

        

        if($ciudadano){
            
            return response()->json([
                'data' => true,
                'ciudadano' => $ciudadano
            ]);    

        }else{
            return response()->json([
                'data' => false
            ]);    
            
        }
        
    }

    public function remitente(request $request)
    {
        

        $this->validate($request, [
            'remitido_new' => 'required'
        ]);

        try {

            $remitido = new Remitidos();

            $remitido->remitido = $request->remitido_new;

            $remitido->save();

            return response()->json([
                'success' => true,
                'mensaje' => "Remitido <b>$request->remitido_new</b> fue creado con éxito"
            ]);

        } catch (Exception $e) {

            return response()->json([
                'error' => $e->getMessage()
            ]);
        }

    }
}
