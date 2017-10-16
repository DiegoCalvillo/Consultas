<?php

namespace Consultas\Http\Controllers;

use Illuminate\Http\Request;
use Consultas\Http\Requests\CentrosCreateRequest;
use Consultas\centros as centros;

class CentrosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    
    public function index()
    {
    	$centros = centros::all();
    	return view('centros.centros_desarrollo')->with('centros', $centros);
    }

    public function create()
    {
    	return view('centros.centros_registro');
    }

    public function store(CentrosCreateRequest $request)
    {
    	$centros = new centros;
    	$centros->nombre_centro = $request->nombre_centro;
    	$centros->save();
    	return redirect('/centros')->with('message', 'store');
    }

    public function search(Request $request)
    {
        $centros = centros::where('nombre_centro', 'like', '%'.$request-> nombre_centro.'%')->get();
        return \View::make('centros.centros_desarrollo', compact('centros'));
    }
}
