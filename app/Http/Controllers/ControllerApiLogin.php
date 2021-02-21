<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ControllerApiLogin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login($user,$password)
    {
        $repartidor=DB::table('repartidores')->where('user',$user)->where('password',$password)->get();
        return $repartidor;
    }

    public function Register(Request $request)
    {
        //
    }
}
