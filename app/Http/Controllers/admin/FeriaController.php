<?php

namespace App\Http\Controllers\admin;

use DB;
use App\Ramo;
use App\Ciudad;
use App\Estado;
use App\Edicion;
use App\Empresa;
use App\Contacto;
use App\EmpresaRamo;
use App\EmpresaContacto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FeriaController extends Controller
{
    public function __construct()
    {
        $this->middleware("permission:user");
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax())
        {
            $empresas = Empresa::select('empresas.id', 'empresas.nombre', 'contactos.contacto', 'empresas.created_at')
                ->join('empresas_contactos', 'empresas.id', '=', 'empresas_contactos.empresa_id')
                ->join('contactos', 'empresas_contactos.contacto_id', '=', 'contactos.id')
                ->orderBy('id', 'desc')
                ->get();

            return response()->json( $empresas );            

        }else{
            return view('admin.feria.index');
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ramos  = Ramo::all();
        $edicion = Edicion::orderBy('id','desc')->first();
        $ciudades = Ciudad::all();
        $estados = Estado::all();

        return view('admin.feria.create', compact('ramos', 'edicion', 'ciudades', 'estados') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        /*cargo: null
        celular: null
        ciudad: null
        como_entero: null
        edicion_feria: null
        emial: null
        estado: null
        fecha_registro: null
        identificacion: null
        nombre_contacto: null
        nombre_empresa: null
        numero_visitantes: null
        oficina: null
        ramo_empresa: null
        redes_sociales: null
        sede: null
        tipo_empresa: null
        tipo_identificacion: "Rif"
        tipo_persona: null
        ubicacion_empresa: null*/

        /*$this->validate($request, [
            'oficina' => 'required',
        ]);*/

        $rules = [
            'celular'  => 'required|min:7|max:7',
            'telefono' => 'required|min:11|max:11'
        ];


        $this->validate($request, $rules);

        try {

            DB::beginTransaction();

            if($request->observacion_select != "Otros"){
                $request['observacion'] = $request->observacion_select;
            }

            $empresa = new Empresa();
            $empresa->fill(
                $request->only(['nombre', 'tipo_empresa', 'tipo_persona', 'edicion_feria', 'sede', 'tipo_de_identificacion', 'identificacion', 'ubicacion', 'ciudad', 'estado', 'facebook', 'twitter', 'instagram', 'observacion', 'fecha_registro'])
            );
            $empresa->save();

            for ($i=0; $i <sizeof($request->ramo_empresa) ; $i++) { 
                
                $empresaRamo = new EmpresaRamo();
                $empresaRamo->empresa_id = $empresa->id;
                $empresaRamo->ramo_id = $request->ramo_empresa[$i];
                $empresaRamo->save();
                
            }

            $contacto = new Contacto();
            $contacto->fill(
                $request->only(['contacto', 'cargo', 'celular', 'telefono', 'email', 'visitante', 'identificacion_persona', 'tipo_de_identificacion_persona', 'prefijo'])
            );
            $contacto->save();

            $empresaContacto = new EmpresaContacto();
            $empresaContacto->empresa_id = $empresa->id;
            $empresaContacto->contacto_id = $contacto->id;
            $empresaContacto->save();

            DB::commit();

            return response()->json([
                'success' => true,
                'mensaje' => 'Registro creado'
            ]);

            /*return response()->json([
                'success' => true,
                'mensaje' => $request->all()
            ]);*/
            
        } catch (Exception $e) {

            DB::rollback();
            DB::statemente("ALTER TABLE empresa AUTO_INCREMENT = 1;");

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
        $empresa = Empresa::
                join('empresas_contactos', 'empresas.id', '=', 'empresas_contactos.empresa_id')
                ->join('contactos', 'empresas_contactos.contacto_id', '=', 'contactos.id')
                ->where('empresas.id', $id)
                ->first();

        $ramos =  EmpresaRamo::where('empresa_id', $empresa->id)
            ->join('ramos', 'empresas_ramos.ramo_id', '=', 'ramos.id')
            ->get();  

        $ciudades = Ciudad::all();
        $estados = Estado::all(); 

        return view('admin.feria.show', compact(['empresa', 'ramos', 'ciudades', 'estados']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empresa = Empresa::
                select('empresas.*', 'contactos.id as idContacto', 'contactos.contacto', 'contactos.identificacion_persona','contactos.tipo_de_identificacion_persona', 'contactos.cargo','contactos.celular','contactos.telefono','contactos.email','contactos.visitante', 'contactos.prefijo')
                ->join('empresas_contactos', 'empresas.id', '=', 'empresas_contactos.empresa_id')
                ->join('contactos', 'empresas_contactos.contacto_id', '=', 'contactos.id')
                ->where('empresas.id', $id)
                ->first();

        $fecha = strtotime ( $empresa->updated_at ) ;
        $formatFecha = date ( 'Y-m-d' , $fecha );
        $empresa->fecha = $formatFecha;

        $ramos  = Ramo::all();

        $ramosEmpresa =  EmpresaRamo::where('empresa_id', $empresa->id)
            ->join('ramos', 'empresas_ramos.ramo_id', '=', 'ramos.id')
            ->get();   

        $ciudades = Ciudad::all();
        $estados = Estado::all(); 


        $observaciones = ['Email', 'Invitacio Telefónica', 'Por Cavefaj', 'Redes Sociales', 'Publicidad de Prensa', 'Tarjeta de invitación', 'Carta de expositores', 'whatsapp'];
                                    

        return view('admin.feria.edit', compact(['empresa', 'ramos', 'ramosEmpresa', 'observaciones', 'ciudades', 'estados']));
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
        $rules = [
            'celular'  => 'required|min:7|max:7',
            'telefono' => 'required|min:11|max:11'
        ];

        $this->validate($request, $rules);

        try {

            if($request->observacion_select != "Otros"){
                $request['observacion'] = $request->observacion_select;
            }

            $empresa = Empresa::find($id);
            $empresa->fill(
                $request->only(['nombre', 'tipo_empresa', 'tipo_persona', 'edicion_feria', 'sede', 'tipo_de_identificacion', 'identificacion', 'ubicacion', 'ciudad', 'estado', 'facebook', 'twitter', 'instagram', 'observacion', 'fecha_registro'])
            );
            $empresa->save();

            EmpresaRamo::where('empresa_id',$empresa->id)->delete();

            for ($i=0; $i <sizeof($request->ramo_empresa) ; $i++) { 
                
                $empresaRamo = new EmpresaRamo();
                $empresaRamo->empresa_id = $empresa->id;
                $empresaRamo->ramo_id = $request->ramo_empresa[$i];
                $empresaRamo->save();
                
            }
            
            $contacto = Contacto::find($request->idContacto);
            $contacto->fill(
                $request->only(['contacto', 'cargo', 'celular', 'telefono', 'email', 'visitante', 'identificacion_persona', 'tipo_de_identificacion_persona', 'prefijo'])
            );

            $contacto->save();

            return response()->json([
                'success' => true,
                'mensaje' => 'Registro Actualizado'
            ]);

            /*return response()->json([
                'success' => true,
                'mensaje' => $request->all()
            ]);*/
            
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

    public function searchContacto($identificacion)
    {
        $contacto = Contacto::where('identificacion_persona', $identificacion)->orderBy('id', 'desc')->first();

        if($contacto){
            return response()->json([
                'data' => true,
                'contacto' => $contacto
            ]);
        }else{
            return response()->json([
                'data' => false
            ]);
        }
    }

    public function searchEmpresa($identificacion)
    {
        /*$empresa = Empresa::where('identificacion', $identificacion)
            ->join('empresas_ramos', 'empresas.id', '=', 'empresas_ramos.empresa_id')
            ->join('ramos', 'empresas_ramos.ramo_id', '=', 'ramos.id')
            ->get();*/

        $empresa =  Empresa::where('identificacion', $identificacion)
            ->orderBy('id', 'desc')
            ->first();

        if($empresa){
            $ramos =  EmpresaRamo::where('empresa_id', $empresa->id)->get();  
        }else{
            $ramos = '';
        }

        if($empresa){
            return response()->json([
                'data' => true,
                'empresa' => $empresa,
                'ramos' =>$ramos 
            ]);
        }else{
            return response()->json([
                'data' => false
            ]);
        }

    }

}
