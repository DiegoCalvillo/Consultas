<?php

namespace Consultas\Http\Controllers;

use Illuminate\Http\Request;
use Consultas\Http\Requests\SistemCreateRequest;
use Consultas\SistemasOp as SistemasOp;

class SistemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin', ['only' => ['create', 'edit', 'delete']]);
    }
    
    public function index()
    {
    	$sistemas = SistemasOp::paginate(6);
    	return view('sistemasoperativos.sistemasoperativos_desarrollo')->with('sistemas_ops', $sistemas);
    }

    public function create()
    {
    	return view('sistemasoperativos.sistemasoperativos_registro');
    }

    public function store(SistemCreateRequest $request)
    {
    	$sistemas = new SistemasOp;
    	$sistemas->nombre_sistema_op = $request->nombre_sistema_op;
    	$sistemas->save();
    	return redirect('/sistemas')->with('message', 'store');
    }

    public function edit($id)
    {
    	$sistemas = SistemasOp::find($id);
    	return view('sistemasoperativos.sistemasoperativos_editar', compact('sistemas'));
	}

	public function update(Request $request)
	{
		$sistemas = SistemasOp::find($request->id);
		$sistemas->nombre_sistema_op = $request->nombre_sistema_op;
		$sistemas->save();
		return redirect('/sistemas')->with('message', 'edit');
	}

    public function destroy($id)
    {
        $sistemas = SistemasOp::find($id);
        $sistemas->delete();
        return redirect('/sistemas')->with('message', 'destroy');
    }

    public function search(Request $request)
    {
        $sistemas = SistemasOp::where('nombre_sistema_op', 'like', '%'.$request-> nombre_sistema_op.'%')->get();
        return view('sistemasoperativos.sistemasoperativos_desarrollo')->with('sistemas_ops', $sistemas);
    }
}
