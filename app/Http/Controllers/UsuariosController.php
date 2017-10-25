<?php

namespace Consultas\Http\Controllers;

use Illuminate\Http\Request;
use Consultas\Http\Requests\UserCreateRequest;
use Consultas\Http\Requests\UserEditRequest;
use Consultas\User as User;
use Consultas\Puesto as Puesto; 
use Consultas\centros as centros; 
use Consultas\Estatus as Estatus;

class UsuariosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    
    public function index()
    {
        $users = User::paginate(6);
    	return view('usuarios.usuarios_desarrollo')->with('users', $users);
    }

    public function show($id)
    {
        $users = User::find($id);
        return view('usuarios.usuarios_perfil')->with('users', $users);
    }

   public function store(UserCreateRequest $request)
    {
       $users = new User;
       $users->name = $request->name;
       $users->puesto_id = $request->Puesto;
       $users->estatus_id = 1;
       $users->username = $request->username;
       $users->SARE = $request->sare;
       $users->password = bcrypt($request->password);
       $users->centros_id = $request->centros;
       $users->save();
       return redirect('/usuarios')->with('message', 'store');
    }

    public function create()
    {
        $puestos = Puesto::pluck('nombre_puesto', 'id');
        $centros = centros::pluck('nombre_centro', 'id');
        return view('usuarios.usuarios_registro')->with('puestos', $puestos)->with('centros', $centros);
    }

    public function search(Request $request)
    {
        $users = User::where('name', 'like', '%'.$request-> name.'%')->paginate(1);
        return \View::make('usuarios.usuarios_desarrollo', compact('users'));
    }

    public function update(UserEditRequest $request)
    {
        $users = User::find($request->id);
        $users->name = $request->name;
        $users->SARE = $request->SARE;
        $users->puesto_id = $request->puesto_id;
        $users->username = $request->username;
        $users->centros_id = $request->centro_id;
        $users->estatus_id = $request->estatus_id;
        if($request->password != "")
        {
            $users->password = bcrypt($request->password);
        }
        $users->save();
        return redirect('/usuarios')->with('message', 'edit');
    }

    public function edit($id)
    {
        $users = User::find($id);
        $puestos = Puesto::all();
        $centros = centros::all();
        $estatus = Estatus::all();
        return view('usuarios.usuarios_editar', compact('users'))->with('puestos', $puestos)->with('centros', $centros)->with('estatus', $estatus);
    }
}
