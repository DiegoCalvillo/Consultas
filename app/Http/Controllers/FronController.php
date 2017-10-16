<?php

namespace Consultas\Http\Controllers;

use Illuminate\Http\Request;

class FronController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	return view('inicio');
    }

    public function tables()
    {
    	return view('tables');
    }

    public function panel()
    {
    	return view('panel');
    }

    public function graficas()
    {
    	return view('graficas_flot');
    }

    public function blank()
    {
    	return view('blank');
    }

    public function login()
    {
        return view('login');
    }

    public function icons()
    {
        return view('icons');
    }

    public function notificaciones()
    {
        return view('notifications');
    }

}
