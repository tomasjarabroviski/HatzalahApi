<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fichasmedicas;

class fichasmedicasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->idUsuario){ //acá es donde chequeás si te está mandando un idUsuario para filtrar
            return Fichasmedicas::where('idUsuario', $request->idUsuario)->get();; 
         } else {
            return Fichasmedicas::all();

          }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ficha = new fichasmedicas();
        $ficha->idUsuario = $request->input('idUsuario');
        $ficha->tipoDeSangre = $request->input('tipoDeSangre');
        $ficha->alergias = $request->input('alergias');
        $ficha->med = $request->input('med');
        $ficha->save();
        return $ficha;
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
        $ficha = fichasmedicas::find($id);
        $ficha->idUsuario = $request->input('idUsuario');
        $ficha->tipoDeSangre = $request->input('tipoDeSangre');
        $ficha->alergias = $request->input('alergias');
        $ficha->med = $request->input('med');
        $ficha->save();
        return $ficha;
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
