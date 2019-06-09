<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Direcciones;

class direccionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
     //  return Direcciones::all();

       if($request->idUsuario){ //acá es donde chequeás si te está mandando un idUsuario para filtrar
            return Direcciones::where('idUsuario', $request->idUsuario)->get();; 
         } else {
            return Direcciones::all();

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
       // echo "insert";
        $direccion = new Direcciones();
        $direccion->idUsuario = $request->input('idUsuario');
        $direccion->direccion = $request->input('direccion');
        $direccion->entre1 = $request->input('entre1');
        $direccion->entre2 = $request->input('entre2');
        $direccion->etiqueta = $request->input('etiqueta');
        $direccion->save();
        return $direccion;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Direcciones::find($id);
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
        $direccion = Direcciones::find($id);
        $rescatista->name = $request->input('name');
         $rescatista->surname = $request->input('surname');
         $rescatista->mail = $request->input('mail');
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
         //echo "destroy";
         $rescatista = Rescatistas::find($id);
         $rescatista->delete();
    }
}
