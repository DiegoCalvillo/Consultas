<?php

namespace Consultas\Http\Controllers;

use Illuminate\Http\Request;
use Consultas\Http\Requets;
use Consultas\Equipos as Equipos;
use Consultas\aplicativos as Aplicativos;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function index()
    {
    	Excel::create('Reporte de Equipos', function($excel){
    		$excel->sheet('Equipos', function($sheet){
    			$equipos = Equipos::all();
    			$sheet->fromArray($equipos);
    		});
    	})->export('xls');
    }

    public function aplicativos()
    {
    	Excel::create('Reporte de Aplicativos', function($excel){
    		$excel->sheet('Aplicativos', function($sheet){
    			$aplicativos = Aplicativos::all();
    			$sheet->fromArray($aplicativos);
    		});
    	})->export('xls');
    }
}
