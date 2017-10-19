<?php

namespace Consultas\Http\Controllers;

use Illuminate\Http\Request;
use Consultas\Http\Requests\AplicativoCreateRequest;
use Consultas\Aplicativos as Aplicativos;
use Consultas\Equipos as Equipos;

class AplicativosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin', ['only' => 'create', 'edit', 'destroy']);
    }
    
    public function index()
    {
    	$aplicativos = Aplicativos::all();
    	return view('aplicativos.aplicativos_desarrollo')->with('aplicativos', $aplicativos);
    }

    public function create()
    {
        $equipos = Equipos::where('tipoequipo_id', '=', 2)->get();
    	return view('aplicativos.aplicativos_registro')->with('equipos', $equipos);
    }

    public function store(AplicativoCreateRequest $request)
    {
    	$aplicativos = new Aplicativos;
    	$aplicativos->nombre_aplicativo = $request->nombre_aplicativo;
    	$aplicativos->ubicacion_servidor = $request->ubicacion_servidor;
    	$aplicativos->link_aplicativo = $request->link_aplicativo;
    	$aplicativos->save();
    	return redirect('/aplicativos')->with('message', 'store');
    }

    public function edit($id)
    {
        $aplicativos = Aplicativos::find($id);
        return view('aplicativos.aplicativos_editar', compact('aplicativos'));
    }

    public function update(Request $request)
    {
        $aplicativos = Aplicativos::find($request->id);
        $aplicativos->nombre_aplicativo = $request->nombre_aplicativo;
        $aplicativos->ubicacion_servidor = $request->ubicacion_servidor;
        $aplicativos->link_aplicativo = $request->link_aplicativo;
        $aplicativos->save();
        return redirect('/aplicativos')->with('message', 'edit');
    }

    public function search(Request $request)
    {
        $aplicativos = Aplicativos::where('nombre_aplicativo', 'like', '%'.$request-> nombre_aplicativo.'%')->get();
        return \View::make('aplicativos.aplicativos_desarrollo', compact('aplicativos'));
    }

    public function destroy($id)
    {
        $aplicativos = Aplicativos::find($id);
        $aplicativos->delete();
        return redirect('/aplicativos')->with('message', 'destroy');
    }
}
