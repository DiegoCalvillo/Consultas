<?php

namespace Consultas\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use Redirect;
use Consultas\Http\Requests;
use Consultas\Http\Requests\LoginRequest;
use Consultas\Http\Controllers\Controller;

class LogController extends Controller
{
    public function index()
    {
    	return view('auth.login');
    }

    public function store(LoginRequest $request)
    {
    	if(Auth::attempt(['username' => $request['username'], 'password' => $request['password']])){
            if(Auth::User()->estatus_id == 2)
                {
                    Session::flash('message-error', 'Cuenta de Usuario Bloqueada. Pongase en contacto con el Administrador');
                    return Redirect::to('/login');
                }
    		return Redirect::to('/inicio');
    	}
    	Session::flash('message-error', 'Los datos son incorrectos');
    	return Redirect::to('/login');
    }

    public function logout()
    {
    	Auth::logout();
    	return Redirect::to('/login');
    }
}
