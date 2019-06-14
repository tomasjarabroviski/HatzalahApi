<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Misusuarios;
use App\Direcciones;
class misusuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $usuario=DB::table('misusuarios')
        ->where('misusuarios.idUsuario',$request->idUsuario)
        ->get();
        $direcciones=DB::table('direcciones')
        ->where('direcciones.idUsuario',$request->idUsuario)
        ->get();
        $usuario['Direcciones']=$direcciones;
        return $usuario;
      
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
        $usuario = new Misusuarios();
        $usuario->dniusuaio = $request->input('dniusuaio');
        $usuario->nombreUsuario = $request->input('nombreUsuario');
        $usuario->apellidoUsuario = $request->input('apellidoUsuario');
        $usuario->telefonoUsuario = $request->input('telefonoUsuario');
        $usuario->mailUsuario = $request->input('mailUsuario');
        $usuario->contrasenaUsuario = $request->input('contrasenaUsuario');
        $usuario->tipoDeSangre = $request->input('tipoDeSangre');
        $usuario->alergias = $request->input('alergias');
        $usuario->med = $request->input('med');
        $usuario->alta = $request->input('alta');
        $usuario->fotoUsuario = $request->input('fotoUsuario');
        $usuario->fechaNacimientoUsuario = $request->input('fechaNacimientoUsuario');
        $usuario->save();
        return  $usuario;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        return Misusuarios::with('direcciones') -> find()
       
        ->join('direcciones', 'misusuarios.idUsuario', '=', 'direcciones.idUsuario')
        ->where('misusuarios.idUsuario', '=', $id)
        ->get( array('direcciones.direccion', 'direcciones.entre1', 'direcciones.entre2', 'misusuarios.nombreUsuario'));
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
        $usuario = Misusuarios::find($id);
        $usuario->dniusuaio = $request->input('dniusuaio');
        $usuario->nombreUsuario = $request->input('nombreUsuario');
        $usuario->apellidoUsuario = $request->input('apellidoUsuario');
        $usuario->telefonoUsuario = $request->input('telefonoUsuario');
        $usuario->mailUsuario = $request->input('mailUsuario');
        $usuario->contrasenaUsuario = $request->input('contrasenaUsuario');
        $usuario->tipoDeSangre = $request->input('tipoDeSangre');
        $usuario->alergias = $request->input('alergias');
        $usuario->med = $request->input('med');
        $usuario->alta = $request->input('alta');
        $usuario->fotoUsuario = $request->input('fotoUsuario');
        $usuario->fechaNacimientoUsuario = $request->input('fechaNacimientoUsuario');
        $usuario->save();
        return $usuario;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = Misusuarios::find($id);
        $usuario->delete();
    }
}
