<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repartidor;

class ControllerRepartidores extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $repartidores=Repartidor::paginate(15);
        return view('supervisor.repartidores',['repartidores'=>$repartidores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supervisor.addrepartidor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $repartidor=new Repartidor();
        $repartidor->idrepartidor=GetUuid();
        $repartidor->nombres=$request->nombres;
        $repartidor->apellidomaterno=$request->apellidomaterno;
        $repartidor->apellidopaterno=$request->apellidopaterno;
        $repartidor->telefono=$request->telefono;
        $repartidor->user=$request->user;
        $repartidor->password=$request->password;
        //$foto = $request->foto;
        //$foto->move(GetPathFotos(), $repartidor->repartidor.".jpg");
        $repartidor->save();
        return redirect('repartidores');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idrepartidor)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idrepartidor)
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
    public function update(Request $request, $idrepartidor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idrepartidor)
    {
        $repartidor=Repartidor::find($idrepartidor);
        $nombre=$repartidor->nombres." ".$repartidor->apellidopaterno." ".$repartidor->apellidomaterno;
    	$repartidor->delete();
    	return redirect('repartidores')->with('danger',$nombre.': fue borrado.');
    }
}
