<?php

namespace Consultas\Http\Controllers;

use Illuminate\Http\Request;
use Consultas\Http\Requests\TipoCreateRequest;
use Consultas\TipoEquipo as TipoEquipo;

class TiposController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin', ['only' => 'create', 'edit', 'destroy']);
    }

    public function index()
    {
    	$tipos = TipoEquipo::all();
    	return view('tipos_equipos.tiposequipos_desarrollo')->with('tipo_equipos', $tipos);
    }

    public function create()
    {
    	return view('tipos_equipos.tiposequipos_registro');
    }

    public function store(TipoCreateRequest $request)
    {
        $tipos = new TipoEquipo;
        $tipos->nombre_tipo_equipo = $request->nombre_tipo_equipo;
        $tipos->descripcion = $request->descripcion;
        $tipos->save();
        return redirect('/tiposequipos')->with('message', 'store');
    }

    public function edit($id)
    {
        $tipos = TipoEquipo::find($id);
        return view('tipos_equipos.tiposequipos_editar', compact('tipos'));
    }

    public function update(Request $request)
    {
        $tipos = TipoEquipo::find($request->id);
        $tipos->nombre_tipo_equipo = $request->nombre_tipo_equipo;
        $tipos->descripcion = $request->descripcion;
        $tipos->save();
        return redirect('/tiposequipos')->with('message', 'edit');
    }

    public function destroy($id)
    {
        $tipos = TipoEquipo::find($id);
        $tipos->delete();
        return redirect('/tiposequipos')->with('message', 'destroy');
    }

    public function search(Request $request)
    {
        $tipos = TipoEquipo::where('nombre_tipo_equipo', 'like', '%'.$request-> nombre_tipo_equipo.'%')->get();
       // return \View::make('tipos_equipos.tiposequipos_desarrollo', compact('tipos'));
        return view('tipos_equipos.tiposequipos_desarrollo')->with('tipo_equipos', $tipos);
    }

}
