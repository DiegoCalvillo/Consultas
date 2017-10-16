<?php

namespace Consultas\Http\Controllers;

use Illuminate\Http\Request;
use Consultas\Http\Requests\PuestoCreteRequest;
use Consultas\Puesto as Puesto;

class PuestoController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index()
    {
    	$puestos = Puesto::paginate(4);
    	return view('roles.roles_desarrollo')->with('puestos', $puestos);
    }

    public function create()
    {
    	return view('roles.roles_registro');
    }

    public function store(PuestoCreteRequest $request)
    {
        $puestos = new Puesto;
        $puestos->nombre_puesto = $request->nombre_puesto;
        $puestos->descripcion_puesto = $request->descripcion_puesto;
        $puestos->save();
        return redirect('/puestos')->with('message', 'store');
    }

    public function update(Request $request)
    {
        $puestos = Puesto::find($request->id);
        $puestos->nombre_puesto = $request->nombre_puesto;
        $puestos->descripcion_puesto = $request->descripcion_puesto;
        $puestos->save();
        return redirect('/puestos')->with('message', 'edit');
    }

    public function edit($id)
    {
        $puestos = Puesto::find($id);
        return view('roles.roles_editar', compact('puestos'));
    }

    public function search(Request $request)
    {
        $puestos = Puesto::where('nombre_puesto', 'like', '%'.$request-> nombre_puesto.'%')->paginate(1);
        return \View::make('roles.roles_desarrollo', compact('puestos'));
    }
}
