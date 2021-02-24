<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Almacenista;
use Auth;
use DB;

class AlmacenistaController extends Controller
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

        $almacenistas = DB::table('almacenistas')->where('idsupervisor', Auth::User()->idsupervisor)->paginate(15);
        return view('supervisor.almacenistas.almacenistas',['almacenistas'=>$almacenistas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supervisor.almacenistas.addalmacenista');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $almacenista=new Almacenista();
        $almacenista->idalmacenista=GetUuid();
        $almacenista->idsupervisor=Auth::User()->idsupervisor;
        $almacenista->nombres=$request->nombres;
        $almacenista->apellidomaterno=$request->apellidomaterno;
        $almacenista->apellidopaterno=$request->apellidopaterno;
        $almacenista->telefono=$request->telefono;
        $almacenista->user=$request->user;
        $almacenista->password=$request->password;
        //$foto = $request->foto;
        //$foto->move(GetPathFotos(), $almacenista->almacenista.".jpg");
        $almacenista->save();
        return redirect('almacenistas')->with('success','¡Datos Guardados!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idalmacenista)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idalmacenista)
    {
        $almacenista=Almacenista::find($idalmacenista);
        return view('supervisor.almacenistas.editalmacenista',['almacenista'=>$almacenista]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idalmacenista)
    {
        $almacenista=Almacenista::find($idalmacenista);
        $almacenista->nombres=$request->nombres;
        $almacenista->apellidomaterno=$request->apellidomaterno;
        $almacenista->apellidopaterno=$request->apellidopaterno;
        $almacenista->telefono=$request->telefono;
        $almacenista->user=$request->user;
        $almacenista->password=$request->password;
        //$foto = $request->foto;
        //$foto->move(GetPathFotos(), $repartidor->repartidor.".jpg");
        $almacenista->save();
        return redirect('almacenistas')->with('success','¡Datos Actualizados!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idalmacenista)
    {
        $almacenista=Almacenista::find($idalmacenista);
        $nombre=$almacenista->nombres." ".$almacenista->apellidopaterno." ".$almacenista->apellidomaterno;
    	$almacenista->delete();
    	return redirect('almacenistas')->with('danger',$nombre.': fue borrado.');
    }
}
