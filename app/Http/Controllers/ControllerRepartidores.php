<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repartidor;
use Auth;
use DB;

class ControllerRepartidores extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    { 
        //$repartidores=Repartidor::paginate(15);
        $repartidores = DB::table('repartidores')->where('idsupervisor', Auth::User()->idsupervisor)->paginate(15);
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
        $repartidor->idsupervisor=Auth::User()->idsupervisor;
        $repartidor->nombres=$request->nombres;
        $repartidor->apellidomaterno=$request->apellidomaterno;
        $repartidor->apellidopaterno=$request->apellidopaterno;
        $repartidor->telefono=$request->telefono;
        $repartidor->user=$request->user;
        $repartidor->password=$request->password;
        //$foto = $request->foto;
        //$foto->move(GetPathFotos(), $repartidor->repartidor.".jpg");
        $repartidor->save();
        return redirect('repartidores')->with('success','¡Datos Guardados!');
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
        $repartidor=Repartidor::find($idrepartidor);
        return view('supervisor.editrepartidor',['repartidor'=>$repartidor]);
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
        $repartidor=Repartidor::find($idrepartidor);
        $repartidor->nombres=$request->nombres;
        $repartidor->apellidomaterno=$request->apellidomaterno;
        $repartidor->apellidopaterno=$request->apellidopaterno;
        $repartidor->telefono=$request->telefono;
        $repartidor->user=$request->user;
        $repartidor->password=$request->password;
        //$foto = $request->foto;
        //$foto->move(GetPathFotos(), $repartidor->repartidor.".jpg");
        $repartidor->save();
        return redirect('repartidores')->with('success','¡Datos Actualizados!');
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
