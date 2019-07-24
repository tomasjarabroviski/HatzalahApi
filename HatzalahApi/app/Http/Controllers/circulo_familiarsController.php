<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CirculoFamiliar;
use App\Misusuarios;

class circulo_familiarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
        if($request->idUsuario){ //acá es donde chequeás si te está mandando un idUsuario para filtrar
            return CirculoFamiliar::where('idUsuario', $request->idUsuario)->get();; 
         } else {
            return CirculoFamiliar::all();

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
        
        $circulo = new CirculoFamiliar();
        $circulo->idUsuario = $request->input('idUsuario');
        $circulo->idFamiliar = $request->input('idFamiliar');
        $circulo->color = $request->input('color');
        $circulo->save();
        $usuario = new Misusuarios();
        $usuario = Misusuarios::where('idUsuario', $request->idFamiliar)->get();
        return $usuario;
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
        $circulo = CirculoFamiliar::find($id);
         $circulo->delete();
    }
}
