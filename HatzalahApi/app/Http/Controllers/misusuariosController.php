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
        if($request->dniUsuario){ 
            $usuario = new Misusuarios();
            $usuario = Misusuarios::where('dniusuario', $request->dniUsuario)->get();
            return $usuario;
         } else {
        $usuario=DB::table('misusuarios')
        ->where('misusuarios.idUsuario',$request->idUsuario)
        ->get();
        if($usuario!="[]")
        {
            $ficha=DB::table('fichasmedicas')
            ->where('fichasmedicas.idUsuario',$request->idUsuario)
            ->get();
            $direcciones=DB::table('direcciones')
            ->where('direcciones.idUsuario',$request->idUsuario)
            ->get();
            $usuario=array_merge(json_decode($usuario, true),json_decode($ficha, true));
            $jsonAMostrar["Usuario"]=$usuario[0];
            if($ficha!="[]"){
                $jsonAMostrar["Ficha"]=$ficha[0];
            }else{
                $jsonAMostrar["Ficha"]='{}';
            }
            if($direcciones!="[]"){
                $jsonAMostrar["Direcciones"]=$direcciones;
            }else{
                $jsonAMostrar["Direcciones"]='{}';
            }
            return $jsonAMostrar;
        }else{
            return '{}';
        }
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
        $usuario = new Misusuarios();
        $usuario->dniusuario = $request->input('dniusuario');
        $usuario->nombreUsuario = $request->input('nombreUsuario');
        $usuario->apellidoUsuario = $request->input('apellidoUsuario');
        $usuario->telefonoUsuario = $request->input('telefonoUsuario');
        $usuario->mailUsuario = $request->input('mailUsuario');
        $usuario->contrasenaUsuario = $request->input('contrasenaUsuario');
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
    public function show($id, Request $request)
    {

        if($request->dniUsuario){ 
            return Misusuarios::where('dniusuario', $request->dniUsuario)->get();; 
         } else {
            return Misusuarios::find($id);

          }

       // return Misusuarios::find($id);
       
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
        $usuario->dniusuario = $request->input('dniusuario');
        $usuario->nombreUsuario = $request->input('nombreUsuario');
        $usuario->apellidoUsuario = $request->input('apellidoUsuario');
        $usuario->telefonoUsuario = $request->input('telefonoUsuario');
        $usuario->mailUsuario = $request->input('mailUsuario');
        $usuario->contrasenaUsuario = $request->input('contrasenaUsuario');
        $usuario->alta = $request->input('alta');
        if($request->input('fotoUsuario')!=""){
            $usuario->fotoUsuario = $request->input('fotoUsuario');
        }
        $usuario->fechaNacimientoUsuario = $request->input('fechaNacimientoUsuario');
        $usuario->save();
        return  $usuario;
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
