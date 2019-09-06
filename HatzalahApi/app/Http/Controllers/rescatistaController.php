<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rescatistas;

class rescatistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
           return Rescatistas::all();
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
        $rescatista = new Rescatistas();
        $rescatista->dniRescatista = $request->input('dniRescatista');
        $rescatista->nombreRescatista = $request->input('nombreRescatista');
        $rescatista->apellidoRescatista = $request->input('apellidoRescatista');
        $rescatista->telefonoRescatista = $request->input('telefonoRescatista');
        $rescatista->direccionRescatista = $request->input('direccionRescatista');
        $rescatista->contrasenaRescatista = $request->input('contrasenaRescatista');
        $rescatista->ultCapTem = $request->input('ultCapTem');
        $rescatista->ultCapTora = $request->input('ultCapTora'); 
        $rescatista->ultCapCruzRoja = $request->input('ultCapCruzRoja');
        $rescatista->online = $request->input('online');
        $rescatista->ubicacionLat = $request->input('ubicacionLat');
        $rescatista->ubicacionLon = $request->input('ubicacionLon');
        $rescatista->proximaCap = $request->input('proximaCap');
        $rescatista->fotoRescatista = $request->input('fotoRescatista');
        $rescatista->mailRescatista = $request->input('mailRescatista');
        $rescatista->fechaNacimientoRescatista = $request->input('fechaNacimientoRescatista');

        $rescatista->save();
        return $rescatista;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Rescatistas::find($id);
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
        $rescatista = Rescatistas::find($id);
        $rescatista->dniRescatista = $request->input('dniRescatista');
        $rescatista->nombreRescatista = $request->input('nombreRescatista');
        $rescatista->apellidoRescatista = $request->input('apellidoRescatista');
        $rescatista->telefonoRescatista = $request->input('telefonoRescatista');
        $rescatista->direccionRescatista = $request->input('direccionRescatista');
        $rescatista->contrasenaRescatista = $request->input('contrasenaRescatista');
        $rescatista->ultCapTem = $request->input('ultCapTem');
        $rescatista->ultCapTora = $request->input('ultCapTora'); 
        $rescatista->ultCapCruzRoja = $request->input('ultCapCruzRoja');
        $rescatista->online = $request->input('online');
        $rescatista->ubicacionLat = $request->input('ubicacionLat');
        $rescatista->ubicacionLon = $request->input('ubicacionLon');
        $rescatista->proximaCap = $request->input('proximaCap');
        $rescatista->fotoRescatista = $request->input('fotoRescatista');
        $rescatista->mailRescatista = $request->input('mailRescatista');
        $rescatista->fechaNacimientoRescatista = $request->input('fechaNacimientoRescatista');

        $rescatista->save();
        return $rescatista;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Rescatista = Rescatistas::find($id);
        $Rescatista->delete();
    }
}
