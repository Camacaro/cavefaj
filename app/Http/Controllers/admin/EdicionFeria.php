<?php

namespace App\Http\Controllers\admin;

use App\Edicion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EdicionFeria extends Controller
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
    public function index(Request $request)
    {
        if($request->ajax())
        {
            $edicionferia = Edicion::orderBy('id','desc')->get();

            return response()->json( $edicionferia );            

        }else{
            $edicionActual =  Edicion::orderBy('id','desc')->first();
            return view('admin.edicionFeria.index', compact('edicionActual'));
        }
        
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
    public function store(Request $request)
    {
        $this->validate($request, [
            'feria' => 'required',
            'year' => 'required',
            'sede' => 'required',
        ]);

        try {

            
            $edicion = new Edicion();
            $edicion->fill(
                $request->only(['feria', 'year', 'sede'])
            );
            $edicion->save();

            return response()->json([
                'success' => true,
                'mensaje' => 'Registro creado',
                'data' => $edicion
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
}
