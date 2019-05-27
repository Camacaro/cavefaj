<?php

namespace App\Http\Controllers\admin;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsuarioController extends Controller
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
            $usuarios = User::with('roles')->get();

            return response()->json( $usuarios );            

        }else{
            return view('admin.usuarios.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('admin.usuarios.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Para usar el confirmed en el formulario hay que enviar un campo llamado password_confirmation
        // unique:users ahi va es el nombre de la tabla no del modelo
        $rules = [
            'name'  => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:3|confirmed',
            'rol' => 'required'
        ];

        $this->validate($request, $rules);

        try {

            $user = new User();
            $user->fill(
                $request->only(['name', 'email'])
            );
            $user->password = bcrypt($request->password);
            $user->save();

            if($request->rol){
                $user->roles()->sync([$request->rol]);
            }else{
                $user->roles()->sync([]);
            }

            return response()->json([
                'success' => true,
                'mensaje' => 'Registro creado'
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
        $usuario = User::with('roles')->where('id',$id)->first();
        $roles = Role::all();

        //return response()->json($usuario);
        return view('admin.usuarios.edit', compact('usuario', 'roles'));
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

        $user = User::find($id);
        // Para usar el confirmed en el formulario hay que enviar un campo llamado password_confirmation
        // unique:users ahi va es el nombre de la tabla no del modelo
        $rules = [
            'name'  => 'required',
            'email' => 'unique:users,email,'.$user->id,
            'rol' => 'required'
        ];

        $this->validate($request, $rules);

        try {

            if( $request->has('name') ){
                $user->name = $request->name;
            }

            if( $request->has('email') && $user->email != $request->email ){
                $user->email = $request->email;            
            }

            if( $request->has('password') ){
                $user->password = bcrypt( $request->password );
            }

            if( $request->has('rol') ){
                $user->roles()->sync([$request->rol]);
            }

            if (!$user->isDirty()) {

                return response()->json([
                    'success' => false,
                    'mensaje' => 'Debe actualizar alguno de los campos'
                ]);

            }

            $user->save();

            return response()->json([
                'success' => true,
                'mensaje' => 'Registro Actualizado'
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
}
