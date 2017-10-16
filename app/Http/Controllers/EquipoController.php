<?php

namespace Consultas\Http\Controllers;

use Illuminate\Http\Request;
use Consultas\Http\Requests\EquiposCreateRequest;
use Consultas\Equipos as Equipos;
use Consultas\TipoEquipo as TipoEquipo; //Se invoca a la clase TipoEquipo para que se pueda elegir el tipo de equipo desde el registro de Equipos
use Consultas\centros as centros;
use Consultas\SistemasOp as SistemasOp;

class EquipoController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin', ['only' => ['create', 'edit', 'destroy']]);
    }
    
    public function index()
    {
    	$equipos = Equipos::all();
    	return view('equipos.equipos_desarrollo')->with('equipos', $equipos);
    }

    public function create()
    {
        $tipos = TipoEquipo::all();
        $centros = centros::all();
        $sistemas = SistemasOp::all();
    	return view('equipos.equipos_registro')->with('tipo_equipos', $tipos)->with('centros', $centros)->with('sistemas_ops', $sistemas);
    }

    public function store(EquiposCreateRequest $request)
    {
        $equipos = new Equipos;
        $equipos->nombre_equipo = $request->nombre_equipo;
        $equipos->direccion_ip = $request->direccion_ip;
        $equipos->tipoequipo_id = $request->tipoequipo_id;
        $equipos->usuario_equipo = $request->usuario_equipo;
        $equipos->contraseña_equipo = $request->contraseña_equipo;
        $equipos->centros_id = $request->centros_id;
        $equipos->sistemas_ops_id = $request->sistemas_ops_id;
        $equipos->save();
        return redirect('/equipos')->with('message', 'store'); 
    }

    public function destroy($id)
    {
        $equipos = Equipos::find($id);
        $equipos->delete();
        return redirect('/equipos')->with('message', 'destroy');
    }

    public function edit($id)
    {
        $equipos = Equipos::find($id);
        $tipos = TipoEquipo::all();
        $centros = centros::all();
        $sistemas = SistemasOp::all();
        return view('equipos.equipos_editar', compact('equipos'))->with('tipo_equipos', $tipos)->with('centros', $centros)->with('sistemas_ops', $sistemas);
    }

    public function update(Request $request)
    {
        $equipos = Equipos::find($request->id);
        $equipos->nombre_equipo = $request->nombre_equipo;
        $equipos->direccion_ip = $request->direccion_ip;
        $equipos->tipoequipo_id = $request->tipoequipos_id;
        $equipos->usuario_equipo = $request->usuario_equipo;
        $equipos->centros_id = $request->centros_id;
        $equipos->contraseña_equipo = $request->contraseña_equipo;
        $equipos->sistemas_ops_id = $request->sistemas_ops_id;
        $equipos->save();
        return redirect('/equipos')->with('message', 'edit');
    }

    public function search(Request $request)
    {
       $equipos = Equipos::where('nombre_equipo', 'like', '%'.$request-> nombre_equipo.'%' )->get();
       return \View::make('equipos.equipos_desarrollo', compact('equipos'));
    }
}
