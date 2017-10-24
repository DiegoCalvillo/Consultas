<?php

namespace Consultas\Http\Controllers;

use Illuminate\Http\Request;
use Consultas\Mensaje as Mensaje;
use Consultas\User as User;
use Consultas\Notifications\NotificacionMensaje;
use Auth;
use Session;
use Redirect;

class MensajeController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

    public function index()
    {
    	$users = User::where('estatus_id', '=', 1)->get();
    	return view('mensajes.mensaje')->with('users', $users);
    }

    public function store(Request $request)
    {
    	$mensaje = new Mensaje;
    	$mensaje->envia_id = Auth::User()->id;
    	$mensaje->recibe_id = $request->recibe_id;
    	$mensaje->cuerpo_mensaje = $request->cuerpo_mensaje;
    	$mensaje->save();

    	Session::flash('message', 'El mensaje ha sido enviado');
        return Redirect::to('/mensajes');

        $user = User::find($request->recibe_id);
        $user->notify(new NotificacionMensaje($mensaje));
    }

}
